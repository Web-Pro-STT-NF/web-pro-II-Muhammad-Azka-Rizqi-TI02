<?php

class view_model extends CI_Model
{
    private $table = "produk";

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
        $sql = "INSERT INTO produk 
        (id,kode,nama,stok,harga_beli,harga_jual,foto,jenis_id,deskripsi)
        VALUES (?,?,?,?,?,?,?,?,?)";
        $this->db->query($sql, $data);

    }

    public function update($data){
        $sql = "UPDATE produk SET id=?,kode=?,nama=?,stok=?,harga_beli=?,harga_jual=?,foto=?,jenis_id=?,deskripsi=? WHERE id=?";
        $this->db->query($sql, $data);

    }

    public function delete($id){
        $sql = "DELETE from produk WHERE id=?";
        $this->db->query($sql,array($id));
    }
    public function upload_foto($array)
    {
        $sql = "UPDATE produk SET foto=? WHERE id=?";
        $this->db->query($sql, $array);
    }
}