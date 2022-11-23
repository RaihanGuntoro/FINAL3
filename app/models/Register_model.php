<?php

class Register_model
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function tambah($data)
    {
        if ($data['password'] === $data['passwordConfirm']) {
            $query = "INSERT INTO user VALUES ('', :nama, :nama_pengguna, :email, :password)";
    
            $this->db->query($query);
            $this->db->bind('nama', $data['nama']);
            $this->db->bind('nama_pengguna', $data['nama_pengguna']);
            $this->db->bind('email', $data['email']);
            $this->db->bind('password', $data['password']);
    
            $this->db->execute();
        }

        else {
            header("Location:" . BASEURL. "register");
        }

        return $this->db->rowCount();
    }
}
