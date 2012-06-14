<?php 
	require 'header.php';
	//require('../includes/connections.php');
	$db = NewADOConnection($config['db_type']);
	$db->Connect($config['db_host'], $config['db_login'], $config['db_password'], $config['db_database']);
	
	$start_date = date("Y-m-d h:m:s");
	$nextMonth = date("m") + 1;
	$nextWeek = date("d") + 10;
	$end_date = date("Y-".$nextMonth."-d h:m:s");
	//$end_date = date("Y-m-d 23:59:59");
	
	$query = "Select title, body from announcements where start_date >= '$start_date' and end_date <= '$end_date'";
	
	$result = $db->Execute($query);
	//var_dump($resultS);
	$db->close();
?>
<ul class='pageitem'>
	<li class="center">
		<img alt="Howard County Library System Logo" src="images/hcls_mobile_logo.png"/>
	</li>
</ul>
<div id="content">
	<span class="graytitle">Welcome!</span>
	<ul class="pageitem">
		<? if($result->RowCount()){?>
		<li class="menu">
		  <a href="announcements.php">
		  <img alt="locations" src="thumbs/info.png" />
		  <span class="name">Announcements</span>
		  <span class="arrow"></span>
		  </a>
		</li>		
		<? } ?> 
		<li class="menu">
		  <a href="locations-hours.php">
		  <img alt="locations" src="thumbs/locations-n-hours.png" />
		  <span class="name">Locations &#38; Hours</span>
		  <span class="arrow"></span>
		  </a>
		</li>

		<li class="menu">
		  <a href="new-n-hot-items.php">
		  <img alt="new" src="thumbs/new-n-hot.png" />
		  <span class="name">New &#38; Hot Items </span>
		  <span class="arrow"> </span>
		  </a>
		</li>

		<li class="menu">
		  <a href="https://polaris.hclibrary.org/mobile/Search">
		  <img alt="catalog" src="thumbs/mobile_search.png" />
		  <span class="name">Search the Catalog </span>
		  <span class="arrow"> </span>
		  </a>
		</li>

		<li class="menu">
		  <a href="https://polaris.hclibrary.org/Mobile/MyAccount/Logon">
		  <img alt="account" src="thumbs/acountlogin.png" />
		  <span class="name">My Account </span>
		  <span class="arrow"> </span>
		  </a>
		</li>
		
		<li class="menu">
		  <a href="social.php">
		  <img alt="social" src="thumbs/social.png" />
		  <span class="name">Social Networks </span>
		  <span class="arrow"> </span>
		  </a>
		</li>

		<li class="menu">
		  <a href="contact-us.php">
		  <img alt="support" src="thumbs/contact.png" />
		  <span class="name">Contact Us</span>
		  <span class="arrow"></span>
		  </a>
		</li>
	</ul>
</div>
<?php require 'footer.php';?>
</html>
