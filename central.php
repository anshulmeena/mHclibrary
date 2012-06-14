<?php 
	require_once 'header.php';
	require_once '../includes/functions/display.php';
?>
<div id="topbar">
	<div id="title"></div>
	<div id="leftnav">
		<a href="index.php">
			<img alt="Howard County Library System mobile website home" src="images/home.png"/>
		</a>
	</div>
	<div id="rightnav">
 		<a href="locations-hours.php">Locations</a>
	</div>
</div>


<div id="content">
	<span class="graytitle">Central Branch</span>
	<ul class="pageitem">
		<li class="textbox">
			10375 Little Patuxent Parkway<br />Columbia, MD 21045
			<br/>Phone: (410) 313-7800<br /><br />
			<?=mbranchHours ("central")?>
		</li>
		<li class="menu">
			<a class="noeffect" href="http://maps.google.com/maps?q=1037+Little+Patuxent+Pkwy,+Columbia,+MD+21044">
				<img alt="google maps" src="thumbs/maps.png" />
				<span class="name">Open in Google Maps</span><span class="arrow"/>
			</a>
		</li>
		<li class="menu">
			<a class="noeffect" href="tel:4103137800">
				<img alt="telephone" src="thumbs/telephone.png"/>
				<span class="name">Contact via telephone</span><span class="arrow"/>
			</a>
		</li>
	</ul>
</div>
<?php require_once 'footer.php';?>
</html>
