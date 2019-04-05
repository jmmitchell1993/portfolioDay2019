$(function() {

    function isEmpty(array) {
        var errors = false;

        for(var data in array) {
            if (array.hasOwnProperty(data)) {
                if(array[data] == "")
                {
                    $("."+data+"-error").addClass('error');
                    $("."+data+"-error").html("Cannot be empty!");
                    errors = true;
                } else {
                    $("."+data+"-error").removeClass('error');
                    $("."+data+"-error").html("");
                }
             }
        }
        return errors;
    }

    function widthReqs(username) {
        if(username.length < 5) 
            return false;
        return true;
    }

    $("input.login").click(() => {
        let username = $("#student_login_username").val();

        let dataArray = new Array();
        dataArray['student_login_username'] = username;
        
        if(!isEmpty(dataArray))
        {
            if(widthReqs(username))
            {
                $(".student_login_username-error").removeClass('error');
                $(".student_login_username-error").html("");
                searchUser('login');
            } else {
                $(".student_login_username-error").addClass('error');
                $(".student_login_username-error").html("Username must have 5 or more characters");
            }
        }
    });

    $("input.register").click(() => {
        addToDb('register');
    });
    
    $("#login-form input").keypress(function(event){
	
	var keycode = (event.keyCode ? event.keyCode : event.which);
	if(keycode == '13'){
		searchUser('login');
		return false;	
	}
	
    });
    
    $("#register-form input").keypress(function(event){
	
	var keycode = (event.keyCode ? event.keyCode : event.which);
	if(keycode == '13'){
		addToDb('register');
		return false;
	}
	
    });
  
    function addToDb(id) {
        $("#" + id + "-form").off().submit(function(e) {
            var form = $(this);
            var url = form.attr('action');
    
            e.preventDefault();

            $.ajax({
                type: 'POST',
                dataType: 'json',
                url: url,
                data: form.serialize(),
                success: function(data) {
                    if(data.success) {
                        let safeData = data.log;
                        for(key in safeData) {
                            $("."+key+"-error").removeClass('error');
                            $("."+key+"-error").html("");
                        }
                        if(data.savedToDb) {
                            $("#register-form").hide();
                            $(".response").html("Form has been submitted, thank you. You can now login here: <a href='form.php'>Login</a>");
                            $(".response").removeClass('error');
                            $(".response").addClass('success');
                        } else {
                            $(".response").html("Something went wrong adding you to the database!");
                        }
                    } else {
                        if(!data.success) {
                            let tempErr = data.error;
                            let tempPost = data.clearErrors;
                            for(key in tempPost) {
                                $("."+key+"-error").removeClass('error');
                                $("."+key+"-error").html("");
                            }
                            for(key in tempErr) {
                                $("."+key+"-error").addClass('error');
                                $("."+key+"-error").html(tempErr[key]);
                            }
                            $(".response").html("Please fix your errors");
                            $(".response").removeClass('success');
                            $(".response").addClass('error');
                        }
                    }
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                    console.log("Status: " + textStatus);
                      console.log("Error: " + errorThrown);
                }
            });
        });
        $("#" + id + "-form").submit();
    }

    function searchUser(id) {
        $("#" + id + "-form").off().submit(function(e) {
            var form = $(this);
            var url = form.attr('action');
    
            e.preventDefault();

            $.ajax({
                type: 'POST',
                dataType: 'json',
                url: url,
                data: form.serialize(),
                success: function(data) {
                    if(data.success) {
                        if(data.inDB) {
                            $("#" + id + "-form").hide();
                            $(".welcome-back").html(`Welcome back, ${data.user}`);
                            $("#register-form #student_login_username").val(data.user);
                            $("#register-form").show();
                            let studentData = data.userData;
                            for(key in studentData) {
                                $(`input[name=${key}]`).val(studentData[key]);
                                if(key == "student_program" || key == "student_secondary_program") {
                                    $(`select[name=${key}]`).val(studentData[key]);
                                    
                                    if(studentData[key] == "Web Development") {
                                    	$(`input[name=student_secondary_website_address]`).prop('disabled', false);
                                    	$("#student_secondary_website_address").show();
                                    	$("#student_secondary_website_address").addClass('d-flex');
            				$("#student_secondary_website_address").addClass('flex-column');
            				$("#student_secondary_website_address").addClass('align-items-center');
                                    }
                                }
                            }
                        } else {
                            $("#" + id + "-form").hide();
                            $("#register-form #student_login_username").val(data.user);
                            $("#register-form").show();
                        }
                    } else {
                        if(!data.success) {
                            let temp = data.error;
                            for(key in temp) {
                                $("."+key+"-error").addClass('error');
                                $("."+key+"-error").html(temp[key]);
                            }
                        }
                    }
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                    console.log("Status: " + textStatus);
                      console.log("Error: " + errorThrown);
                }
            });
        });
        $("#" + id + "-form").submit();
    }

});