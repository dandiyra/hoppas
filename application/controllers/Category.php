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

    public function AddCategory()
    {
            $data = [
                'title'         => 'Add Category',
                'users'          => $this->db->get_where('users', ['email' => 
                                     $this->session->userdata('email')])->row_array(),
                
            ];
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('category/addcategory', $data);
            $this->load->view('templates/footer');
      
    }

    public function addCat()
    {
        $config['upload_path'] = './assets/images/produk';
        $config['allowed_types'] = 'jpg|png|gif|jpeg';
        $config['max_size']             = 5000;
        $config['max_width']            = 5000;
        $config['max_height']           = 5000;

        $this->load->library('upload', $config);

        //Memasukan gambar produk
        if (!empty($_FILES['gambar'])) {
            $this->upload->do_upload('gambar');
            $data1 = $this->upload->data('file_name');
            $this->db->set('gambar', $data1);
        }

       
        $nama_kategori          = $this->input->post('nama_kategori');
        $slug_kategori          = url_title($this->input->post('nama_kategori'));
        $urutan                 = $this->input->post('urutan');

        $this->db->set('nama_kategori', $nama_kategori);
        $this->db->set('slug_kategori', $slug_kategori);
        $this->db->set('urutan', $urutan);
       
        $this->db->insert('categori');
        $this->session->set_flashdata('message',
        '<div class="alert alert-success" role="alert">
           Category Added!   
        </div>');
        redirect('Category/');
    }


    public function addCatt()
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
