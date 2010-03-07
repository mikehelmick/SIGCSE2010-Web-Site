<?php
 $title = "SIGCSE 2010 - Special Projects";
 $menu = "attendees";
 include("../parts/top.php");
?>        <!-- <h2>Important Dates</h2> -->
        
              
<?php include("../parts/attendees_left.php"); ?>
        

<?php include("../parts/middle.php"); ?>        

	         <!-- right area -->
             
<h1>SIGCSE 2010 Special Projects Showcase</h1>

<p>Saturday 13th March 2010<br/>
10.40am - 11.55am<br/>
Room 101CD</p>
 
 
<div class="SectionHeader"><div class="Full">
<h2>The Taulbee Report For the Rest of US</h2>
</div></div>
<p><b>Michael Goldweber<br/>
Xavier University</b></b>

<p>
The Taulbee report provides valuable data regarding the state of CS education at Ph.D. granting institutions.  This proposed project will undertake a representative survey of both undergraduate-only and Master's programs in the US.  The goal of this survey project is to complete the picture regarding the state of CS education.</p>
 

<div class="SectionHeader"><div class="Full">
<h2>Building a multi-perspective digital library to facilitate teaching computing research methods across the curriculum</h2>
</div></div>
<p><b>Hilary Holz &amp; Anne Applin<br />
CSU East Bay &amp; Ithaca College</b></p>
 
<p>
The project will build a sense-making multi-perspective digital library using Greenstone.  One student will be developing and modifying software to meet the needs of the multi-perspective aspect of the library under the direction of Hilary.  One student will assist in populating the MPDL under the direction of Anne.
 </p>
 
<div class="SectionHeader"><div class="Full">
<h2>Accessible Software Engineering for the Visually Impaired (ASE-VI)</h2>
</div></div>
<p><b>Stephanie Ludi<br />
Rochester Institute of Technology</b></p>
 
<p>
Success in a software development results from preparation and practice.  For visually impaired students course materials and assignments often pose challenges due to the visual presentation of many software engineering concepts. ASE-VI is a resource for computing educators, consisting of a set of accessible course modules and online community support.</p>
 
<div class="SectionHeader"><div class="Full">
<h2>RAT: a Relational Algebra Tutor</h2>
</div></div>
<p><b>Feng-Jen Yang<br />
University of North Texas</b></p>
 
<p>
An intelligent tutoring system to assist the learning of relational algebra.
</p>

<?php
  $updated = filemtime( $_SERVER["SCRIPT_FILENAME"] );
  include("../parts/bottom.php");
 ?>
