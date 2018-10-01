<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Our_company_c extends CI_Controller {
	 public function __construct()
    {
        parent::__construct();
        $this->load->library('pagination');
        $this->load->library('session');
        $this->load->library('encrypt');
        $this->load->model('frontend/homepage_m');
        $this->load->model('frontend/career_m');
        $this->load->helper(array('form', 'url'));
        date_default_timezone_set("Asia/Bangkok");
    }

	
	public function index(){
		$this->company_profile();
	}
	public function company_profile(){
		if($this->session->userdata("language")==1){
			$data['title'] = "Company Profile";
			$data['active'] = "Company Profile";
			$lan = $this->session->userdata("language");
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/company_profile',$data);
		}
		
		if($this->session->userdata("language")==2){
			$data['title'] = "អំពីក្រុមហ៊ុន";
			$data['active'] = "អំពីក្រុមហ៊ុន";
			$lan = $this->session->userdata("language");
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/company_profile_kh_v',$data);
		}
		
		
		if($this->session->userdata("language")==3){
			$data['title'] = "Our Company";
			$data['active'] = "Our Company";
			$lan = $this->session->userdata("language");
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/company_profile_ch_v',$data);
		}

		if($this->session->userdata("language")== ""){
			$data['title'] = "company_profile";
			$data['active'] = "company_profile";
			$lan = 1;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/company_profile',$data);
		}
		
	}
	
	public function qms(){
		if($this->session->userdata("language")==1){
			$data['title'] = "Quality Management System";
			$data['active'] = "Quality Management System";
			$lan = $this->session->userdata("language");
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/qms',$data);
		}
		
		if($this->session->userdata("language")==2){
			$data['title'] = "ប្រព័ន្ធគ្រប់គ្រងគុណភាព";
			$data['active'] = "ប្រព័ន្ធគ្រប់គ្រងគុណភាព";
			$lan = $this->session->userdata("language");
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/qms_kh_v',$data);
		}
		

		if($this->session->userdata("language")==3){
			$data['title'] = "Quality Management System";
			$data['active'] = "Quality Management System";
			$lan = $this->session->userdata("language");
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/qms_ch_v',$data);
		}

		if($this->session->userdata("language")==""){
			$data['title'] = "Quality Management System";
			$data['active'] = "Quality Management System";
			$lan = 1;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/qms',$data);
		}
	}
	
	public function childsafe(){
		if($this->session->userdata("language")==1){
			$data['title'] = "Childsafe Certification";
			$data['active'] = "Childsafe Certification";
			$lan = $this->session->userdata("language");
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/childsafe',$data);
		}
		
		if($this->session->userdata("language")==2){
			$data['title'] = "Childsafe Certification";
			$data['active'] = "Childsafe Certification";
			$lan = $this->session->userdata("language");
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/childsafe_kh_v',$data);
		}
		
		
		if($this->session->userdata("language")==3){
			$data['title'] = "Childsafe Certification";
			$data['active'] = "Childsafe Certification";
			$lan = $this->session->userdata("language");
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/childsafe_ch_v',$data);
		}

		if($this->session->userdata("language")==""){
			$data['title'] = "Childsafe Certification";
			$data['active'] = "Childsafe Certification";
			$lan = 1;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/childsafe',$data);
		}
	}
	
	public function partnerships(){
		if($this->session->userdata("language")==1){
			$data['title'] = "Our Partnerships";
			$data['active'] = "Our Partnerships";
			$lan = $this->session->userdata("language");
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/partnerships',$data);
		}
		
		if($this->session->userdata("language")==2){
			$data['title'] = "ដៃគូរបស់យើង";
			$data['active'] = "ដៃគូរបស់យើង";
			$lan = $this->session->userdata("language");
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/partnerships_kh_v',$data);
		}
		
		
		if($this->session->userdata("language")==3){
			$data['title'] = "Our Partnerships";
			$data['active'] = "Our Partnerships";
			$lan = $this->session->userdata("language");
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/partnerships_ch_v',$data);
		}

		if($this->session->userdata("language")==""){
			$data['title'] = "Our Partnerships";
			$data['active'] = "Our Partnerships";
			$lan = 1;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/partnerships',$data);
		}
	}
	
	public function social_responsibility(){
		if($this->session->userdata("language")==1){
			$data['title'] = "Corporate Social Responsibility";
			$data['active'] = "Corporate Social Responsibility";
			$lan = $this->session->userdata("language");
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/social_responsibility',$data);
		}
		/* if($this->session->userdata("language")==2){
			$data['title'] = "Corporate Social Responsibility";
			$data['active'] = "Corporate Social Responsibility";
			$lan = $this->session->userdata("language");
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/social_responsibility_kh_v',$data);
		}
		*/
		if($this->session->userdata("language")==3){
			$data['title'] = "Corporate Social Responsibility";
			$data['active'] = "Corporate Social Responsibility";
			$lan = $this->session->userdata("language");
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/social_responsibility_ch_v',$data);
		}

		if($this->session->userdata("language")==""){
			$data['title'] = "Corporate Social Responsibility";
			$data['active'] = "Corporate Social Responsibility";
			$lan = 1;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/social_responsibility',$data);
		}
	}
	
	public function community(){
		if($this->session->userdata("language")==1){
			$data['title'] = "Community";
			$data['active'] = "Community";
			$lan = $this->session->userdata("language");
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/community',$data);
		}
		/* if($this->session->userdata("language")==2){
			$data['title'] = "Community";
			$data['active'] = "Community";
			$lan = $this->session->userdata("language");
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/community_kh_v',$data);
		}
		*/
		if($this->session->userdata("language")==3){
			$data['title'] = "Community";
			$data['active'] = "Community";
			$lan = $this->session->userdata("language");
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/community_ch_v',$data);
		}

		if($this->session->userdata("language")==""){
			$data['title'] = "Community";
			$data['active'] = "Community";
			$lan = 1;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/community',$data);
		}
	}
	
	public function career_opport(){
		if($this->session->userdata("language")==1){
			$data['title'] = "Career Opportunities";
			$data['active'] = "Career Opportunities";
			$lan = $this->session->userdata("language");
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$data['career'] = $this->career_m->get_career();
			$this->load->view('frontend/career_opport',$data);
		}
		/* if($this->session->userdata("language")==2){
			$data['title'] = "Career Opportunities";
			$data['active'] = "Career Opportunities";
			$lan = $this->session->userdata("language");
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$data['career'] = $this->career_m->get_career();
			$this->load->view('frontend/career_opport_kh_v',$data);
		}
		*/
		if($this->session->userdata("language")==3){
			$data['title'] = "Career Opportunities";
			$data['active'] = "Career Opportunities";
			$lan = $this->session->userdata("language");
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$data['career'] = $this->career_m->get_career();
			$this->load->view('frontend/career_opport_ch_v',$data);
		}

		if($this->session->userdata("language")==""){
			$data['title'] = "Career Opportunities";
			$data['active'] = "Career Opportunities";
			$lan = 1;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$data['career'] = $this->career_m->get_career();
			$this->load->view('frontend/career_opport',$data);
		}
	}
	
	public function upload_cv($tmp_name,$name_cv){
		$tmp_name = $tmp_name;
		$name = './elFindermaster/cv/'.$name_cv;
		move_uploaded_file($tmp_name, $name);
	}
	
	public function send_mail($firstName,$lastName,$position,$location,$comment,$name_cv,$name_profile){
		if($_SERVER["REQUEST_METHOD"] === "POST"){
		$base_url = base_url();	
		$config = Array(
		    'protocol' => 'smtp',
		    'smtp_host' => 'smtp.ezecom.com.kh',
		    'smtp_port' => 587,
		    'smtp_user' => 'developer@ezecom.com.kh', 
		    'smtp_pass' => 'yT2hxYtgDA', 
		    'mailtype' => 'html',
		    'charset' => 'iso-8859-1',
		    'wordwrap' => TRUE
  		); 
		
		  $this->load->library('email', $config);
		  $this->email->from('developer@ezecom.com.kh','Website EZECOM');
		  $this->email->to('chan.raksmey@ezecomcorp.com');
		  //$this->email->to('careers@ezecomcorp.com');
		  $this->email->subject("EZECOM Career Opportunities");

		  $contain = "\n"."Dear Sir/Madam, "."\n\n" .
				"You received a customer's message from website EZECOM. Sender's Information detail show below: "."\n\n".
				"First Name: ".
				$firstName.
				"\n" .
				"Last Name: " .$lastName.
				"\n" .
				"Position: ".$position.
				"\n"."Location:".$location.
				"\n".
				"Profile:".$base_url."elFindermaster/profile/".$name_profile.
				"\n".
				"CV:".$base_url."elFindermaster/cv/".$name_cv.
				"\n\n** Automatic sent mail from website EZECOM **\n" ;
				
		  $this->email->message($contain);
		  
			
		$recaptcha_secret = "6LegbCMTAAAAAHsts3FfvQGwxoHxhOL0w8vDM5Lf";
		$ip = $_SERVER['REMOTE_ADDR'];
		$captcha = $_POST['g-recaptcha-response'];
		$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$recaptcha_secret."&response=".$captcha."&remoteip=".$ip);
		$response = json_decode($response, true); 
		
		if($response["success"] === true){
			 if($this->email->send()){
				header("Location:".$base_url.'thank-you');
			 }else{
				header("Location:".$base_url);
			 }
		}
	}
}
	
	public function upload_profile(){
		$config['upload_path']          = './elFindermaster/profile/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 0;
		$config['encrypt_name']         = FALSE;
		$this->load->library('upload', $config);
		
		$name_cv = $_FILES["field_name"]["name"];
		$name_profile = $_FILES["profile"]["name"];
		$tmp_name = $_FILES["field_name"]["tmp_name"];
		
		$this->upload_cv($tmp_name,$name_cv);
		
		$firstName = $this->input->post("firstName");
		$lastName = $this->input->post("lastName");
		$position = $this->input->post("positionName");
		$location = $this->input->post("location");
		$comment = $this->input->post("comment");
		
		if ( ! $this->upload->do_upload('profile')){
			$error = array('error' => $this->upload->display_errors());
			print_r($error);
        }else{
			$data = array('upload_data' => $this->upload->data());
			$this->send_mail($firstName,$lastName,$position,$location,$comment,$name_cv,$name_profile);
		}
	}
	
}
