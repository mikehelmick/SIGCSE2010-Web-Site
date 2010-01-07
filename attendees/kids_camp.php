<?php
 $title = "SIGCSE 2010 - Kids Camp";
 $menu = "attendees";
 include("../parts/top.php");
?>        <!-- <h2>Important Dates</h2> -->
        
              
<?php include("../parts/attendees_left.php"); ?>
        

<?php include("../parts/middle.php"); ?>        

	         <!-- right area -->
             
<h1>SIGCSE 2010 Kids Camp</h1>
 
<p>The SIGCSE 2010 Kids Camp is sponsored by Microsoft.</p>
<div class="imgRight"><img src="/sigcse2010/images/logos/sponsors/microsoft.png" /></div>

<p>Full information about the kids camp is available in the:
<ul>
 <li><img src="/sigcse2010/images/page_white_acrobat.png" align="absmiddle" />
     <a href="/sigcse2010/attendees/downloads/kidsCamp_regForm.pdf">Registration Form</a></li>
</ul>
</p> 

<p>You can register your children using the above form, or you can:
<ul>
  <li><a href="https://www.kiddiecorp.com/acmkids.htm">Register online</a></li>
</ul>
</p>

<div class="SectionHeader"><div class="Full">
<h2><a name="presentation">Questions</a></h2>
</div></div>   

<p>If you have questions, please contact:<br />
Kristine Nagel and Kimberly Voll<br />
<script>write_email( "sigcse10-kidscamp", "cs.xu.edu" );</script></p>



<?php
  $updated = filemtime( $_SERVER["SCRIPT_FILENAME"] );
  include("../parts/bottom.php");
 ?>
