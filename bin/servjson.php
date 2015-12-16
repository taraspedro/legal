<?php 
	mysql_connect('localhost','root','');
	mysql_select_db('lenews');
	$sql = "SELECT * FROM services";
	$query = mysql_query($sql) or die(mysql_error());
	$array = array();
	while ($row = mysql_fetch_array($query)){
		$array[] = $row;
	}
	$json = json_encode($array);
	echo $json;
 ?>