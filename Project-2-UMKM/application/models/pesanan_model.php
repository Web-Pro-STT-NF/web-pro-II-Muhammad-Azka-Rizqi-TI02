<?php

class pesanan_model extends CI_Model
{
    private $table = "pesanan";

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
        $sql = "INSERT INTO pesanan 
        (id,tanggal,jumlah,users_id,produk_id)
        VALUES (?,?,?,?,?)";
        $this->db->query($sql, $data);

    }

    public function update($data){
        $sql = "UPDATE pesanan SET id=?,tanggal=?,jumlah=?,users_id=?,produk_id=? WHERE id=?";
        $this->db->query($sql, $data);

    }

    public function delete($id){
        $sql = "DELETE from pesanan WHERE id=?";
        $this->db->query($sql,array($id));

    }
}