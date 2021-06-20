<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function __constructor(){
		parrent::__construct();
		$this->load->helper('url-helper');
		$this->load->model('Data');
	}
	public function index()
	{
		return view('home');
	}
	
	public function  getStudent($id){
		echo "hello world ".$id;
	}
	
}
