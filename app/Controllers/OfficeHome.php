<?php

namespace App\Controllers;

class OfficeHome extends BaseController
{
	public function index()
	{
		echo view('office/templete/header',['page_title'=> 'Overviews']);
		echo view('office/index');
		echo view('office/templete/footer');
	}
}