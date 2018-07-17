<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

  public function __construct()
	{
		parent:: __construct();
		$this->load->model('model_dev');
		$this->load->model('model_admin');
      	$this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->library('session');
	}

	public function index()
	{
    $this->load->view('register/user');
	}

  public function admin()
	{
    $this->load->view('register/admin');
	}

  public function daftar(){

  $this->form_validation->set_rules('nim','nim','required');
  $this->form_validation->set_rules('nama','nama','required');
  $this->form_validation->set_rules('notlp','notlp','required');
  $this->form_validation->set_rules('email','email','required');

  $file_tmp = $_FILES['foto']['tmp_name'];
  $file_type = $_FILES['foto']['type'];
  $file_error = $_FILES['foto']['error'];
  $file_size = $_FILES['foto']['size'];
  $file_path = "assets/img/Profile/".$_POST['nim'].".jpg";

  if ($file_type == "image/jpeg") {
    if ($file_size > 0 AND $file_error == 0) {
      move_uploaded_file($file_tmp, "assets/img/Profile/".$_POST['nim'].".jpg");
    }
  }

  if($this->form_validation->run() != false){
  $data = array
  (
    'id_dev'		=> $this->input->post('id_dev'),
    'nim'		=> $this->input->post('nim'),
    'nama'		=> $this->input->post('nama'),
    'notlp'	=> $this->input->post('notlp'),
    'email'		=> $this->input->post('email'),
    'password'	=> md5($this->input->post('password')),
    'foto' => $file_path,
    'type' => $file_type
  );

  $this->model_dev->insertregister($data);
    ?>
    <script>
    alert('Registrasi Berhasil');
    window.location="<?php echo base_url(); ?>login";
    </script>
    <?php


  }else{

      ?>
      <script>
      alert('Registrasi gagal, Mohon isi dengan benar');
      window.location="<?php echo base_url(); ?>Daftarsipp";
      </script>
      <?php

  }
}

public function daftaradmin(){

		$data = array(
			'id_admin'		=> $this->input->post('id_admin'),
			'nip'		=> $this->input->post('nip'),
			'nama'		=> $this->input->post('nama'),
			'password'	=> md5($this->input->post('password')),
		);

		$this->model_admin->insertregister($data);
		redirect('login/admin');
	}
}
