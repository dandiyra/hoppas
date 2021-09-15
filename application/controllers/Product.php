<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Product');
    }

    public function index()
    {
        $product = $this->M_Product->listing();
        $data = [
            'title'         => 'All Product',
            'product'      => $product,
            'users'         => $this->db->get_where('users', ['email' => 
                                $this->session->userdata('email')])->row_array(),
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('product/index', $data);
        $this->load->view('templates/footer');
    }

    public function addPro()
    {
        $product = $this->M_Product->listing();
        $data = [
            'title'         => 'Product',
            'product'      => $product,
            'users'         => $this->db->get_where('users', ['email' => 
                                $this->session->userdata('email')])->row_array(),
        ];

        $this->form_validation->set_rules('nama_kategori', 'Nama Kategori', 'required');
        $this->form_validation->set_rules('slug_kategori', 'Slug Kategori', 'required');
        $this->form_validation->set_rules('urutan', 'Urutan', 'required');

    
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('product/addproduct', $data);
            $this->load->view('templates/footer');
        }else {
            $slug_kategori          = url_title($this->input->post('nama_kategori'), 'dash', TRUE);

            $data = [
                'nama_kategori'     => $this->input->post('nama_kategori'),
                'slug_kategori'     => $slug_kategori,
                'urutan'            => $this->input->post('urutan'),
            ];
            $this->db->insert('product', $data);
            $this->session->set_flashdata('message',
            '<div class="alert alert-success" role="alert">
               Category Added!
            </div>');
            redirect('Product/');
        }
    }

}