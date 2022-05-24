<?php
class Dosen_model extends CI_Model {
 public $id;
 public $nama;
 public $nidn;
 public $gender;
 public $tmp_lahir;
 public $tgl_lahir;
 public $pendidikan;
public function predikat(){
 $predikat = ($this->pendidikan >= "S3")?"Terbaik" : "Berpengalaman";
return $predikat;
}
}
