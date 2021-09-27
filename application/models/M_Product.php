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
        $this->db->group_by('produk.id_produk');
        $this->db->order_by('id_produk', 'desc');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function listing_kategori()
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
        $this->db->group_by('produk.id_kategori');
        $this->db->order_by('id_produk', 'desc');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function home()
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
        $this->db->where('produk.status_produk', 'Active');
        $this->db->group_by('produk.id_produk');
        $this->db->limit(20);
        $this->db->order_by('id_produk', 'desc');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function read($slug_produk)
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
        $this->db->where('produk.status_produk', 'Active');
        $this->db->where('produk.slug_produk', $slug_produk);
        $this->db->group_by('produk.id_produk');
        $this->db->order_by('id_produk', 'desc');
        $query = $this->db->get();
        return $query->row_array();
    }
    public function read_related($slug_produk)
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
        $this->db->where('produk.status_produk', 'Active');
        $this->db->where('produk.slug_produk', $slug_produk);
        $this->db->group_by('produk.id_produk');
        $this->db->order_by('id_produk', 'desc');
        $query = $this->db->get();
        return $query->row_array();
    }

    public function product($limit,$start)
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
        $this->db->where('produk.status_produk', 'Active');
        $this->db->group_by('produk.id_produk');
        $this->db->order_by('id_produk', 'desc');
        $this->db->limit($limit,$start);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function total_produk()
    {
        $this->db->select('COUNT(*) AS total');
        $this->db->from('produk');
        $this->db->where('status_produk', 'Active');
        $query = $this->db->get();
        return $query->row_array();
    }

    public function kategori($id_kategori,$limit,$start)
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
        $this->db->where('produk.status_produk', 'Active');
        $this->db->where('produk.id_kategori', $id_kategori);
        $this->db->group_by('produk.id_produk');
        $this->db->order_by('id_produk', 'desc');
        $this->db->limit($limit,$start);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function total_kategori($id_kategori)
    {
        $this->db->select('COUNT(*) AS total');
        $this->db->from('produk');
        $this->db->where('status_produk', 'Active');
        $this->db->where('id_kategori', $id_kategori);
        
        $query = $this->db->get();
        return $query->row_array();
    }

    public function getProId($id_produk)
    {
        return $this->db->get_where('produk', ['id_produk' => $id_produk])->row_array();
    }

    // Detail Gambar Produk 
    public function detail_gambar($id_gambar)
    {
        $this->db->select('*');
        $this->db->from('gambar');
        $this->db->where('id_gambar', $id_gambar);
        $this->db->order_by('id_gambar', 'desc');
        $query = $this->db->get();
        return $query->row_array();
    }

    // Gambar 

    public function gambar($id_produk)
    {
        $this->db->select('*');
        $this->db->from('gambar');
        $this->db->where('id_produk', $id_produk);
        $this->db->order_by('id_gambar', 'desc');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function detail($id_produk)
    {
        $this->db->select('*');
        $this->db->from('produk');
        $this->db->where('id_produk', $id_produk);
        $this->db->order_by('id_produk', 'desc');
        $query = $this->db->get();
        return $query->row_array();
    }

    public function tambah_gambar($data)
    {
        $this->db->insert('gambar', $data);
    }

    public function get_keyword($keywords)
    {
        $this->db->select('*');
        $this->db->from('produk');
        $this->db->like('nama_produk', $keywords);
        $this->db->or_like('keywords', $keywords);
        $query = $this->db->get();
        return $query->result_array();
    }
}