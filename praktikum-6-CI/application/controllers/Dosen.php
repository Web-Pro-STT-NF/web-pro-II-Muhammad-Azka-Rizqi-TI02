<?php
class Dosen extends CI_Controller {
 public function index()
 {
     $data['title'] = 'Dosen';
     $this->load->model('dosen_model', 'dosen1');
     $this->dosen1->id = 1;
     $this->dosen1->nidn = '111';
     $this->dosen1->nama = 'Muhammad Azka Rizqi';
     $this->dosen1->gender = 'L';
     $this->dosen1->pendidikan = "S3";
 
     $this->load->model('dosen_model', 'dosen2');
     $this->dosen2->id = 2;
     $this->dosen2->nidn = '222';
     $this->dosen2->nama = 'Japur Artz';
     $this->dosen2->gender = 'L';
     $this->dosen2->pendidikan = "S3";

     $this->load->model('dosen_model', 'dosen3');
     $this->dosen3->id = 3;
     $this->dosen3->nidn = '333';
     $this->dosen3->nama = 'Puriansih';
     $this->dosen3->gender = 'S';
     $this->dosen3->pendidikan = "S2";
     
     $list_dosen = [$this->dosen1, $this->dosen2, $this->dosen3];
     $data['list_dosen'] = $list_dosen;
 $this->load->view('dosen/index',$data);
 
 }
}
