<?php
require_once(ROOT . '/inc/validation.class.php');

class Student {
    public $studentData = array();
    private $studentId;
    private $db = null;
    public $errors = array();
    public $validator;

    public function __construct($data) {
        $this->db = new PDO('mysql:host=localhost;dbname=gullydsm_dmacc;charset=utf8', 
        'gullydsm_dmacc', 'wdv341');   
        $this->studentData = $data;
        $this->validator = new Validator();
    }

    function set($dataArray)
    {
        $this->studentData = $dataArray;
    }

    public function validate($dataArray = null) {
        $this->validator->setData($this->studentData);
        
        if(!is_null($dataArray)) {
        	$this->validator->isEmpty($dataArray);
        	if($this->validator->errorCount !== 0) :
        		$this->errors = $this->validator->getErrors();
        		return false;
        	endif;
        }
        
                $this->validator->sanitizeValues();
                $this->validator->validateValues();

                if($this->validator->errorCount === 0) :
                    return true;
                else :
                    $this->errors = $this->validator->getErrors();
                    return false;
                endif;
    }

    public function load($user) {
        $isLoaded = false;

        $stmt = $this->db->prepare("SELECT * FROM students WHERE student_login_username = ?");
        $stmt->execute(array($user));

        if ($stmt->rowCount() == 1) 
        {
            $dataArray = $stmt->fetch(PDO::FETCH_ASSOC);
         
            $this->set($dataArray);

            $isLoaded = true;
        }

        if(!$isLoaded) :
            $this->errors = array(
                'student_login_username' => "Not in the system!"
            );
        elseif($isLoaded) :
            $this->studentID = $this->db->lastInsertId();
        endif;

        return $isLoaded;
    }

    public function save($user, $data) {
        $isSaved = false;
        $secondaryAddress;

        if(isset($data['student_secondary_website_address'])) {
            $secondaryAddress = $data['student_secondary_website_address'];
        } else {
            $secondaryAddress = NULL;
        }

        if(!$this->load($user)) {
            $stmt = $this->db->prepare(
                "INSERT INTO students (student_login_username, student_first_name, student_last_name, student_program, student_secondary_program,
                student_website_address, student_personal_email, student_linkedin_profile, student_hometown, student_career_goals, student_hobbies,
                student_secondary_website_address) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)"
            );

            if(isset($data['student_program'])) {
                $program = $data['student_program'];
            } else {
                $program = "";
            }

            if(isset($data['student_secondary_program'])) {
                $secondaryProgram = $data['student_secondary_program'];
            } else {
                $secondaryProgram = "";
            }

            $isSaved = $stmt->execute(array(
                $data['student_login_username'],
                $data['student_first_name'],
                $data['student_last_name'], 
                $program, 
                $secondaryProgram, 
                $data['student_website_address'],
                $data['student_personal_email'],
                $data['student_linkedin_profile'],
                $data['student_hometown'],
                $data['student_career_goals'],
                $data['student_hobbies'],
                $secondaryAddress
            ));
        } else {
            if($this->load($user))
            {
                $stmt = $this->db->prepare(
                    "UPDATE students SET student_login_username = ?, student_first_name = ?, student_last_name = ?, student_program = ?, student_secondary_program = ?,
                    student_website_address = ?, student_personal_email = ?, student_linkedin_profile = ?, student_hometown = ?, student_career_goals = ?, student_hobbies = ?,
                    student_secondary_website_address = ? WHERE student_id = ?"
                );

                if(isset($data['student_program'])) {
                    $program = $data['student_program'];
                } else {
                    $program = "";
                }
    
                if(isset($data['student_secondary_program'])) {
                    $secondaryProgram = $data['student_secondary_program'];
                } else {
                    $secondaryProgram = "";
                }

                $isSaved = $stmt->execute(array(
                    $data['student_login_username'],
                    $data['student_first_name'],
                    $data['student_last_name'],
                    $program, 
                    $secondaryProgram, 
                    $data['student_website_address'],
                    $data['student_personal_email'],
                    $data['student_linkedin_profile'],
                    $data['student_hometown'],
                    $data['student_career_goals'],
                    $data['student_hobbies'],
                    $secondaryAddress,
                    $this->studentData['student_id']
                ));
            }
        }

        return $isSaved;
        // $secondaryWebAddress = (isset($data['student_secondary_website_address']) and !empty($data['student_secondary_website_address'])) ? $data['student_secondary_website_address'] : NULL;
        // echo $secondaryWebAddress;
        // if (! ($this->load($user)) )
        //     {
        //             // create a prepared statement to insert data into the table
        
        //             // execute the insert statement, passing in the data to insert
        //             try {

        //                 $stmt = $this->db->prepare(
        //                     "INSERT INTO students 
        //                         (student_login_username, student_first_name, student_last_name, student_program, student_secondary_program, student_website_address,
        //                         student_personal_email, student_linkedin_profile, student_hometown, student_career_goals, student_hobbies, student_secondary_website_address) 
        //                      VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
                        
        //                 $isSaved = $stmt->execute(array(
        //                     $data['student_login_username'],
        //                     $data['student_first_name'],
        //                     $data['student_last_name'],
        //                     $data['student_program'],
        //                     $data['student_secondary_program'],
        //                     $data['student_website_address'],
        //                     $data['student_personal_email'],
        //                     $data['student_linkedin_profile'],
        //                     $data['student_hometown'],
        //                     $data['student_career_goals'],
        //                     $data['student_hobbies'],
        //                     $secondaryWebAddress
        //                 ));

        //             } catch(PDOException $e) {

        //                 $isSaved = false;
        //                 echo $e;

        //             }
        //         }
        //         return $isSaved;
        //     }
        }
}
?>