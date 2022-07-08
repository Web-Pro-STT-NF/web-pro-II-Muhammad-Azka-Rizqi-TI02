<?php
defined('BASEPATH') or exit('No direct script access allowe
d');
class users extends CI_Controller
{
    public function index()
    {
        $this->load->model('users_model', 'users');
        $list_users = $this->users->getAll();
        $data['list_users'] = $list_users;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('users/index', $data);
        $this->load->view('layout/footer');
    }
    public function view()
    {
        $_id = $this->input->get('id');
        $this->load->model('users_model', 'users');
        $data['users'] = $this->users->findByid($_id);

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('users/view', $data);
        $this->load->view('layout/footer');
    }

    public function create()
    {
        $data['judul'] = 'Form Kelola Data Users';
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('users/create', $data);
        $this->load->view('layout/footer');
    }


    public function save()
    {
        $this->load->model("users_model", "users");

        $_id = $this->input->post('id');
        $_username = $this->input->post('username');
        $_password = $this->input->post('password');
        $_created_at = $this->input->post('created_at');
        $_last_login = $this->input->post('last_login');
        $_status = $this->input->post('status');
        $_role = $this->input->post('role');
        $_idedit = $this->input->post('idedit'); //hideen field


        $data_users[] = $_id;  //? 1
        $data_users[] = $_username;  //? 2
        $data_users[] = $_password;
        $data_users[] = $_created_at;
        $data_users[] = $_last_login;
        $data_users[] = $_status;
        $data_users[] = $_role;


        if (isset($_idedit)) {
            $data_users[] = $_idedit; // ? 8
            $this->users->update($data_users);
        } else {
            $this->users->save($data_users);
        }

        redirect(base_url() . 'index.php/users/view?id=' . $_id, 'refresh');
    }


    public function edit()
    {
        $_id = $this->input->get('id');
        $this->load->model("users_model", "users");
        $usersedit = $this->users->findById($_id);

        $data['judul'] = 'Form Update users';
        $data['usersedit'] = $usersedit;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('users/update', $data);
        $this->load->view('layout/footer');
    }


    public function delete()
    {
        $_id = $this->input->get('id');
        $this->load->model("users_model", "users");
        $this->users->delete($_id);
        redirect(base_url() . 'index.php/users', 'refresh');
    }
}