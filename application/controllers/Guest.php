<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guest extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('guest_model');
	}
	function _remap($param) {
		$this->index($param);
	}

	function index($param){
		$data['title'] = "CIMB Niaga SAT 2022";
		$data['style'] = $this->load->view('include/style.php', NULL, TRUE);
		$data['script'] = $this->load->view('include/script.php', NULL, TRUE);

		$data['guest'] = $this->guest_model->get_guest($param);

		$data['title'] = "Absensi QR";

		$this->load->view('guest', $data);
	}
}
