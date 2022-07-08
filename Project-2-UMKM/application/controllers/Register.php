<?php
defined('BASEPATH') or exit('No direct script access allowe
d');
class Register extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('users_model');
    }
    public function index()
    {
        $data = [];

        $this->load->view('login/register', $data);
    }
    public function save()
    {

        $this->load->model('users_model', 'users');
        $_username = $this->input->post('username');
        $_password = $this->input->post('password');
        $_email = $this->input->post('email');
        $_last_login = $this->input->post('last_login');
        $_status = $this->input->post('status');
        $_role = $this->input->post('role');


        $data = array(
            "username" => $_username,
            "password" => md5($_password),
            "email" => $_email,
            "last_login" => $_last_login,
            "status" => $_status,
            "role" => $_role
            
        );


        $this->users_model->input_data($data, 'users');
        redirect(site_url() . "/register/berhasil");
    }
    public function berhasil()
    {
        $this->load->view('login/berhasil');
    }
}