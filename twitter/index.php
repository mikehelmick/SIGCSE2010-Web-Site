
<?php
 $title = "SIGCSE 2010 - Frequently Asked Questions";
 $menu = "twitter";
 include("../parts/top.php");
?>        <!-- <h2>Important Dates</h2> -->
     
     
<?php include("../parts/middle.php"); ?> 


<div class="SectionHeader"><div class="Full">
<h2>SIGCSE on Twitter</h2>
</div></div>   

<p>Leading up to, or during the conference, just tweet and include the #sigcse tag and it will show up on our Web site!</p>

<script src="http://widgets.twimg.com/j/2/widget.js"></script>
<script>
new TWTR.Widget({
  version: 2,
  type: 'search',
  search: 'sigcse',
  interval: 6000,
  title: 'What\'s happening at SIGCSE 2010?',
  subject: 'March 10-13, 2010, Milwaukee, WI, USA',
  width: 250,
  height: 300,
  theme: {
    shell: {
      background: '#8ec1da',
      color: '#ffffff'
    },
    tweets: {
      background: '#ffffff',
      color: '#444444',
      links: '#1985b5'
    }
  },
  features: {
    scrollbar: false,
    loop: true,
    live: true,
    hashtags: true,
    timestamp: true,
    avatars: true,
    behavior: 'default'
  }
}).render().start();
</script>




            
 <?php
  $updated = filemtime( $_SERVER["SCRIPT_FILENAME"] );
  include("../parts/bottom.php");
 ?>           