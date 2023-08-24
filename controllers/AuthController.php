<?php

namespace app\Controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;
class AuthController extends Controller
{
    public function login()
    {
        $this->setLayout('auth');

        return $this->render('login');
    }
    public function register(Request $request)
    {
        if ($request->isPost()){
            return  'handing submitted data';
        }

        $this->setLayout('auth');
        return $this->render('signup');
    }

}