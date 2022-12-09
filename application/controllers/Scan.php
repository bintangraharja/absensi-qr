<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Scan extends CI_Controller {

	
	public function index(){
		$data['title'] = "Absensi QR";
		$this->load->view('scan' , $data);
	}

}
