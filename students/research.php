<?php
 $title = "SIGCSE 2010 - Student Research Contest Submission Guidelines";
 $menu = "students";
 include("../parts/top.php");
?>        <!-- <h2>Important Dates</h2> -->
        
              
<?php include("../parts/students_left.php"); ?>
        

<?php include("../parts/middle.php"); ?>        

	         <!-- right area -->
<?php include("../parts/studentresearch.php"); ?>             

<?php
  $updated = filemtime( $_SERVER["SCRIPT_FILENAME"] );
  include("../parts/bottom.php");
 ?>
