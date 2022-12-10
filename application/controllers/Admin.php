<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('Ciqrcode');
	}
	public function index(){
		$data['title'] = "Absensi QR";
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
