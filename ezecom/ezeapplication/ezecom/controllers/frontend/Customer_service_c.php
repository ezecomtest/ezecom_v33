<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_service_c extends CI_Controller {
	 public function __construct()
    {
        parent::__construct();
        $this->load->model('frontend/homepage_m');
    }
	
	public function service_faq(){
		if($this->session->userdata("language")==1){
			$data['title'] = "FAQ'S";
			$data['active'] = "FAQ'S";
			$lan = $this->session->userdata("language");
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/faq_v',$data);
		}
		
		/* if($this->lang==2){
			$data['title'] = "FAQ'S";
			$data['active'] = "FAQ'S";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/faq_kh_v',$data);
			}
		*/
		
		if($this->session->userdata("language")==3){
			$data['title'] = "FAQ'S";
			$data['active'] = "FAQ'S";
			$lan = $this->session->userdata("language");
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/faq_ch_v',$data);
		}
		
		if($this->session->userdata("language")==""){
			$data['title'] = " FAQ'S ";
			$data['active'] = "FAQ'S";
			$lan = 1;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/faq_v',$data);
		}
	}
	
	public function service_payment_options(){
		if($this->session->userdata("language")==1){
			$data['title'] = "Payment Options";
			$data['active'] = "Payment Options";
			$lan = $this->session->userdata("language");
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/payment_option_v',$data);
		}
	/* 	if($this->lang==2){
			$data['title'] = "Payment Options";
			$data['active'] = "Payment Options";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/payment_option_kh_v',$data);
			}
		*/
		if($this->session->userdata("language")==3){
			$data['title'] = "Payment Options";
			$data['active'] = "Payment Options";
			$lan = 3;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/payment_option_ch_v',$data);
		}
		
		if($this->session->userdata("language")==""){
			$data['title'] = "Payment Options";
			$data['active'] = "Payment Options";
			$lan = 1;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/payment_option_v',$data);
		}
	}
	
	public function customer_services(){
		
		if($this->session->userdata("language")==1){
			$data['title'] = "Customer Services";
			$data['active'] = "Customer Service";
			$lan = $this->session->userdata("language");
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/customer_service_v',$data);
		}
		
		/* if($this->session->userdata("language")==2){
			$data['title'] = "សេវាអតិថិជន";
			$data['active'] = "Customer Service";
			$lan = $this->session->userdata("language");
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/customer_service_kh_v ',$data);
		}
		*/
		
		if($this->session->userdata("language")==3){
			$data['title'] = "Customer Services";
			$data['active'] = "Customer Service";
			$lan = $this->session->userdata("language");
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/customer_service_ch_v',$data);
		}
		
		if($this->session->userdata("language")==""){
			$data['title'] = "Customer Services";
			$data['active'] = "Customer Service";
			$lan = 1;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/customer_service_v',$data);
		}
		
	}
}
