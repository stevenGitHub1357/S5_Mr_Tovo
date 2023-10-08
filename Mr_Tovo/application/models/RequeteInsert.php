<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class RequeteInsert extends CI_Model
{
    public function insertReponseC($idQuestion,$idReponse,$Candidat,$note){
        $rqt = "INSERT INTO reponseC VALUES(DEFAULT,%d,%d,%d,%d)";
        $rqt = sprintf($rqt,$idQuestion,$idReponse,$Candidat,$note);

        return $this->db->query($rqt);
    }

    public function insertReponse($idQuestion,$texte,$idEtat){
        $rqt = "INSERT INTO reponse VALUES(DEFAULT,%d,'%s',%d)";
        $rqt = sprintf($rqt,$idQuestion,$texte,$idEtat);

        return $this->db->query($rqt);
    }

    public function insertQuetion($idBesion,$texte,$coefficient){
        $rqt = "INSERT INTO Quetion VALUES(DEFAULT,%d,'%s',%d)";
        $rqt = sprintf($rqt,$idBesion,$texte,$coefficient);

        return $this->db->query($rqt);
    }

    public function insertExperence($idCandidat,$lieu,$debut,$fin){
        $rqt = "INSERT INTO experence VALUES(DEFAULT,%d,'%s','%s','%s')";
        $rqt = sprintf($rqt,$idCandidat,$lieu,$debut,$fin);

        return $this->db->query($rqt);
    }

    public function insertInfoCandidat($idCandidat,$idSituation,$idDiplome,$idNationalite,$idDistrict,$idGenre,$salaireMin,$salaireMax){
        $rqt = "INSERT INTO infoCandidat VALUES(DEFAULT,%d,%d,%d,%d,%d,%d,%d,%d)";
        $rqt = sprintf($rqt,$idCandidat,$idSituation,$idDiplome,$idNationalite,$idDistrict,$idGenre,$salaireMin,$salaireMax);

        return $this->db->query($rqt);
    }

    public function insertBesoin($idDepartement,$idPoste,$volumeH,$hommeJ,$salaire,$desc){
        $rqt = "INSERT INTO besoin VALUES(DEFAULT,%d,%d,%d,%d,%d,'%s')";
        $rqt = sprintf($rqt,$idDepartement,$idPoste,$volumeH,$hommeJ,$salaire,$desc);

        return $this->db->query($rqt);
    }

    public function insertSpectBesoin($idBesoin,$idDistrict,$idDiplome,$idNationalite,$idGenre,$idSituation){
        $rqt = "INSERT INTO spectbesoin VALUES(DEFAULT,%d,%d,%d,%d,%d,%d)";
        $rqt = sprintf($rqt,$idBesoin,$idDistrict,$idDiplome,$idNationalite,$idGenre,$idSituation);

        return $this->db->query($rqt);
    }

    public function insertCandidat($nom,$prenom,$adress,$email,$telephone,$naissance){
        $rqt = "INSERT INTO candidat VALUES(DEFAULT,'%s','%s','%s','%s','%s','%s')";
        $rqt = sprintf($rqt,$nom,$prenom,$adress,$email,$telephone,$naissance);

        return $this->db->query($rqt);
    }

    
}