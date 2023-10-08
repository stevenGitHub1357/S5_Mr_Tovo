<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class RequeteSelect extends CI_Model
{
    public function getMaxLine($table)
    {
        $request="SELECT * FROM ".$table;
        
        $table = $this->db->query($request);
        $tableFin = $table->result_array();
        $taille = count($tableFin);
        
        return $taille;
    }

    public function getMaxId($table)
    {
        $request="SELECT * FROM ".$table;
        
        $table = $this->db->query($request);
        $tableFin = $table->result_array();
        $taille = count($tableFin);

        $id = $tableFin[$taille-1]['id'];
         
        return $id;
    }
 
    public function getAllReponseC($Candidat)
    {
        $request="SELECT * FROM reponseC WHERE idCandidat=".$Candidat ;
        
        $table = $this->db->query($request);
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

	public function getAllQuestion($besoin)
    {
        $request="SELECT * FROM  question  WHERE idbesoin=".$besoin;
        
        $table = $this->db->query($request);
        $tableFin = $table->result_array();
        return $tableFin;
    }

    public function getAllExperience($id)
    {
        if($id==0){
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
        if($id==0){
            $request="SELECT * FROM infoCandidat"; 
        }else{
            $request="SELECT * FROM  infoCandidat  WHERE idcandidat=".$id;
        }
        $table = $this->db->query($request);
        $tableFin = $table->result_array();
        return $tableFin;
    }

    public function getAllBesoin($id)
    {
        if($id==0){
            $request="SELECT * FROM besoin WHERE etat=1"; 
        }else{
            $request="SELECT * FROM  besoin  WHERE etat=1 and id=".$id;
        }
        $table = $this->db->query($request);
        $tableFin = $table->result_array();
        return $tableFin;
    }

    public function getAllSpectBesoin($id)
    {
        if($id==0){
            $request="SELECT * FROM spectbesoin"; 
        }else{
            $request="SELECT * FROM  spectbesoin  WHERE id=".$id;
        }
        $table = $this->db->query($request);
        $tableFin = $table->result_array();
        return $tableFin;
    }

    public function getAllDepartement($id)
    {
        if($id==0){
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
        if($id==0){
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
        if($id==0){
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
        if($id==0){
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
        if($id==0){
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
        if($id==0){
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
        if($id==0){
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
        if($id==0){
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
        if($id==0){
            $request="SELECT * FROM nationalite"; 
        }else{
            $request="SELECT * FROM  nationalite  WHERE id=".$id;
        }
        $table = $this->db->query($request);
        $tableFin = $table->result_array();
        return $tableFin;
    }


}