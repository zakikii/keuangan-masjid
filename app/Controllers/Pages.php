<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Masjid Baiturridwan'

        ];

        return view('pages/home', $data);
    }




    //--------------------------------------------------------------------

}
