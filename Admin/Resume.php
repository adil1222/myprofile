<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Dashtreme - Multipurpose Bootstrap4 Admin Template</title>
  <!--favicon-->
  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon"/>
  <!-- Vector CSS -->
  <link href="assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>
  <!-- simplebar CSS-->
  <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="assets/css/sidebar-menu.css" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="assets/css/app-style.css" rel="stylesheet"/>
  <!-- skins CSS-->
  <link href="assets/css/skins.css" rel="stylesheet"/>
  

  <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
  <style>
      .anyClass {
  height:800px;
  overflow-y: scroll;
}
  </style>
</head>

<body>

    <!-- header -->
    <?php include "includes/header.php";?>
	<?php 
			require "db_files/connection.php";
			$query = "SELECT * FROM resume";
			$result = mysqli_query($con,$query);
			if (mysqli_num_rows($result) > 0) {
				$row = mysqli_fetch_assoc($result);
				
			}
		?>
    <!-- Content Starts -->
    <div class="container anyClass " style="margin-top:100px;">
   
	 <div class="col-12 col-lg-12">
	   <div class="card">
	     <div class="card-header border-0">Update Resume
		  <div class="card-action">
             <div class="dropdown">
             <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
              <i class="icon-options"></i>
             </a>
              <div class="dropdown-menu dropdown-menu-right">
              <a class="dropdown-item" href="javascript:void();">Action</a>
              <a class="dropdown-item" href="javascript:void();">Another action</a>
              <a class="dropdown-item" href="javascript:void();">Something else here</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="javascript:void();">Separated link</a>
               </div>
              </div>
             </div>
		 </div>
        <div class="col-12 col-lg-12 ">
            <div class="container mt-3 p-3 overflow-auto">
            <form method="post" action="db_files/resume.php">
                <div class="row">
                    <div class="form-group col-md-3">
                        <label for="exampleInputEmail1">First Name</label>
                        <input type="text" class="form-control" id="f_name" name="f_name" value="<?php echo $row['firstname']?>"  placeholder="Enter email">
                    </div>

                    <div class="form-group col-md-3">
                        <label for="exampleInputEmail1">Last Name</label>
                        <input type="text" class="form-control" id="l_name" name="l_name" value="<?php echo $row['lastname']?>" placeholder="Enter email">
                    </div>

                    <div class="form-group col-md-3">
                        <label for="exampleInputEmail1">Designation Title</label>
                        <input type="text" class="form-control" id="designation" name="designation" value="<?php echo $row['designation']?>"  placeholder="Enter email">
                    </div>

                    <div class="form-group col-md-3">
                        <label for="exampleInputEmail1">Phone No</label>
                        <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $row['phone']?>"  placeholder="Enter email">
                    </div>

                    <div class="form-group col-md-3">
                        <label for="exampleInputEmail1">Email-Address</label>
                        <input type="email" class="form-control" id="email" name="email" value="<?php echo $row['email']?>"  placeholder="Enter email">
                    </div>

                    <div class="form-group col-md-3">
                        <label for="exampleInputEmail1">Website Url</label>
                        <input type="text" class="form-control" id="website" name="website" value="<?php echo $row['website']?>"  placeholder="Enter email">
                    </div>

                    <div class="form-group col-md-3">
                        <label for="exampleInputEmail1">Address</label>
                        <input type="text" class="form-control" id="address" name="address" value="<?php echo $row['address']?>"  placeholder="Enter email">
                    </div>

                    <div class="form-group col-md-3">
                        <label for="exampleFormControlFile1">Update Profile Picture</label>
                        <input type="file" class="form-control-file" id="profile" name="profile">
                    </div>
                </div>
                <div class="form-group" >
                    <label for="exampleInputPassword1">Objective Text</label>
                    <textarea type="password" class="form-control" id="objective_text" name="objective_text" placeholder="Objective Text" >
                        <?php echo $row['objective']?>
                    </textarea>
                    <script>
                        CKEDITOR.replace( 'objective_text' );
                    </script>
                </div>

                <div class="form-group" >
                    <label for="exampleInputPassword1">Work Experences Text</label>
                    <textarea type="text" class="form-control" id="experences_text" name="experences_text" placeholder="Objective Text">
                        <?php echo $row['experence']?>
                    </textarea>
                    <script>
                        CKEDITOR.replace( 'experences_text' );
                    </script>
                </div>

                <div class="form-group" >
                    <label for="exampleInputPassword1">Projects Text</label>
                    <textarea type="password" class="form-control" id="project_text" name="project_text" placeholder="Objective Text" >
                        <?php echo $row['projects']?>
                    </textarea>
                    <script>
                        CKEDITOR.replace( 'project_text' );
                    </script>
                </div>

                <div class="form-group" >
                    <label for="exampleInputPassword1">Skills Text</label>
                    <textarea type="password" class="form-control" id="skills_text" name="skills_text" placeholder="Objective Text" >
                        <?php echo $row['skills']?>
                    </textarea>
                    <script>
                        CKEDITOR.replace( 'skills_text' );
                    </script>
                </div>

                <div class="form-group" >
                    <label for="exampleInputPassword1">Education Text</label>
                    <textarea type="password" class="form-control" id="edc_text" name="edc_text" placeholder="Objective Text" >
                        <?php echo $row['education']?>
                    </textarea>
                    <script>
                        CKEDITOR.replace( 'edc_text' );
                    </script>
                </div>

                <div class="form-group" >
                    <label for="exampleInputPassword1">Awards Text</label>
                    <textarea type="password" class="form-control" id="awards_text" name="awards_text" placeholder="Objective Text" >
                        <?php echo $row['awards']?>
                    </textarea>
                    <script>
                        CKEDITOR.replace( 'awards_text' );
                    </script>
                </div>

                <div class="form-group" >
                    <label for="exampleInputPassword1">Language Text</label>
                    <textarea type="password" class="form-control" id="language_text" name="language_text" placeholder="Objective Text" >
                            <?php echo $row['language']?>
                    </textarea>
                    <script>
                        CKEDITOR.replace( 'language_text' );
                    </script>
                </div>

                <div class="form-group" >
                    <label for="exampleInputPassword1">Intrests Text</label>
                    <textarea type="password" class="form-control" id="Intrests_text" name="Intrests_text" placeholder="Objective Text" >
                          <?php echo $row['intrests']?>  
                    </textarea>
                    <script>
                        CKEDITOR.replace( 'Intrests_text' );
                    </script>
                </div>

                

               
                <button type="submit" class="btn btn-success">Update Resume</button>
            </form>
            </div>
        </div>

	   </div>
	 </div>
	
    </div>


  <!-- Bootstrap core JavaScript-->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
	
 <!-- simplebar js -->
  <script src="assets/plugins/simplebar/js/simplebar.js"></script>
  <!-- sidebar-menu js -->
  <script src="assets/js/sidebar-menu.js"></script>
  <!-- loader scripts -->
  <script src="assets/js/jquery.loading-indicator.js"></script>
  <!-- Custom scripts -->
  <script src="assets/js/app-script.js"></script>
  <!-- Chart js -->
  
  <script src="assets/plugins/Chart.js/Chart.min.js"></script>
  <!-- Vector map JavaScript -->
  <script src="assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
  <script src="assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
  <!-- Easy Pie Chart JS -->
  <script src="assets/plugins/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
  <!-- Sparkline JS -->
  <script src="assets/plugins/sparkline-charts/jquery.sparkline.min.js"></script>
  <script src="assets/plugins/jquery-knob/excanvas.js"></script>
  <script src="assets/plugins/jquery-knob/jquery.knob.js"></script>
    
    <script>
        $(function() {
            $(".knob").knob();
        });
    </script>
  <!-- Index js -->
  <script src="assets/js/index.js"></script>

  
</body>
</html>
