<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class post_model extends CI_Model {

	public function add_department($data)
	{
		$this->db->insert('departments',$data);
	}

	public function add_jobs($data,$id=false)
	{
		if($id===false){
			$this->db->insert('job_posts',$data);
		}else{
			$this->db->where('job_posts.id',$id);
			$this->db->update('job_posts',$data);
		}
	}
	
	public function get_department($id=false){
		
		if($id===false){
			$data=$this->db->get('departments');
			return $data->result();
		}
		$query=$this->db->get_where('departments', array('id'=>$id));
		$this->db->where('departments.id',$id);
		return $this->db->delete('departments');
	}

    public function del_department($id){
		$this->db->where('departments.id',$id);
		return $this->db->delete('departments');
	}
	
	public function get_job($id=false){
		if($id===false){
			$this->db->select('*');
			$this->db->from('departments');
			$this->db->join('job_posts', 'job_posts.department_id = departments.id');
			$query = $this->db->get();	
			return $query->result();
		}
			$this->db->select('*');
			$this->db->from('departments');
			$this->db->join('job_posts', 'job_posts.department_id = departments.id');
			$this->db->where('job_posts.id', $id);
			$query = $this->db->get();
			return $query->row_array();
	}

    public function del_job($id){
		$this->db->where('job_posts.id',$id);
		return $this->db->delete('job_posts');
	}

	public function application($data){
		$this->db->insert('application',$data);
	}

	public function display_application($id=false){

		if($id===false){
			$this->db->select('*');
			$this->db->from('job_posts');
			$this->db->join('application', 'application.job_post_id = job_posts.id');
			$query = $this->db->get();	
			return $query->result();
		}else{
			$this->db->select('*');
			$this->db->from('job_posts');
			$this->db->join('application', 'application.job_post_id = job_posts.id');
			$this->db->where('application.job_post_id', $id);
			$query = $this->db->get();
			return $query->result();
		}
	}

    public function del_application($id){
		$this->db->where('application.id',$id);
		return $this->db->delete('application');
	}

	public function count_app($id){
		return $this->db->get_where('application', array('job_post_id'=>$id))->num_rows();


	}

}
