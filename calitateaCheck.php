<?php
	if($_GET["calitatea"] == 1) echo json_encode(array ("1"=> "10", "2" => "9","3" => "8"));
	else if($_GET["calitatea"] == 2) echo json_encode(array ("4"=> "7", "5" => "6","6" => "5"));
?>