<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Our_services_c extends CI_Controller {
	 public $lang="", $get_lang ="";
	 public function __construct()
    {
        parent::__construct();
        $this->load->model('frontend/homepage_m');
		$this->load->model('frontend/our_services_m');
    }

	
	public function index()
	{
		//$this->our_services();
	}

	public function our_services(){
		if($this->lang==1){
		$data['title'] = "Our Services";
		$data['active'] = "Our Services";
		$lan = $this->lang;
		$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
		$this->load->view('frontend/our_services_v',$data);
		}
		if($this->lang==2){
		$data['title'] = "អាជីវកម្ម";
		$data['active'] = "Our Services";
		$lan = $this->lang;
		$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
		$this->load->view('frontend/our_services_kh_v',$data);
		}
		if($this->lang==3){
		$data['title'] = "Our Services";
		$data['active'] = "Our Services";
		$lan = $this->lang;
		$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
		$this->load->view('frontend/our_services_ch_v',$data);
		}

		if($this->lang== ""){
		$data['title'] = "Our Services";
		$data['active'] = "Our Services";
		$lan = 1;
		$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
		$this->load->view('frontend/our_services_v',$data);
		}
	}

	public function enterprise_solutions(){
		if($this->lang ==1){
		$data['title'] = "Enterprise Solutions";
		$data['active'] = "Our Services";
		$lan = $this->lang;
		$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
		$this->load->view('frontend/enterprise_solutions_v',$data);
	}
	if($this->lang==2){
		$data['title'] = "Enterprise Solutions";
		$data['active'] = "Our Services";
		$lan = $this->lang;
		$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
		$this->load->view('frontend/enterprise_solutions_kh_v',$data);
		}
	if($this->lang==3){
		$data['title'] = "Enterprise Solutions";
		$data['active'] = "Our Services";
		$lan = $this->lang;
		$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
		$this->load->view('frontend/enterprise_solutions_ch_v',$data);
		}
	if($this->lang == ""){
		$data['title'] = "Enterprise Solutions";
		$data['active'] = "Our Services";
		$lan = 1;
		$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
		$this->load->view('frontend/enterprise_solutions_v',$data);
	}

}

	public function beedoo_could_service_by_ezecom(){
		$data['title'] = "BeeDoo Could Service by Ezecom_ Don't just back up move forward!";
		$lan = 1;
		$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
		$this->load->view('frontend/beedoo_could_service_by_ezecom_v',$data);
	}
	
	public function iplc(){
		if($this->session->userdata("language")==1){
			$data['title'] = "IPLC";
			$data['active'] = "IPLC";
			$lan = $this->session->userdata("language");
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/iplc',$data);
		}
	/* 	if($this->lang==2){
			$data['title'] = "IPLC";
			$data['active'] = "IPLC";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/iplc_kh_v',$data);
		}
		if($this->lang==3){
			$data['title'] = "IPLC";
			$data['active'] = "Our Services";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/iplc_ch_v',$data);
		} */
		if($this->session->userdata("language")==""){
			$data['title'] = "IPLC";
			$data['active'] = "IPLC";
			$lan = 1;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/iplc',$data);
		}

	}
	
	public function dplc(){
		if($this->session->userdata("language")==1){
			$data['title'] = "DPLC";
			$data['active'] = "DPLC";
			$lan = $this->session->userdata("language");
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/dplc',$data);
		}
		/* if($this->lang==2){
			$data['title'] = "DPLC";
			$data['active'] = "DPLC";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/dplc_kh_v',$data);
		}
		if($this->lang==3){
			$data['title'] = "DPLC";
			$data['active'] = "DPLC";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/dplc_ch_v',$data);
		} */
		if($this->session->userdata("language")==""){
			$data['title'] = "DPLC";
			$data['active'] = "DPLC";
			$lan = 1;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/dplc',$data);
		}
	}
	
	public function mpls(){
		if($this->session->userdata("language")==1){
			$data['title'] = "MPLS";
			$data['active'] = "MPLS";
			$lan = $this->session->userdata("language");
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/mpls',$data);
		}
		/* if($this->lang==2){
			$data['title'] = "MPLS";
			$data['active'] = "MPLS";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/mpls_kh_v',$data);
		}
		if($this->lang==3){
			$data['title'] = "MPLS";
			$data['active'] = "MPLS";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/mpls_ch_v',$data);
		} */
		if($this->session->userdata("language")==""){
			$data['title'] = "MPLS";
			$data['active'] = "MPLS";
			$lan = 1;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/mpls',$data);
		}
	}
	
	public function vpls(){
		if($this->session->userdata("language")==1){
			$data['title'] = "VPLS";
			$data['active'] = "VPLS";
			$lan = $this->session->userdata("language");
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/vpls',$data);
		}
		/* if($this->lang==2){
			$data['title'] = "VPLS";
			$data['active'] = "VPLS";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/vpls_kh_v',$data);
		}
		if($this->lang==3){
			$data['title'] = "VPLS";
			$data['active'] = "VPLS";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/vpls_ch_v',$data);
		} */
		if($this->session->userdata("language")==""){
			$data['title'] = "VPLS";
			$data['active'] = "VPLS";
			$lan = 1;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/vpls',$data);
		}
	}
	
	public function Office_365(){
		$data['title'] = "Office 365";
		$data['active']= "Office 365";
		$lan = 1;
        $data['feature_content'] = $this->homepage_m->get_feature_content($lan);
		$this->load->view('frontend/ms_365',$data);
	}
	
	public function dedicate(){
		if($this->session->userdata("language")==1){
			$data['title'] = "Dedicated Internet Access";
			$data['active'] = "Dedicated Internet Access";
			$lan = $this->session->userdata("language");
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/dedicate',$data);
		}
		/* if($this->lang==2){
			$data['title'] = "Dedicated Internet Access";
			$data['active'] = "Dedicated Internet Access";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/dedicate_kh_v',$data);
		}
		if($this->lang==3){
			$data['title'] = "Dedicated Internet Access";
			$data['active'] = "Dedicated Internet Access";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/dedicate_ch_v',$data);
		} */
		if($this->session->userdata("language")==""){
			$data['title'] = "Dedicated Internet Access";
			$data['active'] = "Dedicated Internet Access";
			$lan = 1;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/dedicate',$data);
		}
	}
	
	public function ezebiz(){
		if($this->lang ==1){
			$data['title'] = "EzeBiz";
			$data['active'] = "EzeBiz";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/ezebiz',$data);
		}
		if($this->lang==2){
			$data['title'] = "EzeBiz";
			$data['active'] = "EzeBiz";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/ezebiz_kh_v',$data);
		}
		if($this->lang==3){
			$data['title'] = "EzeBiz";
			$data['active'] = "EzeBiz";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/ezebiz_ch_v',$data);
		}
		if($this->lang == ""){
			$data['title'] = "EzeBiz";
			$data['active'] = "EzeBiz";
			$lan = 1;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/ezebiz',$data);
		}
	}
	
	public function ezesurf(){
		if($this->session->userdata("language")==1){
			$data['title'] = "EzeSurf";
			$data['active'] = "EzeSurf";
			$lan = $this->session->userdata("language");
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/ezesurf',$data);
		}
		/* if($this->lang==2){
			$data['title'] = "EzeSurf";
			$data['active'] = "EzeSurf";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/ezesurf_kh_v',$data);
		}
		if($this->lang==3){
			$data['title'] = "EzeSurf";
			$data['active'] = "EzeSurf";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/ezesurf_ch_v',$data);
		} */
		if($this->session->userdata("language")==""){
			$data['title'] = "EzeSurf";
			$data['active'] = "EzeSurf";
			$lan = 1;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/ezesurf',$data);
		}
	}
	
	
	public function amazon_web_service(){
		if($this->session->userdata("language")==1){
			$data['title'] = "Amazon Web Service";
			$data['active'] = "Amazon Web Service";
			$lan = $this->session->userdata("language");
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/amazon_webservice',$data);
		}
		/* if($this->lang==2){
			$data['title'] = "Amazon Web Service";
			$data['active'] = "Amazon Web Service";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/amazon_webservice_kh_v',$data);
		}
		if($this->lang==3){
			$data['title'] = "Amazon Web Service";
			$data['active'] = "Amazon Web Service";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/amazon_webservice_ch_v',$data);
		} */
		if($this->session->userdata("language")==""){
			$data['title'] = "Amazon Web Service";
			$data['active'] = "Amazon Web Service";
			$lan = 1;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/amazon_webservice',$data);
		}
	}
	
	public function colocation(){
		if($this->session->userdata("language")==1){
			$data['title'] = "Colocation";
			$data['active'] = "Colocation";
			$lan = $this->session->userdata("language");
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/colocation',$data);
		}
		/* if($this->lang==2){
			$data['title'] = "Colocation";
			$data['active'] = "Colocation";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/colocation_kh_v',$data);
		}
		if($this->lang==3){
			$data['title'] = "Colocation";
			$data['active'] = "Colocation";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/colocation_ch_v',$data);
		} */
		if($this->session->userdata("language")==""){
			$data['title'] = "Colocation";
			$data['active'] = "Colocation";
			$lan = 1;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/colocation',$data);
		}
		
	}
	
	public function drc(){
		if($this->session->userdata("language")==1){
			$data['title'] = "DRC";
			$data['active'] = "DRC";
			$lan = $this->session->userdata("language");
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/drc',$data);
		}
		/* if($this->lang==2){
			$data['title'] = "DRC";
			$data['active'] = "DRC";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/drc_kh_v',$data);
		}
		if($this->lang==3){
			$data['title'] = "DRC";
			$data['active'] = "DRC";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/drc_ch_v',$data);
		} */
		if($this->session->userdata("language")==""){
			$data['title'] = "DRC";
			$data['active'] = "DRC";
			$lan = 1;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/drc',$data);
		}
		
	}
	
	public function web_hosting(){
		if($this->session->userdata("language")==1){
			$data['title'] = "Web Hosting";
			$data['active'] = "Web Hosting";
			$lan = $this->session->userdata("language");
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/web_hosting',$data);
		}
	/* 	if($this->lang==2){
			$data['title'] = "Web Hosting";
			$data['active'] = "Web Hosting";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/web_hosting_kh_v',$data);
		}
		if($this->lang==3){
			$data['title'] = "Web Hosting";
			$data['active'] = "Web Hosting";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/web_hosting_ch_v',$data);
		} */
		if($this->session->userdata("language")==""){
			$data['title'] = "Web Hosting";
			$data['active'] = "Web Hosting";
			$lan = 1;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/web_hosting',$data);
		}
	}
	
	public function vpbx(){
		if($this->session->userdata("language")==1){
			$data['title'] = "VPBX";
			$data['active'] = "VPBX";
			$lan = $this->session->userdata("language");
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/vpbx',$data);
		}
		/* if($this->lang==2){
			$data['title'] = "VPBX";
			$data['active'] = "VPBX";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/vpbx_kh_v',$data);
		}
		if($this->lang==3){
			$data['title'] = "VPBX";
			$data['active'] = "VPBX";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/vpbx_ch_v',$data);
		} */
		if($this->session->userdata("language")==""){
			$data['title'] = "VPBX";
			$data['active'] = "VPBX";
			$lan = 1;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/vpbx',$data);
		}
	}
	
	public function ddos(){
		if($this->session->userdata("language")==1){
			$data['title'] = "DDoS";
			$data['active'] = "DDoS";
			$lan = $this->session->userdata("language");
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/ddos',$data);
		}
		
		if($this->session->userdata("language")==""){
			$data['title'] = "DDoS";
			$data['active'] = "DDoS";
			$lan = 1;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/ddos',$data);
		}
	}
	
	public function voip(){
		if($this->session->userdata("language")==1){
			$data['title'] = "Voice over Internet Protocol (VoIP)";
			$data['active'] = "Voice over Internet Protocol (VoIP)";
			$lan = $this->session->userdata("language");
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/voip',$data);
		}
		/* if($this->lang==2){
			$data['title'] = "Voice over Internet Protocol (VoIP)";
			$data['active'] = "Voice over Internet Protocol (VoIP)";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/voip_kh_v',$data);
		}
		if($this->lang==3){
			$data['title'] = "Voice over Internet Protocol (VoIP)";
			$data['active'] = "Voice over Internet Protocol (VoIP)";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/voip_ch_v',$data);
		} */
		if($this->session->userdata("language")==""){
			$data['title'] = "Voice over Internet Protocol (VoIP)";
			$data['active'] = "Voice over Internet Protocol (VoIP)";
			$lan = 1;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/voip',$data);
		}
	}
	
	public function ezetv(){
		if($this->session->userdata("language")==1){
			$data['title'] = "EzeTV";
			$data['active'] = "EzeTV";
			$lan = $this->session->userdata("language");
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/ezetv',$data);
		}
		/* if($this->lang==2){
			$data['title'] = "EzeTV";
			$data['active'] = "EzeTV";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/ezetv_kh_v',$data);
		}
		if($this->lang==3){
			$data['title'] = "EzeTV";
			$data['active'] = "EzeTV";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/ezetv_ch_v',$data);
		} */
		if($this->session->userdata("language")==""){
			$data['title'] = "EzeTV";
			$data['active'] = "EzeTV";
			$lan = 1;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/ezetv',$data);
		}
	}
	
	public function manage_network_security(){
		if($this->session->userdata("language")==1){
			$data['title'] = "Managed Network Security";
			$data['active'] = "Managed Network Security";
			$lan = $this->session->userdata("language");
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/manage_network_security',$data);
		}
		/* if($this->lang==2){
			$data['title'] = "Managed Network Security";
			$data['active'] = "Managed Network Security";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/manage_network_security_kh_v',$data);
		}
		if($this->lang==3){
			$data['title'] = "Managed Network Security";
			$data['active'] = "Managed Network Security";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/manage_network_security_ch_v',$data);
		} */
		if($this->session->userdata("language") == ""){
			$data['title'] = "Managed Network Security";
			$data['active'] = "Managed Network Security";
			$lan = 1;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/manage_network_security',$data);
		}
	}
	
	public function web_appl_firewall(){
		if($this->session->userdata("language") ==1){
			$data['title'] = "Web Application Firewall";
			$data['active'] = "Web Application Firewall";
			$lan = $this->session->userdata("language");
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/web_appl_firewall',$data);
		}
		/* if($this->lang==2){
			$data['title'] = "Web Application Firewall";
			$data['active'] = "Web Application Firewall";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/web_appl_firewall_kh_v',$data);
		}
		if($this->lang==3){
			$data['title'] = "Web Application Firewall";
			$data['active'] = "Web Application Firewall";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/web_appl_firewall_ch_v',$data);
		} */
		if($this->session->userdata("language") == ""){
			$data['title'] = "Web Application Firewall";
			$data['active'] = "Web Application Firewall";
			$lan = 1;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/web_appl_firewall',$data);
		}
	}
	
	public function live_stream_service(){
		
		if($this->session->userdata("language") ==1){
			$data['title'] = "Live Stream Service";
			$data['active'] = "Live Stream Service";
			$lan = $this->session->userdata("language");
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/live_stream_service',$data);
		}
		
		if($this->session->userdata("language") == ""){
			$data['title'] = "Web Application Firewall";
			$data['active'] = "Web Application Firewall";
			$lan = 1;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/live_stream_service',$data);
		}
	}
	
	/* Saving Product */
	public function dedicatedSaving(){
		$name = $this->input->post("name");
		$mobile = $this->input->post("mobile");
		$signup_date = date("Y/m/d");
		$data = array(
			'cust_name'=>$name,
			'mobile'=>$mobile,
			'signup_date'=>$signup_date,
			'pro_id'=>'4'
		);
        $this->our_services_m->insert_dedicated($data);
	}
	
	public function ezebizSaving(){
		$name = $this->input->post("name");
		$mobile = $this->input->post("mobile");
		$signup_date = date("Y/m/d");
		$data = array(
			'cust_name'=>$name,
			'mobile'=>$mobile,
			'signup_date'=>$signup_date,
			'pro_id'=>'1'
		);
        $this->our_services_m->insert_ezebiz($data);
	}
	
	public function ezesurfSaving(){
		$name = $this->input->post("name");
		$mobile = $this->input->post("mobile");
		$signup_date = date("Y/m/d");
		$data = array(
			'cust_name'=>$name,
			'mobile'=>$mobile,
			'signup_date'=>$signup_date,
			'pro_id'=>'5'
		);
        $this->our_services_m->insert_ezesurf($data);
	}
	
	public function iplcSaving(){
		$name = $this->input->post("name");
		$mobile = $this->input->post("mobile");
		$signup_date = date("Y/m/d");
		$data = array(
			'cust_name'=>$name,
			'mobile'=>$mobile,
			'signup_date'=>$signup_date,
			'pro_id'=>'6'
		);
        $this->our_services_m->insert_iplc($data);
	}
	
	public function dplcSaving(){
		$name = $this->input->post("name");
		$mobile = $this->input->post("mobile");
		$signup_date = date("Y/m/d");
		$data = array(
			'cust_name'=>$name,
			'mobile'=>$mobile,
			'signup_date'=>$signup_date,
			'pro_id'=>'7'
		);
        $this->our_services_m->insert_dplc($data);
	}
	
	public function mplsSaving(){
		$name = $this->input->post("name");
		$mobile = $this->input->post("mobile");
		$signup_date = date("Y/m/d");
		$data = array(
			'cust_name'=>$name,
			'mobile'=>$mobile,
			'signup_date'=>$signup_date,
			'pro_id'=>'8'
		);
        $this->our_services_m->insert_mpls($data);
	}
	
	public function vplsSaving(){
		$name = $this->input->post("name");
		$mobile = $this->input->post("mobile");
		$signup_date = date("Y/m/d");
		$data = array(
			'cust_name'=>$name,
			'mobile'=>$mobile,
			'signup_date'=>$signup_date,
			'pro_id'=>'9'
		);
        $this->our_services_m->insert_vpls($data);
	}
	
	public function ms365Saving(){
		$name = $this->input->post("name");
		$mobile = $this->input->post("mobile");
		$signup_date = date("Y/m/d");
		$data = array(
			'cust_name'=>$name,
			'mobile'=>$mobile,
			'signup_date'=>$signup_date,
			'pro_id'=>'2'
		);
        $this->our_services_m->insert_ms365($data);
	}
	
	public function colocationSaving(){
		$name = $this->input->post("name");
		$mobile = $this->input->post("mobile");
		$signup_date = date("Y/m/d");
		$data = array(
			'cust_name'=>$name,
			'mobile'=>$mobile,
			'signup_date'=>$signup_date,
			'pro_id'=>'2'
		);
        $this->our_services_m->insert_colocation($data);
	}
	
	public function web_hostingSaving(){
		$name = $this->input->post("name");
		$mobile = $this->input->post("mobile");
		$signup_date = date("Y/m/d");
		$data = array(
			'cust_name'=>$name,
			'mobile'=>$mobile,
			'signup_date'=>$signup_date,
			'pro_id'=>'2'
		);
        $this->our_services_m->insert_web_hosting($data);
	}
	
	public function ddosSaving(){
		$name = $this->input->post("name");
		$mobile = $this->input->post("mobile");
		$signup_date = date("Y/m/d");
		$data = array(
			'cust_name'=>$name,
			'mobile'=>$mobile,
			'signup_date'=>$signup_date,
			'pro_id'=>'3'
		);
        $this->our_services_m->insert_ddos($data);
	}
	
	
}