$(document).ready(function(){

			var animation_bubble = $(".program_animation");
			var video_editing_bubble = $(".program_video-editing");
			var photography_bubble = $(".program_photography");
			var graphic_design_bubble = $(".program_graphic-design");
			var web_development_bubble = $(".program_web-development");

		  $(".program_animation").click(function(){
		    
		    animation_bubble.delay(725).animate({height: '165px', width: '165px', opacity: '0.4'}, 280).fadeOut(150);
    		animation_bubble.animate({height: '140px',width: '140px', opacity: '1'}, 180);

    		//hide all of the bubbles that haven't been clicked
    		video_editing_bubble.hide(400);
    		photography_bubble.hide(400);
    		graphic_design_bubble.hide(400);
    		web_development_bubble.hide(400);

		    
		    //student pictures fade in along with a quick fadein fadeout of bubble pop
				$(".students_a").css({"display" : "inline-flex"}).delay(1000).fadeIn("slow");
				$(".students_back").delay(1000).fadeIn("slow");
				$(".student_animation-title").delay(1000).fadeIn("slow");
			});
		  $(".program_video-editing").click(function(){
		    
		    video_editing_bubble.delay(725).animate({height: '165px', width: '165px', opacity: '0.4'}, 280).fadeOut(150);
    		video_editing_bubble.animate({height: '140px',width: '140px', opacity: '1'}, 180);

    		//hide all of the bubbles that haven't been clicked
    		animation_bubble.hide(400);
    		photography_bubble.hide(400);
    		graphic_design_bubble.hide(400);
    		web_development_bubble.hide(400);
		    
		    //student pictures fade in along with a quick fadein fadeout of bubble pop
				$(".students_ve").delay(1000).fadeIn("slow").css({"display" : "inline-flex"});
				$(".students_back").delay(1000).fadeIn("slow");
				$(".student_video-editing-title").delay(1000).fadeIn("slow");
		  });
		  $(".program_photography").click(function(){
		    
		    photography_bubble.delay(725).animate({height: '165px', width: '165px', opacity: '0.4'}, 280).fadeOut(150);
    		photography_bubble.animate({height: '140px',width: '140px', opacity: '1'}, 180);

    		//hide all of the bubbles that haven't been clicked
    		video_editing_bubble.hide(400);
    		animation_bubble.hide(400);
    		graphic_design_bubble.hide(400);
    		web_development_bubble.hide(400);

		    
		    //student pictures fade in along with a quick fadein fadeout of bubble pop
				$(".students_p").delay(1000).fadeIn("slow").css({"display" : "inline-flex"});
				$(".students_back").delay(1000).fadeIn("slow");
				$(".student_photography-title").delay(1000).fadeIn("slow");
		  });
		  $(".program_graphic-design").click(function(){
		    
		    graphic_design_bubble.delay(725).animate({height: '165px', width: '165px', opacity: '0.4'}, 280).fadeOut(150);
    		graphic_design_bubble.animate({height: '140px',width: '140px', opacity: '1'}, 180);

    		//hide all of the bubbles that haven't been clicked
    		video_editing_bubble.hide(400);
    		photography_bubble.hide(400);
    		animation_bubble.hide(400);
    		web_development_bubble.hide(400);

		    
		    //student pictures fade in along with a quick fadein fadeout of bubble pop
				$(".students_gd").delay(1000).fadeIn("slow").css({"display" : "inline-flex"});
				$(".students_back").delay(1000).fadeIn("slow");
				$(".student_graphic-design-title").delay(1000).fadeIn("slow");
		  });
		  $(".program_web-development").click(function(){
		    
		    web_development_bubble.delay(725).animate({height: '165px', width: '165px', opacity: '0.4'}, 280).fadeOut(150);
    		web_development_bubble.animate({height: '140px',width: '140px', opacity: '1'}, 180);

				//hide all of the bubbles that haven't been clicked 
    		video_editing_bubble.hide(400);
    		photography_bubble.hide(400);
    		graphic_design_bubble.hide(400);
    		animation_bubble.hide(400);

		    //student pictures fade in along with a quick fadein fadeout of bubble pop
				$(".students_wd").delay(1000).fadeIn("slow").css({"display" : "inline-flex"});
				$(".students_back").delay(1000).fadeIn("slow");
				$(".student_web-dev-title").delay(1000).fadeIn("slow");
			});

			//show all of the bubbles if back button is clicked
			$(".students_back").click(function(){	
				
				animation_bubble.show(400);
				video_editing_bubble.show(400);
    		photography_bubble.show(400);
    		graphic_design_bubble.show(400);
				web_development_bubble.show(400);
				
				$(".students_a").hide(400);
				$(".students_ve").hide(400);
				$(".students_p").hide(400);
				$(".students_gd").hide(400);
				$(".students_wd").hide(400);

				$(".student_animation-title").hide(400);
				$(".student_video-editing-title").hide(400);
				$(".student_photography-title").hide(400);
				$(".student_graphic-design-title").hide(400);
				$(".student_web-dev-title").hide(400);

				$(".students_back").hide(400);
			})
		});

//use jquery toggle to toggle between different programs
//