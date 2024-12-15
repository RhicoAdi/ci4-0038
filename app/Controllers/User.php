<?php

namespace App\Controllers;

use App\Controllers\BaseController;
//use CodeIgniter\HTTP\ResponseInterface;

class User extends BaseController
{
    public function login()
    {
        return view('login/v_login');
    }
    
    public function home()
    {
        return view('home');
    }
    
}
