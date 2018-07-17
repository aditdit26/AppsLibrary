<?php
class Login extends CI_Controller
{
	//----------------------------------------------------------------//
	//------------------------LOGIN USER SUPER------------------------//
	//----------------------------------------------------------------//
	function __construct(){
		parent::__construct();
		$this->load->model('Model_dev');
		$this->load->model('Model_admin');
		if($this->session->userdata('status')=="login"){
			?>
			<script>
			window.location="<?php echo base_url(); ?>user";
			</script>
			<?php
		}
	}

	function index()
	{
		// $data['title'] = "Dashboard";
		$this->load->view('loginuser');
	}

	function login()
	{
		$n = $this->input->post('nim');
		$p = $this->input->post('password');

		$where = array(
			'nim'=>$n,
			'password'=>($p),
		);
		$cek = $this->Model_dev->cek_login("developer",$where)->num_rows();
		if($cek > 0 ){
			$cek= $this->Model_dev->cek_login("developer",$where)->row_array();
			$sesi = array(
				'status'=>"login"
				);
			$this->session->set_userdata($sesi);
			$this->session->set_userdata('nim',$cek['nim']);
			// $this->session->set_userdata('nama_inst',$cek['nama_inst']);
			$this->session->set_userdata('nama',$cek['nama']);
			// $this->session->set_userdata('almt_inst',$cek['almt_inst']);
			redirect ('user');

		}else{
			?>
			<script>
			alert('nim/Password Salah!');
			window.location="<?php echo base_url(); ?>login";
			</script>
			<?php

			//echo "gagal";
		}
	}

  function admin()
	{
		// $data['title'] = "Dashboard";
		$this->load->view('loginadmin');
	}

	function logout()
	{
		$this->session->sess_destroy();
		?>
		<script>
			window.location="<?php echo base_url(); ?>login";
		</script>
		<?php
	}

}
