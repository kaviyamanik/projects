<?php
$host="localhost";
$user="root";
$password="";
$db="oilproject";
mysql_connect($host,$user,$password);
mysql_select_db($db);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>LOGOUT</title>
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
	   margin-left:240px;
	   }
   #bk{
	   background-color:#009879;
      color:#FFFFFF;
      padding:11px 14px;
	  }
	#bk:hover{
	  background-color:#FFFFFF;
	  color:#009879;
	  cursor:pointer;
	   }
	 #hh
	  {
	   width:90%;
	   font-size:30px;;
	   color:#009879;
	   font-style:italic;
	   font-family:Algerian,BOLD;
	   } 
	 #an{
	  font-size:20px;
	  color:#009879;
	  margin-left:200px;
	  }
	 #b{
	    background-color:#009879;
        color:#FFFFFF;
        padding:4px 12px;
		margin-left:200px;
	  }
	  #b:hover{
	  background-color:#FFFFFF;
	  color:#009879;
	  cursor:pointer;
	   }
	   #tb{
	   margin-left:220px;
	   }
</style> 	 
</head>
<body background="color2.jpeg">
<center>
<h1 id="h">OIL EXTRATION UNIT AUTOMATION</h1>
<h2 class="container" id="hh">
<div id="tb">
<table cellspacing="40">
<tr><td align="center">ORDER PLACED!!!</td></tr>
<tr><td align="center">AFTER 3 DAYS YOU CAN COLLECT YOUR PRODUCT!!!</td></tr>
<tr><td align="center">THANK YOU!!!</td></tr>
</table></div>
<table><tr><td><a href="dem.php"><button id="b">ANOTHER <br />ORDERS</button></a></td>
<td><a href="logo.php"><button id="bk">LOGOUT</button></a></h2></td></tr></table>
<h3><br /><br /><a href="orderpro.php" id="an">...Back</a>
</h3>
</center>
</body>
</html>
