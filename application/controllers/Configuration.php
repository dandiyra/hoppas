<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Configuration extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Config');
    }
    // Config Basic
    // public function index()
    // {
    //     $configuration = $this->M_Config->listing();
    //     $data = [
    //         'title'              => 'Configuration Website',
    //         'configuration'      => $configuration,
    //         'users'              => $this->db->get_where('users', ['email' => 
    //                                 $this->session->userdata('email')])->row_array(),
    //     ];

    //     $this->form_validation->set_rules('namaweb', 'Nama Website', 'required');

    //     if ($this->form_validation->run() == FALSE) {
    //         $this->load->view('templates/header', $data);
    //         $this->load->view('templates/sidebar', $data);
    //         $this->load->view('templates/topbar', $data);
    //         $this->load->view('configuration/index', $data);
    //         $this->load->view('templates/footer');
    //     }else {
    //         $data = [
    //             'id_configuration'           => $this->input->post('id_configuration'),
    //             'namaweb'           => $this->input->post('namaweb'),
    //             'tagline'            => $this->input->post('tagline'),
    //             'email'            => $this->input->post('email'),
    //             'website'            => $this->input->post('website'),
    //             'keywords'            => $this->input->post('keywords'),
    //             'metatext'            => $this->input->post('metatext'),
    //             'telephone'            => $this->input->post('telephone'),
    //             'alamat'            => $this->input->post('alamat'),
    //             'facebook'            => $this->input->post('facebook'),
    //             'instagram'            => $this->input->post('instagram'),
    //             'deskripsi'            => $this->input->post('deskripsi'),
    //             'logo'            => $this->input->post('logo'),
    //             'icon'            => $this->input->post('icon'),
    //         ];
    //         $this->M_Config->edit($data);
    //         $this->session->set_flashdata('message',
    //         '<div class="alert alert-success" role="alert">
    //            Configuration Updated!
    //         </div>');
    //         redirect('Configuration/');
    //     }
    // }
    public function index()
    {
        $configuration = $this->M_Config->listing();
        $data = [
            'title'              => 'Configuration Website',
            'configuration'      => $configuration,
            'users'              => $this->db->get_where('users', ['email' => 
            $this->session->userdata('email')])->row_array(),
        ];
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('configuration/index', $data);
        $this->load->view('templates/footer');
    }
    
    public function edit() {
        $configuration = $this->M_Config->listing();
        $data = [
            'title' => 'Configuration Web',
            'configuration'      => $configuration,
            'users'              => $this->db->get_where('users', ['email' => 
                                    $this->session->userdata('email')])->row_array(),
        ];
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('configuration/edit', $data);
            $this->load->view('templates/footer');
    }

    public function editData()
    {   
            $id_configuration              = $this->input->post('id_configuration');
            $namaweb           = $this->input->post('namaweb');
            $tagline            = $this->input->post('tagline');
            $email            = $this->input->post('email');
            $website            = $this->input->post('website');
            $keywords            = $this->input->post('keywords');
            $metatext            = $this->input->post('metatext');
            $telephone            = $this->input->post('telephone');
            $alamat            = $this->input->post('alamat');
            $facebook            = $this->input->post('facebook');
            $instagram            = $this->input->post('instagram');
            $deskripsi           = $this->input->post('deskripsi');

            $config['upload_path'] = './assets/images/produk';
            $config['allowed_types'] = 'jpg|png|gif|jpeg';
            $config['max_size']             = 5000;
            $config['max_width']            = 5000;
            $config['max_height']           = 5000;

            // Cek ada gambar yang akan diupload
            $upload_image = $_FILES['logo']['name'];
            $upload_image1 = $_FILES['icon']['name'];

            $this->load->library('upload', $config);

            $path = './assets/images/produk';
            $_id = $this->db->get_where('configuration', ['id_configuration' => $id_configuration])->row_array();

            if($upload_image) {

                unlink($path.$_id['logo']);

                if ($this->upload->do_upload('logo')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('logo', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            if($upload_image1) {

                unlink($path.$_id['icon']);

                if ($this->upload->do_upload('icon')) {
                    $new_image1 = $this->upload->data('file_name');
                    $this->db->set('icon', $new_image1);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            
            $this->db->set('namaweb', $namaweb);
            $this->db->set('tagline', $tagline);
            $this->db->set('email', $email);
            $this->db->set('website', $website);
            $this->db->set('keywords', $keywords);
            $this->db->set('metatext', $metatext);
            $this->db->set('telephone', $telephone);
            $this->db->set('alamat', $alamat);
            $this->db->set('facebook', $facebook);
            $this->db->set('instagram', $instagram);
            $this->db->set('deskripsi', $deskripsi);
            $this->db->where('id_configuration', $id_configuration);
            $this->db->update('configuration');
            $this->session->set_flashdata('message', 'Data Edited');
            redirect('Configuration/');
        }
    
}