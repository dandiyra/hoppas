<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Productdetail extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Product');
        $this->load->model('M_Categori');
    }

    public function index()
    {
        $site               = $this->M_Config->listing();
        $listing_kategori   = $this->M_Product->listing_kategori();
        // $showcpro = $this->db->get('produk')->result_array();
        $total              = $this->M_Product->total_produk();
        //pagination start
        $this->load->library('pagination');
        
        $config['base_url']         = base_url().'productdetail/index';
        $config['total_rows']       = $total['total'];
        $config['use_page_numbers'] = true;
        $config['per_page']         = 6;
        $config['uri_segment']      = 3;
        $config['num_links']        = 5;
        $config['full_tag_open']    = '<ul class="pagination">';
        $config['full_tag_close']   = '</ul>';
        $config['first_link']       = 'First';
        $config['first_tag_open']   = '<li>';
        $config['first_tag_close']  = '</li>';
        $config['last_link']        = 'Last';
        $config['last_tag_open']    = '<li class="disabled"><li class="active"><a href="#"';
        $config['last_tag_close']   = '<span class="sr_only"</a></li></li>';
        $config['next_link']        = '&gt;';
        $config['next_tag_open']    = '<div>';
        $config['next_tag_close']   = '</div>';
        $config['prev_link']        = '&lt;';
        $config['prev_tag_open']    = '<div>';
        $config['prev_tag_close']   = '</div>';
        $config['cur_tag_open']     = '<b>';
        $config['cur_tag_close']    = '</b>';
        $config['first_url']        = base_url().'/productdetail/';
        $this->pagination->initialize($config);
        // Ambil data produk

        $page                       = ($this->uri->segment(3)) ? ($this->uri->segment(3)-1) * $config['per_page']:0;
        $produk                     =  $this->M_Product->product($config['per_page'],$page);
        
        //panitaion end          
        $data = [
            'title'                 => 'Product',
            'site'                  => $site,
            'listing_kategori'      => $listing_kategori,
            'produk'                => $produk,
            'pagin'                 => $this->pagination->create_links()

        ];
        $this->load->view('layout/head',$data);
        $this->load->view('layout/header',$data);
        $this->load->view('layout/navbar',$data);
        $this->load->view('productdetail/list', $data);
        $this->load->view('layout/footer',$data);
        // $this->load->view('layout/wrapper',$data);
    }

    public function kategori($slug_kategori)
    {
        $kategori           = $this->M_Categori->read($slug_kategori);
        $id_kategori        = $kategori['id_kategori'];
        $site               = $this->M_Config->listing();
        $listing_kategori   = $this->M_Product->listing_kategori();
        // $showcpro = $this->db->get('produk')->result_array();
        $total              = $this->M_Product->total_kategori($id_kategori);
        //pagination start
        $this->load->library('pagination');
        
        $config['base_url']         = base_url().'productdetail/kategori/'.$slug_kategori.'/index/';
        $config['total_rows']       = $total['total'];
        $config['use_page_numbers'] = true;
        $config['per_page']         = 6;
        $config['uri_segment']      = 5;
        $config['num_links']        = 5;
        $config['full_tag_open']    = '<ul class="pagination">';
        $config['full_tag_close']   = '</ul>';
        $config['first_link']       = 'First';
        $config['first_tag_open']   = '<li>';
        $config['first_tag_close']  = '</li>';
        $config['last_link']        = 'Last';
        $config['last_tag_open']    = '<li class="disabled"><li class="active"><a href="#"';
        $config['last_tag_close']   = '<span class="sr_only"</a></li></li>';
        $config['next_link']        = '&gt;';
        $config['next_tag_open']    = '<div>';
        $config['next_tag_close']   = '</div>';
        $config['prev_link']        = '&lt;';
        $config['prev_tag_open']    = '<div>';
        $config['prev_tag_close']   = '</div>';
        $config['cur_tag_open']     = '<b>';
        $config['cur_tag_close']    = '</b>';
        $config['first_url']        = base_url().'/productdetail/kategori/'.$slug_kategori;
        $this->pagination->initialize($config);
        // Ambil data produk

        $page                       = ($this->uri->segment(5)) ? ($this->uri->segment(5)-1) * $config['per_page']:0;
        $produk                     =  $this->M_Product->kategori($id_kategori,$config['per_page'],$page);
        
        //panitaion end          
        $data = [
            'title'                 => $kategori['nama_kategori'],
            'site'                  => $site,
            'listing_kategori'      => $listing_kategori,
            'produk'                => $produk,
            'pagin'                 => $this->pagination->create_links()

        ];
        $this->load->view('layout/head',$data);
        $this->load->view('layout/header',$data);
        $this->load->view('layout/navbar',$data);
        $this->load->view('productdetail/list', $data);
        $this->load->view('layout/footer',$data);
    }

    //Product Detail

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
}