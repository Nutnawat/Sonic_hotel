<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		echo view('templete/header');
		echo view('templete/navbar');
		echo view('index');
		echo view('templete/footer');
	}
}