<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Render extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('Ciqrcode');
	}
	public function index(){
		$data['title'] = "Absensi QR";
		$this->load->view('render' , $data);
	}
	public function QRcode($kodenya){
		//render qr
		$kode = base_url()."quiz_web/index.php/".$kodenya;
		QRcode::png(
			$kode,
			$outfile = false,
			$level = QR_ECLEVEL_H,
			$size = 5,
			$margin = 2
		);
	}
}
