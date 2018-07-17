<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apps extends CI_Controller {

	public function index()
	{
		$this->load->view('index');
	}

	public function a1()
	{
		$this->load->view('detail/pubg-mobile0c4c.php');
	}

	// public function register()
	// {
	// 	$this->load->view('register/user');
	// }
	//
	// public function login()
	// {
	// 	$this->load->view('loginuser');
	// }
}
