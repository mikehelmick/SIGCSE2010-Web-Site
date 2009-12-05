<?php
 $title = "SIGCSE 2010 - Travel Information";
 $menu = "attendees";
 include("../parts/top.php");
?>        <!-- <h2>Important Dates</h2> -->
        
              
<?php include("../parts/attendees_left.php"); ?>
        

<?php include("../parts/middle.php"); ?>        

	         <!-- right area -->
             
<h1>SIGCSE 2010 Travel Information</h1>
      
<div class="errorExplanation">This information is still being updated, check back soon!</div>  

<h3>Contents:</h3>
  <ul>
    <li><a href="#airline">Airline Service</a></li>
    <li><a href="#shuttle">Go Airport Shuttles</a></li>
    <li><a href="#rentals">Car Rentals</a></li>
    <li><a href="#parking">Daily Parking</a></li>
  </ul>

<div class="SectionHeader"><div class="Full">
<h2><a name="airline">&nbsp;</a>Airline Service</h2>
</div></div>

<p>Commercial airline service to Milwaukee is handled by the <a href="http://www.mitchellairport.com/">General Mitchell International Airport</a> (Code: MKE). Reserving a flight directly to Milwaukee will provide the most convenient access to the conference.  Please visit the airport's web site for the current list of airlines that serve Milwaukee.</p>

<div class="SectionHeader"><div class="Full">
<h2><a name="shuttle">&nbsp;</a>Go Airport Shuttles</h2>
</div></div>

<p>We have negotiated reduced costs for transportation to/from the airport from Go Airport Connection.  Attendees can reserve a round trip fare for $20 by booking at least 48 hours in advance
through the customized portal at <a href="http://goairportconnection.hudsonltd.net/res?USERIDENTRY=sigcse10&LOGON=GO">http://goairportconnection.hudsonltd.net/res?USERIDENTRY=sigcse10&amp;LOGON=GO</a>
</p>

<p>Attendees can also access this through the Go website (<a href="http://www.goairportconnection.com/">http://www.goairportconnection.com/</a>) and type in the code SIGCSE10 that will
take them to the customized portal.</p>

<div class="SectionHeader"><div class="Full">
<h2><a name="rentals">&nbsp;</a>Car Rentals</h2>
</div></div>
<div class="errorExplanation">Information coming soon.</div>

<div class="SectionHeader"><div class="Full">
<h2><a name="parking">&nbsp;</a>Daily Parking</h2>
</div></div>

<ul>
 <li>Convention Center Parking</li>
</ul>

<?php
  $updated = filemtime( $_SERVER["SCRIPT_FILENAME"] );
  include("../parts/bottom.php");
 ?>
