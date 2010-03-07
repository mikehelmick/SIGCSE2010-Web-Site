<?php
 $title = "SIGCSE 2010 - Floor Plans";
 $menu = "attendees";
 include("../parts/top.php");
?>        <!-- <h2>Important Dates</h2> -->
        
              
<?php include("../parts/attendees_left.php"); ?>
        

<?php include("../parts/middle.php"); ?>        

	         <!-- right area -->
             
<h1>SIGCSE 2010 Floor Plans</h1>
      
 <ul>
   <li>View the <a href="/sigcse2010/exhibitors/images/ACM_2010_Milwaukee_fp1.pdf">exhibit hall floorplan</a> for Milwaukee</li>
   <li>More information about SIGCSE 2010 exhibitors can be found on the <a href="/sigcse2010/exhibitors/">exhibitors page</a>.</li>
 </ul>

<?php
  $updated = filemtime( $_SERVER["SCRIPT_FILENAME"] );
  include("../parts/bottom.php");
 ?>
