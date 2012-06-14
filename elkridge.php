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
	<span class="graytitle">Elkridge Branch</span>
	<ul class="pageitem">
		<li class="textbox">
			6540 Washington Boulevard<br/>Elkridge, MD 21075
			<br/>Phone: (410) 313-5077<br/><br/>
			<?=mbranchHours ("elk")?>
		</li>
		<li class="menu">
		<a class="noeffect" href="http://maps.google.com/maps?q=6540+Washington+Blvd,+Elkridge,+MD+21075">
			<img alt="google maps" src="thumbs/maps.png" />
			<span class="name">Open in Google Maps</span><span class="arrow"></span></a>
		</li>
		<li class="menu">
		<a class="noeffect" href="tel:4103135077">
			<img alt="telephone" src="thumbs/telephone.png"/>
			<span class="name">Contact via telephone</span><span class="arrow"/>
		</a>
		</li>
	</ul>
</div>
<?php require_once 'footer.php';?>
</html>
