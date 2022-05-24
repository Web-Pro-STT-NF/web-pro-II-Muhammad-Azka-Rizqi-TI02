<?php
class Matakuliah_model extends CI_Model {
 public $id;
 public $nama;
 public $kode;
 public $sks;
 public $dosen;
public function predikat(){
 $predikat = ($this->sks >= 3)?"Prioritas" : "Biasa";
return $predikat;
}
}
