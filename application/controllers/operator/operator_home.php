<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Operator_home extends CI_Controller {

	public function index()
	{
		$this->load->view('operator/index');
	}
}
