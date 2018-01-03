<?php

//getting the data from input, datatype:json

//the data itself stored in separate variables for code readability

$c_id = $data['c_id'];

$c1 = $data['c1'];
$c2 = $data['c2'];
$c3 = $data['c3'];
$c4 = $data['c4'];
$c5 = $data['c5'];
$c6 = $data['c6'];
$c7 = $data['c7'];
$c8 = $data['c8'];
$c9 = $data['c9'];
$c10 = $data['c10'];





if ( $mode_type == "ADD"){
	$sql = "INSERT INTO $table_str (c1,c2,c3 ,c4,c5,c6,c7,c8,c9,c10)  VALUES ('$c1','$c2','$c3' ,'$c4','$c5','$c6','$c7','$c8','$c9','$c10') ;";
}else if ( $mode_type == "MOD"){
	$sql = "UPDATE $table_str SET c1 = '$c1',c2 = '$c2',c3 = '$c3',c4 = '$c4', c5 = '$c5', c6 = '$c6', c7 = '$c7', c8 = '$c8',c9 = '$c9', c10 = '$c10' WHERE c_id = $c_id ";
}



$retval_in = mysql_query($sql, $conn);
if(!$retval_in)
{
die('Could not $mode_type data: ' . mysql_error());
}

mysql_close($conn);




?>