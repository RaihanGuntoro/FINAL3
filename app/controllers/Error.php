<?php

class notfound extends Controller
{
    public function index()
    {
        $data['title'] = 'notFound';
        $this->view('templates/header');
        $this->view('error/index');
    }
    
    
}
