<?php
class Project_ctrl extends CI_Controller {
   function __construct()
   	{
		parent::__construct();
		$this->load->model('project_model');
	}
	
    function index()
	{
		
		
           $data['alpp'] = $this->project_model->get_employee();
//              print_r($data);
//		$data['title'] = 'Student archive';
		$this->load->view("admin/layout/dashboard_header.php");
		$this->load->view("project/view_emp_record.php",$data);
		$this->load->view('admin/layout/footer.php');
	}
        public function view($id)
	{ 
		$data['alpp'] = $this->project_model->get_employee($id);
                
		$data['title'] = 'Student archive';
		$this->load->view("admin/layout/dashboard_header.php");
		//$this->load->view("student/index.php",$data);
		print_r($data);
		$this->load->view('admin/layout/footer.php');
	}
        
       public function home()
        {
            $this->load->view("admin/layout/dashboard_header.php");
            $this->load->view('project/view_emp_record.php');
            $this->load->view('admin/layout/footer.php');
        }
       public function update($emp_file=false)
	{       
           
                $this->output->enable_profiler(TRUE);
             
		$this->load->helper('form');
		$this->load->library('form_validation');
                $data['title'] = 'Update item';
		$this->form_validation->set_rules('Ficha', 'Ficha', 'required');
		
		if ($this->form_validation->run() === FALSE)
		{       
                    //echo 'ff';
			$data['student'] = $this->project_model->get_employee($emp_file);
                        print_r($data['student']);
                        $this->load->view("admin/layout/dashboard_header.php");
			$this->load->view('project/update_emp_record.php',$data);
			$this->load->view('admin/layout/footer.php');
	
		}
		else
		{
			
			$this->project_model->update_employee($emp_file);
                        $this->session->set_userdata(array(
                            'sess_ci_admin_msg' => "Student Updated ",
                            'sess_ci_admin_msg_type' => 'success',
                            //'sess_ci_admin_islogged' => false
                        ));
			redirect('project_ctrl','refresh');
		
		}
	}
        public function create()
        {
              $this->output->enable_profiler(TRUE);

                $this->load->helper('form');
                $this->load->library('form_validation');
               
              //  $data['title'] = 'Create a news item';

                $this->form_validation->set_rules('Ficha', 'Ficha', 'required');
               

                if ($this->form_validation->run() === FALSE)
                {
                        $this->load->view("admin/layout/dashboard_header.php");
                        $this->load->view('project/insert_emp_record.php');
                        $this->load->view('admin/layout/footer.php');
                       
                }
                else
                {
                    
                    $this->project_model->set_employee();
                       // $this->load->view('student/success');
                       redirect('project_ctrl','refresh');
                }
	}
         public function delete($emp_file)
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
                $this->project_model->delete_emp($emp_file);
               // $this->load->view('student/success');
               redirect('project_ctrl','refresh');   

	}
}