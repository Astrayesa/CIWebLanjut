<?php namespace App\Controllers;

class About extends BaseController
{
    public function index()
    {
        $session = session();
        if(!$session->get('logged_in')){
            return redirect()->to('/login');
        }
        echo view('header');
        echo view('about/about');
        echo view('footer');
    }
}