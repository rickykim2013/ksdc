<?php

$sql = "SELECT * FROM $table_str ";

$retval = mysql_query($sql, $conn);
if(!$retval)
{
	die('Could not get data: ' . mysql_error());
}
$append_arr = array();

while($listItem = mysql_fetch_array($retval, MYSQL_ASSOC)) {
	$row_array['c_id'] = $listItem['c_id'];
	$row_array['c1'] = $listItem['c1'];
	$row_array['c2'] = $listItem['c2'];
	$row_array['c3'] = $listItem['c3'];
	$row_array['c4'] = $listItem['c4'];
	$row_array['c5'] = $listItem['c5'];
	$row_array['c6'] = $listItem['c6'];
	$row_array['c7'] = $listItem['c7'];
	$row_array['c8'] = $listItem['c8'];
	$row_array['c9'] = $listItem['c9'];
	$row_array['c10'] = $listItem['c10'];

	array_push($append_arr,$row_array);// stopped here -> have to makeit appear on table
}

$return_arr = array('list'=>$append_arr);
echo json_encode($return_arr);


mysql_close($conn);

?>