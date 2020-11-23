<?php namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        echo view('admin/header');
        echo view('admin/index');
        echo view('admin/footer');
    }
}
