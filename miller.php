<?php 
	require_once 'header.php';
	require_once '../includes/functions/display.php';
?>
<div id="topbar">
	<div id="title"></div>
	<div id="leftnav">
	<a href="index.php">
		<img alt="home" src="images/home.png"/>
	</a>
	</div>
	<div id="rightnav">
		<a href="locations-hours.php">Locations</a>
	</div>
</div>

<div id="content">

<span class="graytitle">Miller Branch</span>
	<ul class="pageitem">
		<li class="textbox">
			9421 Frederick Road<br/>Ellicott City, MD 21042<br />
			Phone: (410) 313-1950<br /><br />
			<?=mbranchHours ("miller")?>
		</li>
		<li class="menu">
			<a class="noeffect" href="http://maps.google.com/maps?q=9421+Frederick+Road,+Ellicott+City,+MD+21042">
			<img alt="google maps" src="thumbs/maps.png" />
			<span class="name">Open in Google Maps</span><span class="arrow"></span></a>
		</li>
		<li class="menu">
			<a class="noeffect" href="tel:4103131950">
			<img alt="telephone" src="thumbs/telephone.png"/>
			<span class="name">Contact via telephone</span><span class="arrow"/>
		</a>
		</li>
	</ul>
</div>
<?php require_once 'footer.php';?>
</html>
