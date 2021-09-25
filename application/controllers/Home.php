<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Product');
        $this->load->model('M_Categori');
        $this->load->model('M_Config');
    }
    public function index()
    {
        $site = $this->M_Config->listing();
        $categori = $this->M_Config->navProduk();
        $showcat = $this->db->get('categori')->result_array();
        $produk = $this->M_Product->home();
        $data = [
            'title'     => $site['namaweb'].' | ' .$site['tagline'],
            'keywords'  => $site['keywords'],
            'deskripsi' => $site['deskripsi'],
            'site'      => $site,
            'kategori'  => $categori,
            'produk'    => $produk,
            'showcat'   => $showcat,
            // 'isi'       => 'home/list'
        ];
        $this->load->view('layout/head',$data);
        $this->load->view('layout/header',$data);
        $this->load->view('layout/navbar',$data);
        $this->load->view('home/list', $data);
        $this->load->view('layout/footer',$data);
        
    }

    public function detail($slug_produk)
    {
        $site       = $this->M_Config->listing();
        $produk     = $this->M_Product->read($slug_produk);
        $id_produk  = $produk['id_produk'];
        $gambar     = $this->M_Product->gambar($id_produk);
        $produk_related = $this->M_Product->home();

        $data = [
            'title'                 => $produk['nama_produk'],
            'site'                  => $site,
            'produk'                => $produk,
            'gambar'                => $gambar,
            'produk_related'        => $produk_related
            // 'pagin'                 => $this->pagination->create_links()

        ];
        
        $this->load->view('layout/head',$data);
        $this->load->view('layout/header',$data);
        $this->load->view('layout/navbar',$data);
        $this->load->view('productdetail/detail', $data);
        $this->load->view('layout/footer',$data);

    }

    public function about()
    {
        $site = $this->M_Config->listing();
        $categori = $this->M_Config->navProduk();
        $showcat = $this->db->get('categori')->result_array();
        $data = [
            'title'     => $site['namaweb'].' | ' .$site['tagline'],
            'keywords'  => $site['keywords'],
            'deskripsi' => $site['deskripsi'],
            'site'      => $site,
            'kategori'  => $categori,
            'showcat'   => $showcat,
            // 'isi'       => 'home/list'
        ];
        $this->load->view('layout/head',$data);
        $this->load->view('layout/header',$data);
        $this->load->view('layout/navbar',$data);
        $this->load->view('about/index', $data);
        $this->load->view('layout/footer',$data);
        
    }
}
