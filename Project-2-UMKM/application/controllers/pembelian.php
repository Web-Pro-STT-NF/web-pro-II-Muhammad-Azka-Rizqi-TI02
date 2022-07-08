<?php
defined('BASEPATH') or exit('No direct script access allowe
d');
class pembelian extends CI_Controller
{
    public function index()
    {
        $this->load->model('pembelian_model', 'pembelian');
        $list_pembelian = $this->pembelian->getAll();
        $data['list_pembelian'] = $list_pembelian;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('pembelian/index', $data);
        $this->load->view('layout/footer');
    }

    public function view()
    {
        $_id = $this->input->get('id');
        $this->load->model('pembelian_model', 'pembelian');
        $data['pembelian'] = $this->pembelian->findByid($_id);

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('pembelian/view', $data);
        $this->load->view('layout/footer');
    }

    public function create()
    {
        $data['judul'] = 'Form Kelola Data Pembelian';
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('pembelian/create', $data);
        $this->load->view('layout/footer');
    }


    public function save()
    {
        $this->load->model("pembelian_model", "pembelian");

        $_id = $this->input->post('id');
        $_tanggal = $this->input->post('tanggal');
        $_jumlah = $this->input->post('jumlah');
        $_harga = $this->input->post('harga');
        $_produk_id = $this->input->post('produk_id');
        $_suplier_id = $this->input->post('suplier_id');
        $_idedit = $this->input->post('idedit'); //hideen field


        $data_pembelian[] = $_id;  //? 1
        $data_pembelian[] = $_tanggal;  //? 2
        $data_pembelian[] = $_jumlah;
        $data_pembelian[] = $_harga;
        $data_pembelian[] = $_produk_id;
        $data_pembelian[] = $_suplier_id;

        if (isset($_idedit)) {
            $data_pembelian[] = $_idedit; // ? 8
            $this->pembelian->update($data_pembelian);
        } else {
            $this->pembelian->save($data_pembelian);
        }

        redirect(base_url() . 'index.php/pembelian/view?id=' . $_id, 'refresh');
    }


    public function edit()
    {
        $_id = $this->input->get('id');
        $this->load->model("pembelian_model", "pembelian");
        $pembelianedit = $this->pembelian->findById($_id);

        $data['judul'] = 'Form Update pembelian';
        $data['pembelianedit'] = $pembelianedit;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('pembelian/update', $data);
        $this->load->view('layout/footer');
    }


    public function delete()
    {
        $_id = $this->input->get('id');
        $this->load->model("pembelian_model", "pembelian");
        $this->pembelian->delete($_id);
        redirect(base_url() . 'index.php/pembelian', 'refresh');
    }

}