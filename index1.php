<?php
mysql_connect("localhost","root","");
mysql_select_db("store");
if (isset($_POST['username'])){
	$username=$_POST['username'];
	$password=$_POST['password'];
	$sql="select * from user where login='".$username."' and password='".$password."'";
	$req=mysql_query($sql);
	$count=mysql_num_rows($req);
	
	if($count>0){
header("Location:./admin/index.php");}}

?>