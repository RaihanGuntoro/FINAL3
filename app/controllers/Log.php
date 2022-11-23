<?php

class Log extends Controller
{
    public function index()
    {
       // $data['title'] = 'Login';

        $this->view('login/index');
        
    }

    public function login()
    {
        $username = $_POST['nama_pengguna'];
        $password = $_POST['password'];

        $data['login'] = $this->model('Log_model')->getUser($username, $password);
        

        session_start();
        if ($data['login'] == NULL) {
            header("Location:" . BASEURL. "Log");
        } else {
            foreach ($data['login'] as $row) :
                $_SESSION['username'] = $row['username'];
                header("Location:" . BASEURL);
            endforeach;
        }
        
    }
    
}
