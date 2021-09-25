<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class M_Categori extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    //listing all Category

    public function listing()
    {
        $this->db->select('*');
        $this->db->from('categori');
        $this->db->order_by('id_kategori', 'desc');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function detail($id_kategori)
    {
        $this->db->select('*');
        $this->db->from('categori');
        $this->db->where('id_kategori', $id_kategori);
        $this->db->order_by('id_kategori', 'desc');
        $query = $this->db->get();
        return $query->row_array();
    }

    public function read($slug_kategori)
    {
        $this->db->select('*');
        $this->db->from('categori');
        $this->db->where('slug_kategori', $slug_kategori);
        $this->db->order_by('id_kategori', 'desc');
        $query = $this->db->get();
        return $query->row_array();
    }


}