<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Indira Septianita Larasati',
        ];
        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About Me! | Indira Septianita Larasati',
        ];
        return view('pages/about', $data);
    }
    //--------------------------------------------------------------------

}
