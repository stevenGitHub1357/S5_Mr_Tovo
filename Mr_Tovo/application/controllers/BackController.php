<?php
    defined('BASEPATH') OR exit('No directscript access allowed');

    class BackController extends CI_Controller {
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
		$this->formBesoinInsert();
	}


	public function formBesoinInsert()
	{
		$this->load->model('RequeteSelect');

		$data['Departement'] = $this->RequeteSelect->getAllDepartement(0);
		$data['Poste'] = $this->RequeteSelect->getAllPoste(0);

		$this->load->view('ViewBack/BarMain');
		$this->load->view('ViewBack/BesoinInsert',$data);
	}

	public function BesoinInsert()
	{
		$this->load->model('RequeteInsert');
		$this->load->model('RequeteSelect');

		$idDepartement = $this->input->get('departement');
		$idPoste = $this->input->get('poste');
		$volumeH = $this->input->get('volumeH');
		$hommeJ = $this->input->get('hommeJ');
		$salaire = $this->input->get('salaire');
		$desc = $this->input->get('description');

		$this->RequeteInsert->insertBesoin($idDepartement,$idPoste,$volumeH,$hommeJ,$salaire,$desc);

		$data['IdBesoin'] = $this->RequeteSelect->getMaxLine("besoin");
		$data['District'] = $this->RequeteSelect->getAllDistrict(0);
		$data['Diplome'] = $this->RequeteSelect->getAllDiplome(0);
		$data['Nationalite'] = $this->RequeteSelect->getAllNationalite(0);
		$data['Genre'] = $this->RequeteSelect->getAllGenre(0);
		$data['Situation'] = $this->RequeteSelect->getAllSituation(0);

		$this->load->view('ViewBack/BesoinInfoInsert',$data);
	}

	public function BesoinInfoInsert()
	{
		$this->load->model('RequeteInsert');

		$idBesoin = $this->input->get('idBesoin');
		$idDistrict = $this->input->get('district');
		$idDiplome = $this->input->get('diplome');
		$idNationalite = $this->input->get('nationalite');
		$idGenre = $this->input->get('genre');
		$idSituation = $this->input->get('situation');
		
		$this->load->view('ViewBack/BarMain');
		$this->RequeteInsert->insertSpectBesoin($idBesoin,$idDistrict,$idDiplome,$idNationalite,$idGenre,$idSituation);

		$this->index();
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

		$this->load->view('ViewBack/BarMain');
		$this->load->view('ViewBack/BesoinListe',$data);
	}

	public function BesoinDetail()
	{
		$this->load->model('BackFonction');
		$idBesoin = $this->input->get('idBesoin');
		$data = $this->BackFonction->getBesoinDetail($idBesoin);

		$this->load->view('ViewBack/BesoinDetail',$data);
	}

	public function BesoinDelete()
	{
		$idBesoin = $this->input->get('idBesoin');
		$this->load->model('RequeteUpdate');

		$this->RequeteUpdate->desactiveBesoin($idBesoin);
		
		$this->BesoinListe();
	}

	public function CandidatListe()
	{
		$this->load->model('RequeteSelect');

		$data['Candidat'] = $this->RequeteSelect->getAllCandidat(0);

		$this->load->view('ViewBack/BarMain');
		$this->load->view('ViewBack/CandidatListe',$data);
	}

	public function CandidatInfo()
	{
		$this->load->model('RequeteSelect');

		$id = $this->input->get('id');
		$candidat = $this->RequeteSelect->getAllInfoCandidat($id);
		$data['Candidat'] = $this->RequeteSelect->getAllCandidat($id);
		$data['District'] = $this->RequeteSelect->getAllDistrict($candidat[0]['iddistrict']);
		$data['Diplome'] = $this->RequeteSelect->getAllDiplome($candidat[0]['iddiplome']);
		$data['Nationalite'] = $this->RequeteSelect->getAllNationalite($candidat[0]['idnationalite']);
		$data['Genre'] = $this->RequeteSelect->getAllGenre($candidat[0]['idgenre']);
		$data['Situation'] = $this->RequeteSelect->getAllSituation($candidat[0]['idsituation']);
		$data['SalaireMax'] = $candidat[0]['salairemax'];
		$data['SalaireMin'] = $candidat[0]['salairemin'];

		$this->load->view('ViewBack/CandidatInfo',$data);
	}

	public function QuestionListe()
	{
		$this->load->model('RequeteSelect');
		$idBesoin = $this->input->get('idBesoin');
		$question = $this->RequeteSelect->getAllQuestion($idBesoin);
		$all = array();
		for($n=0 ; $n<count($question) ; $n++){
			$reponse = $this->RequeteSelect->getAllReponse($question[$n]['id']);
			$all[$n][0] = $question[$n];
			// echo '<p>'.$all[$n][0]['texte'].'<p>'; 
			for($r=0 ; $r<count($reponse) ; $r++){
				
				$all[$n][1][$r] = $reponse[$r];
				// echo '<p>'.$all[$n][1][$r]['texte'].'<p>'; 
			}
		}
		$data['question'] = $all;
		$this->load->view('ViewBack/BarMain');
		$this->load->view('ViewBack/QuestionListe',$data);
	}

	public function QuestionInsert()
	{
		$this->load->view('ViewBack/QuestionInsert');
	}







    public function getAllReponseC()
	{
		$this->load->model('RequeteSelect');
        
        $data['ReponseC'] = $this->RequeteSelect->getAllReponseC(0);

		
        $this->load->view(' ',$data);

	}

    public function getAllReponse()
	{
		$this->load->model('RequeteSelect');
        
        $data['Reponse'] = $this->RequeteSelect->getAllReponse(0);

        $this->load->view(' ',$data);

	}

    public function getAllBesion()
	{
		$this->load->model('RequeteSelect');
        
        $data['Besion'] = $this->RequeteSelect->getAllBesion(0);

        $this->load->view(' ',$data);

	}

    public function getAllDepartement()
	{
		$this->load->model('RequeteSelect');
        
        $data['Departement'] = $this->RequeteSelect->getAllDepartement(0);

        $this->load->view(' ',$data);

	}

    public function getAllCandidat()
	{
		$this->load->model('RequeteSelect');
        
        $data['Candidat'] = $this->RequeteSelect->getAllCandidat(0);

        $this->load->view(' ',$data);

	}

    public function getAllCandidatInfo()
	{
		$this->load->model('RequeteSelect');

        $cd = $this->input->get('candidat');
        
        $candidat = $this->RequeteSelect->getAllCandidat($cd);
        $data['Candidat'] = $candidat[0];
        $infoCandidat = $this->RequeteSelect->getAllInfoCandidat($cd);
        $data['Experience'] = $this->RequeteSelect->getAllExperience($cd);
        $data['Situation'] = $this->RequeteSelect->getAllSituation($infoCandidat[0]['idsituation']);
        $data['Diplome'] = $this->RequeteSelect->getAllDiplome($infoCandidat[0]['idDiplome']);
        $data['Nationalite'] = $this->RequeteSelect->getAllNationalite($infoCandidat[0]['idNationalite']);
        $data['District'] = $this->RequeteSelect->getAllDistrict($infoCandidat[0]['idDistrict']);
        $data['SalaireMax'] = $this->RequeteSelect->getAllSalaireMax($infoCandidat[0]['SalaireMax']);
        $data['SalaireMin'] = $this->RequeteSelect->getAllSalaireMin($infoCandidat[0]['SalaireMin']);


        $this->load->view(' ',$data);

	}

	

    

    





}
