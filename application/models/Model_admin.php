<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_admin extends CI_model {

	function __construct()
		{
			parent::__construct();
		}

	function insertregister($data)
		{
			$this->db->insert('admin',$data);
		}

    function cek_login($table,$where){
		    return $this->db->get_where($table,$where);
	 }

}
