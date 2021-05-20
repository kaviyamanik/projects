<?php 
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ORDER FORM</title>
<style type="text/css">
     body{
      margin:0;
	  padding:0;
	  background-image:url();
	  }
 	  #h
	  {
	   width:90%;
	   font-size:50px;;
	   color:#009879;
	   font-style:italic;
	   font-family:Algerian,BOLD;
	   }
	   #bk{
	  font-size:20px;
	  color:#009879;
	  vertical-align:baseline;
	  }
	  #sh
	  {
	   width:90%;
	   font-size:30px;;
	   color:#009879;
	   font-style:italic;
	   font-family:Algerian,BOLD;
	   }
	*
	{
	margin:0px;
	padding:0px;
	}
	.cards{
	float:left;
	width:15%;
	background-color:#FFFFFF;
	border:3px solid #009879;
	margin-top:20px;
	margin-bottom:20px;
	border-radius:5px;
	margin:30px;
	box-shadow:2px 2px 10px #009879;
	}
	.cards:hover{
	box-shadow:2px 5px 10px #FFFFCC;
	}
	.img img{
	margin-top:2px;
	width:99%;
	border-top-right-radius:5px;
	border-top-left-radius:5px;
	}
 </style>
</head>
<body>
<center>
<h1 id="h">OIL EXTRATION UNIT AUTOMATION</h1>
<h2 id="sh">ORDER FORM</h2><br />
<h3>
<?php
$host="localhost";
$user="root";
$password="";
$db="oilproject";
mysql_connect($host,$user,$password);
mysql_select_db($db);
$res=mysql_query("select * from shopping");
while($row=mysql_fetch_array($res))
{?>
<div class="cards">
<div class="img">
<?php echo"<a href=orderpro.php?id=".$row['ID'].">"; ?>
<img src="<?php echo $row['IMAGE']; ?>" height="150" width="222" />
<?php echo "</a>"; ?> </div>
<div class="name">
<?php echo $row['NAME']; ?></div>
<?php echo "Rs.".$row['PRICE'];?></div>
<?php }
?>
<h3><a href="login.php" id="bk">...Back</a></h3>
</h2></center>
</body>
</html>
