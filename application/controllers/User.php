<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

		function __construct(){
			parent::__construct();
		  $this->load->model('Model_dev');
			$this->load->model('Model_admin');

			if($this->session->userdata('status')!= "login"){
				?>
				<script>
				window.location="<?php echo base_url(); ?>login";
				</script>
				<?php
			}
		}

	function index(){
			 // $nama = $this->session->userdata['nama'];
		$this->load->view('user/index');
	}

	 function myapp(){
		// $data['title'] = "sipp - User";
		$this->load->view('user/myapp');
	}
}
