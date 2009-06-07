<?php
 $title = "SIGCSE 2010 - Blog";
 $menu = "blog";
 include("../parts/top.php");
?>        <!-- <h2>Important Dates</h2> -->
        
              
<?php include("../parts/main_left.php"); ?>
        

<?php include("../parts/middle.php"); ?>        

	         <!-- right area -->
<iframe src="http://sigcse2010.blogspot.com/" width="100%" height="800px" scrolling="yes" />


<?php
  $updated = filemtime( $_SERVER["SCRIPT_FILENAME"] );
  include("../parts/bottom.php");
 ?>
