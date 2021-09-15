<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Subdivision_model extends CI_Model {
  
  public function viewByDivision($idDivision){
    $this->db->where('idDivision', $idDivision);
    $result = $this->db->get('subdivision')->result(); // Tampilkan semua data kota berdasarkan id provinsi
    
    return $result; 
  }
}