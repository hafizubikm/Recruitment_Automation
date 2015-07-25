<?php
class Post_controller extends CI_Controller {

	public function index(){	
		$data['jobs']=$this->post_model->get_job();
		$this->load->view('post_view',$data);
	}
	
	public function job_details($id){
		$data['jobs']=$this->post_model->get_job($id);
		$this->load->view('job_details',$data);
	}

	public function job_view($id){
		$data['jobs']=$this->post_model->get_job($id);
		$this->load->view('job_view',$data);
	}
	
	public function jobs($id=false){
		if($id===false)	{
			$data['jobs']=$this->post_model->get_job();
			$this->load->view('jobs',$data);
		}else{
			$data['jobs']=$this->post_model->get_job($id);
			$data['department']=$this->post_model->get_department();
			$this->load->view('edit_jobs',$data);
		}
	}
	
	public function load_add_jobs(){
		$data['department']=$this->post_model->get_department();
		$this->load->view('add_jobs',$data);
	}
	
	public function add_jobs($id=false){
		$data['department_id']=$this->input->post('department');
		$data['job_title']=$this->input->post('jobTitle');
		$data['requirement']=$this->input->post('requirement');
		$data['experience']=$this->input->post('experience');
		$data['education']=$this->input->post('education');
		$data['start_date']=$this->input->post('sdate');
		$data['end_date']=$this->input->post('edate');
		$data['salary']=$this->input->post('salary');
		if($id===false){
			$this->post_model->add_jobs($data);
			redirect('post_controller/jobs');
		}else{
			$this->post_model->add_jobs($data,$id);
			redirect('post_controller/jobs');
		}
	}

	public function del_job($id){
		$this->post_model->del_job($id);
		redirect('post_controller/jobs');
	}

	public function apply(){	
		$data['error']=" ";
		$data['jobs']=$this->post_model->get_job();
		$this->load->view('apply',$data);
	}
	
	public function admin(){
		$this->load->view('admin');
	}
	
	public function department(){	
		$data['department']=$this->post_model->get_department();
		$this->load->view('department',$data);
	}
	
	public function newdepartment(){
		$this->load->view('newdepartment');
	}
	
	public function add_department(){
		/* $this->form_validation->set_rules('department', 'Department', 'required|is_unique[departments.department_name]'); */
		$data['department_name']=$this->input->post('department');
		$this->post_model->add_department($data);
		redirect('post_controller/department');
	}

	public function del_department($id){
		$this->post_model->get_department($id);
		redirect('post_controller/department');
	}
	
	public function application(){	
		$config['upload_path'] ='./filess/';
		$config['allowed_types'] = 'doc|docx';
		$config['max_size']	= '10000';
		//$this->load->library('upload', $config);
		$this->upload->initialize($config); //if use autoload
		if (! $this->upload->do_upload()){
			$data=array('error'=>$this->upload->display_errors());
			$data['jobs']=$this->post_model->get_job();
			$this->load->view('apply', $data);
		}else{
			$upload_data=$this->upload->data();
			$data['job_post_id']=$this->input->post('job_id');
			$data['name']=$this->input->post('Name');
			$data['email']=$this->input->post('Email');
			$data['phone']=$this->input->post('Phone');
			$data['file']=$upload_data['file_name'];
			$this->post_model->application($data);
			redirect('post_controller/success_application');
		}	
	}

	public function display_application($id=false){
		if($id===false){
			$data['applications']=$this->post_model->display_application();
			$this->load->view('all_applications',$data);
		}else{
			$data['applications']=$this->post_model->display_application($id);
			$this->load->view('all_applications',$data);
		}

	}

	public function del_application($id){
		$this->post_model->del_application($id);
		redirect('post_controller/display_application');
	}

	public function success_application(){
		$this->load->view('application');
	}

	public function report(){
		$data['jobs']=$this->post_model->get_job();
		$this->load->view('job_list',$data);
	}

}