<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_c extends CI_Controller {
	 public function __construct()
    {
        parent::__construct();
        $this->load->library('pagination');
        $this->load->library('session');
        $this->load->library('encrypt');
        $this->load->model('frontend/homepage_m');
        $this->load->helper(array('form', 'url'));
        date_default_timezone_set("Asia/Bangkok");
    }

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->homepage();
	}
	public function homepage(){
		if($this->session->userdata("language")==1){
		$sessionid = 1;
		$data['title'] = "Home";
		$data['active'] = "Home";
		$lan = $this->session->userdata("language");
		$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
		$data['get_slider'] = $this->homepage_m->get_homepage_slider($sessionid);
		$this->load->view('frontend/homepage',$data);
	}
	/* if($this->session->userdata("language")==2){
		$sessionid = 1;
		$data['title'] = "ទំព័រដើម";
		$data['active'] = "Home";
		$lan = $this->session->userdata("language");
		$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
		$data['get_slider'] = $this->homepage_m->get_homepage_slider($sessionid);
		$this->load->view('frontend/homepage _kh_v',$data);
	}
	*/
	
	if($this->session->userdata("language")==3){
		//$sessionid = 1;
		$data['title'] = "Home";
		$data['active'] = "Home";
		$lan = $this->session->userdata("language");
		$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
		//$data['get_slider'] = $this->homepage_m->get_homepage_slider($sessionid);
		$this->load->view('frontend/homepage_ch_v',$data);
	}

	if($this->session->userdata("language")== ""){
		$sessionid = 1;
		$data['title'] = "Home";
		$data['active'] = "Home";
		$lan = 1;
		$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
		
		$data['get_slider'] = $this->homepage_m->get_homepage_slider($sessionid);
		$this->load->view('frontend/homepage',$data);
	}

	

}
}
