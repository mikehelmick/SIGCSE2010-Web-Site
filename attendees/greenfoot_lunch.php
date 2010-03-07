<?php
 $title = "SIGCSE 2010 - Greenfoot Lunch";
 $menu = "attendees";
 include("../parts/top.php");
?>        <!-- <h2>Important Dates</h2> -->
        
              
<?php include("../parts/attendees_left.php"); ?>
        

<?php include("../parts/middle.php"); ?>        

	         <!-- right area -->
             
<h1>Greenfoot Lunch</h1>
      

<p>The Greenfoot Lunch is an event for everyone interested in finding out more about teaching programming with the Greenfoot environment. The event is aimed mainly at people who don't yet know much about Greenfoot, but will also include some information for current Greenfoot users.</p>

<p>Greenfoot is an educational programming environment that helps teaching object-oriented programming in Java through animation, games and simulations. Information and free downloads are available at <a href="http://www.greenfoot.org">http://www.greenfoot.org</a>.</p>

<p>The lunch event will include presentations from the Greenfoot development team, as well a free lunch. (Yes, there is such a thing as a free lunch!)</p>

<?php
  $updated = filemtime( $_SERVER["SCRIPT_FILENAME"] );
  include("../parts/bottom.php");
 ?>
