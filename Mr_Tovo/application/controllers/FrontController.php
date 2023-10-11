<?php
    defined('BASEPATH') OR exit('No directscript access allowed');

    class FrontController extends CI_Controller {
        /**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->session->unset_userdata('candidat');
		$this->session->unset_userdata('besoin');
		
		$this->BesoinListe();
	}

    public function BesoinListe()
	{
		$this->load->model('RequeteSelect');

		$data['Besoin'] = $this->RequeteSelect->getAllBesoin(0);
		$data['spectBesoin'] = $this->RequeteSelect->getAllSpectBesoin(0);
		$data['Departement'] = $this->RequeteSelect->getAllDepartement(0);
		$data['Poste'] = $this->RequeteSelect->getAllPoste(0);
		$data['District'] = $this->RequeteSelect->getAllDistrict(0);
		$data['Diplome'] = $this->RequeteSelect->getAllDiplome(0);
		$data['Nationalite'] = $this->RequeteSelect->getAllNationalite(0);
		$data['Genre'] = $this->RequeteSelect->getAllGenre(0);
		$data['Situation'] = $this->RequeteSelect->getAllSituation(0);

		$this->load->view('ViewFront/BesoinListe',$data);
	}

    public function CandidatFormInsert()
    {
		$data['idBesoin'] = $this->input->get('idBesoin');
        $this->load->view('ViewFront/CandidatInsert',$data);
    }

    public function CandidatInsert()
    {
        $this->load->model('RequeteInsert');
        $this->load->model('RequeteSelect');

        $nom = $this->input->get('nom');
        $prenom = $this->input->get('prenom');
        $naissance = $this->input->get('naissance');
        $email = $this->input->get('email');
        $telephone = $this->input->get('telephone');
        $adress = $this->input->get('adress');

        $this->RequeteInsert->insertCandidat($nom,$prenom,$adress,$email,$telephone,$naissance);

        $idC= $this->RequeteSelect->getMaxId('candidat');
		$idBesoin= $this->input->get('idBesoin');

		$this->session->set_userdata('candidat', $idC);
		$this->session->set_userdata('besoin', $idBesoin);

        $data['District'] = $this->RequeteSelect->getAllDistrict(0);
		$data['Diplome'] = $this->RequeteSelect->getAllDiplome(0);
		$data['Nationalite'] = $this->RequeteSelect->getAllNationalite(0);
		$data['Genre'] = $this->RequeteSelect->getAllGenre(0);
		$data['Situation'] = $this->RequeteSelect->getAllSituation(0);

        $this->load->view('ViewFront/CandidatInfoInsert',$data);
    }

    public function CandidatCvInsert()
    {
        $this->load->model('RequeteInsert');
		$this->load->model('FrontFonction');

		$idBesoin = $_SESSION["besoin"];
        $idCandidat = $_SESSION["candidat"];
        $idDistrict = $this->input->get('district');
		$idDiplome = $this->input->get('diplome');
		$idNationalite = $this->input->get('nationalite');
		$idGenre = $this->input->get('genre');
		$idSituation = $this->input->get('situation');
        $salaireMax = $this->input->get('salaireMax');
        $salaireMin = $this->input->get('salaireMin');

        $this->RequeteInsert->insertInfoCandidat($idBesoin,$idCandidat,$idSituation,$idDiplome,$idNationalite,$idDistrict,$idGenre,$salaireMin,$salaireMax);

        $data['question'] = $this->FrontFonction->getQCM($_SESSION["besoin"]);

		$data['entreprise'] = $this->RequeteSelect->getAllEntreprise(0);
		$data['poste'] = $this->RequeteSelect->getAllPoste(0);

		$this->load->view('ViewFront/Experience',$data);
    }

	public function QCM()
	{
		$this->load->model('FrontFonction');
		$data['question'] = $this->FrontFonction->getQCM($_SESSION["besoin"]);

		$this->load->view('ViewFront/QCM',$data);
	}

	public function Experience()
	{
		$this->load->model('RequeteSelect');
		$this->load->model('RequeteInsert');

		$idCandidat = $_SESSION["candidat"];

		if($this->input->get('poste') != null){
			$idPoste = $this->input->get('poste');
			$idEntreprise = $this->input->get('entreprise');
			$debut = $this->input->get('debut');
			$fin = $this->input->get('fin');
			$this->RequeteInsert->insertExperence($idCandidat,$idPoste,$idEntreprise,$debut,$fin);
		}

		$data['experience'] = $this->RequeteSelect->getAllExperience($idCandidat);
		$data['entreprise'] = $this->RequeteSelect->getAllEntreprise(0);
		$data['poste'] = $this->RequeteSelect->getAllPoste(0);

		$this->load->view('ViewFront/Experience',$data);
		
	}

	public function QCMInsert()
	{
		$this->load->model('RequeteSelect');
		$this->load->model('RequeteInsert');

		$idBesoin =  $_SESSION["besoin"];
		$Candidat = $_SESSION["candidat"];

		$question = $this->RequeteSelect->getAllQuestion($idBesoin);

		$reponse = array();

		for($i=0; $i<count($question); $i++){
			$rep = $this->RequeteSelect->getAllReponse($question[$i]['id']);
			for($n=0; $n<count($rep); $n++){
				$input = $this->input->get($question[$i]['id'].'//'.$rep[$n]['id']);
				if($input != null){
					$this->RequeteInsert->insertReponseC($question[$i]['id'],$input,$Candidat,0);
				}
			}
		}

		$this->load->view('ViewFront/Bravo');
	}

	public function CandidatInfo()
	{
		$this->load->model('RequeteSelect');

		$id = $_SESSION["candidat"];
		$candidat = $this->RequeteSelect->getAllInfoCandidat($id);
		$data['Candidat'] = $this->RequeteSelect->getAllCandidat($id);
		$data['District'] = $this->RequeteSelect->getAllDistrict($candidat[0]['iddistrict']);
		$data['Diplome'] = $this->RequeteSelect->getAllDiplome($candidat[0]['iddiplome']);
		$data['Nationalite'] = $this->RequeteSelect->getAllNationalite($candidat[0]['idnationalite']);
		$data['Genre'] = $this->RequeteSelect->getAllGenre($candidat[0]['idgenre']);
		$data['Situation'] = $this->RequeteSelect->getAllSituation($candidat[0]['idsituation']);
		$data['SalaireMax'] = $candidat[0]['salairemax'];
		$data['SalaireMin'] = $candidat[0]['salairemin'];

		$this->load->view('ViewFront/CandidatInfo',$data);
	}





}

