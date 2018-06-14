<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Thank extends CI_Controller {
	 public function __construct(){
        parent::__construct();
        $this->load->library('session');
        $this->load->library('encrypt');
        date_default_timezone_set("Asia/Bangkok");
    }

	public function index(){
		$this->thank_you();
	}
	
	public function thank_you(){
		$this->load->view('frontend/thank');
	}
}