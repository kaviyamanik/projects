<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<body>
<center>
<h1 id="h">OIL EXTRATION UNIT AUTOMATION</h1>
<?php
$host="localhost";
$user="root";
$password="";
$db="oilproject";
mysql_connect($host,$user,$password);
mysql_select_db($db);
if(isset($_REQUEST['id']))
{
$sid=$_REQUEST['id'];
$sql=mysql_query("select * from ordertab where ID='$sid'");
$row=mysql_fetch_array($sql);
}
?>
<h2>
<form method="post" action="#" enctype="multipart/form-data">
<table cellspacing="20">
<tr><td><label>OIL NAME</label></td><td> <input type="text"  name="name" size="30" id="n1" value="<?php echo $row['OILNAME'];?>"/></td></tr>
<tr><td><label>IMAGE</label> </td><td> <input type="file"  name="img" size="30" id="n1" value="<?php echo $row['IMAGENAME'];?>"/></td></tr>
<tr><td><label>PRICE</label></td><td><input type="text"  name="price" size="30" id="n1" value="<?php echo $row['PRICE']; ?>"/></td></tr>
</table><br />
<button type="submit" name="submit" class="button">
 <img src="http://localhost/oilproject/update.jpg" height="40" width="95"/></button><br />
</form>
<br />

</body>
</html>
