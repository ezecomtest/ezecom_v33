<?php
	class Our_services_m extends CI_Model{
		function __construct(){
			parent::__construct();
		}
		
		public function insert_dedicated($data){
			$this->db->insert('tbl_customer_signup',$data);
			if ($this->db->affected_rows()>0){
				return true;
			}else{
				return false;
			}
		}
		
		public function insert_ezebiz($data){
			$this->db->insert('tbl_customer_signup',$data);
			if ($this->db->affected_rows()>0){
				return true;
			}else{
				return false;
			}
		}
		
		public function insert_ezesurf($data){
			$this->db->insert('tbl_customer_signup',$data);
			if ($this->db->affected_rows()>0){
				return true;
			}else{
				return false;
			}
		}
		
		public function insert_iplc($data){
			$this->db->insert('tbl_customer_signup',$data);
			if ($this->db->affected_rows()>0){
				return true;
			}else{
				return false;
			}
		}
		
		public function insert_dplc($data){
			$this->db->insert('tbl_customer_signup',$data);
			if ($this->db->affected_rows()>0){
				return true;
			}else{
				return false;
			}
		}
		
		public function insert_mpls($data){
			$this->db->insert('tbl_customer_signup',$data);
			if ($this->db->affected_rows()>0){
				return true;
			}else{
				return false;
			}
		}
		
		public function insert_vpls($data){
			$this->db->insert('tbl_customer_signup',$data);
			if ($this->db->affected_rows()>0){
				return true;
			}else{
				return false;
			}
		}
		
		public function insert_ms365($data){
			$this->db->insert('tbl_customer_signup',$data);
			if ($this->db->affected_rows()>0){
				return true;
			}else{
				return false;
			}
		}
		
		public function insert_colocation($data){
			$this->db->insert('tbl_customer_signup',$data);
			if ($this->db->affected_rows()>0){
				return true;
			}else{
				return false;
			}
		}
		
		public function insert_web_hosting($data){
			$this->db->insert('tbl_customer_signup',$data);
			if ($this->db->affected_rows()>0){
				return true;
			}else{
				return false;
			}
		}
		
		public function insert_ddos($data){
			$this->db->insert('tbl_customer_signup',$data);
			if ($this->db->affected_rows()>0){
				return true;
			}else{
				return false;
			}
		}
	}
?>