<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Menu Management';
        $data['users'] = $this->db->get_where('users', ['email' => 
        $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->db->get('users_menu')->result_array();
        $this->form_validation->set_rules('menu', 'Menu', 'required');
        if ($this->form_validation->run() == false ) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('menu/index', $data);
            $this->load->view('templates/footer');
        }else {
            $this->db->insert('users_menu', ['menu' => $this->input->post('menu')]);
            $this->session->set_flashdata('message',
            '<div class="alert alert-dark" role="alert">
               New Menu Added!
            </div>');
            redirect('Menu');
        }
    }

    public function submenu()
    {
        $data['title'] = 'Submenu Management';
        $data['users'] = $this->db->get_where('users', ['email' => 
        $this->session->userdata('email')])->row_array();

        $data['subMenu'] = $this->db->get('users_sub_menu')->result_array();
        $data['menu'] = $this->db->get('users_menu')->result_array();

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('menu_id', 'Menu', 'required');
        $this->form_validation->set_rules('url', 'URL', 'required');
        $this->form_validation->set_rules('icon', 'Icon', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('menu/submenu', $data);
            $this->load->view('templates/footer');
        }else {
            $data = [
                'title' => $this->input->post('title'),
                'menu_id' => $this->input->post('menu_id'),
                'url' => $this->input->post('url'),
                'icon' => $this->input->post('icon'),
                'is_active' => $this->input->post('is_active'),
            ];
            $this->db->insert('users_sub_menu', $data);
            $this->session->set_flashdata('message',
            '<div class="alert alert-dark" role="alert">
               New Submenu Added!
            </div>');
            redirect('Menu/submenu');
        }
        
    }

    


}