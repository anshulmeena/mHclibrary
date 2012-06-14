<?php
require 'includes/functions/events.php';
require_once '../mHclibrary/header.php';
$lib = $_GET["lib"];
$title = $_GET["title"];

$start_date = date("m/d/Y");
$xml = simplexml_load_file(getEvancedXML("All",1,"exml",7,"","All",$start_date));

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
	<span class="graytitle"><?php echo$lib; ?> branch</span>
<ul class="pageitem">



<?php 
foreach ($xml->item as $item){
	if ($item->library == $lib){
		if ($item->title == $title){
?>
<li class="textbox">
	<b><?php echo $item->title;?></b><br />
	<?php echo $item->date;?><br />
	<?php echo $item->description;?><br />
	<?php echo $item->location;?><br />
	<?php echo $item->library;?><br />
</li>
<?php 
		}
	}
}
?>


</ul>

</div>
<?php require_once '../mHclibrary/footer.php';?>
</html>
