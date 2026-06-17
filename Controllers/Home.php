<?php 
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\ilhasmodel;

class Home extends Controller
{
	public function index()
	{
		//return view('welcome_message');
		$model = new ilhasmodel();
		$data['ilhas'] = $model->getilhas();
		echo view('templates/Header');
		echo view('pages/Home',$data);
		echo view('templates/Footer');
	}

	//--------------------------------------------------------------------

}
