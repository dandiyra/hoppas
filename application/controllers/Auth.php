<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        
    }

    public function index()
    {
        if ($this->session->userdata('email')) {
            redirect('users');
        }

        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login Page';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/login');
            $this->load->view('templates/auth_footer');
        }else {
            // succes login
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $users = $this->db->get_where('users', ['email' => $email])->row_array();
        if ($users) {
            // user active 
            if ($users['is_active']== 1) {
                // check password
                if (password_verify($password, $users['password'])) {
                  $data = [
                      'email' => $users['email'],
                      'plan' => $users['plan'],
                      'role_id' => $users['role_id'],
                      'name' => $users['name'],
                      'division' => $users['division']
                  ];  
                  $this->session->set_userdata($data);
                  if ($users['role_id'] == 0) {
                    redirect('Admin/');
                  }else {
                    redirect('Users/');
                  }
                }else {
                    $this->session->set_flashdata('message',
                '<div class="alert alert-danger" role="alert">
                   Wrong password!
                </div>');
                redirect('Auth');
                }
            }else {
                $this->session->set_flashdata('message',
                '<div class="alert alert-danger" role="alert">
                   This email has not been acitavated!
                </div>');
                redirect('Auth');
            }

        }else {
            // user not found
            $this->session->set_flashdata('message',
            '<div class="alert alert-danger" role="alert">
                email is not registered!
            </div>');
            redirect('Auth');
        }
    }

    public function registration()
    {
        if ($this->session->userdata('email')) {
            redirect('users');
        }
        
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[users.email]', [
            'is_unique' => 'This email has already registered!'
        ]);
        $this->form_validation->set_rules('telephone', 'Telephone', 'required');
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'password dont match!',
            'min_length' => 'password too short!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
        $this->form_validation->set_rules('cookies', 'Cookies');
        $this->form_validation->set_rules('role_id', 'Role_id', 'required');
        


        if ($this->form_validation->run() == false) {
            $data['title'] = 'User Registration';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/registration');
            $this->load->view('templates/auth_footer');
        } else {
            $data = [
                'email' => htmlspecialchars($this->input->post('email')),
                'telephone' => htmlspecialchars($this->input->post('telephone')),
                'role_id' => $this->input->post('role_id'),
                'name' => $this->input->post('name'),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'is_active' => 1

            ];
            $this->db->insert('users', $data);
            $this->session->set_flashdata('message',
            '<div class="alert alert-success" role="alert">
            Congratulation! Your account has been created. Please Login!
            </div>');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message',
        '<div class="alert alert-danger" role="alert">
           You have been logout!
        </div>');
        redirect('auth');
    }

    public function blocked()
    {
       $this->load->view('auth/blocked');
    }
}
