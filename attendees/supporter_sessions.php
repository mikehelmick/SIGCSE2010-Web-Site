<?php
 $title = "SIGCSE 2010 - Supporter Sessions";
 $menu = "attendees";
 include("../parts/top.php");
?>        <!-- <h2>Important Dates</h2> -->
        
              
<?php include("../parts/attendees_left.php"); ?>
        

<?php include("../parts/middle.php"); ?>        

	         <!-- right area -->
             
<h1>SIGCSE 2010 Supporter Sessions</h1>
      
<div class="errorExplanation">Support Sessions information is still being updated!</div>  

<div class="SectionHeader"><div class="Full">
<h2><a name="google">Google</a></h2>
</div></div>
Thursday, March 11, 2010: 3:45 to 5:00pm<br/>
Friday, March 12, 2010: 3:30 to 4:45pm

<div class="imgRight"><img src="/sigcse2010/images/logos/sponsors/google.png" /></div>

<p>&nbsp;<br/>&nbsp;<br/>&nbsp;<br/>&nbsp;</p>


<div class="SectionHeader"><div class="Full">
<h2><a name="ibm">IBM</a></h2>
</div></div>
Thursday, March 11, 2010: 1:45pm to 3:00PM

<div class="SectionHeader"><div class="Full">
<h2><a name="intel">Intel: Gaming Architecture: Why Parallelism is Important</a></h2>
</div></div>
Thursday, March 11, 2010: 1:45pm to 3:00pm

<div class="imgRight"><img src="/sigcse2010/images/logos/sponsors/intel.png" /></div>

<p>Task and domain decompositions are two basic and powerful approaches of exploiting parallelism in a given problem. An effective decomposition requires careful partitioning of tasks and data, and a balanced mapping of these partitions across the available cores in a system. This panel will demonstrate how the use of appropriate game architecture enables easier decomposition and allows for a more effective application of threading in the creation of games. In addition, we will discuss the impact of threading, explore how gaming architecture can be used in variety of undergrad/grad courses, and how educators can prepare students for parallel-aware software engineering. </p>


<?php
  $updated = filemtime( $_SERVER["SCRIPT_FILENAME"] );
  include("../parts/bottom.php");
 ?>
