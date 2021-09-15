<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Category extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Categori');
    }

    public function index()
    {
        $category = $this->M_Categori->listing();
        $data = [
            'title'         => 'Category',
            'category'      => $category,
            'users'         => $this->db->get_where('users', ['email' => 
                                $this->session->userdata('email')])->row_array(),
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('category/index', $data);
        $this->load->view('templates/footer');
    }

    public function addCat()
    {
        $category = $this->M_Categori->listing();
        $data = [
            'title'         => 'Category',
            'category'      => $category,
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
            $this->load->view('category/index', $data);
            $this->load->view('templates/footer');
        }else {
            $slug_kategori          = url_title($this->input->post('nama_kategori'), 'dash', TRUE);

            $data = [
                'nama_kategori'     => $this->input->post('nama_kategori'),
                'slug_kategori'     => $slug_kategori,
                'urutan'            => $this->input->post('urutan'),
            ];
            $this->db->insert('categori', $data);
            $this->session->set_flashdata('message',
            '<div class="alert alert-success" role="alert">
               Category Added!
            </div>');
            redirect('Category/');
        }
    }

    public function UpCat($id_kategori)
    {
        $data['title'] = 'Update Category';
        $data['users'] = $this->db->get_where('users', ['email' => 
        $this->session->userdata('email')])->row_array();
        $data['categori'] = $this->db->get('categori')->result_array();
        $data['value'] = $this->db->get_where('categori', ['id_kategori' => $id_kategori])->row_array(); 
     

        $this->form_validation->set_rules('nama_kategori', 'Nama Kategori', 'required');
        $this->form_validation->set_rules('slug_kategori', 'Slug Kategori', 'required');
        $this->form_validation->set_rules('urutan', 'Urutan', 'required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('category/', $data);
            $this->load->view('templates/footer');
        }else {
            $slug_kategori          = url_title($this->input->post('nama_kategori'), 'dash', TRUE);

            $data = [
                'nama_kategori'     => $this->input->post('nama_kategori'),
                'slug_kategori'     => $slug_kategori,
                'urutan'            => $this->input->post('urutan'),
            ];
            $this->db->where('id_kategori', $id_kategori);
            $this->db->update('categori', $data);
            $this->session->set_flashdata('message',
            '<div class="alert alert-warning" role="alert">
               Category Updated!
            </div>');
            redirect('Category/');
        }
    }

    public function delCat($id_kategori)
    {

        $this->db->where('id_kategori', $id_kategori);
        $this->db->delete('categori');
        $this->session->set_flashdata('message',  '<div class="alert alert-danger" role="alert">
            Category Deleted!
        </div>');
        redirect('Category/');
    }

}
