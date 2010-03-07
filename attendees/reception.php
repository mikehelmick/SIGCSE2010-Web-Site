<?php
 $title = "SIGCSE 2010 - Registration Gateway";
 $menu = "attendees";
 include("../parts/top.php");
?>        <!-- <h2>Important Dates</h2> -->
        
              
<?php include("../parts/attendees_left.php"); ?>
        

<?php include("../parts/middle.php"); ?>        

	         <!-- right area -->
             
<h1>SIGCSE 2010 Reception</h1>
      
<p><b>When:</b> Thursday, March 11, 2010   7:00 PM to 10:00 PM</p>

<p><b>Where:</b> The Hilton Crystal Ballroom. <i>Please note that while there are two symposium hotels, the reception is being held at the <b>Hilton</b>.  The skywalk route from the Hyatt and Midwest Airlines Center to the Hilton will be open throughout the reception. There will also be a coat check service available for a small fee.</i> </p>


<?php
  $updated = filemtime( $_SERVER["SCRIPT_FILENAME"] );
  include("../parts/bottom.php");
 ?>
