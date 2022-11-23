<?php

class Register extends Controller
{
    public function index()
    {

        $this->view('register/index');
        
    }

    public function tambah()
    {
        if ($this->model('Register_model')->tambah($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: '.BASEURL.'Log');
            exit;
        }
    }
}
