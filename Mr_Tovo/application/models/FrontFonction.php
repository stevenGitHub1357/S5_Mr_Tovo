<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class FrontFonction extends CI_Model
{
    public function getQCM($idBesoin){
        $this->load->model('RequeteSelect');
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
		$all;

        return $all;
    }

}