<?php require_once 'header.php';?>
<div id="topbar">
  <div id="title">
  <?php echo $new_hot_title;?></div>
  <div id="leftnav">
    <a href="index.php">
    	<img alt="Howard County Library System Mobile Home" src="images/home.png"/>
    </a>
  </div>
  <div id="rightnav">
 	<a href="new-n-hot-items.php">NewHot</a>
  </div>
</div>
<div style="heght: 20px; line-height: 10px; padding: 0 12px 8px 0; float:right; font-size: 10pt;">
<?php
	if ($total_results > 0) {
?>
Results: <?php echo "<b>".($start + 1)."-".$end."</b> of <b>".$total_results."</b>"; ?>
<?php
}
?>
</div>
<div id="content">
    <ul class="pageitem">
    <li id ="sort_by_item" style="margin: 4px 0 4px 0; text-align: center">
    	<form action="/mobile/book_search.php" method="get"><span style="font-size: 10pt;">Sort by</span>
    		<select name="sort" id="sort">
		        <option value="newest">Newest</option>
		        <option value="author" <?php if ($sort == "author") echo "selected"; ?>>Author</option>
		        <option value="call number" <?php if ($sort == "call number") echo "selected"; ?>>Call Number</option>
		        <option value="title" <?php if ($sort == "title") echo "selected"; ?>>Title</option>
		        <option value="popular" <?php if ($sort == "popular") echo "selected"; ?>>Popular</option>
		        <option value="publication date" <?php if ($sort == "publication date") echo "selected"; ?>>Publication Date</option>
			</select>
		    <input name="limit" type="hidden" value="<?=$limit?>"/>
		    <input name="new_hot_title" type="hidden" value="<?=$new_hot_title?>"/>
			<input name="last_viewed" id="last_viewed" type="hidden" value="<?=$last_viewed?>"/>
    		<input type="submit" value="Go" name="submit_sort"/>
    	</form>
    </li>
    <?php 
		$counter = 0;
		$display = array();
	
		while ($row = $result->FetchRow()) {
				$bib = $row[0];
				$marc_date = $row[2];
				$img = $row[21];
				if (empty($img)) {
					$img = $row[3];
				}
				$link = $row[4];
				
				$subtag_ades = $row[5];
				$subtag_a = trim($subtag_ades, "/");
				$subtag_bdes = $row[6];
				$subtag_b = trim($subtag_bdes, "/");
				$subtag_p = $row[7];
				$subtag_n = $row[8];
				
				$call_num = $row[16];
		
				$author_coma = $row[10];
				$author_nocoma = trim($author_coma, ",");
				$author = trim($author_nocoma,".");
				$author_date = $row[11];
				
				$pub_a = $row[12];
				$pub_b = $row[13];
				$pub_date = $row[14];
				$pub_c = trim($pub_date, ".");
				$edition = $row[15];
				
				if (!empty($subtag_a)) {
					$display = array();	
					$display[0] .= "<strong><a style=\"text-decoration: none;\" test href=\"".$config['mcatalog_bib_url'].$row[0]."\">";
					$display[0] .= $subtag_a." ".$subtag_b." ".$subtag_p." ".$subtag_n."</strong></a><br/>";
					if (!empty($author)) 
						$display[0] .= $author." ";
					if (!empty($pub_a))
						$display[0] .= " &nbsp;[".$pub_c."]<br>";
					if (!empty($call_num))
					$display[0] .= "Call #: <strong>".$call_num."</strong><br>";
					$req_row = $poldb->GetRow("select count(*) from SysHoldRequests	where BibliographicRecordID = '".$row[0]."'and SysHoldStatusID = 3");
					$display[0] .= "# of Requests: ".$req_row[0]."<br />";
					if (!empty($img))
						$display[1] = "<a href=\"".$config['mcatalog_bib_url'].$row[0]."\"><img src=\"".$img."\" border=\"0\" />";
					
					displayMobileBookListRow($display,$start,$counter);
					
					$counter++;
				}
			
		}	
    ?>
    <?php
    echo "<br />";
	resultMobileNavigationHTML($total_results,$limit,$start,$sort,$term,$new_hot_title);
	?>
    </ul>
</div>
<?php require_once 'footer.php';?>
