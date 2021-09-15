<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class M_Product extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    //listing all Category

    public function listing()
    {
        $this->db->select('produk.*,
                            users.name,
                            categori.nama_kategori,
                            categori.slug_kategori');
        $this->db->from('produk');
        // JOIN
        $this->db->join('users','users.id = produk.id_user', 'left');
        $this->db->join('categori','categori.id_kategori = produk.id_kategori', 'left');
        //END JOIN
        $this->db->order_by('id_produk', 'desc');
        $query = $this->db->get();
        return $query->result_array();
    }
}