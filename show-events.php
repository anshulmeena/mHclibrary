<?php
require 'includes/functions/events.php';
require_once '../mHclibrary/header.php';

$lib = $_GET["lib"]; 
$et = $_GET["et"];

if ($et == "All"){
	$et = "";
}
$count = 0;

$start_date = date("m/d/Y");

$xml = simplexml_load_file(getEvancedXML("All",1,"exml",7,$et,"All",$start_date));
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
    <a href="event-category.php?branch=<?php echo$lib?>">Back</a>
  </div>
</div>

<div id="content">
	<span class="graytitle"><?php echo$lib; ?> branch</span>
<ul class="pageitem">
<?php 
foreach ($xml->item as $item){
	if ($item->library == $lib){
?>
<li class="menu">
<a href="show-events.html.php?lib=<?php echo$lib;?>&title=<?php echo $item->title;?>">
<span class="name"><?php echo $item->title;?></span>
<span class="arrow"></span>
</a>
</li>
<?php 
	}
	$count ++;
}
if ($count == 0){
?>
<li class="textbox">
	No Events found.
</li>	
<?php }else if ($count/2 == 0 && $count == 0){
?>
<li class="textbox">
	No Events found.
</li>	
<?php }
?>
</ul>
</div>
<?php require_once '../mHclibrary/footer.php';?>
</html>

