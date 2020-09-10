<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | My Website',
        ];
        echo view('components/header', $data);
        echo view('pages/home');
        echo view('components/footer');
    }

    public function about()
    {
        $data = [
            'title' => 'About | My Website'
        ];
        echo view('components/header', $data);
        echo view('pages/about');
        echo view('components/footer');
    }

    //--------------------------------------------------------------------

}
