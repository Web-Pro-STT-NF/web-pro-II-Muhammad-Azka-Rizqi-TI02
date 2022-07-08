<?php
defined('BASEPATH') or exit('No direct script access allowe
d');
class pesanan1 extends CI_Controller
{
    public function index()
    {
        $this->load->model('pesanan_model', 'pesanan');
        $list_pesanan = $this->pesanan->getAll();
        $data['list_pesanan'] = $list_pesanan;
       
        $this->load->view('pesanan/index', $data);
    
    }
    public function view()
    {
        $_id = $this->input->get('id');
        $this->load->model('pesanan_model', 'pesanan');
        $data['pesanan'] = $this->pesanan->findByid($_id);

        $this->load->view('pesanan/view', $data);
     
    }

    public function create()
    {
        $data['judul'] = 'Form Kelola Data Suplier';
        
       
        $this->load->view('pesanan1/create', $data);
       
    }


    public function save()
    {
        $this->load->model("pesanan_model", "pesanan");

        $_id = $this->input->post('id');
        $_tanggal = $this->input->post('tanggal');
        $_jumlah = $this->input->post('jumlah');
        $_users_id = $this->input->post('users_id');
        $_produk_id = $this->input->post('produk_id');
        $_idedit = $this->input->post('idedit'); //hideen field


        $data_pesanan[] = $_id;  //? 1
        $data_pesanan[] = $_tanggal;  //? 2
        $data_pesanan[] = $_jumlah;
        $data_pesanan[] = $_users_id;
        $data_pesanan[] = $_produk_id;
     

        if (isset($_idedit)) {
            $data_pesanan[] = $_idedit; // ? 8
            $this->pesanan->update($data_pesanan);
        } else {
            $this->pesanan->save($data_pesanan);
        }

        redirect(base_url() . 'index.php/pesanan/view?id=' . $_id, 'refresh');
    }


    public function edit()
    {
        $_id = $this->input->get('id');
        $this->load->model("pesanan_model", "pesanan");
        $pesananedit = $this->pesanan->findById($_id);

        $data['judul'] = 'Form Update pesanan';
        $data['pesananedit'] = $pesananedit;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('pesanan/update', $data);
        $this->load->view('layout/footer');
    }


    public function delete()
    {
        $_id = $this->input->get('id');
        $this->load->model("pesanan_model", "pesanan");
        $this->pesanan->delete($_id);
        redirect(base_url() . 'index.php/pesanan', 'refresh');
    }
}