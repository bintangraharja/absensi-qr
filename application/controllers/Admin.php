<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('Ciqrcode');
		$this->load->model('guest_model');
	}
	public function index(){
		$data['title'] = "CIMB Niaga SAT 2022";
		$data['style'] = $this->load->view('include/style.php', NULL, TRUE);
		$data['script'] = $this->load->view('include/script.php', NULL, TRUE);
		$data['guests'] = $this->guest_model->get_guests();
		$this->load->view('admin' , $data);
	}
	public function QRcode($kodenya){
		//render qr
		QRcode::png(
			$kodenya,
			$outfile = false,
			$level = QR_ECLEVEL_H,
			$size = 5,
			$margin = 2
		);
	}
}
