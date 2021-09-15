<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
       is_logged_in();
    }
    public function index()
    {
        $data['title'] = 'My Profile';
        $data['users'] = $this->db->get_where('users', ['email' => 
        $this->session->userdata('email')])->row_array();
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('users/index', $data);
        $this->load->view('templates/footer');
    }

    public function edit()
    {
        $data['title'] = 'Edit Profile';
        $data['users'] = $this->db->get_where('users', ['email' => 
        $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('name', 'Full Name', 'required|trim');
        
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('users/edit', $data);
            $this->load->view('templates/footer');
        }else {
            $name = $this->input->post('name');
            $email = $this->input->post('email');
            $telephone = $this->input->post('telephone');

            $this->db->set('name', $name);
            $this->db->where('email', $email);
            $this->db->set('telephone', $telephone);
            $this->db->update('users');
            $this->session->set_flashdata('message',
            '<div class="alert alert-success" role="alert">
                Your Profile has been updated!
            </div>');
            redirect('users');
        }
       
    }

    public function changePassword()
    {
        $data['title'] = 'Change Password';
        $data['users'] = $this->db->get_where('users', ['email' => 
        $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
        $this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|min_length[3]|matches[new_password2]');
        $this->form_validation->set_rules('new_password2', 'Confirm New Password', 'required|trim|min_length[3]|matches[new_password1]');
        
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('users/changepassword', $data);
            $this->load->view('templates/footer');
        }else {
            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('new_password1');
            if (!password_verify($current_password, $data['users']['password']))  {
                $this->session->set_flashdata('message',
                '<div class="alert alert-danger" role="alert">
                    Wrong current password!
                 </div>');
            redirect('users/changepassword');
            }else {
                if($current_password == $new_password) {
                    $this->session->set_flashdata('message',
                    '<div class="alert alert-danger" role="alert">
                       New password cannot be the same as current password!
                     </div>');
                redirect('users/changepassword');
                }else {
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

                    $this->db->set('password', $password_hash);
                    $this->db->where('email', $this->session->userdata('email'));
                    $this->db->update('users');
                    $this->session->set_flashdata('message',
                    '<div class="alert alert-success" role="alert">
                       Password Change!
                     </div>');
                redirect('users/changepassword');
                }
            }
        }
       
    }

}
