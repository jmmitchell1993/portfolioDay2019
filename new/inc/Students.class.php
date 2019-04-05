<?php
require_once("Base.class.php");

class Student extends Base {
    var $data = null;
    // table name this class works with
    var $tableName = "students";
    // keyfield of the table
    var $keyField = "student_id";
    // column names minus the keyword in the table
    var $columnNames = array(
        "student_login_username",
        "student_first_name",
        "student_last_name",
        "student_program",
        "student_secondary_program",
        "student_website_address",
        "student_personal_email",
        "student_linkedin_profile",
        "student_hometown",
        "student_career_goals",
        "student_hobbies",
        "student_secondary_website_address",
        "student_image_link"
    );  

    function __construct() {
        parent::__construct();
    }
    
    function loadByProgram($program, $specificColumns = null) {
        $columns = (!is_null($specificColumns)) ? $specificColumns : null;
            $data = parent::loadBySpecific("student_program", $program, $columns);
        
        if(!is_null($data) and is_array($data)) {
            $this->data = $data;
        }
    }   
	
	function loadById($id, $specificColumns = null) {
		$columns = (!is_null($specificColumns)) ? $specificColumns : null;
            $data = parent::loadBySpecific("student_id", $id, $columns);
        
        if(!is_null($data) and is_array($data)) {
            $this->data = $data;
        }
	}
}
?>