<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Done extends CI_Controller {

	function _remap($param) {
		$this->index($param);
	}

	function index($param){
        $data['title'] = "CIMB Niaga SAT 2022";
		$data['style'] = $this->load->view('include/style.php', NULL, TRUE);
		$data['script'] = $this->load->view('include/script.php', NULL, TRUE);
		$this->load->view('done', $data);
	}
}