<?php
session_start();
require_once("../root.php");
require_once(ROOT . "/inc/Students.class.php");

if(isset($_POST['student_first_name'])) :
    $data = array();
    $data['success'] = false;
    $validateData = $_POST;

    $student = new Student($validateData);
    
    if($student->validate()) :
        $data['success'] = true;

        $safeData = $student->validator->getFinalized();
        
        $user = $safeData['student_login_username'];
        if($student->save($user, $safeData)) :
            $data['success'] = true;
            $data['savedToDb'] = true;
        else :
            $data['savedToDb'] = false;
        endif;
    else :
        $data['clearErrors'] = $validateData;
        $data['error'] = $student->errors;
    endif;
    
    if($data)
        echo json_encode($data);
    else
        header('Location: form.php');
    exit();
endif;

if(isset($_POST['student_login_username'])) :
        $data = array();
        $data['success'] = false;
        $validateData = $_POST;

        $student = new Student($validateData);

        if($student->validate()) :
            $data['success'] = true;

            $sanitizedUser = $student->validator->getFinalized();
            if($student->load($sanitizedUser['student_login_username'])) :
                $data['success'] = true;
                $data['inDB'] = true;
                $data['user'] = $sanitizedUser['student_login_username'];
                $data['userData'] = $student->studentData;
            else :
                $data['inDB'] = false;
                $data['error'] = $student->errors;
                $data['user'] = $sanitizedUser['student_login_username'];
            endif;
        else :
            $data['error'] = $student->errors;
        endif;

        if($data)
            echo json_encode($data);
        else
            header('Location: form.php');
        exit();
    endif;

   if(empty($data)) :
        header('Location: form.php');
   else :
        echo json_encode($data);
   endif;
?>