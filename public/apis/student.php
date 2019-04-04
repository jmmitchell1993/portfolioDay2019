<?php
require_once('../../inc/Students.class.php');

//set up array of programs
$programs = array(
    "Graphic Design",
    "Photography",
    "Web Development",
    "Animation",
    "Video Production"
);

//check if program parameter isset
if(isset($_REQUEST['program'])) {
	
	//columns needed
	$columnsNeeded = array(
		"student_id",
		"student_first_name",
		"student_last_name",
		"student_image_link"
	);

    //get specified program
    $programSpecified = htmlspecialchars($_REQUEST['program']);

    //make sure the program is a valid program and isn't empty
    if(in_array($programSpecified, $programs) and !empty($programSpecified)) {

        //make a new student object
        $student = new Student();

        //load all students by the priamry program name
        $student->loadByProgram($programSpecified, $columnsNeeded);

        //this is the array of student data
        $data = $student->data;
    
        //check if the data is null
         if(!is_null($data)) {

            //encode our data for display
            echo json_encode($data);
         }
         else {
             
            //set errors
            $errors = array(
                "error" => "Sorry, no data found"
            );

            //encode our errors for display
            echo json_encode($errors);
         }
    }
}
//end of program paramter isset

/* --------------------------- */

//check if id parameter isset
if(isset($_REQUEST['id'])) {
	
	//columns needed
	$columnsNeeded = array(
		"student_id",
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
	
	//get specified id
	$studentId = htmlspecialchars($_REQUEST['id']);
	
	//make sure the id isn't empty
    if(!empty($studentId)) {

        //make a new student object
        $student = new Student();

        //load all students by the priamry program name
        $student->loadById($studentId, $columnsNeeded);

        //this is the array of student data
        $data = $student->data;
    
        //check if the data is null
         if(!is_null($data)) {

            //encode our data for display
            echo json_encode($data);
         }
         else {
             
            //set errors
            $errors = array(
                "error" => "Sorry, no data found"
            );

            //encode our errors for display
            echo json_encode($errors);
         }
    }
}
//end of id paramter isset
?>