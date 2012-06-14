<?
	require 'header.php';
	require('../includes/connections.php');
	$db = NewADOConnection($config['db_type']);
	$db->Connect($config['db_host'], $config['db_login'], $config['db_password'], $config['db_database']);
	
	$start_date = date("Y-m-d h:m:s");
	$nextMonth = date("m") + 1;
	$nextWeek = date("d") + 10;
	$end_date = date("Y-".$nextMonth."-d h:m:s");
	//$end_date = date("Y-m-d 23:59:59");
	
	$query = "Select title, body from announcements where start_date >= '$start_date' and end_date <= '$end_date'";
	//echo $query;
	
	$result = $db->Execute($query);
	//print_r($result);
?>
<link href="https://pactrain.hclibrary.org/Mobile/Content/Shared/Common.css" rel="stylesheet" type="text/css" />
<link href="https://pactrain.hclibrary.org/Mobile/Custom/Content/hcl_standerd/Theme.css" rel="stylesheet" type="text/css" />
<body>
	<div id="topbar">
		<div id="title">
			Announcements
		</div>
		<div id="leftnav">
			<a href="http://hclibrary.org/mobile/index.php">
			<img alt="Howard County Library System Mobile Home" src="https://hclibrary.org/mobile/images/home.png"/>
			</a>
		</div>
	</div>
    <ul class="pageitem">
	<li class="textbox">
	<p> 
    	<? 
    	foreach($result as $v){
			echo("<strong>".$v["title"]."</strong><br />");
			echo($v["body"]."<br /><br />");
		}
    	?> 
    </p>
    </li>
    </ul>
    <br />
    <? require_once 'footer.php'; ?>
</html>