<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="app/css/main.css">
    <link rel="stylesheet" type="text/css" href="node_modules/bulma/css/bulma.css">
	<link rel="stylesheet" type="text/css" href="node_modules/normalize.css/normalize.css">
	<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Portfolio Day</title>
</head>
<body>
	<div class="container is-fluid">
		<div class="programs_container">
			<div class="columns program">
				<div class="column is-one-third program_animation space">
					<p class="program_animation_text">Animation</p>
				</div>
				<div class="column is-one-third program_video-editing space space_small-screeens">
					<p class="program_video-editing_text">Video Editing</p>
				</div>
				<div class="column is-one-third program_photography space space_small-screens_top">
					<p class="program_photography_text">Photography</p>
				</div>
				<div class="column is-one-third program_graphic-design space space_small-screeens">
					<p class="program_graphic-design_text">Graphic Design</p>
				</div>
				<div class="column is-one-third program_web-development space_small-screeens">
					<p class="program_web-development_text">Web Development</p>
				</div>
			</div>

			<!-- animation section -->
			<div class="students_container">
				
				<!-- titles for all classes -->
				<h1 class="student_animation-title">Animation</h1>
				<h1 class="student_video-editing-title">Video Editing</h1>
				<h1 class="student_photography-title">Photography</h1>
				<h1 class="student_graphic-design-title">Graphic Design</h1>
				<h1 class="student_web-dev-title">Web Development</h1>
				<div id="students" style="display: inline-flex;">
				<div class="columns students_a" onclick="getStudents('Animation');">
					<div class="column">
						<img src="https://picsum.photos/175/200" class="students_image" alt="student image">
					</div>
					<div class="column">
						<img src="https://picsum.photos/175/200" class="students_image space_image" alt="student image">
					</div>
					<div class="column">
						<img src="https://picsum.photos/175/200" class="students_image space_image" alt="student image">
					</div>
					<div class="column">
						<img src="https://picsum.photos/175/200" class="students_image space_image" alt="student image">
					</div>
					<div class="column">
						<img src="https://picsum.photos/175/200" class="students_image space_image" alt="student image">
					</div>
				</div>				

				<!-- Video Editing section -->
				
				<div class="columns students_ve" onclick="getStudents('Video Production');">
					<div class="column">
						<img src="https://picsum.photos/175/200" class="students_image" alt="student image">
					</div>
					<div class="column">
						<img src="https://picsum.photos/175/200" class="students_image space_image" alt="student image">
					</div>
					<div class="column">
						<img src="https://picsum.photos/175/200" class="students_image space_image" alt="student image">
					</div>
					<div class="column">
						<img src="https://picsum.photos/175/200" class="students_image space_image" alt="student image">
					</div>
					<div class="column">
						<img src="https://picsum.photos/175/200" class="students_image space_image" alt="student image">
					</div>
				</div>


				<!-- Photography section -->
				
				
				<div class="columns students_p" onclick="getStudents('Photography');">
					<div class="column">
						<img src="https://picsum.photos/175/200" class="students_image" alt="student image">
					</div>
					<div class="column">
						<img src="https://picsum.photos/175/200" class="students_image space_image" alt="student image">
					</div>
					<div class="column">
						<img src="https://picsum.photos/175/200" class="students_image space_image" alt="student image">
					</div>
					<div class="column">
						<img src="https://picsum.photos/175/200" class="students_image space_image" alt="student image">
					</div>
					<div class="column">
						<img src="https://picsum.photos/175/200" class="students_image space_image" alt="student image">
					</div>
				</div>
				

				<!-- graphic design section -->
				<div class="columns students_gd"  onclick="getStudents('Graphic Design');">
					<div class="column">
						<img src="https://picsum.photos/175/200" class="students_image" alt="student image">
					</div>
					<div class="column">
						<img src="https://picsum.photos/175/200" class="students_image space_image" alt="student image">
					</div>
					<div class="column">
						<img src="https://picsum.photos/175/200" class="students_image space_image" alt="student image">
					</div>
					<div class="column">
						<img src="https://picsum.photos/175/200" class="students_image space_image" alt="student image">
					</div>
					<div class="column ">
						<img src="https://picsum.photos/175/200" class="students_image space_image" alt="student image">
					</div>
				</div>
				

				<!-- web dev section -->
				
				
				<div class="columns students_wd"  onclick="getStudents('Web Development');">
					<div class="column">
						<img src="https://picsum.photos/175/200" class="students_image" alt="student image">
					</div>
					<div class="column">
						<img src="https://picsum.photos/175/200" class="students_image space_image" alt="student image">
					</div>
					<div class="column">
						<img src="https://picsum.photos/175/200" class="students_image space_image" alt="student image">
					</div>
					<div class="column">
						<img src="https://picsum.photos/175/200" class="students_image space_image" alt="student image">
					</div>
					<div class="column">
						<img src="https://picsum.photos/175/200" class="students_image space_image" alt="student image">
					</div>
				</div>
				
				
				</div>


				<div id="modals">
				</div>
				
				<h4 class="students_back">Back</h4>

			</div>
		</div>	
    </div>
	<script type="text/javascript" src="app/js/App.js"></script>	
	<script src="public/assets/scripts/templates.js"></script>
    <script src="public/assets/scripts/ajax.js"></script>
    <script src="public/assets/scripts/functions.js"></script>
</body>
</html>