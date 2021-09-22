<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class M_Config extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    //Listing
    public function listing()
    {
        $query = $this->db->get('configuration');
        return $query->row_array();
    }

    //edit
    public function edit($data)
    {
        $this->db->where('id_configuration', $data  ['id_configuration']);
        $this->db->update('configuration', $data);
    }
}