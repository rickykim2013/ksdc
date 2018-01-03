<?php

include 'inc_db_con.php';
date_default_timezone_set('America/Chicago');


$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(!$conn)
{
die('Could not connect: ' . mysql_error());
}


mysql_select_db($dbname);
mysql_query("SET default_character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");

$postdata = file_get_contents("php://input");
if(!$postdata)
{
	die('Could not read contents of POST request');
}
$data = json_decode($postdata, true); //decoding json into array

$mode_type = $data['mode_type'];
$table_str = "sw_member";


if ( $mode_type == "LIST"){
	include 'inc_db_list.php';
}else{
	include 'inc_db_mod.php';
}

?>