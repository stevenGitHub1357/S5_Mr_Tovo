<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class RequeteUpdate extends CI_Model
{
    public function delete($table,$colonne,$id){
        $rqt = "DELETE FROM %s where %s=%d ";
        $rqt = sprintf($rqt,$table,$colonne,$id);
        return $this->db->query($rqt);
    }

    public function desactiveBesoin($id){
        $rqt = "UPDATE besoin set etat=2 where id=%d ";
        $rqt = sprintf($rqt,$id);
        return $this->db->query($rqt);
    }

    public function congeeAccepter($id){
        $rqt = "UPDATE congee set etat=2 where id=%d ";
        $rqt = sprintf($rqt,$id);
        return $this->db->query($rqt);
    }

    public function congeeRefuser($id){
        $rqt = "UPDATE congee set etat=3 where id=%d ";
        $rqt = sprintf($rqt,$id);
        return $this->db->query($rqt);
    }

    
}