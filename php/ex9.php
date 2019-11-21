<?php
$arrayName = array("Tokyo","Mexico City","New York City","Mumbia","Seoul","Cairo","Lagos","London" );
$a=count($arrayName);
for($i=1;$i<=$a;$i++){
	echo "<ul>$arrayName[$i]</ul><br>";
}

sort($arrayName);
echo "<br><br>";
for($i=1;$i<=$a;$i++){
	echo "<ul>$arrayName[$i]<br></ul>";
}

array_push($arrayName, "Los Angeles","Osca","Beiging");
sort($arrayName);
echo "<br><br>";
for($i=1;$i<=$a;$i++){
	echo "<ul>$arrayName[$i]<br></ul>";
}



?>