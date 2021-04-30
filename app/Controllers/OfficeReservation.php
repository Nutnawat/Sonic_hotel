<?php

namespace App\Controllers;

class OfficeReservation extends BaseController
{
	public function index()
	{
		echo view('office/templete/header',['page_title'=> 'Reservations']);
		echo view('office/reservation');
		echo view('office/templete/footer');
	}
}