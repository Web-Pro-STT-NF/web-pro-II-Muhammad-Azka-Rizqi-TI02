<?php
defined('BASEPATH') or exit('No direct script access allowe
d');
class jenis_produk extends CI_Controller
{
    public function index()
    {
        $this->load->model('jenis_produk_model', 'jenis_produk');
        $list_jenis_produk = $this->jenis_produk->getAll();
        $data['list_jenis_produk'] = $list_jenis_produk;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('jenis_produk/index', $data);
        $this->load->view('layout/footer');
    }
    public function view()
    {
        $_id = $this->input->get('id');
        $this->load->model('jenis_produk_model', 'jenis_produk');
        $data['jenis_produk'] = $this->jenis_produk->findByid($_id);

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('jenis_produk/view', $data);
        $this->load->view('layout/footer');
    }

    public function create()
    {
        $data['judul'] = 'Form Kelola Data Pembelian';
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('jenis_produk/create', $data);
        $this->load->view('layout/footer');
    }


    public function save()
    {
        $this->load->model("jenis_produk_model", "jenis_produk");

        $_id = $this->input->post('id');
        $_nama = $this->input->post('nama');
        $_idedit = $this->input->post('idedit'); //hideen field


        $data_jenis_produk[] = $_id;  //? 1
        $data_jenis_produk[] = $_nama;  //? 2
      

        if (isset($_idedit)) {
            $data_jenis_produk[] = $_idedit; // ? 8
            $this->jenis_produk->update($data_jenis_produk);
        } else {
            $this->jenis_produk->save($data_jenis_produk);
        }

        redirect(base_url() . 'index.php/jenis_produk/view?id=' . $_id, 'refresh');
    }


    public function edit()
    {
        $_id = $this->input->get('id');
        $this->load->model("jenis_produk_model", "jenis_produk");
        $jenis_produkedit = $this->jenis_produk->findById($_id);

        $data['judul'] = 'Form Update jenis_produk';
        $data['jenis_produkedit'] = $jenis_produkedit;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('jenis_produk/update', $data);
        $this->load->view('layout/footer');
    }


    public function delete()
    {
        $_id = $this->input->get('id');
        $this->load->model("jenis_produk_model", "jenis_produk");
        $this->jenis_produk->delete($_id);
        redirect(base_url() . 'index.php/jenis_produk', 'refresh');
    }
}