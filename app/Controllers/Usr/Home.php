<?php

namespace App\Controllers\Usr;

use App\Controllers\BaseController;

class Home extends BaseController
{
    public function index()
    {
        header("Location: /home/home");
        exit;
    }

    public function home()
    {
        return uview("/usr/home/home");
    }

}
