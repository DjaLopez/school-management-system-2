<?php 
session_start();
if (isset($_SESSION['admin_id']) && 
    isset($_SESSION['role'])) {

    if ($_SESSION['role'] == 'Admin') {
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin - Home</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="icon" href="../logo.png">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="body-home">
<div class="black-fill">

    <?php 
       include "inc/navbar.php";
     ?>
     <div class="container mt-5"> 
        <div class="container text-center">
             <div class="row row-cols-5">
               <a href="teacher.php" 
                  class="col btn btn-dark m-3 py-5">
                 <i class="fa fa-user-md fs-1" aria-hidden="true"></i><br>
                  <h5>Teachers</h5>
               </a> 
               <a href="student.php" class="col btn btn-dark m-3 py-5">
                 <i class="fa fa-graduation-cap fs-1" aria-hidden="true"></i><br>
                  <h5>Students</h5>
               </a> 
               <a href="" class="col btn btn-dark m-3 py-5">
                 <i class="fa fa-pencil-square fs-1" aria-hidden="true"></i><br>
                  <h5>Registrar Office</h5>
               </a> 
               <a href="" class="col btn btn-dark m-3 py-5">
                 <i class="fa fa-cubes fs-1" aria-hidden="true"></i><br>
                 <h5>Class </h5>
               </a> 
               <a href="" class="col btn btn-dark m-3 py-5">
                 <i class="fa fa-columns fs-1" aria-hidden="true"></i><br>
                 <h5> Section</h5>
               </a> 
               <a href="" class="col btn btn-dark m-3 py-5">
                 <i class="fa fa-calendar fs-1" aria-hidden="true"></i><br>
                 <h5>Schedule</h5>
               </a> 
               <a href="" class="col btn btn-dark m-3 py-5">
                 <i class="fa fa-book fs-1" aria-hidden="true"></i><br>
                 <h5> Course</h5>
               </a> 
               <a href="" class="col btn btn-dark m-3 py-5">
                 <i class="fa fa-envelope fs-1" aria-hidden="true"></i><br>
                 <h5> Message</h5>
               </a> 
               <a href="" class="col btn btn-primary m-4 py-4 col-5">
                 <i class="fa fa-cogs fs-1" aria-hidden="true"></i><br>
                 <h5> Settings</h5>
               </a> 
               <a href="../logout.php" class="col btn btn-warning m-4 py-4 col-5">
                 <i class="fa fa-sign-out fs-1" aria-hidden="true"></i><br>
                 <h5> Logout </h5>
               </a> 
             </div>
         </div>
     </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>	
    <script>
        $(document).ready(function(){
             $("#navLinks li:nth-child(1) a").addClass('active');
        });
    </script>

</body>
</html>
<?php 

  }else {
    header("Location: ../login.php");
    exit;
  } 
}else {
	header("Location: ../login.php");
	exit;
} 

?>
