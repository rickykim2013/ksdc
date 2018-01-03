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
/*

CREATE TABLE `sw_member` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `c1` varchar(45) DEFAULT NULL,
  `c2` varchar(45) DEFAULT NULL,
  `c3` varchar(45) DEFAULT NULL,
  `c4` varchar(45) DEFAULT NULL,
  `c5` varchar(45) DEFAULT NULL,
  `c6` varchar(45) DEFAULT NULL,
  `c7` varchar(45) DEFAULT NULL,
  `c8` varchar(45) DEFAULT NULL,
  `c9` varchar(45) DEFAULT NULL,
  `c10` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
SELECT * FROM kfood.sw_member;

*/
?>