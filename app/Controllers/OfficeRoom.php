<?php

namespace App\Controllers;

class OfficeRoom extends BaseController
{
	public function index()
	{
		echo view('office/templete/header',['page_title'=> 'Rooms']);
		echo view('office/room');
		echo view('office/templete/footer');
	}
}