<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['page'] = (object)[
            'title' => 'Bitlevo Company Limited',
            'Heading' => 'Home'
        ];
        return view('Pages/index', $data);
    }
}
