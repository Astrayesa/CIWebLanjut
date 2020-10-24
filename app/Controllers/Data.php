<?php namespace App\Controllers;

class Data extends BaseController
{
    public function index()
    {
        echo "Controller Data";
    }

    public function show($nama)
    {
        echo $nama."<br> ini masuk";
    }
}