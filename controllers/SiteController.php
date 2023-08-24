<?php
namespace app\Controllers;
use app\core\Application;
use app\core\Controller;
use app\core\Request;

class SiteController extends  Controller
{
    public function home()
    {
        $params =  ['name'=> 'Ali', 'age'=>21];
        return $this->render('home', $params);
    }
    public function handleLogin(Request $request)
    {
        $body = $request->getBody();
        return 'handling submitted data';
    }

    public  function handleSignUp() : string
    {
        return 'handling submitted data';
    }
    public  function signUp() : string
    {
        return 'handling submitted data';
    }
    public function handleContact() : string
    {
        return 'handling submitted data';
    }
    public function contact() : string
    {
        return $this->render('contact');
    }
    public function bolbol() : string
    {
        return $this->render('bolbol');
    }
    public function pricing() : string
    {
        return $this->render('pricing');
    }
    public function _404() : string
    {
        return $this->render('_404');
    }

    public function album() : string
    {
        return $this->render('album');
    }
    public function blog() : string
    {
        return $this->render('blog');
    }
    public function checkout() : string
    {
        return $this->render('checkout');
    }
    public function FAQ() : string
    {
        return $this->render('FAQ');
    }
    public function features() : string
    {
        return $this->render('features');
    }
    public function product() : string
    {
        return $this->render('product');
    }
    public static function __callStatic(string $name, array $arguments = null)
    {
        return call_user_func($name, $arguments);
    }
    public  function __call(string $name, array $arguments = null)
    {
        return call_user_func($name, $arguments);
    }
}