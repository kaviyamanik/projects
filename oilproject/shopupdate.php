<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>PRODUCT UPDATION</title>
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
  #sh
	  {
	   width:90%;
	   font-size:30px;;
	   color:#009879;
	   font-style:italic;
	   font-family:Algerian,BOLD;
	   }
#bk{
	  font-size:18px;
	  color:#009879;
	  }
</style>	  
</head>
<body>
<center>
<h1 id="h">OIL EXTRATION UNIT AUTOMATION</h1>
<h2 id="sh">PRODUCT UPDATION</h2>
<img src="http://localhost/oilproject/flowers.png" height="250" width="900" />
<h2>
<?php
$host="localhost";
$user="root";
$password="";
$db="oilproject";
mysql_connect($host,$user,$password);
mysql_select_db($db);
$res=mysql_query("select * from shopping where ID='$_GET[id]'");?>
<form method="post" enctype="multipart/form-data">
<?php
while($row=mysql_fetch_array($res))
{ ?>
<table><tr>
<td>
<input type="hidden" name="id" value="<?php echo $row['ID'];?>"  />
<input type="text" name="pname" value="<?php echo $row['NAME'];?>" id="n1"/></td></tr>
<tr><td>
<img src="<?php echo $row['IMAGE']; ?>" height="150" width="222" /><br />
<input type="file" name="img1" id="n1"/><br />
</td></tr>
<tr>
<td><input type="text" name="price" value="<?php echo $row['PRICE']; ?>" id="n1" /></td></tr></table>
<?php } ?>
<br /><input type="submit" name="update" value="EDIT"  id="b1"/>
</form>
<?php
if(isset($_POST['update']))
{
$hid=$_POST['id'];
$n=$_POST['pname'];
$p=$_POST['price'];
$host="localhost";
$user="root";
$password="";
$db="oilproject";
mysql_connect($host,$user,$password);
mysql_select_db($db);
$ss=mysql_query("select * from shopping where ID='$_GET[id]'");
$row1=mysql_fetch_array($ss);
$pic=$row1['IMAGE'];
$filename1=$_FILES['img1']['name'];
$tmpname1=$_FILES['img1']['tmp_name'];
$query=mysql_query("select * from shopping where IMAGE='$filename1'");
$query1=mysql_query("select * from shopping where NAME='$n'");
if(mysql_num_rows($query)>0)
  echo'<script>alert("Image Already Exist!!!")</script>';
elseif(mysql_num_rows($query1)>0)
  echo'<script>alert("OilName Already Exist!!!")</script>';
elseif($filename1=="")
{
$sql=mysql_query("update shopping set NAME='$n',PRICE='$p' where ID='$_GET[id]'");
echo"<script>window.location.href='shopping.php'</script>";
}
else
{
move_uploaded_file($tmpname1,"C:\wamp\www\upload/$filename1");
$sql=mysql_query("update shopping set NAME='$n',IMAGE='$filename1',PRICE='$p' where ID='$_GET[id]'");
echo"<script>window.location.href='shopping.php'</script>";
}
}
?>
<h3><a href="shopping.php" id="bk">...Back</h3></a>
</h2>
</center>
</body>
</html>
