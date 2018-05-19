<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Radio_admin_c extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("backend/radio_admin_m");
		if($this->session->userdata('level') !== 'superuser'){
        	redirect('administrator');
        }
	}
	/**==========================
	 * Sub menu: Radio Schedule
	===========================**/
	public function radio_schedule_list()
	{
		$data['title'] = "Radio Schedule";
		$data['radio_schedules'] = $this->radio_admin_m->get_radio_schedule();
		$this->load->view('backend/radio/radio_schedule_list_admin_v', $data);
	}

	public function form_add_radio_schedule()
	{
		$data['title'] = "Radio Schedule";
		//load view
		$this->load->view('backend/radio/radio_schedule_add_admin_v', $data);
	}

	public function add_radio_schedule()
	{
		$data_form = $this->input->post();
		$config['upload_path'] = './elFindermaster/files/radio_schedule/';
		$config['allowed_types'] = 'pdf';
		$config['encrypt_name'] = TRUE;
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('radio_schedule_pdf')) {
			$this->form_validation->set_error_delimiters('<p class="error">', '</p>');
			$error = array('error' => $this->upload->display_errors());
			print_r($error);
		} else {
			$data = $this->upload->data();
			$file = $data['file_name'];
			$result = $this->radio_admin_m->insert_radio_schedule($data_form, $file);
			if ($result == TRUE) {
				$this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissible fade in">Success: Data has been added!</div>');
			} else {
				$this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissible fade in">Error: Data has been fail to add!</div>');
			}
			redirect('backend/radio_admin_c/radio_schedule_list', 'refresh');
		}
	}

	public function form_edit_radio_schedule($id)
	{
		$data['title'] = "Radio Schedule";
		$data['rs'] = $this->radio_admin_m->get_radio_schedule_byID($id);
		//load view
		$this->load->view('backend/radio/radio_schedule_edit_admin_v', $data);
	}

	public function update_radio_schedule($id)
	{
		$data_form = $this->input->post();
		$config['upload_path'] = './elFindermaster/files/radio_schedule/';
		$config['allowed_types'] = 'pdf|pptx';
		$config['encrypt_name'] = TRUE;
		$this->load->library('upload', $config);
		if (empty($_FILES['radio_schedule_pdf']['name'])) {
			$file1 = NULL;
			$result = $this->radio_admin_m->update_radio_schedule($data_form, $id, $file1);
		} else {
			if (!$this->upload->do_upload('radio_schedule_pdf')) {
				$this->form_validation->set_error_delimiters('<p class="error">', '</p>');
				$error = array('error' => $this->upload->display_errors());
				print_r($error);
			} else {
				$data = $this->upload->data();
				$file = $data['file_name'];
				$result = $this->radio_admin_m->update_radio_schedule($data_form, $id, $file);
			}
		}
		if ($result == TRUE) {
			$this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissible fade in">Success: Data has been Update!</div>');
		} else {
			$this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissible fade in">Error: Data has been fail to Update!</div>');
		}
		redirect('backend/radio_admin_c/radio_schedule_list', 'refresh');
	}

	public function delete_radio_schedule($id)
	{
		$cri = array('radio_schedule_id'=>$id);
		$data = array('radio_schedule_is_deleted'=>1);
		$this->radio_admin_m->delete_radio_schedule($data, $cri);
		redirect('backend/radio_admin_c/radio_schedule_list');
	}
	/**=======================
	 * Sub menu: Radio Group
	========================**/
	public function radio_group_list()
	{
		$data['title'] = "Radio Group";
		$data['radio_groups'] = $this->radio_admin_m->get_radio_group();
		$this->load->view('backend/radio/radio_group_list_admin_v', $data);
	}

	public function form_add_radio_group()
	{
		$data['title'] = "Radio Group";
		$this->load->view('backend/radio/radio_group_add_admin_v', $data);
	}

	public function add_radio_group()
	{
		$data = $this->input->post();
		if ($this->radio_admin_m->insert_radio_group($data)==true){
			$this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissible fade in">Success: Data has been added!</div>');
		} else {
			$this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissible fade in">Error: Data has been fail to add!</div>');
		}
		redirect('backend/radio_admin_c/radio_group_list', 'refresh');
	}

	public function form_edit_radio_group($id)
	{
		$data['title'] = "Radio Group";
		$data['group'] = $this->radio_admin_m->get_group($id);
		$this->load->view('backend/radio/radio_group_edit_admin_v', $data);
	}

	public function update_radio_group($id)
	{
		$data = $this->input->post();
		$cri = array('radio_group_id'=>$id);
		if ($this->radio_admin_m->update_radio_group($data,$cri)==true){
			$this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissible fade in">Success: Data has been updated!</div>');
		} else {
			$this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissible fade in">Error: Data has been fail to update!</div>');
		}
		redirect('backend/radio_admin_c/radio_group_list', 'refresh');
	}

	public function delete_radio_group($id)
	{
		$data = array('radio_group_is_deleted'=>1);
		$cri = array('radio_group_id'=>$id);
		if ($this->radio_admin_m->update_radio_group($data,$cri)==true){
			$this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissible fade in">Success: Data has been deleted!</div>');
		} else {
			$this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissible fade in">Error: Data has been fail to delete!</div>');
		}
		redirect('backend/radio_admin_c/radio_group_list', 'refresh');
	}

	/**=====================
	 * Sub menu: Radio
	 ====================**/
	public function radio_list()
	{
		$data['title'] = "Radio";
		$data['radios'] = $this->radio_admin_m->get_radio();
		$this->load->view('backend/radio/radio_list_admin_v', $data);
	}

	public function form_add_radio()
	{
		$data['title'] = "Radio";
		$data['radio_groups'] = $this->radio_admin_m->get_radio_group();
		$this->load->view('backend/radio/radio_add_admin_v', $data);
	}

	public function add_radio()
	{
		$data_form = $this->input->post();
		$config['upload_path'] = './elFindermaster/files/radio_icon/';
		$config['allowed_types'] = 'jpg|png';
		$config['encrypt_name'] = TRUE;
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('radio_info_thumbnail')) {
			$this->form_validation->set_error_delimiters('<p class="error">', '</p>');
			$error = array('error' => $this->upload->display_errors());
			print_r($error);
		} else {
			$data = $this->upload->data();
			$file = $data['file_name'];
			$result = $this->radio_admin_m->insert_radio($data_form, $file);
			if ($result == TRUE) {
				$this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissible fade in">Success: Data has been added!</div>');
			} else {
				$this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissible fade in">Error: Data has been fail to add!</div>');
			}
			redirect('backend/radio_admin_c/radio_list', 'refresh');
		}
	}

	public function form_edit_radio($id)
	{
		$data['title'] = "Radio";
		$data['radio'] = $this->radio_admin_m->get_radio_byID($id);
		$data['radio_groups'] = $this->radio_admin_m->get_radio_group();
		$this->load->view('backend/radio/radio_edit_admin_v', $data);
	}

	public function update_radio($id)
	{

		$data_form = $this->input->post();
		$config['upload_path'] = './elFindermaster/files/radio_icon/';
		$config['allowed_types'] = '*';
		$config['encrypt_name'] = TRUE;

		$this->load->library('upload', $config);
		if (empty($_FILES['radio_info_thumbnail']['name'])) {
			$file1 = NULL;
			$result = $this->radio_admin_m->update_radio($data_form, $id, $file1);
		} else {
			if (!$this->upload->do_upload('radio_info_thumbnail')) {
				$this->form_validation->set_error_delimiters('<p class="error">', '</p>');
				$error = array('error' => $this->upload->display_errors());
				print_r($error);
			} else {
				$data = $this->upload->data();
				$file = $data['file_name'];
				$result = $this->radio_admin_m->update_radio($data_form, $id, $file);
			}
		}
		if ($result == TRUE) {
			$this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissible fade in">Success: Data has been Update!</div>');
		} else {
			$this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissible fade in">Error: Data has been fail to Update!</div>');
		}
		redirect('backend/radio_admin_c/radio_list', 'refresh');
	}

	public function delete_radio($id)
	{
		$data = array('radio_info_deleted'=>1);
		$cri = array('radio_info_id'=>$id);
		if ($this->radio_admin_m->delete_radio($data,$cri)==true){
			$this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissible fade in">Success: Data has been deleted!</div>');
		} else {
			$this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissible fade in">Error: Data has been fail to delete!</div>');
		}
		redirect('backend/radio_admin_c/radio_list', 'refresh');
	}
}