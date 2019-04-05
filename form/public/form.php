<?php
session_start();
require_once("../root.php");
require_once(ROOT . "/inc/validation.class.php");
?>
<!doctype html>
<head>
    <?php require_once(ROOT . "/public/css/styles.html"); ?>
    <script src="js/validation.js"></script>
    <script src="js/ajax.js"></script>
    <style>
        html, body {
            height: 100%;
            margin: 0;
        }

        .container-fluid, .row {
            padding: 0 !important;
            margin: 0 !important;
        }

        #register-form, #security-form {
            display: none;
        }

        input {
            width: 100%;
            height: auto;
        }
        
        .error {
            color: red;
            padding: 0.2em !important;
            margin: 0 !important;
        }

        .success {
            color: green;
        }

        form {
            width: 50%;
        }

        select {
            width: 75%;
        }

        input {
            width: 75%;
            border-top: 0;
            border-left: 0;
            border-right: 0;
            border-bottom: 1px solid black;
        }

        input:focus {
            outline: none;
        }

        input.login, input.register, input.reset {
            width: 25%;
        }

        label {
            margin: 0;
        }

        @media only screen and (max-width:768px) {
            input, select {
                width: 100%;
            }
        }

        @font-face {
        font-family: 'portfolio-font';
        src:  url('css/fonts/Museo_Slab_100.otf') format('woff2'),
                url('myfont.woff') format('woff');
        }   

        label, input {
            font-family: 'portfolio-font',Fallback,sans-serif;
        }

        p.response {
            margin: 0;
        }

    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">

        <div class="col-md-12 d-flex justify-content-center">
            <img src="images/logo.png" height="200px"/>
        </div>

        <div class="col-md-12 d-flex justify-content-center">
            <form id="login-form" action="processform.php" method="POST">
                <div class="row">
                    <div class="col-md-12 d-flex flex-column align-items-center">
                    <label for="student_login_username" class="student_login_username">Enter Username: (recommended DMACC email) </label> 
                        <input type="text" name="student_login_username" id="student_login_username" class="input student_login_username"/>
                    <p class="student_login_username-error"></p>
                        <input type="button" value="Submit" name="student_submit" class="login"/>
                    </div>
                </div>
            </form>
        </div>

        <div class="col-md-12 d-flex justify-content-center">
            <form id="register-form" action="processform.php" method="POST">
                    <div class="row">

                        <div class="col-md-12 d-flex justify-content-center">
                            <p class="welcome-back"></p>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-center" style="display: none;">
                                <input type="hidden" name="student_login_username" id="student_login_username" class="input student_login_username"/>
                            <p class="student_login_username-error"></p>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-center">
                            <label for="student_first_name" class="student_first_name">First Name:</label> 
                                <input type="text" name="student_first_name" id="student_first_name" class="input student_first_name" autocomplete="on"/>
                            <p class="student_first_name-error"></p>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-center">
                            <label for="student_last_name" class="student_last_name">Last Name:</label> 
                                <input type="text" value="<?php echo (isset($_SESSION['data'])) ? $_SESSION['data']['student_last_name'] : "" ?>" name="student_last_name" id="student_last_name" class="input student_last_name" autocomplete="on"/>
                            <p class="student_last_name-error"></p>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-center">
                            <label for="student_program" class="student_program">Program:</label> 
                                <select name="student_program" form="register-form">
                                    <option selected="true" disabled="disabled">Choose field</option>
                                    <option value="Animation">Animation</option>
                                    <option value="Graphic Design">Graphic Design</option>
                                    <option value="Photography">Photography</option>
                                    <option value="Video Production">Video Production</option>
                                    <option value="Web Development">Web Development</option>
                                </select>
                            <p class="student_program-error"></p>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-center">
                            <label for="student_secondary_program" class="student_secondary_program">Secondary Program:</label> 
                                <select name="student_secondary_program" form="register-form">
                                    <option selected="true" disabled="disabled">Choose field</option>
                                    <option value="Animation">Animation</option>
                                    <option value="Graphic Designn">Graphic Design</option>
                                    <option value="Photography">Photography</option>
                                    <option value="Video Production">Video Production</option>
                                    <option value="Web Development">Web Development</option>
                                </select>
                            <p class="student_secondary_program-error"></p>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-center">
                            <label for="student_website_address" class="student_website_address">Website Address: </label> 
                                <input type="url" name="student_website_address" id="student_website_address" class="input student_website_address"/>
                            <p class="student_website_address-error"></p>
                        </div>
                        <div id="student_secondary_website_address" class="col-md-12 d-flex flex-column align-items-center">
                            <label for="student_secondary_website_address" class="student_secondary_website_address">Secondary Website Address (github, bitbucket, etc.): </label> 
                                <input type="url" name="student_secondary_website_address" class="input student_secondary_website_address"/>
                            <p class="student_secondary_website_address-error"></p>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-center">
                            <label for="student_personal_email" class="student_personal_email">Personal Email:</label> 
                                <input type="email" name="student_personal_email" id="student_personal_email" class="input student_personal_email"/>
                            <p class="student_personal_email-error"></p>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-center">
                            <label for="student_linkedin_profile" class="student_linkedin_profile">LinkedIn Profile:</label> 
                                <input type="text" name="student_linkedin_profile" id="student_linkedin_profile" class="input student_linkedin_profile"/>
                            <p class="student_linkedin_profile-error"></p>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-center">
                            <label for="student_hometown" class="student_hometown">Hometown:</label> 
                                <input type="text" name="student_hometown" id="student_hometown" class="input student_hometown"/>
                            <p class="student_hometown-error"></p>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-center">
                            <label for="student_career_goals" class="student_career_goals">Career Goals:</label> 
                                <input type="text" name="student_career_goals" id="student_career_goals" class="input student_career_goals"/>
                            <p class="student_career_goals-error"></p>
                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-center">
                            <label for="student_hobbies" class="student_hobbies">Hobbies:</label> 
                                <input type="text" name="student_hobbies" id="student_hobbies" class="input student_hobbies"/>
                            <p class="student_hobbies-error"></p>
                        </div>
                        <div class="col-md-12 d-flex justify-content-center align-items-center">
                            <input type="button" value="Submit" name="student_submit" class="m-1 p-1 register"/>
                            <input type="reset" value="Reset" name="student_reset" class="m-1 p-1 reset"/>
                        </div>
                    </div>
            </form>
        </div>
        
        <div class="col-md-12 d-flex justify-content-center">
             <p class="response"></p>
        </div>
        </div>
    </div>
</body>
</html>