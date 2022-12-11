<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guest extends CI_Controller {

	function _remap($param) {
		$this->index($param);
	}

	function index($param){
		$data['title'] = "CIMB Niaga SAT 2022";
		$data['style'] = $this->load->view('include/style.php', NULL, TRUE);
		$data['script'] = $this->load->view('include/script.php', NULL, TRUE);

		$data['tamu'] = $param;
		$data['title'] = "Absensi QR";

		$this->load->view('guest', $data);
	}
}
