
<?php
$da=date('m-d-y',time());
$mo=date_parse_from_format("m-d-y", $da);
$month=$mo["month"];
if($month=="8"){
	echo "so it is really hot";
}
else{
	echo"so at least not in the peak of the heat";
}


?>