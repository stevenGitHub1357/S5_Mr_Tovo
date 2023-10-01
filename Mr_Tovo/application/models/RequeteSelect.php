<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class RequeteSelect extends CI_Model
{
 
    public function getAllReponseC($Candidat)
    {
        $request="SELECT * FROM reponseC WHERE idCandidat=%d".;
        
        $table = $this->db->query($request,$Candidat);
        $tableFin = $table->result_array();
        return $tableFin;
    }

    public function getAllReponse($question)
    {
        $request="SELECT * FROM  reponse  WHERE idQuestion=".$question;
        
        $table = $this->db->query($request);
        $tableFin = $table->result_array();
        return $tableFin;
    }

	public function getAllQustion($besoin)
    {
        $request="SELECT * FROM  question  WHERE idBesoin=".$besoin;
        
        $table = $this->db->query($request);
        $tableFin = $table->result_array();
        return $tableFin;
    }

    public function getAllExperience($id)
    {
        if($id=0){
            $request="SELECT * FROM experience"; 
        }else{
            $request="SELECT * FROM  experience  WHERE idcandidat=".$id;
        }
        $table = $this->db->query($request);
        $tableFin = $table->result_array();
        return $tableFin;
    }

    public function getAllInfoCandidat($id)
    {
        if($id=0){
            $request="SELECT * FROM infoCandidat"; 
        }else{
            $request="SELECT * FROM  infoCandidat  WHERE idcandidat=".$id;
        }
        $table = $this->db->query($request);
        $tableFin = $table->result_array();
        return $tableFin;
    }

    public function getAllBesion($id)
    {
        if($id=0){
            $request="SELECT * FROM besion"; 
        }else{
            $request="SELECT * FROM  besion  WHERE id=".$id;
        }
        $table = $this->db->query($request);
        $tableFin = $table->result_array();
        return $tableFin;
    }

    public function getAllDepartement($id)
    {
        if($id=0){
            $request="SELECT * FROM departement"; 
        }else{
            $request="SELECT * FROM  departement  WHERE id=".$id;
        }
        $table = $this->db->query($request);
        $tableFin = $table->result_array();
        return $tableFin;
    }

    public function getAllCandidat($id)
    {
        if($id=0){
            $request="SELECT * FROM candidat"; 
        }else{
            $request="SELECT * FROM  candidat  WHERE id=".$id;
        }
        $table = $this->db->query($request);
        $tableFin = $table->result_array();
        return $tableFin;
    }

    public function getAllPoste($id)
    {
        if($id=0){
            $request="SELECT * FROM poste"; 
        }else{
            $request="SELECT * FROM  poste  WHERE id=".$id;
        }
        $table = $this->db->query($request);
        $tableFin = $table->result_array();
        return $tableFin;
    }

    public function getAllDistrict($id)
    {
        if($id=0){
            $request="SELECT * FROM district"; 
        }else{
            $request="SELECT * FROM  district  WHERE id=".$id;
        }
        $table = $this->db->query($request);
        $tableFin = $table->result_array();
        return $tableFin;
    }

    public function getAllDiplome($id)
    {
        if($id=0){
            $request="SELECT * FROM diplome"; 
        }else{
            $request="SELECT * FROM  diplome  WHERE id=".$id;
        }
        $table = $this->db->query($request);
        $tableFin = $table->result_array();
        return $tableFin;
    }

    public function getAllGenre($id)
    {
        if($id=0){
            $request="SELECT * FROM genre"; 
        }else{
            $request="SELECT * FROM  genre  WHERE id=".$id;
        }
        $table = $this->db->query($request);
        $tableFin = $table->result_array();
        return $tableFin;
    }

    public function getAllSituation($id)
    {
        if($id=0){
            $request="SELECT * FROM situation"; 
        }else{
            $request="SELECT * FROM  situation  WHERE id=".$id;
        }
        $table = $this->db->query($request);
        $tableFin = $table->result_array();
        return $tableFin;
    }

    public function getAllEtat($id)
    {
        if($id=0){
            $request="SELECT * FROM etat"; 
        }else{
            $request="SELECT * FROM  etat  WHERE id=".$id;
        }
        $table = $this->db->query($request);
        $tableFin = $table->result_array();
        return $tableFin;
    }

    public function getAllNationalite($id)
    {
        if($id=0){
            $request="SELECT * FROM nationalite"; 
        }else{
            $request="SELECT * FROM  nationalite  WHERE id=".$id;
        }
        $table = $this->db->query($request);
        $tableFin = $table->result_array();
        return $tableFin;
    }


}