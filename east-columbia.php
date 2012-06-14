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
	<span class="graytitle">East Columbia Branch</span>
	<ul class="pageitem">
		<li class="textbox">
			6600 Cradlerock Way<br/>Columbia, MD 21044<br/>
			Phone: (410) 313-7700<br/><br/>
			<?=mbranchHours ("eco")?>
		</li>
		<li class="menu">
			<a class="noeffect" href="http://maps.google.com/maps?q=6600+Cradlerock+Way,+Columbia,+MD++21045">
				<img alt="google maps" src="thumbs/maps.png" />
				<span class="name">Open in Google Maps</span><span class="arrow"/>
			</a>
		</li>
		<li class="menu">
			<a class="noeffect" href="tel:4103137700">
				<img alt="telephone" src="thumbs/telephone.png"/>
				<span class="name">Contact via telephone</span><span class="arrow"/>
			</a>
		</li>
	</ul>

</div>
<?php require_once 'footer.php';?>
</html>
