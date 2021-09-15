<?php
defined('BASEPATH') or exit('No direct script access allowed');


class M_Reqjob extends CI_Model
{
    public function getreqit($name)
    {
        $arr = array('nameRequester' => $name, 'reqTo' => 1);
        $this->db->select('*');
        $this->db->from('requestjob');
        $this->db->where($arr);
        $this->db->order_by("id", "desc");
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getreqtekh($name)
    {
         $arr = array('nameRequester' => $name, 'reqTo' => 2);
         $this->db->select('*');
         $this->db->from('requestjob');
         $this->db->where($arr);
         $this->db->order_by("id", "desc");
         $query = $this->db->get();
         return $query->result_array();
    }

    public function getreqkeuang($name)
    {
        $arr = array('nameRequester' => $name, 'reqTo' => 3);
        $this->db->select('*');
        $this->db->where($arr);
        $this->db->from('requestjob');
        $this->db->order_by("id", "desc");
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getReqToIt($reqTo)
    {
        $arr = array('status' => 1, 'reqTo' => $reqTo);
        $this->db->select('*');
        $this->db->where($arr);
        $this->db->from('requestjob');
        $this->db->order_by("id", "desc");
        $query = $this->db->get();
        return $query->result_array();
    }
    
    public function getReqFromIt()
    {
        $arr = array('division' => $this->session->userdata('division'), 'status' => 0);
        $this->db->select('*');
        $this->db->where($arr);
        $this->db->from('requestjob');
        $this->db->order_by("id", "desc");
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getReqDivIt($jobto)
    {
        $arr = array('job_to' => $jobto, 'is_acc_kabag !=' => 3 );
        $this->db->select('*');
        $this->db->where($arr);
        $this->db->from('request_job');
        $this->db->order_by("id_request", "desc");
        $query = $this->db->get();
        return $query->result_array();
    }
    
}
