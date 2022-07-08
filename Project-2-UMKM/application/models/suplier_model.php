<?php

class suplier_model extends CI_Model
{
    private $table = "suplier";

    public function getAll()
    {
        $query = $this->db->get($this->table);
        return $query->result();
    }
    public function findByid($id){
            $this->db->where('id',$id);
            $query = $this->db->get($this->table);
            return $query->row();
    }

    public function save($data){
        $sql = "INSERT INTO suplier 
        (id,nama,kota,kontak,alamat,telpon)
        VALUES (?,?,?,?,?,?)";
        $this->db->query($sql, $data);

    }

    public function update($data){  
        $sql = "UPDATE suplier SET id=?,nama=?,kota=?,kontak=?,alamat=?,telpon=? WHERE id=?";
        $this->db->query($sql, $data);

    }

    public function delete($id){
        $sql = "DELETE from suplier WHERE id=?";
        $this->db->query($sql,array($id));
    }
}