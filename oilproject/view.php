<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>PRODUCT DETAILS FOR USER</title>
<style type="text/css">
  #h
  {
       width:90%;
	   font-size:50px;;
	   color:#E015F0;
	   font-style:italic;
	   font-family:Algerian,BOLD;
  }
</style>
</head>
<body background="http://localhost/oilproject/color4.jpeg">
<center>
<h1 id="h">OIL EXTRATION UNIT AUTOMATION</h1>
<h1 style="background-color:#DAE9A7">PRODUCT DEAILS</h1>
<h3>
<?php
$host="localhost";
$user="root";
$password="";
$db="oilproject";
mysql_connect($host,$user,$password);
mysql_select_db($db);
$res=mysql_query("select * from productdet");
while($row=mysql_fetch_array($res))
{
?>
<?php
echo"<table><tr><td>";
echo'<img src="data:image/jpeg;base64,'.base64_encode($row['IMAGE']).'"height="150"width="250">';
echo"</td><td>";
echo $row['OILNAME'];
echo"</td></tr></table>"; ?>
<marquee direction="down">
<marquee behavior="slide" direction="up">

</marquee>
</marquee>
</marquee>
</marquee>
</marquee>
</marquee>
<?php
}
?>

<?php //echo"<td><center>".$row['ID']."</center></td><td><center>".$row['OILNAME']."</center></td><td><center>";
//echo'<img src="data:image/jpeg;base64,'.base64_encode($row['IMAGE']).'"height="150"width="250">';
//echo"</center></td></tr>";?>

<form method="post" action="order.php">
<h1><input type="submit" name="submit" value="ORDER" style="width:80px; height:30px"/></h1>
</form>
<h3><a href="login.php">..BACK</a></h3>
</h3></center>
</body>
</html>
