<?
If($Tsex == 1){
	$choie_data = "DB_data_m";
}Else{
	$choie_data = "DB_data_w";
}

$serial_no = $serial_no % 12;

If($serial_no == 0){$serial_no = 1;}

$sql = "select ".$choie_data." as result_var from T024 where DB_express = '".$serial_no."'";

$query = mysql_query($sql);
$all = mysql_affected_rows();

for ($i = 0 ; $i<$all; $i++) {
	mysql_data_seek($query,$i);
	$row = mysql_fetch_array($query);
	$Tb_T024 = stripslashes($row[result_var]);
}

$Tb_T024= str_replace(chr(10), "<BR>", $Tb_T024);
?>