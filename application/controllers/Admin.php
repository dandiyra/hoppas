<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('M_div');
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['users'] = $this->db->get_where('users', ['email' => 
        $this->session->userdata('email')])->row_array();
        $data['user'] = $this->db->get('users')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }

    public function role()
    {
        $data['title'] = 'Role';
        $data['users'] = $this->db->get_where('users', ['email' => 
        $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get('users_role')->result_array();   

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/role', $data);
        $this->load->view('templates/footer');
    }

    public function roleAccess($role_id)
    {
        $data['title'] = 'Role Access';
        $data['users'] = $this->db->get_where('users', ['email' => 
        $this->session->userdata('email')])->row_array();
        $data['role'] = $this->db->get_where('users_role', ['id' => $role_id])->row_array();
        $this->db->where('id !=', 0);
        $data['menu'] = $this->db->get('users_menu')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/role_access', $data);
        $this->load->view('templates/footer');
    }

    public function changeAccess()
    {
        $menu_id = $this->input->post('menuId');
        $role_id = $this->input->post('roleId');

        $data = [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ];

        $result = $this->db->get_where('users_access_menu', $data);

        if ($result->num_rows() < 1 ) {
            $this->db->insert('users_access_menu', $data);
        }else {
            $this->db->delete('users_access_menu', $data);
        }
        $this->session->set_flashdata('message',
        '<div class="alert alert-danger" role="alert">
           Access Changed!
        </div>');
    }

    public function register()
    {

        $data['title'] = 'Register';
        $data['users'] = $this->db->get_where('users', ['email' => 
        $this->session->userdata('email')])->row_array();
        $data['users_role'] = $this->db->get('users_role')->result_array();

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

        if ($this->form_validation->run() == FALSE) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/register', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'email' => htmlspecialchars($this->input->post('email')),
                'telephone' => htmlspecialchars($this->input->post('telephone')),
                'role_id' => $this->input->post('role_id'),
                'name' => $this->input->post('name'),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'is_active' => 1

            ];
            $this->db->insert('users', $data);
            $this->session->set_flashdata('message',
            '<div class="alert alert-success" role="alert">
                User Added!
            </div>');
            redirect('admin/index');
        }
    }

    public function plan()
    {
        $data['title'] = 'Plans';
        $data['users'] = $this->db->get_where('users', ['email' => 
        $this->session->userdata('email')])->row_array();
        $data['plans'] = $this->db->get('plans')->result_array();
        $this->form_validation->set_rules('plans', 'Plans', 'required');
        if ($this->form_validation->run() == false ) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/plans', $data);
            $this->load->view('templates/footer');
        }else {
            $this->db->insert('plans', ['plans' => $this->input->post('plans')]);
            $this->session->set_flashdata('message',
            '<div class="alert alert-dark" role="alert">
               New Plan Added!
            </div>');
            redirect('Admin/plan');
        }
    }
    
    public function update($id)
    {
        $data['title'] = 'Update';
        $data['users'] = $this->db->get_where('users', ['email' => 
        $this->session->userdata('email')])->row_array();
        $data['plans'] = $this->db->get('plans')->result_array();
        $data['value'] = $this->db->get_where('users', ['id' => $id])->row_array(); 
        $data['division'] = $this->db->get('division')->result_array();
        $data['subDivision'] = $this->db->get('subDivision')->result_array();


        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('telephone', 'Telephone', 'required');
        $this->form_validation->set_rules('division', 'Division', 'required');
        $this->form_validation->set_rules('subDivision', 'SubDivision');
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('cookies', 'Cookies');
        $this->form_validation->set_rules('plan', 'Plan', 'required|trim');
        $this->form_validation->set_rules('role_id', 'Role_id', 'required');

        if ($this->form_validation->run() == FALSE) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/update', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'email' => htmlspecialchars($this->input->post('email')),
                'telephone' => htmlspecialchars($this->input->post('telephone')),
                'division' => $this->input->post('division'),
                'role_id' => $this->input->post('role_id'),
                'subDivision' => $this->input->post('subDivision'),
                'name' => $this->input->post('name'),
                'plan' => $this->input->post('plan'),
                'is_active' => 1

            ];
            $this->db->where('id', $id);
            $this->db->update('users', $data) ;
            $this->session->set_flashdata('message',
            '<div class="alert alert-warning" role="alert">
                User Updated!
            </div>');
            redirect('Admin/');
        }
    }

    public function delete($id)
    {

        $this->db->where('id', $id);
        $this->db->delete('users');
        $this->session->set_flashdata('message',  '<div class="alert alert-danger" role="alert">
            User Deleted!
        </div>');
        redirect('Admin/');
    }

    public function changepassusers()
    {
        $data['title'] = 'Change Password Users';
        $data['users'] = $this->db->get_where('users', ['email' => 
        $this->session->userdata('email')])->row_array();
        $data['user'] = $this->db->get('users')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/changePasswordUsers', $data);
        $this->load->view('templates/footer');
    }

    public function changepass()
    {
        $password = $this->input->post('password1');
        $cpassword = $this->input->post('password2');
        if ($password != $cpassword) {
            $this->session->set_flashdata('message',
            '<div class="alert alert-warning" role="alert">
                Password Dont Matches!
            </div>');
            redirect('Admin/changepassusers');
        }
            $data = [
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),

            ];
            $this->db->where('email', $this->input->post('email'));
            $this->db->update('users', $data) ;
            $this->session->set_flashdata('message',
            '<div class="alert alert-success" role="alert">
                Password Changed!
            </div>');
            redirect('Admin/changepassusers');
        
    }

    public function division()
    {
        $data['title'] = 'Division';
        $data['users'] = $this->db->get_where('users', ['email' => 
        $this->session->userdata('email')])->row_array();
        $data['division'] = $this->db->get('division')->result_array();
        $data['plans'] = $this->db->get('plans')->result_array();
        $this->form_validation->set_rules('division', 'Division', 'required');
        $this->form_validation->set_rules('plan', 'Plan', 'required');
        if ($this->form_validation->run() == false ) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/division', $data);
            $this->load->view('templates/footer');
        }else {
            $data = [
                'division' => $this->input->post('division'),
                'plan' => $this->input->post('plan'),
                'formreq' => $this->input->post('formreq')
            ];
            $this->db->insert('division', $data);
            $this->session->set_flashdata('message',
            '<div class="alert alert-warning" role="alert">
                Division Added!
            </div>');
            redirect('Admin/division');
        }
    }

    public function divisionDetail($id)
    {
        $data['title'] = 'Division Detail';
        $data['users'] = $this->db->get_where('users', ['email' => 
        $this->session->userdata('email')])->row_array();
        $data['value'] = $this->db->get_where('division',['id'=> $id])->row_array();
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('Admin/divisionDetail', $data);
        $this->load->view('templates/footer');
    }

    public function getSubDivision($id)
    {
        $id = $this->input->post('id');
        $data = $this->Division_model->getSubDivision($id);
        echo json_encode($data);
    }

    public function subdivision()
    {
        $data['title'] = 'Sub Division';
        $data['users'] = $this->db->get_where('users', ['email' => 
        $this->session->userdata('email')])->row_array();
        $data['plans'] = $this->db->get('plans')->result_array();
        $data['subdivision'] = $this->db->get('subdivision')->result_array();

        $this->form_validation->set_rules('subDivision', 'SubDivision', 'required|trim');
        $this->form_validation->set_rules('plan', 'Plan', 'required|trim');
        if ($this->form_validation->run() == false ) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/subdivision', $data);
            $this->load->view('templates/footer');
        }else {
            $data = [
                'subDivision' => $this->input->post('subDivision'),
                'plan' => $this->input->post('plan'),
            ];
            $this->db->insert('subdivision', $data);
            $this->session->set_flashdata('message',
            '<div class="alert alert-warning" role="alert">
                Division Added!
            </div>');
            redirect('Admin/subdivision');
        }
    }

    public function divisionUpdate($id)
    {
        $data['title'] = 'Update';
        $data['users'] = $this->db->get_where('users', ['email' => 
        $this->session->userdata('email')])->row_array();
        $data['division'] = $this->db->get('division')->result_array();
        $data['plans'] = $this->db->get('plans')->result_array();
        $data['value'] = $this->db->get_where('division', ['id' => $id])->row_array(); 



        $this->form_validation->set_rules('division', 'Division', 'required|trim');
        $this->form_validation->set_rules('plan', 'Plan', 'required|trim');

        if ($this->form_validation->run() == FALSE) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/division', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'division' =>($this->input->post('division')),
                'plan' =>($this->input->post('plan')),
                'formreq' =>($this->input->post('formreq'))
            ];
            $this->db->where('id', $id);
            $this->db->update('division', $data) ;
            $this->session->set_flashdata('message',
            '<div class="alert alert-warning" role="alert">
                Division Updated!
            </div>');
            redirect('Admin/division');
        }
    }
    public function subdivisionUpdate($id)
    {
        $data['title'] = 'Sub Division Update';
        $data['users'] = $this->db->get_where('users', ['email' => 
        $this->session->userdata('email')])->row_array();
        $data['subdivision'] = $this->db->get('subdivision')->result_array();
        $data['value'] = $this->db->get_where('subdivision', ['id' => $id])->row_array(); 



        $this->form_validation->set_rules('subDivision', 'SubDivision', 'required|trim');
        $this->form_validation->set_rules('plan', 'Plan', 'required|trim');

        if ($this->form_validation->run() == FALSE) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/subdivision', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'subDivision' =>($this->input->post('subDivision')),
                'plan' =>($this->input->post('plan'))
            ];
            $this->db->where('id', $id);
            $this->db->update('subdivision', $data) ;
            $this->session->set_flashdata('message',
            '<div class="alert alert-warning" role="alert">
                Sub Division Updated!
            </div>');
            redirect('Admin/subdivision');
        }
    }

    public function divisionDelete($id)
    {

        $this->db->where('id', $id);
        $this->db->delete('division');
        $this->session->set_flashdata('message',  '<div class="alert alert-danger" role="alert">
            Division Deleted!
        </div>');
        redirect('Admin/division');
    }

    public function subdivisionDelete($id)
    {

        $this->db->where('id', $id);
        $this->db->delete('subdivision');
        $this->session->set_flashdata('message',  '<div class="alert alert-danger" role="alert">
            Sub Division Deleted!
        </div>');
        redirect('Admin/subdivision');
    }


}