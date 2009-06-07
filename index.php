<?php
 $title = "SIGCSE 2010 - Home";
 $menu = "home";
 include("parts/top.php");
?>        <!-- <h2>Important Dates</h2> -->
        
        
        <h2>News</h2>
        <ul>
          <li><img src="/sigcse2010/images/feed.png" /><a href="http://sigcse2010.blogspot.com/feeds/posts/default">Subscribe to our RSS feed!</a></li>
        
          <li><strong>Interested in volunteering at a future SIGCSE conference?</strong>  Please fill out our <a href="https://www.surveymonkey.com/s.aspx?sm=PxFt0jKgLgj_2fq8LBrmgKiw_3d_3d" target="_blank">volunteering survey</a>.<br/></li>
        </ul>
        

<?php include("parts/middle.php"); ?>        

	         <!-- right area -->
            
 
<h1>Welcome!</h1>
<p>The SIGCSE Technical Symposium addresses problems common among educators working to develop, implement and/or 
evaluate computing programs, curricula, and courses. The symposium provides a forum for sharing new ideas for syllabi, 
laboratories, and other elements of teaching and pedagogy, at all levels of instruction. We invite those interested in computer 
science education and computer science education research to contribute to SIGCSE 2010. </p>
   
<p>Following SIGCSE tradition, the symposium will provide a diverse selection of technical sessions and opportunities for learning 
and interaction.</p>  
             

<h1>CONFERENCE THEME: Making Contact </h1>
<p>SIGCSE 2010 continues the long tradition of bringing together colleagues from around the world to make contact via paper, 
panel, poster and special sessions, as well as workshops, birds-of-a-feather, and informal settings at breaks and meals. We 
celebrate and encourage these contacts that allow us to renew and make new connections as we discuss the challenges and 
excitement of computer science education. </p>
 
	
    
<?php
  $updated = filemtime( $_SERVER["SCRIPT_FILENAME"] );
  $mainPage = true;
  include("parts/bottom.php");
 ?>
