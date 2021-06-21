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
		$data['title'] = ucfirst("hello");
		echo view('home',$data);
	}
	
	public function  getStudent($id){
		echo "hello world ".$id;
	}
	public function info(){
		$data['title'] = ucfirst("hello");
		return view('info');
	}
	
}
