<?php
require_once '../mHclibrary/header.php';
$branch = $_GET["branch"];
?>
<div id="topbar">
  <div id="title">
  	Classes &#38; Events</div>
  <div id="leftnav">
    <a href="index.php">
    	<img alt="Howard County Library System mobile home" src="images/home.png"/>
    </a>
  </div>
  <div id="rightnav">
    <a href="choose-branch.php">Back</a>
  </div>
</div>

<div id="content">
	<span class="graytitle"><?php echo$branch; ?> branch</span>
<ul class="pageitem">

<li class="menu">
  <a href="show-events.php?lib=<?php echo$branch;?>&et=All">
  <span class="name">All </span>
  <span class="arrow"/> 
  </a>
</li>

<li class="menu">
  <a href="show-events.php?lib=<?php echo$branch;?>&et=Book Club">
  <span class="name">Book Clubs </span>
  <span class="arrow"/> 
  </a>
</li>

<li class="menu">
  <a href="show-events.php?lib=<?php echo$branch;?>&et=Children">
  <span class="name">Children's Class </span>
  <span class="arrow"/> 
  </a>
</li>

<li class="menu">
  <a href="show-events.php?lib=<?php echo$branch;?>&et=Contest">
  <span class="name">Contests </span>
  <span class="arrow"/> 
  </a>
</li>

<li class="menu">
  <a href="show-events.php?lib=<?php echo$branch;?>&et=Craft">
  <span class="name">Crafts </span>
  <span class="arrow"/> 
  </a>
</li>

<li class="menu">
  <a href="show-events.php?lib=<?php echo$branch;?>&et=Film">
  <span class="name">Films </span>
  <span class="arrow"/> 
  </a>
</li>

<li class="menu">
  <a href="show-events.php?lib=<?php echo$branch;?>&et=Financial Literacy">
  <span class="name">Financial Literacy </span>
  <span class="arrow"/> 
  </a>
</li>

<li class="menu">
  <a href="show-events.php?lib=<?php echo$branch;?>&et=Gardening">
  <span class="name">Gardening </span>
  <span class="arrow"/> 
  </a>
</li>

<li class="menu">
  <a href="show-events.php?lib=<?php echo$branch;?>&et=Health Matters">
  <span class="name">Health Matters </span>
  <span class="arrow"/> 
  </a>
</li>

<li class="menu">
  <a href="show-events.php?lib=<?php echo$branch;?>&et=Internet/Technology">
  <span class="name">Internet/Technology </span>
  <span class="arrow"/> 
  </a>
</li>

<li class="menu">
  <a href="show-events.php?lib=<?php echo$branch;?>&et=Meet the Author">
  <span class="name">Meet the Auther </span>
  <span class="arrow"/> 
  </a>
</li>

<li class="menu">
  <a href="show-events.php?lib=<?php echo$branch;?>&et=Miscellaneous">
  <span class="name">Miscellaneous </span>
  <span class="arrow"/> 
  </a>
</li>

</ul>

</div>
<?php require_once '../mHclibrary/footer.php';?>
</html>
