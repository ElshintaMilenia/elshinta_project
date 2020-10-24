<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}

	//--------------------------------------------------------------------

	public function show(){
		$data['nama'] = 'Elshinta Milenia';
		$data['NPM'] = '1857051012';
		echo view('Mahasiswa/header');
		echo view('Mahasiswa/index', $data);
		echo view('Mahasiswa/footer');
	}
}
