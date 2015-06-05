<?php 
/*
$serv = "localhost";
$user = "anuncia2_aldia";
$pass = "yBQdKBduDala";
$data = "anuncia2_frontera";
*/
$serv = "localhost";
$user = "root";
$pass = "";
$data = "f403";

### FUNCIONES DE SEGURIDAD ###
function xss($vuln){
	return htmlentities(strip_tags($vuln));
}
function sqli($vuln){
	return mysql_real_escape_string($vuln);
}
##############################

mysql_connect($serv, $user, $pass);
mysql_select_db($data);

$errorMsg = "";
?>