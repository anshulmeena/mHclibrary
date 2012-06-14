<?php	
	require ("../includes/connections.php");
	$new_hot_title = $_GET['new_hot_title'];
	if($_GET['Books'] == "Books" || $new_hot_title == "Books"){
		$new_hot_title = "Books";
		$catid = 24;
	}
	else if($_GET['Music'] == "Music" || $new_hot_title == "Music"){
		$new_hot_title = "Music";
		$catid = 28;
	}
	else if($_GET['DVDs'] == "DVDs" || $new_hot_title == "DVDs"){
		$new_hot_title = "DVDs";
		$catid =30;
	}
	else if($_GET['Popular'] == "Popular" || $new_hot_title == "Popular"){
		$new_hot_title = "Popular";
		$catid =32;
	}
	else{
		$new_hot_title = "Error";
		echo "Parameters not passed";
	}

	$row = $db->GetRow("select * from rl_views where `id` ='".$catid."'");
	$category = $row['category'];
	$desc = $row['description'];

	if (!empty($row['group']))
		$catid_list = $row['group'];
	else
		$catid_list = $row['catid'];
	
	$default_sort = $row['default_sort'];
	$subquery = translateSubquery($row['subquery']);
	$linkid = $row['linkid'];
	$rss_days = $row['rss_days'];
	$limit = $row['preview_limit'];
		
	$poldb = NewADOConnection($config['dbp_type']);
	$poldb->Connect($config['dbp_host'], $config['dbp_login'], $config['dbp_password'], $config['dbp_database']);
			
	$start = $_GET['start'];
	$sort = $_GET['sort'];
	$term = $_GET['term'];
	$limit = $_GET['limit'];
	
	$last_viewed = $_GET['last_viewed'];
			
	if (empty($start))
		$start = 0;
	
	if (empty($sort))
		$sort = $default_sort;

		$order = " order  by ".translateSort($sort);
			
		$total_results = $db->GetOne("select COUNT(*) from rl_bibs where catid IN (".$catid_list.")".$subquery);
	
		if ($limit == -1) {
			$end = $total_results;
		}
		else {
			$limit = 5;
			$end = $start + $limit;
			if ($end > $total_results)
				$end = $total_results;
		}
		
		$result = $db->SelectLimit("select * from rl_bibs where catid IN (".$catid_list.")".$subquery.$order,$limit,$start);
		require('book.html.php');
?>