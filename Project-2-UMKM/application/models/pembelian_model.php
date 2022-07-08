<?php

class pembelian_model extends CI_Model
{
    private $table = "pembelian";

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
        $sql = "INSERT INTO pembelian 
        (id,tanggal,jumlah,harga,produk_id,suplier_id)
        VALUES (?,?,?,?,?,?)";
        $this->db->query($sql, $data);
    }

    public function update($data){
        $sql = "UPDATE pembelian SET id=?,tanggal=?,jumlah=?,harga=?,produk_id=?,suplier_id=? WHERE id=?";
        $this->db->query($sql, $data);


    }

    public function delete($id){
        $sql = "DELETE from pembelian WHERE id=?";
        $this->db->query($sql,array($id));

    }
}