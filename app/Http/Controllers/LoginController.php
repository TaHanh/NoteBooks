<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function getLogin()
    {
        $kq = "";
        $username = "";
        $password = "";
        if (isset($_COOKIE['username']) && isset($_COOKIE['password'])) {
            $username = $_COOKIE['username'];
            $password = $_COOKIE['password'];
            // header('Location: http://www.vforum.vn/');
            return view('index');    
        }
        return view('login', [
            'kq' => $kq,
            'username' => $username,
            'password' => $password
        ]);
    }
    public function postLogin()
    {
        if (isset($_POST['username']) && isset($_POST['password'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            if ($username !== '123456') {
                $kq = 'Sai tên tài khoản';
            } else {
                if ($password !== '123456') {
                    $kq = 'Sai mật khẩu';
                } else {
                    if (!isset($_COOKIE['username'])) {
                        setcookie('username', $username);
                        setcookie('password', $password);
                    }
                    return view('index');
                }
            }
        } else {
            $this->getLogin();
            return view('login', [
            'kq' => $kq,
            'username' => $username,
            'password' => $password
            ]);
        }
    }
}
