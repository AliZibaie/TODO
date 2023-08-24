<?php

namespace app\Controllers;
USE app\models\DataBase;

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
            DataBase::setDB(new DataBase());
            DataBase::getDB()->connect();
        }

        $this->setLayout('auth');
        return $this->render('signup');
    }

}