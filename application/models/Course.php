<?php
class Course extends CI_Model {

	public function create_course($course){
		$query ="INSERT INTO courses (title, description, created_at) 
		VALUES (?,?,?)";
		$values =array($course['title'],$course['description'], date("Y-m-d,H:i:s"));
		return $this->db->query($query,$values);
	}


	public function display_course(){

		return $this->db->query("SELECT id,title, description, DATE_FORMAT(created_at,'%b %d %Y %h:%i %p') FROM courses") ->result_array();

	}

	public function get_course_by_id($delete_course){
		return $this->db->query("SELECT * FROM courses WHERE id=?", array($delete_course))->row_array();
	}


	public function delete_course($id) {
		$query = "DELETE FROM courses WHERE id=?";
		$values=$id;
		return $this->db->query($query,$values);

	}

}

?>