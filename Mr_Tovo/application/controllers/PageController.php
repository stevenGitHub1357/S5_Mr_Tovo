<?php
    defined('BASEPATH') OR exit('No directscript access allowed');

    class PageController extends CI_Controller {
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
		$this->load->view('Test/InsertQuestion');
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

    public function getAllQuestion()
	{
		$this->load->model('RequeteSelect');
        
        $data['Question'] = $this->RequeteSelect->getAllQuestion(0);

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
