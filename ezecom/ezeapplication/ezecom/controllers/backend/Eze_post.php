<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Eze_post extends CI_Controller {
	 public function __construct()
    {
        parent::__construct();
        $this->load->model('backend/post/post_model');
        $this->load->library('ckeditor');
        $this->load->library('ckfinder');
        if($this->session->userdata('level') !== 'superuser'){
        	redirect('administrator');
        }
    }


	public function lists_content(){
		$data['allpost'] = $this->post_model->list_all_content();
		$data['title'] = "All POST";
		$this->load->view('backend/post/ezecom_post',$data);
	}

	public function delete_content($id){
		$result = $this->post_model->do_delete_content($id);
		if($result == true){
			$message = "<div class='alert alert-info alert-dismissible fade in' role='alert'>
                                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span>
                                    </button>
                                    <strong>Content Delete Success!</strong> </div>";

            $this->session->set_flashdata('message', $message);
			redirect('listpost');

		}else{
			$message = "<div class='alert alert-warning alert-dismissible fade in' role='alert'>
                                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span>
                                    </button>
                                    <strong>A Bit Problem...! Deleting Content Not Affected.</div>";

            $this->session->set_flashdata('message', $message);
			redirect('listpost');
		}

	}


	public function do_published_content($pub,$id){
		$result = $this->post_model->published_content($pub,$id);
		if($result == true){
			$message = "<div class='alert alert-info alert-dismissible fade in' role='alert'>
                                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span>
                                    </button>
                                    <strong>Content Action Success!</strong> </div>";

            $this->session->set_flashdata('message', $message);
			redirect('listpost');

		}else{
			$message = "<div class='alert alert-warning alert-dismissible fade in' role='alert'>
                                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span>
                                    </button>
                                    <strong>A Bit Problem...! Action Content Not Affected.</div>";

            $this->session->set_flashdata('message', $message);
			redirect('listpost');
		}

	}

	public function add_content_feature($feature,$id){
		$result = $this->post_model->feature_content($feature,$id);
		if($result == true){
			$message = "<div class='alert alert-info alert-dismissible fade in' role='alert'>
                                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span>
                                    </button>
                                    <strong>Content Action Success!</strong> </div>";

            $this->session->set_flashdata('message', $message);
			redirect('listpost');

		}else{
			$message = "<div class='alert alert-warning alert-dismissible fade in' role='alert'>
                                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span>
                                    </button>
                                    <strong>A Bit Problem...! Action Content Not Affected.</div>";

            $this->session->set_flashdata('message', $message);
			redirect('listpost');
		}
	}

	public function add_content(){
		$this->ckeditor->basePath = base_url().'assets/ckeditor/';
	    $this->ckeditor->config['toolbar'] = array(
	                array( 'Source', '-', 'Bold', 'Italic', 'Underline', '-','Cut','Copy','Paste','PasteText','PasteFromWord','-','Undo','Redo','-','NumberedList','BulletedList','Image','JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock','Link', 'Unlink'));
	    $this->ckeditor->config['language'] = 'en';
	    $this->ckeditor->config['width'] = '100%;';
	    $this->ckeditor->config['height'] = '450px';

		$data['language'] = $this->post_model->get_language();
		$data['categories'] = $this->post_model->get_categories();
		$data['title'] = "ADD POST";
		$this->load->view('backend/post/ezecom_post_add',$data);
	}

	public function saving_content(){
				
				$config['upload_path']          = './elFindermaster/files/post/image_feature/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 0;
                $config['encrypt_name']         = FALSE;


                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('content_image_feature'))
                {
                        $error = array('error' => $this->upload->display_errors());

                       	print_r($error);
                       }
                else
                {
                        $data = $this->upload->data();
                        
                        $alldata = array('content_title'=>$this->input->post('content_title'),'content_intro'=>$this->input->post('content_intro'),'content_image_feature'=>$data['file_name'],'content_language_id'=>$this->input->post('content_language_id'),'content_categories_id'=>$this->input->post('content_categories_id'),'content_date'=>$this->input->post('content_date'),'content_description'=>$this->input->post('content_description'));
                        $result = $this->post_model->do_saving_content($alldata);

                        if($result == true){
							$message = "<div class='alert alert-info alert-dismissible fade in' role='alert'>
				                                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span>
				                                    </button>
				                                    <strong>Content Adding Success!</strong> </div>";

				            $this->session->set_flashdata('message', $message);
							redirect('/addpost');

						}else{
							$message = "<div class='alert alert-warning alert-dismissible fade in' role='alert'>
				                                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span>
				                                    </button>
				                                    <strong>A Bit Problem...! Adding Content Not Affected.</div>";

				            $this->session->set_flashdata('message', $message);
							redirect('/addpost');
						}

                }

        


	}

	public function edit_content($id){
		$this->ckeditor->basePath = base_url().'assets/ckeditor/';
	    $this->ckeditor->config['toolbar'] = array(
	                array( 'Source', '-', 'Bold', 'Italic', 'Underline', '-','Cut','Copy','Paste','PasteText','PasteFromWord','-','Undo','Redo','-','NumberedList','BulletedList','Image','JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock','Link', 'Unlink'));
	    $this->ckeditor->config['language'] = 'en';
	    $this->ckeditor->config['width'] = '100%;';
	    $this->ckeditor->config['height'] = '450px';
		$data['editpost'] = $this->post_model->do_edit_content($id);
		$data['language'] = $this->post_model->get_language();
		$data['categories'] = $this->post_model->get_categories();
		$data['title'] = "EDIT POST";
		$this->load->view('backend/post/ezecom_post_edit',$data);
	}

	public function update_content(){
		$id = $this->input->post('contentid');

		if (empty($_FILES['content_image_feature']['name'])) {
					$img = FALSE;
					$alldata = array('content_title'=>$this->input->post('content_title'),'content_intro'=>$this->input->post('content_intro'),'content_language_id'=>$this->input->post('content_language_id'),'content_categories_id'=>$this->input->post('content_categories_id'),'content_date'=>$this->input->post('content_date'),'content_description'=>$this->input->post('content_description'));
                        $result = $this->post_model->do_update_content($alldata,$id,$img);

                        if($result == true){
							$message = "<div class='alert alert-info alert-dismissible fade in' role='alert'>
				                                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span>
				                                    </button>
				                                    <strong>Content Update Success!</strong> </div>";

				            $this->session->set_flashdata('message', $message);
							redirect('/editpost/'.$id);

						}else{
							$message = "<div class='alert alert-warning alert-dismissible fade in' role='alert'>
				                                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span>
				                                    </button>
				                                    <strong>A Bit Problem...! Update Content Not Affected.</div>";

				            $this->session->set_flashdata('message', $message);
							redirect('/editpost/'.$id);
						}

		}else{
				$config['upload_path']          = './elFindermaster/files/post/image_feature/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 0;
                $config['encrypt_name']         = FALSE;


                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('content_image_feature'))
                {
                        $error = array('error' => $this->upload->display_errors());

                       	print_r($error);
                       }
                else
                {
                        $data = $this->upload->data();
                        $img = TRUE;
                        $alldata = array('content_title'=>$this->input->post('content_title'),'content_intro'=>$this->input->post('content_intro'),'content_image_feature'=>$data['file_name'],'content_language_id'=>$this->input->post('content_language_id'),'content_categories_id'=>$this->input->post('content_categories_id'),'content_date'=>$this->input->post('content_date'),'content_description'=>$this->input->post('content_description'));
                        $result = $this->post_model->do_update_content($alldata,$id,$img);

                        if($result == true){
							$message = "<div class='alert alert-info alert-dismissible fade in' role='alert'>
				                                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span>
				                                    </button>
				                                    <strong>Content Update Success!</strong> </div>";

				            $this->session->set_flashdata('message', $message);
							redirect('/editpost/'.$id);

						}else{
							$message = "<div class='alert alert-warning alert-dismissible fade in' role='alert'>
				                                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span>
				                                    </button>
				                                    <strong>A Bit Problem...! Update Content Not Affected.</div>";

				            $this->session->set_flashdata('message', $message);
							redirect('/editpost/'.$id);
						}

                }

		}
	}



	public function copy_content($id){
		$this->ckeditor->basePath = base_url().'assets/ckeditor/';
	    $this->ckeditor->config['toolbar'] = array(
	                array( 'Source', '-', 'Bold', 'Italic', 'Underline', '-','Cut','Copy','Paste','PasteText','PasteFromWord','-','Undo','Redo','-','NumberedList','BulletedList','Image','JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock','Link', 'Unlink'));
	    $this->ckeditor->config['language'] = 'en';
	    $this->ckeditor->config['width'] = '100%;';
	    $this->ckeditor->config['height'] = '450px';

		$data['copypost'] = $this->post_model->do_edit_content($id);
		$data['language'] = $this->post_model->get_language();
		$data['categories'] = $this->post_model->get_categories();

		$data['title'] = "COPY POST";
		$this->load->view('backend/post/ezecom_post_copy',$data);
	}


}
