<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Set_up_email_c extends CI_Controller {
	 public function __construct()
    {
        parent::__construct();
		$this->load->model('frontend/homepage_m');
    }

	public function index(){
		$this->set_up_email();
	}

	public function set_up_email(){
		$data['title'] = "Set Up Email";
		$data['active'] = "Set Up Email";
		$lan = $this->session->userdata("language");
        $data['feature_content'] = $this->homepage_m->get_feature_content($lan);
		$this->load->view('frontend/set_up_email_v',$data);
	}
	
	public function submit_data(){
		
		$yourName = $this->input->post("yourName");
		$userName = $this->input->post("userName");
		$phone = $this->input->post("phoneNumber");
		$email = $this->input->post("email");
		$password = $this->input->post("password");
		$conf_pass = $this->input->post("confirmPassword");
		
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
		  //$this->email->to('chan.raksmey@ezecomcorp.com');
		  $this->email->to('csv@ezecomcorp.com');
		  $this->email->subject("EZECOM Email Sign Up");

		  $contain = "\n"."Dear Sir/Madam, "."\n\n" .
				"You received a customer's message from website EZECOM. Sender's Information detail show below: "."\n\n".
				"Your Name: ".
				$yourName.
				"\n" .
				"User Name: " .$userName.
				"\n" .
				"Phone Number: ".$phone.
				"\n"."Eamil Address:".$email.
				"\n".
				"Password:".$password.
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
}
