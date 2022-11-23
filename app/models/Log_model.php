<?php

class Log_model
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getUser($username, $password)
    {
        $this->db->query("SELECT * from user WHERE nama_pengguna = :nama_pengguna and password = :password");
        $this->db->bind('nama_pengguna', $username);
        $this->db->bind('password', $password);

        return $this->db->resultSet();
    }
}
