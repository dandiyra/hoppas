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

    public function navProduk()
    {
        $this->db->select('produk.*,
                           categori.nama_kategori,
                           categori.slug_kategori');
        $this->db->from('produk');
        $this->db->join('categori','categori.id_kategori = produk.id_kategori', 'left');
        $this->db->group_by('produk.id_kategori');
        $this->db->order_by('categori.urutan', 'ASC');
        $query = $this->db->get();
        return $query->result();
    }

    
}   