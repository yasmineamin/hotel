<?php
$a = array ("CLASSIC ROOM", "SUPERIOR ROOM", "CLUB ROOM", "FAMILY ROOM" , "PRESIDENTIAL SUITES", "BACHELOR ROOM", "SUPERDELUXE ROOM", "DELUXE ROOM" ,"LUXURY ROOM" );




$q = $_REQUEST["q"];

$hint = "";

if ($q !== "") {

$q = strtolower($q);
$len = strlen($q);

foreach ($a as $name) {
	
	if (stristr($q, substr($name, 0, $len))) {
		
		if ($hint == "") {
			$hint = $name;
		}
		else {
		$hint .= ", $name";
		}

	}
}
}


echo $hint === "" ? "incorrect name" : $hint;
?>