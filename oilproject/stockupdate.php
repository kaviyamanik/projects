<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>STOCK UPDATE</title>
<style type="text/css">
  body{
      margin:0;
	  padding:0;
	  background-image:url(http://localhost/oilproject/white.jpg);
	  }
   #h
	  {
	   width:90%;
	   font-size:50px;;
	   color:#009879;
	   font-style:italic;
	   font-family:Algerian,BOLD;
	   }
	#hh{
	   width:90%;
	   font-size:30px;;
	   color:#009879;
	   font-style:italic;
	   font-family:Algerian,BOLD;
	  }
	#n1{
      width:200px;
      border:2px solid #aaa;
	  border-radius:4px;
	  margin:8px 0;
	  outline:none;
	  padding:8px;
	  box-sizing:6px;
	  color:black;
	  transition:3s;
	  }
	 #n1:focus{
	 border-color:#009879;
	 box-shadow:0 0 8px 0 #009879;
	 }
   #b1{
     background-color:#009879;
     color:#FFFFFF;
     padding:10px 20px;
	  }
	#b1:hover{
	  background-color:white;
	  color:#009879;
	  cursor:pointer;
	   }
	 a{
	  font-size:18px;
	  color:#009879;
	  }
</style>
</head>
<body>
<center>
<h1 id="h">OIL EXTRATION UNIT AUTOMATION</h1>
<h2 id="hh">STOCK UPDATION</h2>
<img src="http://localhost/oilproject/flowers.png" height="250" width="900" />
<?php
$host="localhost";
$user="root";
$password="";
$db="oilproject";
mysql_connect($host,$user,$password);
mysql_select_db($db);
$res=mysql_query("select * from stockdetails where ID='$_GET[id]'");?>
<form method="post">
<?php
while($row=mysql_fetch_array($res))
{ ?>
<table><tr>
<td><input type="hidden" name="hid" value="<?php echo $row['ID']; ?>" />
<input type="text" name="pname" value="<?php echo $row['PRNAME']; ?>" id="n1"/></td></tr>
<tr><td><input type="text" name="qty" value="<?php echo $row['QUANTITY']; ?>" id="n1" /></td></tr>
<tr><td><input type="text" name="price" value="<?php echo $row['PRICE'];?>" id="n1"/></td></tr>
<tr><td><input type="date" name="date" value="<?php echo $row['DATE']; ?>" id="n1"/></td></tr></table>
<?php } ?>
<br /><input type="submit" name="update" value="EDIT"  id="b1"/>
</form>
<?php
if(isset($_POST['update']))
{
$n=$_POST['pname'];
$q=$_POST['qty'];
$p=$_POST['price'];
$d=$_POST['date'];
$uid=$_POST['hid'];
$host="localhost";
$user="root";
$password="";
$db="oilproject";
mysql_connect($host,$user,$password);
mysql_select_db($db);
$query2=mysql_query("select * from stockdetails where PRNAME='$n' and QUANTITY='$q' and PRICE='$p' and DATE='$d'");
if(mysql_num_rows($query2)>0) 
 echo'<script>alert("Data Already Exist!!!")</script>';
else
{
mysql_query("update stockdetails set PRNAME='$n',QUANTITY='$q',PRICE='$p',DATE='$d' where ID='$uid'");
echo"<script>window.location.href='stock.php'</script>";
}
}
?>
<h3><a href="stock.php">...Back</h3>
</center>
</body>
</html>
