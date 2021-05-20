<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
<title>BILL</title>
<style type="text/css">
   body{
      margin:0;
	  padding:0;
	  background-image:url(http://localhost/oilproject/back.jpg);
	  background-size:cover;
	  }
    #h
	  {
	   width:90%;
	   font-size:50px;;
	   color:#009879;
	   font-style:italic;
	   font-family:Algerian,BOLD;
	   margin-left:260px;
      }
	#hh{
	   width:90%;
	   font-size:30px;;
	   color:#009879;
	   font-style:italic;
	   font-family:Algerian,BOLD;
	   margin-left:190px;
	  }
	 a{
	  font-size:18px;
	  color:#009879;
	  margin-left:260px;
	  }
	  #al{
	  margin-left:250px;
	  }
</style>
</head>
<body>
<center>
<h1 id="h">OIL EXTRATION UNIT AUTOMATION</h1>
<h2 id="hh">BILL</h2>
<div id="al">
<?php
$host="localhost";
$user="root";
$password="";
$db="oilproject";
mysql_connect($host,$user,$password);
mysql_select_db($db);
if(isset($_POST['submit']))
{
$n=$_POST['uname'];
$d=$_POST['bdate'];
$check=mysql_query("select * from orders where NAME='$n' and DATE='$d'");
if((empty($_POST['uname']) && empty($_POST['bdate'])) or empty($_POST['uname']) or empty($_POST['bdate']))
echo'<script>alert("Check UserName & Date!!!")</script>';
elseif(mysql_num_rows($check)==0)
echo'<script>alert("Data Not Match!!!")</script>';
else
{
$tot=0;
$sum=0;
?>
<table cellspacing="6" border="1">
<tr><th align="left">NAME</th><td align="left"> <?php echo $n;?></td><th>DATE</th><td> <?php echo  $d ;?></td></tr>
<tr><th>PRODUCT NAME</th><th>QUANTITY</th><th>PRICE</th><th>AMOUNT</th></tr>
<?php
$sql=mysql_query("select * from orders where NAME='$n' and DATE='$d'") or die(mysql_error());
while($row=mysql_fetch_array($sql))
{ 
$tot=$row['QUANTITY']*$row['PRICE']; ?>
<tr><td align="center"><?php echo $row['OILNAME']; ?></td>
<td align="center"><?php echo $row['QUANTITY']; ?> </td>
<td align="center"><?php echo $row['PRICE']; ?></td>
<td align="center"><?php echo $tot; ?></td></tr>
<?php
$temp=$tot;
$sum+=$temp;
 } ?>
<tr><td colspan="3" align="right">TOTAL</td><td align="center"><?php echo $sum;?></td></tr>
</table>
<?php }
} ?></div><br>
<h3><a href="demobill.php">...Back</a>&nbsp&nbsp&nbsp&nbsp;
<a href="logo.php">Home...</a></h3>
</center>
</body>
</html>

