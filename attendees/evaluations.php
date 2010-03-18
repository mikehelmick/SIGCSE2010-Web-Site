<?php
 $title = "SIGCSE 2010 - Registration Gateway";
 $menu = "attendees";
 include("../parts/top.php");
?>        <!-- <h2>Important Dates</h2> -->
        
              
<?php include("../parts/attendees_left.php"); ?>
        

<?php include("../parts/middle.php"); ?>        

	         <!-- right area -->
             
<h1>SIGCSE 2010 Symposium Evaluations</h1>
      

<p>The SIGCSE 2010 Conference Committee hopes that you enjoyed (or are still enjoying!) this year's symposium. To help us learn what we did well, and what we could have done better, we invite you to complete the Symposium Evaluation survey. If you attended one or more of the Wednesday and Friday evening workshops, we would appreciate receiving your feedback on those as well. These survey results not only inform the 2010 committee, they also provide valuable insight to the members of the SIGCSE 2011 committee.</p>

<p>To complete an evaluation on-line, please select one of the following links. Note that neither survey requires a password:

<ul>
 <li><a href="http://www.surveymonkey.com/s/SIGCSE2010">SIGCSE 2010 Symposium Evaluation</a></li>
 <li><a href="http://www.surveymonkey.com/s/SIGCSE2010Workshops">Wednesday Evening, Friday Evening, and Saturday Workshop Evaluations (to be completed once per workshop attended)</a></li>
</ul>
</p>

<p>Please be aware: If you are unable or unwilling to complete either or both of these surveys on-line, paper copies of the surveys are available from the symposium registration desk at the convention center.</p>

<p>Thank you!  </p>


<?php
  $updated = filemtime( $_SERVER["SCRIPT_FILENAME"] );
  include("../parts/bottom.php");
 ?>

