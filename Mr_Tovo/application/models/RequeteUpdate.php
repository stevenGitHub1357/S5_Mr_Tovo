<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class RequeteUpdate extends CI_Model
{
    public function delete($table,$id){
        $rqt = "DELETE FROM '%s' where id=%d ";
        $rqt = sprintf($rqt,$table,$id);
        return $this->db->query($rqt);
    }
}