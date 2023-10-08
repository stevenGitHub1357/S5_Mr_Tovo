<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class BackFonction extends CI_Model
{
    public function getBesoinDetail($idBesoin){
        $this->load->model('RequeteSelect');

        $besoin = $this->RequeteSelect->getAllBesoin($idBesoin);
        $spectBesoin = $this->RequeteSelect->getAllSpectBesoin($idBesoin);

        $data['Besoin'] = $besoin;
		$data['spectBesoin'] = $spectBesoin;
		$data['Departement'] = $this->RequeteSelect->getAllDepartement($besoin[0]['iddepartement']);
		$data['Poste'] = $this->RequeteSelect->getAllPoste($besoin[0]['idposte']);
		$data['District'] = $this->RequeteSelect->getAllDistrict($spectBesoin[0]['iddistrict']);
		$data['Diplome'] = $this->RequeteSelect->getAllDiplome($spectBesoin[0]['iddiplome']);
		$data['Nationalite'] = $this->RequeteSelect->getAllNationalite($spectBesoin[0]['idnationalite']);
		$data['Genre'] = $this->RequeteSelect->getAllGenre($spectBesoin[0]['idgenre']);
		$data['Situation'] = $this->RequeteSelect->getAllSituation($spectBesoin[0]['idsituation']);

        return $data;
    }

}