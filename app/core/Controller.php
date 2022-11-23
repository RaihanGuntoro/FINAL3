<?php

class Controller
{

    public function view($view, $data = [])
    {
        session_start();
        if (isset($session['nama_pengguna'])){
            require_once 'app/views/' . $view . '.php';
        }else {
            require_once 'app/views/' . $view . '.php';

        }
        // $a = 0;
        // while ($a <= 3) {
        //     if (!isset($_SESSION['password'])){
        //         require_once 'app/views/register/index.php';
        //     } else if ($_SESSION['nama_pengguna']) {
        //         require_once 'app/views/login/index.php';
        //     }else {
        //         require_once 'app/views/' . $view . '.php';
        //     }
            
        //     $a += 1;
        // }
    }

    public function model($model)
    {
        require_once 'app/models/' . $model . '.php';
        return new $model;
    }
}

class Flasher
{

    public static function setFlash($pesan, $aksi, $tipe)
    {
        $_SESSION['flash'] = [
            'pesan' => $pesan,
            'aksi' => $aksi,
            'tipe' => $tipe
        ];
    }

    public static function flash()
    {
        if (isset($_SESSION['flash'])) {
            echo '<div id="alert" class="alert alert-' . $_SESSION['flash']['tipe'] . ' alert-dismissible fade show" role="alert">Data 
                    <strong>' . $_SESSION['flash']['pesan'] . '</strong> ' . $_SESSION['flash']['aksi'] . ' 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
            unset($_SESSION['flash']);
        }
    }
}
