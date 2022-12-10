<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guest extends CI_Controller {


	public function index(){
		if ($this->uri->segment(1) === FALSE)
		{
			show_404();
		}
		else
		{
			$data['tamu'] = $this->uri->segment(2);
		}
		$data['title'] = "Absensi QR";

		$this->load->view('guest' , $data);
	}

}
