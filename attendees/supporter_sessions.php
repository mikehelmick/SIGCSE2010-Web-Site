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

<div class="imgRight"><img src="/sigcse2010/images/logos/sponsors/ibm.png" /></div>

<p>&nbsp;<br />&nbsp;<br />&nbsp;<br />&nbsp;</p>

<div class="SectionHeader"><div class="Full">
<h2><a name="intel">Intel</a></h2>
</div></div>

<h3>Gaming Architecture: Why Parallelism is Important</h3>
Thursday, March 11, 2010: 1:45pm to 3:00pm

<div class="imgRight"><img src="/sigcse2010/images/logos/sponsors/intel.png" /></div>

<p>Task and domain decompositions are two basic and powerful approaches of exploiting parallelism in a given problem. An effective decomposition requires careful partitioning of tasks and data, and a balanced mapping of these partitions across the available cores in a system. This panel will demonstrate how the use of appropriate game architecture enables easier decomposition and allows for a more effective application of threading in the creation of games. In addition, we will discuss the impact of threading, explore how gaming architecture can be used in variety of undergrad/grad courses, and how educators can prepare students for parallel-aware software engineering. </p>

<h3>Intel&reg; Atom&trade; Processors in Academia</h3>
Friday, March 12, 2010  1:30 PM to 2:45 PM

<p>This class will outline the next generation of Intel&reg; Atom&trade; processors available from Intel's Embedded and Communications Group.  These low power processors are finding increasing use in academic programs, not only as part of the curriculum, but also as a development platform for both undergraduate and post-graduate hardware and software projects.</p>

<p>This class will showcase a starter kit for the Intel Atom processor that is both a long life and low cost development solution Find out more about how to get started with a ready to use board, software tools, operating system support, and an ever growing ecosystem of add-ons.</p>

<p>Presented by Stewart Christie<br />
 Product Marketing Engineer<br />
 Intel Embedded Communications</p>

<div class="SectionHeader"><div class="Full">
<h2><a name="ibm">Microsoft</a></h2>
</div></div>

<p>Thursday, March 11, 2010  10:45 AM to 12:00 PM  [topic TBD]
</p>

<div class="imgRight"><img src="/sigcse2010/images/logos/sponsors/microsoft.png" /></div>

Friday, March 12, 2010  10:30 AM to 11:45 AM   [topic TBD]

<h3>Evolution of the Windows Kernel Architecture - Win7 and Beyond</h3>
<p>Friday, March 12, 2010  1:30 PM to 2:45 PM<br />
Dave Probert, Kernel Architect - Windows Core Operating Systems Division, Microsoft Corporation<br />
</p>
<p>The core architecture of the Windows kernel differs significantly from UNIX, though many of the functions are necessarily similar.  This talk will cover the Windows kernel architecture, focusing on areas of difference from UNIX.  Then some specific recent kernel changes will be described: integrity levels, removal of the hottest kernel locks, and the move towards user-mode scheduling to support the ConcRT task-based concurrency run-time.  Finally, the talk will look at some of the OS challenges ahead due to the silicon power-wall and the resulting heterogeneous multi-core/many-core systems that will dominate the PC landscape within a few years.</p>

<?php
  $updated = filemtime( $_SERVER["SCRIPT_FILENAME"] );
  include("../parts/bottom.php");
 ?>
