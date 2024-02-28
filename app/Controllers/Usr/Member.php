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
        $data = array();
        $data["uri"] = $this->request->getUri()->getPath();
        return uview("/usr/member/join", $data);
    }

    // 회원가입
    public function signin()
    {
        $result = true;
        $message = "회원가입이 완료되었습니다.";

        $post = $this->request->getPost();

        $user_name = $post["user_name"];
        $user_id = $post["user_id"];
        $user_password = $post["user_password"];
        $user_password_confirm = $post["user_password_confirm"];
        $user_email = $post["user_email"];
        $postcode = $post["postcode"];
        $addr1 = $post["addr1"];
        $addr2 = $post["addr2"];

        if ($user_name == null) {
            $result = false;
            $message = "이름을 입력해주세요.";
        }

        if ($user_id == null) {
            $result = false;
            $message = "아이디를 입력해주세요.";
        }

        if ($user_password == null) {
            $result = false;
            $message = "암호를 입력해주세요.";
        }

        if ($user_password == $user_password_confirm) {
            $result = false;
            $message = "암호확인이 맞지 않습니다.";
        }

        if ($user_password == null) {
            $result = false;
            $message = "암호를 입력해주세요.";
        }

        if ($user_email == null) {
            $result = false;
            $message = "이메일을 입력해주세요.";
        }

        if ($postcode == null) {
            $result = false;
            $message = "우편번호를 검색해 입력해주세요.";
        }

        $proc_result = array();
        $proc_result["result"] = $result;
        $proc_result["message"] = $message;
        $proc_result["return_url"] = "/";
        
        echo json_encode($proc_result);
    }

}
