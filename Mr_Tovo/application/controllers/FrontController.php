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
        $this->load->view('ViewFront/CandidatInsert');
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

        // $this->RequeteInsert->insertCandidat($nom,$prenom,$adress,$email,$telephone,$naissance);

        $data['idC'] = $this->RequeteSelect->getMaxId('candidat');

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

        $idCandidat = $this->input->get('candidat');
        $idDistrict = $this->input->get('district');
		$idDiplome = $this->input->get('diplome');
		$idNationalite = $this->input->get('nationalite');
		$idGenre = $this->input->get('genre');
		$idSituation = $this->input->get('situation');
        $salaireMax = $this->input->get('salaireMax');
        $salaireMin = $this->input->get('salaireMin');

        $this->RequeteInsert->insertInfoCandidat($idCandidat,$idSituation,$idDiplome,$idNationalite,$idDistrict,$idGenre,$salaireMin,$salaireMax);

        $this->index(); 


    }





}

