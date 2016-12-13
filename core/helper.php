<?php 

function pdie($array = []){
	echo "<pre>";	
	print_r($array);
	die();
}


function jdie($array = []){
	header('Content-Type: application/json');
	die(json_encode($array));
}

?>