<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Career_m extends CI_Model 
{
	public function __construct()
    {
        parent::__construct();
    }
    
    public function get_career(){
        // if(!$this->session->userdata('language')){
        $this->db->select('c.*')->from('tbl_career c');
        $this->db->order_by('c.career_id',"desc");
        $this->db->where('c.career_is_deleted',0);
		$this->db->where('c.career_published != ',0);
        $this->db->where('c.career_language_id',1);
        $query = $this->db->get();
        return $query->result();
        // }else{
        // $this->db->select('c.*')->from('tbl_career c');
        // $this->db->order_by('c.career_id',"desc");
        // $this->db->where('c.career_is_deleted',0);
        // $this->db->where('c.career_language_id',$this->session->userdata('language'));
        // $query = $this->db->get();
        // return $query->result();
        // }
    	
    }
	
	public function get_career_list_bellow($title_strrep){
		$this->db->select('c.*')->from('tbl_career c');
        $this->db->order_by('c.career_id',"desc");
		//$this->db->limit(50, 1);
        $this->db->where('c.career_is_deleted',0);
		$this->db->where('c.career_published != ',0);
        $this->db->where('c.career_language_id',1);
		$this->db->where('c.career_title != ',$title_strrep);
        $query = $this->db->get();
        return $query->result();
	}

    public function get_career_detail($title){
        // if(!$this->session->userdata('language')){
        $this->db->select('c.*')->from('tbl_career c');
        $this->db->order_by('c.career_id',"desc");
        $this->db->where('c.career_title',$title);
        $this->db->where('c.career_is_deleted',0);
        $this->db->where('c.career_language_id',1);
        $query = $this->db->get();
        return $query->result();
        // }else{
        // $this->db->select('c.*')->from('tbl_career c');
        // $this->db->order_by('c.career_id',"desc");
        // $this->db->where('c.career_id',$id);
        // $this->db->where('c.career_is_deleted',0);
        // $this->db->where('c.career_language_id',$this->session->userdata('language'));
        // $query = $this->db->get();
        // return $query->result();
        // }
        
    }
}