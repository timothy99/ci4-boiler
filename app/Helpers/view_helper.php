<?php

// 관리자 (admin - a)
function aview($name, $data = array())
{
    $session = getUserSession();
    $data["session"] = $session;

    $header = view("csl/include/header", $data);
    $menu = view("csl/include/menu", $data);
    $view = view($name, $data);
    $footer = view("csl/include/footer", $data);

    $html = $header.$menu.$view.$footer;

    return $html;
}

// 사용자 (user - u)
function uview($name, $data = array())
{
    $session = getUserSession();

    $request = \Config\Services::request();
    $uri = $request->getUri()->getPath();

    $data["session"] = $session;
    $data["uri"] = $uri;

    $header_file = "usr/include/header";
    if ($uri == "home/home") { // 홈화면인경우 불러올 스크립트가 바뀜
        $header_file = "usr/include/header_index";
    } else {
        $header_file = "usr/include/header";
    }

    $header = view($header_file, $data);
    $menu = view("usr/include/menu", $data);
    $view = view($name, $data);
    $footer = view("usr/include/footer", $data);

    $html = $header.$menu.$view.$footer;

    return $html;
}