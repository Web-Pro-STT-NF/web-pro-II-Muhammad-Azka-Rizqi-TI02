<?php
defined('BASEPATH') or exit('No direct script access allowe
d');
class suplier extends CI_Controller
{
    public function index()
    {
        $this->load->model('suplier_model', 'suplier');
        $list_suplier = $this->suplier->getAll();
        $data['list_suplier'] = $list_suplier;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('suplier/index', $data);
        $this->load->view('layout/footer');
    }

    public function view()
    {
        $_id = $this->input->get('id');
        $this->load->model('suplier_model', 'suplier');
        $data['suplier'] = $this->suplier->findByid($_id);

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('suplier/view', $data);
        $this->load->view('layout/footer');
    }

    public function create()
    {
        $data['judul'] = 'Form Kelola Data Suplier';
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('suplier/create', $data);
        $this->load->view('layout/footer');
    }


    public function save()
    {
        $this->load->model("suplier_model", "suplier");

        $_id = $this->input->post('id');
        $_nama = $this->input->post('nama');
        $_kota = $this->input->post('kota');
        $_kontak = $this->input->post('kontak');
        $_alamat = $this->input->post('alamat');
        $_telpon = $this->input->post('telpon');
        $_idedit = $this->input->post('idedit'); //hideen field


        $data_suplier[] = $_id;  //? 1
        $data_suplier[] = $_nama;  //? 2
        $data_suplier[] = $_kota;
        $data_suplier[] = $_kontak;
        $data_suplier[] = $_alamat;
        $data_suplier[] = $_telpon;

        if (isset($_idedit)) {
            $data_suplier[] = $_idedit; // ? 8
            $this->suplier->update($data_suplier);
        } else {
            $this->suplier->save($data_suplier);
        }

        redirect(base_url() . 'index.php/suplier/view?id=' . $_id, 'refresh');
    }


    public function edit()
    {
        $_id = $this->input->get('id');
        $this->load->model("suplier_model", "suplier");
        $suplieredit = $this->suplier->findById($_id);

        $data['judul'] = 'Form Update suplier';
        $data['suplieredit'] = $suplieredit;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('suplier/update', $data);
        $this->load->view('layout/footer');
    }


    public function delete()
    {
        $_id = $this->input->get('id');
        $this->load->model("suplier_model", "suplier");
        $this->suplier->delete($_id);
        redirect(base_url() . 'index.php/suplier', 'refresh');
    }
}