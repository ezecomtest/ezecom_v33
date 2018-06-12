<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Media_center_c extends CI_Controller {
	 public function __construct()
    {
        parent::__construct();
        $this->load->library('pagination');
        $this->load->library('session');
        $this->load->library('encrypt');
        $this->load->model('frontend/media_center_m');
        $this->load->model('frontend/homepage_m');
        $this->load->helper(array('form', 'url'));
        date_default_timezone_set("Asia/Bangkok");
    }

	
	public function index()
	{
		$this->media_center();
	}
	public function media_center(){

		$data['title'] = "News Events";
		$data['active']="News Events";

        if($this->session->userdata("language") == 1){
            $config['base_url'] = base_url().'media-center/news-events/';
            $config['total_rows'] = $this->media_center_m->get_all_events();

            $config['per_page'] = 5;
            $config["uri_segment"] = 3;
            $config['full_tag_open'] = '<ul class="pagination">';
            $config['full_tag_close'] = '</ul>';
            $config['first_link'] = false;
            $config['last_link'] = false;
            $config['first_tag_open'] = '<li>';
            $config['first_tag_close'] = '</li>';
            $config['prev_link'] = 'Previous';
            $config['prev_tag_open'] = '<li class="prev">';
            $config['prev_tag_close'] = '</li>';
            $config['next_link'] = 'Next';
            $config['next_tag_open'] = '<li>';
            $config['next_tag_close'] = '</li>';
            $config['last_tag_open'] = '<li>';
            $config['last_tag_close'] = '</li>';
            $config['cur_tag_open'] = '<li class="active"><a href="#">';
            $config['cur_tag_close'] = '</a></li>';
            $config['first_link'] = 'First';
            $config['last_link'] = 'Last';
            $config['num_tag_open'] = '<li>';
            $config['num_tag_close'] = '</li>';
            $config['num_links'] = 5;

            $this->pagination->initialize($config);
            $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
            $data['firsttitle_events'] = $this->media_center_m->first_title_events();
            $data['title_events'] = $this->media_center_m->title_events($config["per_page"],$data['page']);
            // print_r($data['title_events']);exit;
            $lan = $this->session->userdata("language");
            $data['feature_content'] = $this->homepage_m->get_feature_content($lan);
            $data['pagination'] = $this->pagination->create_links();
            $this->load->view('frontend/media_center_v',$data);
        }

        if($this->session->userdata("language") == 2){
            $config['base_url'] = base_url().'media-center/news-events/';
            $config['total_rows'] = $this->media_center_m->get_all_events();

            $config['per_page'] = 5;
            $config["uri_segment"] = 2;
            $config['full_tag_open'] = '<ul class="pagination">';
            $config['full_tag_close'] = '</ul>';
            $config['first_link'] = false;
            $config['last_link'] = false;
            $config['first_tag_open'] = '<li>';
            $config['first_tag_close'] = '</li>';
            $config['prev_link'] = 'មុន';
            $config['prev_tag_open'] = '<li class="prev">';
            $config['prev_tag_close'] = '</li>';
            $config['next_link'] = 'បន្ទាប់';
            $config['next_tag_open'] = '<li>';
            $config['next_tag_close'] = '</li>';
            $config['last_tag_open'] = '<li>';
            $config['last_tag_close'] = '</li>';
            $config['cur_tag_open'] = '<li class="active"><a href="#">';
            $config['cur_tag_close'] = '</a></li>';
            $config['first_link'] = 'តំបូង';
            $config['last_link'] = 'ចុងក្រោយ';
            $config['num_tag_open'] = '<li>';
            $config['num_tag_close'] = '</li>';
            $config['num_links'] = 5;

            $this->pagination->initialize($config);
            $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
            $data['firsttitle_events'] = $this->media_center_m->first_title_events();
            $data['title_events'] = $this->media_center_m->title_events($config["per_page"],$data['page']);
            // print_r($data['title_events']);exit;
            $lan = $this->session->userdata("language");
            $data['feature_content'] = $this->homepage_m->get_feature_content($lan);
            $data['pagination'] = $this->pagination->create_links();
            $this->load->view('frontend/media_center_v',$data);
        }

        if($this->session->userdata("language") == 3){
            $config['base_url'] = base_url().'media-center/news-events/';
            $config['total_rows'] = $this->media_center_m->get_all_events();

            $config['per_page'] = 5;
            $config["uri_segment"] = 3;
            $config['full_tag_open'] = '<ul class="pagination">';
            $config['full_tag_close'] = '</ul>';
            $config['first_link'] = false;
            $config['last_link'] = false;
            $config['first_tag_open'] = '<li>';
            $config['first_tag_close'] = '</li>';
            $config['prev_link'] = '以前';
            $config['prev_tag_open'] = '<li class="prev">';
            $config['prev_tag_close'] = '</li>';
            $config['next_link'] = '下一个';
            $config['next_tag_open'] = '<li>';
            $config['next_tag_close'] = '</li>';
            $config['last_tag_open'] = '<li>';
            $config['last_tag_close'] = '</li>';
            $config['cur_tag_open'] = '<li class="active"><a href="#">';
            $config['cur_tag_close'] = '</a></li>';
            $config['first_link'] = '第一';
            $config['last_link'] = '持续';
            $config['num_tag_open'] = '<li>';
            $config['num_tag_close'] = '</li>';
            $config['num_links'] = 5;

            $this->pagination->initialize($config);
            $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
            $data['firsttitle_events'] = $this->media_center_m->first_title_events();
            $data['title_events'] = $this->media_center_m->title_events($config["per_page"],$data['page']);
            // print_r($data['title_events']);exit;
            $lan = $this->session->userdata("language");
            $data['feature_content'] = $this->homepage_m->get_feature_content($lan);
            $data['pagination'] = $this->pagination->create_links();
            $this->load->view('frontend/media_center_v',$data);
        }

         if($this->session->userdata("language") == ""){
            $config['base_url'] = base_url().'media-center/news-events/';
            $config['total_rows'] = $this->media_center_m->get_all_events();

            $config['per_page'] = 5;
            $config["uri_segment"] = 3;
            $config['full_tag_open'] = '<ul class="pagination">';
            $config['full_tag_close'] = '</ul>';
            $config['first_link'] = false;
            $config['last_link'] = false;
            $config['first_tag_open'] = '<li>';
            $config['first_tag_close'] = '</li>';
            $config['prev_link'] = 'Previous';
            $config['prev_tag_open'] = '<li class="prev">';
            $config['prev_tag_close'] = '</li>';
            $config['next_link'] = 'Next';
            $config['next_tag_open'] = '<li>';
            $config['next_tag_close'] = '</li>';
            $config['last_tag_open'] = '<li>';
            $config['last_tag_close'] = '</li>';
            $config['cur_tag_open'] = '<li class="active"><a href="#">';
            $config['cur_tag_close'] = '</a></li>';
            $config['first_link'] = 'First';
            $config['last_link'] = 'Last';
            $config['num_tag_open'] = '<li>';
            $config['num_tag_close'] = '</li>';
            $config['num_links'] = 5;

            $this->pagination->initialize($config);
            $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
            $data['firsttitle_events'] = $this->media_center_m->first_title_events();
            $data['title_events'] = $this->media_center_m->title_events($config["per_page"],$data['page']);
            // print_r($data['title_events']);exit;
            $lan = 1;
            $data['feature_content'] = $this->homepage_m->get_feature_content($lan);
            $data['pagination'] = $this->pagination->create_links();
            $this->load->view('frontend/media_center_v',$data);
        }


        

	}

	public function news_detail_c(){
		// redirect page.
		if($this->uri->segment(2)=="live-traffic-camera%E2%80%99s"){
			header("HTTPS/1.1 301 Moved Permanently");
			$full_url = base_url()."newsdetail/live-traffic-camera";
			header("Location: $full_url");
		}
		
        /*  replace (-) from url  */
		$uri_orig = explode("/",$_SERVER['REQUEST_URI']);
		$title = (end($uri_orig));
		//echo urldecode($title)."<br/>";
		
        $title_strrep = strtoupper(str_replace('-', ' ', $title));
		//echo urldecode($title_strrep);
		
		// slide news and event
		$data['slides_news_event'] = $this->media_center_m->get_news_events_forslide();
		//var_dump($data['slides_news_event']);
		//exit;
		
		$data['news_events'] = $this->media_center_m->get_news_detail(urldecode($title_strrep));
        $lan = $this->session->userdata("language");
        $data['feature_content'] = $this->homepage_m->get_feature_content($lan);
		$data['active']="News Detail";
		$data['title'] = "News Detail";
		$this->load->view('frontend/news_events_detail',$data);
	}
	
	public function promotion(){
		
		if($this->session->userdata("language")==1){
			$data['title'] = "Promotion";
			$data['active']="Promotion";
			$lan = $this->session->userdata("language");
			$this->load->view('frontend/promotion',$data);
		}
		
		if($this->session->userdata("language")==""){
			$data['title'] = "Promotion";
			$data['active']="Promotion";
			$lan = $this->session->userdata("language");
			$this->load->view('frontend/promotion',$data);
		}
		
	}

}
