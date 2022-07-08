<?php

class users_model extends CI_Model
{
    private $table = "users";

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
        $sql = "INSERT INTO users 
        (id,username,password,email,created_at,last_login,status,role)
        VALUES (?,?,?,?,?,?)";
        $this->db->query($sql, $data);
    }

    public function update($data){
        $sql = "UPDATE users SET id=?,username=?,password=?,email=?,created_at=?,last_login=?,status=?,role=?  WHERE id=?";
        $this->db->query($sql, $data);
    }

    public function delete($id){
        $sql = "DELETE from users WHERE id=?";
        $this->db->query($sql,array($id));

    }
    public function login($uname, $pass)
    {
        $sql = "SELECT * FROM users WHERE username=?
        and password=md5(?)";
        $data = [$uname, $pass];
        $query = $this->db->query($sql, $data);
        return $query->row();
    }
    public function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }
}