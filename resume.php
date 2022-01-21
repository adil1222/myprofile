
<!DOCTYPE html>
<html lang="en"> 
<head>
	<title>DevCard - Bootstrap 5 vCard &amp; Portfolio Template For Developers</title>
	
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="DevCard Bootstrap 5 Template">
	<meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
	<link rel="shortcut icon" href="favicon.ico"> 
	
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
	
	<!-- FontAwesome JS -->
    <script defer src="assets/fontawesome/all.js"></script>
	
	<!-- Theme CSS -->  
	<link id="theme-style" rel="stylesheet" href="assets/css/css.css">

</head> 

<body>
	
	<header class="header text-center">	    
		<div class="force-overflow">
			<h1 class="blog-name pt-lg-4 mb-0"><a class="no-text-decoration" href="index.html">Adil Sahito</a></h1>
			
			<nav class="navbar navbar-expand-lg navbar-dark" >
				
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				
				<div id="navigation" class="collapse navbar-collapse flex-column" >
					<div class="profile-section pt-3 pt-lg-0">
						<img class="profile-image mb-3 rounded-circle mx-auto" src="profile-lg.jpg" alt="image" >			
						
						<div class="bio mb-3">Hi, my name is Adil Sahito and I'm a senior software engineer. Welcome to my personal website!</div><!--//bio-->
						<ul class="social-list list-inline py-2 mx-auto">
							<li class="list-inline-item"><a href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fab fa-github-alt fa-fw"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fab fa-stack-overflow fa-fw"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fab fa-codepen fa-fw"></i></a></li>
						</ul><!--//social-list-->
						<hr> 
					</div><!--//profile-section-->
					
					<ul class="navbar-nav flex-column text-start">
						<li class="nav-item">
							<a class="nav-link active" href="index.html"><i class="fas fa-user fa-fw me-2"></i>About Me<span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="portfolio.html"><i class="fas fa-laptop-code fa-fw me-2"></i>Portfolio</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="services.html"><i class="fas fa-briefcase fa-fw me-2"></i>Services &amp; Pricing</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="resume.html"><i class="fas fa-file-alt fa-fw me-2"></i>Resume</a>
						</li>
						<!-- <li class="nav-item">
							<a class="nav-link" href="blog-home.html"><i class="fas fa-blog fa-fw me-2"></i>Blog</a>
						</li> -->
						<li class="nav-item">
							<a class="nav-link" href="contact.html"><i class="fas fa-envelope-open-text fa-fw me-2"></i>Contact</a>
						</li>
						<!-- <li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								<i class="fas fa-cogs fa-fw me-2"></i>More Pages
							</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
								<li><a class="dropdown-item" href="project.html">Project Page</a></li>
								<li><a class="dropdown-item" href="blog-home.html">Blog Home 1</a></li>
								<li><a class="dropdown-item" href="blog-home-alt.html">Blog Home 2</a></li>
								<li><a class="dropdown-item" href="blog-post.html">Blog Post</a></li>
							</ul>
						</li> -->
					</ul>
					
					<div class="my-2">
						<a class="btn btn-primary" href="contact.html" target="_blank"><i class="fas fa-paper-plane me-2"></i>Hire Me</a>
					</div>
					
	
					<div class="dark-mode-toggle text-center w-100" style="display:none">
						<hr class="mb-4">
					    <h4 class="toggle-name mb-3 "><i class="fas fa-adjust me-1"></i>Dark Mode</h4>
					    
					    <input class="toggle" id="darkmode" type="checkbox">
					    <label class="toggle-btn mx-auto mb-0" for="darkmode"></label>
					    
					</div><!--//dark-mode-toggle-->
					
				</div>
			</nav>
		</div><!--//force-overflow-->
	</header>
	
	
	<div class="main-wrapper">
		<section class="cta-section theme-bg-light py-5">
			<div class="container text-center single-col-max-width">
				<h2 class="heading mb-3">Online Resume</h2>
				<a class="btn btn-primary" href="https://themes.3rdwavemedia.com/resources/sketch-template/resume-sketch-sketch-resume-template-for-software-developers/" target="_blank"><i class="fas fa-file-pdf me-2"></i>Download PDF Version</a>
				
				
			</div><!--//container-->
		</section>
		<?php 
			require "Admin/db_files/connection.php";
			$query = "SELECT * FROM resume";
			$result = mysqli_query($con,$query);
			if (mysqli_num_rows($result) > 0) {
				$row = mysqli_fetch_assoc($result);
				
			}
		?>
		<div class="container resume-container px-3 px-lg-5">
			<article class="resume-wrapper mx-auto theme-bg-light p-5 mb-5 my-5 shadow-lg">
				
				<div class="resume-header">
					<div class="row align-items-center">
						<div class="resume-title col-12 col-md-6 col-lg-8 col-xl-9">
							<h2 class="resume-name mb-0 text-uppercase"><?php echo $row['firstname']." ". $row['lastname'] ?></h2>
							<div class="resume-tagline mb-3 mb-md-0"><?php echo $row['designation']?></div>
						</div><!--//resume-title-->
						<div class="resume-contact col-12 col-md-6 col-lg-4 col-xl-3">
							<ul class="list-unstyled mb-0">
								<li class="mb-2"><i class="fas fa-phone-square fa-fw fa-lg me-2 "></i><a class="resume-link" href="tel:#"><?php echo $row['phone']?></a></li>
								<li class="mb-2"><i class="fas fa-envelope-square fa-fw fa-lg me-2"></i><a class="resume-link" href="mailto:#"><?php echo $row['email']?></a></li>
								<li class="mb-2"><i class="fas fa-globe fa-fw fa-lg me-2"></i><a class="resume-link" href="#"><?php echo $row['website']?></a></li>
								<li class="mb-0"><i class="fas fa-map-marker-alt fa-fw fa-lg me-2"></i><?php echo $row['address']?></li>
							</ul>
						</div><!--//resume-contact-->
					</div><!--//row-->
					
				</div><!--//resume-header-->
				<hr>
				<div class="resume-intro py-3">
					<div class="row align-items-center">
						<div class="col-12 col-md-3 col-xl-2 text-center">
						    <img class="resume-profile-image mb-3 mb-md-0 me-md-5  ms-md-0 rounded-circle mx-auto" src="profile-lg.jpg" alt="image">
						</div>
						
						<div class="col text-start">
							<?php echo $row['objective']?>
						</div><!--//col-->
					</div>
				</div><!--//resume-intro-->
				<hr>
				<div class="resume-body">
					<div class="row">
						<div class="resume-main col-12 col-lg-8 col-xl-9   pe-0   pe-lg-5">
							<section class="work-section py-3">
								<h3 class="text-uppercase resume-section-heading mb-4">Work Experiences</h3>
								<div class="item mb-3">
									
								<?php echo $row['experence'] ?>
									
								</div><!--//item-->
							</section><!--//project-section-->	
						</div><!--//resume-main-->
						<aside class="resume-aside col-12 col-lg-4 col-xl-3 px-lg-4 pb-lg-4">
							<section class="skills-section py-3">
								<h3 class="text-uppercase resume-section-heading mb-4">Skills</h3>
								<div class="item">
								<?php echo $row['skills'] ?>
									</div><!--//item-->
									
									</section><!--//skills-section-->
									<section class="education-section py-3">
										<h3 class="text-uppercase resume-section-heading mb-4">Education</h3>
										<?php echo $row['education'] ?>
									</section><!--//education-section-->
									<section class="education-section py-3">
										<h3 class="text-uppercase resume-section-heading mb-4">Awards</h3>
										<?php echo $row['awards'] ?>
									</section><!--//education-section-->
									<section class="skills-section py-3">
										<h3 class="text-uppercase resume-section-heading mb-4">Languages</h3>
										<?php echo $row['language'] ?>
									</section><!--//certificates-section-->
									<section class="skills-section py-3">
										<h3 class="text-uppercase resume-section-heading mb-4">Interests</h3>
										<?php echo $row['intrests'] ?>
									</section><!--//certificates-section-->
									
								</aside><!--//resume-aside-->
							</div><!--//row-->
						</div><!--//resume-body-->
						<hr>
						<div class="resume-footer text-center">
							<ul class="resume-social-list list-inline mx-auto mb-0 d-inline-block text-muted">
								<li class="list-inline-item mb-lg-0 me-3"><a class="resume-link" href="#"><i class="fab fa-github-square fa-2x me-2" data-fa-transform="down-4"></i><span class="d-none d-lg-inline-block text-muted">github.com/username</span></a></li>
								<li class="list-inline-item mb-lg-0 me-3"><a class="resume-link" href="#"><i class="fab fa-linkedin fa-2x me-2" data-fa-transform="down-4"></i><span class="d-none d-lg-inline-block text-muted">linkedin.com/in/username</span></a></li>
								<li class="list-inline-item mb-lg-0 me-lg-3"><a class="resume-link" href="#"><i class="fab fa-twitter-square fa-2x me-2" data-fa-transform="down-4"></i><span class="d-none d-lg-inline-block text-muted">@twittername</span></a></li>
							</ul>
						</div><!--//resume-footer-->
					</article>
					
				</div><!--//container-->
				
				<footer class="footer text-center py-4">
					<small class="copyright">Template Copyright &copy; <a href="https://themes.3rdwavemedia.com/" target="_blank">3rd Wave Media</a></small>
				</footer>
				
			</div><!--//main-wrapper-->

			<!-- *****CONFIGURE STYLE (REMOVE ON YOUR PRODUCTION SITE)****** -->  
			<div id="config-panel" class="config-panel config-panel-hide d-none d-lg-block">
				<div class="panel-inner">
					<a id="config-trigger" class="config-trigger text-center" href="#"><i class="fas fa-cog mx-auto" data-fa-transform="down-6" ></i></a>
					<h5 class="panel-title">Choose Colour</h5>
					<ul id="color-options" class="list-inline mb-0">
						<li class="theme-1 active list-inline-item"><a data-style="assets/css/theme-1.css" href="#"></a></li>
						<li class="theme-2  list-inline-item"><a data-style="assets/css/theme-2.css" href="#"></a></li>
						<li class="theme-3  list-inline-item"><a data-style="assets/css/theme-3.css" href="#"></a></li>
						<li class="theme-4  list-inline-item"><a data-style="assets/css/theme-4.css" href="#"></a></li>
						<li class="theme-5  list-inline-item"><a data-style="assets/css/theme-5.css" href="#"></a></li>
						<li class="theme-6  list-inline-item"><a data-style="assets/css/theme-6.css" href="#"></a></li>
						<li class="theme-7  list-inline-item"><a data-style="assets/css/theme-7.css" href="#"></a></li>
						<li class="theme-8  list-inline-item"><a data-style="assets/css/theme-8.css" href="#"></a></li>
						<li class="theme-9  list-inline-item"><a data-style="assets/css/theme-9.css" href="#"></a></li>
						<li class="theme-10  list-inline-item"><a data-style="assets/css/theme-10.css" href="#"></a></li>
					</ul>
					<a id="config-close" class="close" href="#"><i class="fa fa-times-circle"></i></a>
				</div><!--//panel-inner-->
			</div><!--//configure-panel-->

			<!-- Javascript -->          
			<script src="assets/plugins/popper.min.js"></script> 
			<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
			
			<!-- Dark Mode -->
			<script src="assets/plugins/js-cookie.min.js"></script>
			<script src="assets/js/dark-mode.js"></script>

			<!-- Style Switcher (REMOVE ON YOUR PRODUCTION SITE) -->
			<script src="assets/js/demo/style-switcher.js"></script>     
			

		</body>
		</html> 

