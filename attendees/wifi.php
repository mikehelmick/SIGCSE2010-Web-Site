<?php
 $title = "SIGCSE 2010 - Registration Gateway";
 $menu = "attendees";
 include("../parts/top.php");
?>        <!-- <h2>Important Dates</h2> -->
        
              
<?php include("../parts/attendees_left.php"); ?>
        

<?php include("../parts/middle.php"); ?>        

	         <!-- right area -->
             
<h1>SIGCSE 2010 Wi-Fi Access Codes</h1>
      
<p>If you are staying at the Hyatt, you can connect to the Hyatt-Wifi network with the access code <b>985645</b>. This will give you free Wi-fi access during your stay.</p>

<p>If you are staying at the hilton, the login is <b>hilton</b> and the password is <b>snowshoe</b>.</p>

<?php
  $updated = filemtime( $_SERVER["SCRIPT_FILENAME"] );
  include("../parts/bottom.php");
 ?>
