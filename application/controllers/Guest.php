<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guest extends CI_Controller {

	function _remap($param) {
		$this->index($param);
	}

	function index($param){

		$data['tamu'] = $param;
		$data['title'] = "Absensi QR";

		$this->load->view('guest' , $data);
	}

}
