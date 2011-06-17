<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta id="viewport" name="viewport" content="width=320; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
        <title>Forms</title>
        <link rel="stylesheet" href="stylesheets/iphone.css" />
        <link rel="apple-touch-icon" href="images/apple-touch-icon.png" />
        <script type="text/javascript">
        function clickclear(thisfield, defaulttext) {
        if (thisfield.value == defaulttext) {
        thisfield.value = "";
        }
        }
        function clickrecall(thisfield, defaulttext) {
        if (thisfield.value == "") {
        thisfield.value = defaulttext;
        }
        }
        
        </script>
        
        <script type="text/javascript" charset="utf-8">
                window.onload = function() {
                  setTimeout(function(){window.scrollTo(0, 1);}, 100);
                }
        </script>
</head>

<body>
        
        <div id="header">
                <h1>Basic form</h1>
                <a href="index.html" id="backButton">Back</a>
        </div>


<h1>Field sets</h1>

<ul class="form">
        <li class="error"><input type="text" name="name" value="Text" id="some_name" onclick="clickclear(this, 'Text')" onblur="clickrecall(this,'Text')" /></li>
        <li class="error"><input type="text" name="search" value="Search" id="some_name" onclick="clickclear(this, 'Search')" onblur="clickrecall(this,'Search')" /></li>
        <li><input type="text" name="phone" value="Phone" id="some_name" onclick="clickclear(this, 'Phone')" onblur="clickrecall(this,'Phone')"  /></li>
        <li><input type="text" name="zip" value="Numbers" id="some_name" onclick="clickclear(this, 'Numbers')" onblur="clickrecall(this,'Numbers')" /></li>                     
        <li><textarea onclick="clickclear(this, 'Dirección')" onblur="clickrecall(this,'Dirección')">Dirección</textarea></li>
        <li><select id="lol"><optgroup label="Swedish Cars">
        <option value ="volvo">Volvo</option>
        <option value ="saab">Saab</option>
        </optgroup>
        <optgroup label="German Cars">
        <option value ="mercedes">Mercedes</option>
        <option value ="audi">Audi</option>
        </optgroup></select></li>
        <li><input type="password" name="some_name" value="iphonedelcopon" id="some_name" /></li>
        <li><input type="file" name="some_name" value="iphonedelcopon" id="some_name" /></li>
        <li><input type="checkbox" name="some_name" value="Hello" id="some_name" title="V8 Engine Type" /></li>
        <li><input type="checkbox" name="some_name" value="Hello" checked="checked" id="some_name" title="V12 Engine Type" /></li>
        <li><input type="radio" name="some_name" value="Hello" id="some_name" title="Only cars" /></li>
        <li><input type="radio" name="some_name" value="Hello" id="some_name" title="Only motorbikes" /></li>
</ul>

<p><a href="index.html" class="button white">Buy this car</a></p>

<p><strong>Best enjoyed on a real iPhone</strong><br />This iPhone UI Framework kit is licenced under GNU Affero General Public License (<a href="http://www.gnu.org/licenses/agpl.html">GNU AGPL 3</a>)</p>

</body>
</html>
