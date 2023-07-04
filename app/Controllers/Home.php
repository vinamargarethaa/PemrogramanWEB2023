<?php 
namespace App\Controllers;
use CodeIgniter\Controller;

class Home extends BaseController
{
	public function index()
	{
		echo view('header_view');
        echo view('welcome_message');
        echo view('footer_view');
	}

	//--------------------------------------------------------------------

}
