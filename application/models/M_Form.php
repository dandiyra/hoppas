<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class M_Form extends CI_Model{
    public function GetStaff($division)
    {
        $this->db->select('*');
        $this->db->where('division',$division);
        $this->db->from('users');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function GetReq()
    {
        $this->db->select('*');
        $this->db->where('finish_at', 0);
        $this->db->order_by('id', 'desc');
        $this->db->from('requestjob');
        $query = $this->db->get();
        return $query->result_array();
    }
}
