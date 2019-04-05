<?php

/*
Nathan Phifer : Validator Class #2

Major changes: 
+reusability on any form / input
+getErrors function
+addError function
+getDataType function
+new functions for validating and sanitizing inputs

*/

class Validator {
    private $data = array();
    private $dataSanitized = array();
    private $dataFinalized = array();
    private $errors = array(); 
    public $errorCount = 0;

    //my basic construct
    public function __construct()
    {

    }

    public function getFinalized()
    {
        return $this->dataFinalized;
    }

    public function setData($data)
    {
        $this->data = $data;
    }

    //will check my data array for empty values, if found it will utilize my addError() functionality
    public function isEmpty($array = null)
    {
    	if(!is_null($array)) {
    		foreach($array as $key => $data)
    		{
    		   $this->addError($Key, "Cannot be empty!");
    		}
    	}
    	
        foreach($this->data as $key => $data) 
        {
            if(empty($data))
            {
                $this->addError($key, "Cannot be empty!");
            }
        }
    }

    //will dynamically sanitize values depending on their data type, in this case we have all strings in our form
    //inside the "string" case I do a strict string check against my $key so then I can sanitize emails properly
    //my case "integer" was for testing purposes to make sure the getDataType function was working properly
    public function sanitizeValues()
    {
        if(!empty($this->data) && is_array($this->data)) {
            foreach($this->data as $key => $data)
            {
                $type = $this->getDataType($data);
                switch($type)
                {
                    case "string":
                        if($key === "email" || $key === "student_login_email2" || $key === "student_personal_email")
                            $this->dataSanitized[$key] = filter_var($data, FILTER_SANITIZE_EMAIL);
                        else 
                            $this->dataSanitized[$key] = filter_var($data, FILTER_SANITIZE_STRING);
                        break;
                    case "integer":
                        $this->dataSanitized[$key] = filter_var($data, FILTER_SANITIZE_NUMBER_INT);
                         break;
                }
            }
            return true;
        }
        print("Data is not an array!");
    }

    //will dynamically validate values depending on their data type, in this case we have all strings in our form
    //inside the "string" case I do a strict string check against my $key so then I can validate emails properly
    //my case "integer" was for testing purposes to make sure the getDataType function was working properly
    public function validateValues()
    {
        if(!empty($this->dataSanitized) && is_array($this->dataSanitized)) {
            foreach($this->dataSanitized as $key => $data)
            {
                $type = $this->getDataType($data);
                switch($type)
                {
                    case "string":
                        if($key === "email" || $key === "student_login_email2" || $key === "student_personal_email")
                        {
                            if(filter_var($data, FILTER_VALIDATE_EMAIL))
                            {
                                $this->dataFinalized[$key] = $data;
                            } else {
                                $this->addError($key, "Not a valid email address!");
                            }
                        } else if($key === "date")
                        {
                            if($this->isDate($data))
                            {
                                $this->dataFinalized[$key] = $data;
                            } else {
                                $this->addError($key, "Not a valid date!");
                            }
                        } else {
                            $this->dataFinalized[$key] = $data;
                        }
                        break;
                    case "integer":
                        if(filter_var($data, FILTER_VALIDATE_INT))
                        {
                            $this->dataFinalized[$key] = $data;
                        } else {
                            $this->addError($key, "Not a valid integer!");
                        }
                        break;
                }
            }
            return true;
        }
        print("Data is not an array!");
    }

    //returns all errors in the $errors array
    public function getErrors()
    {
        return $this->errors;
    }
    
    //returns dataType of what is passed
    public function getDataType($data)
    {
        return gettype($data);
    }

    //adds to errors array with message
    //adds +1 to errorCount
    private function addError($key, string $message)
    {
        $this->errors[$key] = $message;
        $this->errorCount = $this->errorCount + 1;
    }

    //check date for dd/MM/yyyy
    public function isDate($date)
    {
        return 1 === preg_match(
        '~^(((0[1-9]|[12]\\d|3[01])\\/(0[13578]|1[02])\\/((19|[2-9]\\d)\\d{2}))|((0[1-9]|[12]\\d|30)\\/(0[13456789]|1[012])\\/((19|[2-9]\\d)\\d{2}))|((0[1-9]|1\\d|2[0-8])\\/02\\/((19|[2-9]\\d)\\d{2}))|(29\\/02\\/((1[6-9]|[2-9]\\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))$~',
        $date);
    }
    

    // Didn't implement this, shouldn't really belong in this class
    // Next step would be to implement a Mailer class, or better yet, use a 3rd party open source Mailer class that works already...
    // Could make Mailer class, etc
    // public function sendMail($to, $message) {
    //     $headers = "From: Nathan <okrekt@gmail.com>\r\n";
    //     $headers.= "MIME-Version: 1.0\r\n";
    //     $headers.= "Content-type: text/html;charset=UTF-8\r\n";
    //     $headers.= "Reply-To: okrekt@gmail.com\r\n";

    //     $subject = "Submitted form Q/A";

    //     $mail = mail($to, $subject, $message, $headers);
    //     if($mail)
    //     {
    //       $this->_sent = true;
    //     }
    //   } 
}
?>