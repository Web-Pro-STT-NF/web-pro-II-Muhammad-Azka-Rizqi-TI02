<?php
defined('BASEPATH') or exit('No direct script access allowe
d');
class produk extends CI_Controller
{
    public function index()
    {
        $this->load->model('produk_model', 'produk');
        $list_produk = $this->produk->getAll();
        $data['list_produk'] = $list_produk;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('produk/index', $data);
        $this->load->view('layout/footer');
    }
    public function view()
    {
        $_id = $this->input->get('id');
        $this->load->model('produk_model', 'produk');
        $data['produk'] = $this->produk->findByid($_id);

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('produk/view', $data);
        $this->load->view('layout/footer');
    }

    public function create()
    {
        $data['judul'] = 'Form Kelola Data Suplier';
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('produk/create', $data);
        $this->load->view('layout/footer');
    }


    public function save()
    {
        $this->load->model("produk_model", "produk");

        $_id = $this->input->post('id');
        $_kode = $this->input->post('kode');
        $_nama = $this->input->post('nama');
        $_stok = $this->input->post('stok');
        $_harga_beli = $this->input->post('harga_beli');
        $_harga_jual = $this->input->post('harga_jual');
        $_foto = $this->input->post('foto');
        $_jenis_id = $this->input->post('jenis_id');
        $_deskripsi = $this->input->post('deskripsi');
        $_idedit = $this->input->post('idedit'); //hideen field


        $data_produk[] = $_id;  //? 1
        $data_produk[] = $_kode;  //? 2
        $data_produk[] = $_nama;  //? 2
        $data_produk[] = $_stok;
        $data_produk[] = $_harga_beli;
        $data_produk[] = $_harga_jual;
        $data_produk[] = $_foto;
        $data_produk[] = $_jenis_id;
        $data_produk[] = $_deskripsi;

        if (isset($_idedit)) {
            $data_produk[] = $_idedit; // ? 8
            $this->produk->update($data_produk);
        } else {
            $this->produk->save($data_produk);
        }

        redirect(base_url() . 'index.php/produk/view?id=' . $_id, 'refresh');
    }


    public function edit()
    {
        $_id = $this->input->get('id');
        $this->load->model("produk_model", "produk");
        $produkedit = $this->produk->findById($_id);

        $data['judul'] = 'Form Update produk';
        $data['produkedit'] = $produkedit;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('produk/update', $data);
        $this->load->view('layout/footer');
    }


    public function delete()
    {
        $_id = $this->input->get('id');
        $this->load->model("produk_model", "produk");
        $this->produk->delete($_id);
        redirect(base_url() . 'index.php/produk', 'refresh');
    }

    public function upload()
    {
        $config['upload_path']      = './uploads/';
        $config['allowed_types']    = '*';
        $config['max_size']         = 10024;
        $config['max_width']        = 6000;
        $config['max_height']       = 6000;

        $id = $this->input->post('id');
        $array = explode('.', $_FILES['fotoproduk']['name']);
        $extension = end($array);
        $new_name = $id . '.' . $extension;
        $config['file_name'] = $new_name;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('fotoproduk')) {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('upload_form', $error);
        } else {
            $this->load->model('produk_model','produk');
            $array_data[] = $new_name; // ? ke 1
            $array_data[] = $id; // ? ke 2
            $this->produk->upload_foto($array_data);
            // $data = array('upload_data' => $this->upload->data());
            // $this->load->view('produk/detail', $data);
        }
        redirect(base_url() . 'index.php/produk/view?id=' . $id);
    }
}