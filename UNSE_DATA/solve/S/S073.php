<?

$sql ="SELECT DB_data FROM S073 WHERE DB_express = '". $my_day_h_org . $my_day_e_org ."'";
$query = mysql_query($sql);
$all = mysql_affected_rows();

for ($i = 0 ; $i<$all; $i++) {
	mysql_data_seek($query,$i);
	$row = mysql_fetch_array($query);
	$Tb_S073 = stripslashes($row[DB_data]);


}

?>