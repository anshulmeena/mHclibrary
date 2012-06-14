<?php
require 'includes/functions/events.php';
$start_date = date("m/d/Y");
$xml = simplexml_load_file(getEvancedXML("All",1,"exml",14,"",$start_date));

print_r($xml);