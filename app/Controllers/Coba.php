<?php

namespace App\Controllers;

class Coba extends BaseController
{
	public function index()
	{
		echo 'Ini controller Coba method Index';
	}

	public function about($nama = '')
	{
		echo "Halo, nama saya $nama.";
	}
	//--------------------------------------------------------------------

}
