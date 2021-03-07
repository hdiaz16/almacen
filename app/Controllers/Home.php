<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function inicio_sesion()
	{
		return view('autenticacion/login');
	}
}
