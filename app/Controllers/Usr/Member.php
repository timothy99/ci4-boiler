<?php

namespace App\Controllers\Usr;

use App\Controllers\BaseController;

class Member extends BaseController
{
    public function index()
    {
        header("Location: /member/myinfo");
        exit;
    }

    public function myinfo()
    {
        return uview("/usr/member/myinfo");
    }

    public function login()
    {
        return uview("/usr/member/login");
    }

    public function join()
    {
        return uview("/usr/member/join");
    }

}
