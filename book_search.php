<?php
$page = $_GET['page'];
$sort = $_GET['sort'];
$term = $_GET['term'];
$limit = $_GET['limit'];
$new_hot_title = $_GET['new_hot_title'];
$id = $_GET['id'];
$last_viewed = $_GET['last_viewed'];

if ($term == 'Search within these results...')
	$term = '';

header("Location: /mobile/book.php?term=".$term."&sort=".$sort."&limit=".$limit."&id=".$id."&new_hot_title=".$new_hot_title);
?>