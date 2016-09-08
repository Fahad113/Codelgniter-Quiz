<?php
class project_model extends CI_Model 
{
        public function __construct()
	{
		$this->load->database();
	}
        
	public function get_employee($emp_file=FALSE)
	{
            if ($emp_file === FALSE)
		{
			$query = $this->db->get('alpp_emp');
			return $query->result_array();
                }
	
		$query = $this->db->get_where('alpp_emp', array('emp_file' => $emp_file));
		return $query->row_array();
	}
        
        
        public function set_employee()
        {
            $this->load->helper('url');
		$data = array(
                                'emp_file' => $this->input->post('Ficha'),
				'emp_cellnum' => $this->input->post('RUT'),
				'emp_first_contract' => $this->input->post('INGRESO'),
				'emp_email' => $this->input->post('Email'),
				'emp_status' => $this->input->post('Status'),
                        
                                'emp_name' => $this->input->post('Nombre'),
				'emp_department' => $this->input->post('Department'),
				'emp_password' => $this->input->post('Password'),
                                'emp_type' => $this->input->post('User'),
				
		);
               
		 $this->db->insert('alpp_emp', $data);
        }
       public function delete_emp($emp_file)
	{
		//$id=$this->input->post('id');
		$this->db->where('emp_file',$emp_file);
		 $this->db->delete('alpp_emp');
                 //redirect('application/views/student/index.php', 'refresh');
	}
        public function update_employee($emp_file=FALSE)
	{         
                
		$this->load->helper('url');
		//$id=$this->input->post('id');
		$data = array(
				'emp_file' => $this->input->post('Ficha'),
				'emp_cellnum' => $this->input->post('RUT'),
				'emp_first_contract' => $this->input->post('INGRESO'),
				'emp_email' => $this->input->post('Email'),
				'emp_status' => $this->input->post('Status'),
                        
                                'emp_name' => $this->input->post('Nombre'),
				'emp_department' => $this->input->post('Department'),
				'emp_password' => $this->input->post('Password'),
                                'emp_type' => $this->input->post('User'),
				
		);
		
		 $this->db->where('emp_file', $emp_file);
		 $this->db->update('alpp_emp', $data);$this->output->enable_profiler(TRUE);
	}



 }