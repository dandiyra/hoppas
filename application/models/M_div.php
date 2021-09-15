<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class M_div extends CI_Model{
    
    function get_division(){
        $query = $this->db->get('division');
        return $query;  
    }
 
    function get_subdivision($id_div){
        $query = $this->db->get_where('subDivision', array('idDivision' => $id_div));
        return $query;
    }
     
}