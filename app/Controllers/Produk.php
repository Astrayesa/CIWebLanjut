<?php namespace App\Controllers;

use Codeigniter\Controller;
use App\Models\ProdukModel;

class Produk extends BaseController
{
	public function index()
	{
		$session = session();
        if(!$session->get('logged_in')){
            return redirect()->to('/login');
        }
        $model = new ProdukModel();
        $data['data'] = $model->getProduk();

        echo view('produk/header');
        echo view('produk/index', $data);
		echo view('produk/footer');
	}

}
