<?php

namespace App\Controllers\Usr;

use App\Controllers\BaseController;

class Member extends BaseController
{
    // 인덱스. 내 정보 보기로 보내기
    public function index()
    {
        header("Location: /member/myinfo");
        exit;
    }

    // 내 정보
    public function myinfo()
    {
        return uview("/usr/member/myinfo");
    }

    // 로그인
    public function login()
    {
        return uview("/usr/member/login");
    }

    // 회원가입
    public function join()
    {
        return uview("/usr/member/join");
    }

}
