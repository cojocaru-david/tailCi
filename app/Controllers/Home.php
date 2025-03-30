<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $this->view_data['title'] = 'Home';
        return view('Pages/index', $this->view_data);
    }
}
