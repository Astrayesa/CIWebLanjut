<?php namespace App\Controllers;

class Helloworld extends BaseController
{
    public function index()
    {
        echo "Hello World!!!";
    }

    public function show($nama = "sepryan", $npm = 1028)
    {
        echo $nama."<br>".$npm;
    }
}