<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Done extends CI_Controller {

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
		$this->guest_model->absen($param);
		$this->load->view('done', $data);
	}
}