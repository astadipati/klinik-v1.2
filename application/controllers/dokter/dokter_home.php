<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokter_home extends CI_Controller {

	public function index()
	{
		$this->load->view('dokter/index');
	}
}
