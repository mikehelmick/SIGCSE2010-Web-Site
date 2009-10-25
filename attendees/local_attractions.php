<?php
 $title = "SIGCSE 2010 - Local Attractions";
 $menu = "attendees";
 include("../parts/top.php");
?>        <!-- <h2>Important Dates</h2> -->
        
              
<?php include("../parts/attendees_left.php"); ?>
        

<?php include("../parts/middle.php"); ?>        

	         <!-- right area -->
             
<h1>SIGCSE 2010 Local Attractions</h1>
      
<div class="errorExplanation">Information is coming soon!</div>  

<p>Guide to local Milwaukee pubs: <a href="http://www.budgettravel.com/bt-dyn/content/article/2009/03/10/AR2009031002030.html">budgettravel.com</a></p>


<?php
  $updated = filemtime( $_SERVER["SCRIPT_FILENAME"] );
  include("../parts/bottom.php");
 ?>
