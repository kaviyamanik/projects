<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ORDER</title>
<style type="text/css">
 body{
      margin:0;
	  padding:0;
	  background-image:url(http://localhost/oilproject/back.jpg);
	  background-size:cover;
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
	  border-color:#009879;
	  margin-left:250px;
	  }
	 #n1:focus{
	 border-color:#009879;
	 box-shadow:0 0 8px 0 #009879;
	 }
    #h
	  {
	   width:90%;
	   font-size:50px;;
	   color:#009879;
	   font-style:italic;
	   font-family:Algerian,BOLD;
	   margin-left:270px;
      } 
  	  #hh{
	  color:black;
	  }
	  #bk{
	  font-size:20px;
	  color:#009879;
	  margin-left:240px;
	  }
	  #b1{
      background-color:#009879;
      color:#FFFFFF;
      padding:9px 16px;
	  margin-left:250px;
	  }
	#b1:hover{
	  background-color:#FFFFFF;
	  color:#009879;
	  cursor:pointer;
	   }
	 ::-webkit-input-placeholder
	  {
	  color:#009879;
	  }
	  #sh
	  {
	   width:90%;
	   font-size:30px;;
	   color:#009879;
	   font-style:italic;
	   font-family:Algerian,BOLD;
	   margin-left:190px;
	  }
	  select{
	  cursor:pointer;
	  }
	  #qt1
	  {
	  background:#FFFFCC;
	  }
	  qt2
	  {
	  background:none;
	  }
	  #qt1:hover{
	  background:#009879;
	  color:#FFFFFF;
	  cursor:pointer;
	  }
</style>
</head>
<body>
<center>
<h1 id="h">OIL EXTRATION UNIT AUTOMATION</h1>
<h2 id="sh">CONFORM ORDER</h2>
<h2 id="hh">
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
$sql=mysql_query("select * from shopping where ID='$sid'");
$row=mysql_fetch_array($sql);
}
?>
<?php
if(isset($_POST['submit']))
{
if(empty($_POST['quantity']))
echo'<script>alert("Select Quantity!!!")</script>';
else
{
if(!empty($_POST['uname']) && !empty($_POST['pname']) && !empty($_POST['quantity']) && !empty($_POST['price']) && !empty($_POST['date']))
{
$n=$_POST['uname'];
$p=$_POST['pname'];
$q=$_POST['quantity']; 
$pr=$_POST['price'];
$d=$_POST['date'];
$exist=mysql_query("select * from orders where NAME='$n' and OILNAME='$p' and QUANTITY='$q' and DATE='$d'");
if(mysql_num_rows($exist)>0)
 echo"<h3> ALREADY ORDERED!!</h3>";
else
{
$query="insert into orders(NAME,OILNAME,QUANTITY,PRICE,DATE) values ('$n','$p','$q','$pr','$d')";
if(mysql_query($query))
  header('location:logout.php');
else
 echo"<br><h3>ORDER FAILED<br></h3>";
}
}
}
}
?>
<form method="post" enctype="multipart/form-data">
<table>
<tr><td> <input type="text" name="uname" id="n1" placeholder="USER NAME" value="<?php echo $_SESSION['name'];?>" readonly="readonly"/></td></tr>
<tr><td> <input type="text" name="pname" value="<?php echo $row['NAME']; ?>" id="n1" readonly="readonly"/></td></tr>
<tr><td> 
<select name="quantity" style="width:220px" id="n1">
<option value="">SELECT QUANTITY (L)</option>
<option value="1" id="qt1">1</option>
<option value="1.5" id="qt2">1.5</option>
<option value="2" id="qt1">2</option>
<option value="2.5" id="qt2">2.5</option>
<option value="3" id="qt1">3</option>
<option value="3.5" id="qt2">3.5</option>
<option value="4" id="qt1">4</option>
<option value="4.5" id="qt2">4.5</option>
<option value="5" id="qt1">5</option>
<option value="5.5" id="qt2">5.5</option>
<option value="6" id="qt1">6</option>
<option value="6.5" id="qt2">6.5</option>
<option value="7" id="qt1">7</option>
<option value="7.5" id="qt2">7.5</option>
<option value="8" id="qt1">8</option>
<option value="8.5" id="qt2">8.5</option>
<option value="9" id="qt1">9</option>
<option value="9.5" id="qt2">9.5</option>
<option value="10" id="qt1">10</option></div>
</select></td></tr>
<tr><td> <input type="text" name="price" value="<?php echo $row['PRICE']; ?>" id="n1" readonly="readonly"/></td></tr>
<tr><td> <b><input type="text" name="date" value="<?php echo date("d/m/Y"); ?> "id="n1" readonly="readonly"/></b></td></tr>
</table>
<br /><input type="submit" name="submit" value="ORDER" id="b1"/>
</form>
</div>
</h2><h3><a href="dem.php" id="bk">...Back</a></h3>
</center>
</body>
</html>
