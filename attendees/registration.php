<?php
 $title = "SIGCSE 2010 - Registration Gateway";
 $menu = "attendees";
 include("../parts/top.php");
?>        <!-- <h2>Important Dates</h2> -->
        
              
<?php include("../parts/attendees_left.php"); ?>
        

<?php include("../parts/middle.php"); ?>        

	         <!-- right area -->

<div class="errorExplanation">Registration is not yet open.</div>          

<!--
Registration

As with past SIGCSE symposia, we are offering attendees three registration options: On-line, off-line, and on-site.
Early registration for SIGCSE members is just $190 for registrations made by February 1st, 2009. Details about late registration and many other symposium activity fees are available from our Symposium Fees page.

On-Site Registration
As of February 26th, on-site registration is the only registration option. We will be offering on-site registration at the following times:
Wednesday, March 4th: 3:00 p.m. - 9:30 p.m.
Thursday, March 5th: 7:30 a.m. - 4:00 p.m.
Friday, March 6th: 7:30 a.m. - 5:00 p.m.
Saturday, March 7th: 8:00 a.m. - 2:30 p.m.

On- and Off-Line (Remote) Registration
We're sorry, but our on-Line registration server is no longer available, and we are unable to accept faxed or mailed registration forms at this late date. Please plan to register on-site at the convention center when you arrive. The registration desk hours are given above.

-->

<?php
  $updated = filemtime( $_SERVER["SCRIPT_FILENAME"] );
  include("../parts/bottom.php");
 ?>
