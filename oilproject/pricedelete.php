<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<body>
<?php
$host="localhost";
$user="root";
$password="";
$db="oilproject";
mysql_connect($host,$user,$password);
mysql_select_db($db);
$sql="delete from price where ID='$_GET[id]'";
if(mysql_query($sql))
{
 echo"DELETED";
 header('location:price.php'); 
}
else
{
 echo" NOT DELETED"; 
 header('location:price.php');
} 
?>
</body>
</html>
