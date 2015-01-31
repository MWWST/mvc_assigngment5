<?php
class Courses extends CI_Controller {

	public function index(){
		$this->output->enable_profiler(TRUE);
		$this->load->model("Course"); //load the model
		$course= $this->Course->display_course();
		$this->load->view('addstudent', array('value' => $course));
		}

		public function add(){
		// var_dump($this->input->post('title'));
		// var_dump($this->input->post('description'));
		$this->output->enable_profiler(TRUE);
		$this->load->model("Course"); //load the model
		$course_details = array('title'=>$this->input->post('title'),'description'=>$this->input->post('description'));
		// var_dump($course_details);
		$add_course = $this->Course->create_course($course_details);
		if($add_course === TRUE){
		redirect('http://host-2:8888/');
		}
		else { 
			echo "issue";
			}
		}
			
		}
?>