<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
		$this->load->view('my_profile_page/main');
	}

    public function submit_message(){

    }
}
