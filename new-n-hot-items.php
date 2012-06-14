<?php require_once 'header.php';?>
<div id="topbar">
  <div id="title">
  	New &#38; Hot</div>
  <div id="leftnav">
    <a href="index.php">
    	<img alt="Howard County Library System Mobile Home" src="images/home.png"/>
    </a>
  </div>
</div>
<div id="content">
	<form action="/mobile/book.php" method="get" id="newhot_form">
		<ul class="pageitem">
			<li class="menu">
				  <span class="newhot_menu_name">
				  <img alt="New and Hot Books" src="images/browse/books.png"/>
				  <input value="Books" name="Books" class="newhot_menu_input" type="submit" <?$new_hot_title = "Books"?>></input>
				  <span class="arrow"/>
				  </span>
			</li>
			<li class="menu">
			  <span class="newhot_menu_name">
			  <img alt="New and Hot Music" src="images/browse/music.png"/> 
			  <input value="Music" name="Music" class="newhot_menu_input" <?$new_hot_title="Music";?> type="submit"></input>
			  </span> 
			  <span class="arrow"/>
			</li>
			<li class="menu">
			  <span class="newhot_menu_name">
			  <img alt="New and Hot Dvds" src="images/browse/dvd.png"/> 
			  <input value="DVDs" name="DVDs" class="newhot_menu_input" <?$new_hot_title="DVDs";?> type="submit"></input>
			  </span> 
			  <span class="arrow"/> 
			</li>
			<li class="menu">
			  <span class="newhot_menu_name">
			  <img alt="New and Hot Popular" src="images/browse/eresources.png"/>
			  <input value="Popular" name="Popular" class="newhot_menu_input" <?$new_hot_title="Popular";?> type="submit"></input>
			  </span> 
			  <span class="arrow"/> 
			</li>
		</ul>
	</form>
</div>
<?php require_once 'footer.php';?>
</html>
