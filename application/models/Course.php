<?php
class Course extends CI_Model {

	public function create_course($course){
		$query ="INSERT INTO courses (title, description, created_at) 
		VALUES (?,?,?)";
		$values =array($course['title'],$course['description'], date("Y-m-d,H:i:s"));
		return $this->db->query($query,$values);
	}


	public function display_course(){

		return $this->db->query("SELECT * FROM courses") ->result_array();

	}


	public function delete_course(){



	}

}

?>