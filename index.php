<?php 

include_once "class/database.php";
include_once "class/Produktai.php";
include_once "wiev/view.php";

if (isset($Get['search']) && ($Get['search'] != null))  {
	$prekes = Produktai::search($Get['search']);
}	else {
	$prekes = Produktai::get_all(); 
}



$prekes = Produktai::search("ban");


