<?php

class jenis_produk_model extends CI_Model
{
    private $table = "jenis_produk";

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
        $sql = "INSERT INTO jenis_produk 
        (id,nama)
        VALUES (?,?)";
        $this->db->query($sql, $data);
    }

    public function update($data){
        $sql = "UPDATE jenis_produk SET id=?,nama=? WHERE id=?";
        $this->db->query($sql, $data);
    }

    public function delete($id){
        $sql = "DELETE from jenis_produk WHERE id=?";
        $this->db->query($sql,array($id));
    }
}