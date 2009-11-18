<?php
 $title = "SIGCSE 2010 - Credits";
 $menu = "home";
 include("parts/top.php");
?>        <!-- <h2>Important Dates</h2> -->
        
        
        <h2>News</h2>
        <ul>
          <li> <b>SIGCSE 2009</b> The 40th ACM Technical Symposium on Computer Science Education will be held March 4-7, 2009, in Chattanooga, TN USA. <a href="http://www.cs.arizona.edu/sigcse09">http://www.cs.arizona.edu/sigcse09</a></li>
        </ul>
        

<?php include("parts/middle.php"); ?>        

	         <!-- right area -->
             
 
<h1>Website Credits</h1>
<p>
  <ul>
    <li>SIGCSE 2010 Logo designed by Cortny Helmick <script>write_email( "cortny.helmick", "gmail.com" );</script></li>
    <li>The SIGCSE 2010 Webmaster is Mike Helmick <script>write_email( "mike.helmick", "gmail.com" );</script></li>
  
    <li>The icon set used on this Web site is provided free under the Creative Commons License from famfamfam.com. <a href="http://www.famfamfam.com/lab/icons/silk/">http://www.famfamfam.com/lab/icons/silk/</a></li>
  </ul>    
</p>  
             
    
<?php
  $updated = filemtime( $_SERVER["SCRIPT_FILENAME"] );
  include("parts/bottom.php");
 ?>
