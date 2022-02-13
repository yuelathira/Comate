<?php

namespace App\Controllers;

use App\Models\UserModel;

class Home extends BaseController
{
	public function index()
	{
		return view('HTML');
	}
	public function about()
	{
		$userModel = new UserModel();
		$data['user'] = $userModel->where('Username', session('username'))->first();
		return view('about', $data);
	}
	//--------------------------------------------------------------------

}
