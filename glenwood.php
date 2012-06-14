<?php 
	require_once 'header.php';
	require_once '../includes/functions/display.php';
?>
<div id="topbar">
<div id="title"> </div>
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
<span class="graytitle">Glenwood Branch</span>
	<ul class="pageitem">
		<li class="textbox">
			2350 State Route 97<br/>Cooksville, MD 21723<br/>
			Phone: (410) 313-5577<br/><br/>
			<?=mbranchHours ("gln")?>
		</li>
		<li class="menu">
			<a class="noeffect" href="http://maps.google.com/maps?q=Howard+County+Library+Glenwood+Branch&cd=1&ei=wKPWTMvyOZOYzAT12N2EDA&sll=39.305048,-77.028755&sspn=0.017265,0.032015&ie=UTF8&hl=en&view=map&cid=3496773751130093408&ved=0CG0QpQY&hq=Howard+County+Library+Glenwood+Branch&hnear=&ll=39.305895,-77.029098&spn=0.007206,0.01929&z=16&iwloc=A">
				<img alt="google maps" src="thumbs/maps.png" />
				<span class="name">Open in Google Maps</span><span class="arrow"/></a>
		</li>
		<li class="menu">
			<a class="noeffect" href="tel:4103135577">
				<img alt="telephone" src="thumbs/telephone.png"/>
				<span class="name">Contact via telephone</span><span class="arrow"/>
			</a>
		</li>
	</ul>
</div>
<?php require_once 'footer.php';?>
</html>
