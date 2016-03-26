<?php


header("Access-Control-Allow-Origin: *");
if($users)
{
	echo json_encode($users);
}

?>