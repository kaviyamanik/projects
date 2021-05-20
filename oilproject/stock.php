<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>STOCK PURCHASE DETAILS</title>
<style type="text/css">
     body{
      margin:0;
	  padding:0;
	  background-image:url(http://localhost/oilproject/white.jpg);
	  background-size:cover;
	  }
 	 .content-table
	  {
	   border-collapse:collapse;
	   margin:25px;
	   font-size:0.9em;
	   min-width:500px;
	   border-radius:5px 5px 0 0;
	   overflow:hidden;
	   box-shadow:0 0 20px rgba(0,0,0,0.15);
	  } 
	  .content-table thead tr
	  {
	   background-color:#009879;
	   color:#ffffff;
	   text-align:center;
	   border-spacing:100px;
	  }
	  .content-table tbody td
	  {
	   color:#009879;
	   }
	  .content-table th,
	  ,content-table td
	  {
	   padding:12px 15px;
	  }
	  .content-table tbody tr
	  {
	   border-bottom:1px solid #dddddd;
	  }
	  .content-table tbody tr:nth-of-type(even){
	   background-color:#f3f3f3;
	  }
	  .content-table tbody tr:last-of-type{
	   border-bottom:2px solid #009879;
	  }
	  .content-table tbody tr:hover{
	   background-color:#FFFFCC;
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
   #hh{
	   width:90%;
	   font-size:30px;;
	   color:#009879;
	   font-style:italic;
	   font-family:Algerian,BOLD;
	  }
    ::-webkit-input-placeholder
	  {
	  color:#009879;
	  font-size:9px;
	  font-family:"Times New Roman";
	  }
	#b1{
     background-color:#009879;
     color:#FFFFFF;
     padding:9px 19px;
	  }
	#b1:hover{
	  background-color:white;
	  color:#009879;
	  cursor:pointer;
	   }
	#bb{
	   background-color:#009879;
	   color:#FFFFFF;
	   padding:5px 9px;
	   }
	   #bb:hover{
	   background-color:#FFFFFF;
	   color:#009879;
	   cursor:pointer;
	   }
	  #tot{
	   font-size:19px;;
	   color:#009879;
	   font-style:italic;
	   font-family:Algerian,BOLD;
	   }
 </style>
</head>
<body>
<center>
<h1 id="h">OIL EXTRATION UNIT AUTOMATION</h1>
<h2 id="hh">STOCK PURCHASE DETAILS</h2>
<h2>
<?php
echo'<img src="http://localhost/oilproject/flowers.png" height="250" width="1000" />';
$host="localhost";
$user="root";
$password="";
$db="oilproject";
mysql_connect($host,$user,$password);
mysql_select_db($db);
if(isset($_POST['submit']))
{
$n=$_POST['name'];
$q=$_POST['qty'];
$p=$_POST['price'];
$d=$_POST['date'];
$check=mysql_query("select * from stockdetails where PRNAME='$n' and QUANTITY='$q' and PRICE='$p' and DATE='$d'");
if(empty($_POST['name']) && empty($_POST['qty']) && empty($_POST['price']) && empty($_POST['date']))
  echo'<script>alert("Check All Fields!!!")</script>';
elseif(empty($_POST['name']))
   echo'<script>alert("Check Product Name!!!")</script>';
elseif(empty($_POST['qty']))
  echo'<script>alert("Check Quantity!!!")</script>';
elseif(empty($_POST['price']))
  echo'<script>alert("Check Price!!!")</script>';
elseif(empty($_POST['date']))
  echo'<script>alert("Check Date!!!")</script>';
elseif(mysql_num_rows($check)>0)
  echo'<script>alert("Data Already Exist!!!")</script>';
else
{
$sql="insert into stockdetails(PRNAME,QUANTITY,PRICE,DATE) values ('$n','$q','$p','$d')";
if(mysql_query($sql))
  echo'<script>alert("Data Inserted!!!")</script>';
else
  echo'<script>alert("Data Not Inserted!!!")</script>';
}
}
?>
<form method="post">
<input type="text" name="name" size="30" placeholder="Product Name" id="n1" value="<?php echo $n;?>" /><br />
<input type="text" name="qty" size="30" maxlength="5" value="<?php echo $q;?>" onkeypress="return event.charCode >=48 && event.charCode<=57"
 placeholder="Quantity(In Kg)" id="n1"/><br />
<input type="text" name="price" size="30" maxlength="15" value="<?php echo $p;?>" onkeypress="return event.charCode >=48 && event.charCode<=57"
 placeholder="Price" id="n1"/><br />
<input type="date" name="date" id="n1" value="<?php echo $d;?>"/><br />
<br /><input type="submit" name="submit" value="INSERT" id="b1"/><br />
</form>
<?php
$cnt=mysql_query("select count(id) as total from stockdetails");
$values=mysql_fetch_assoc($cnt);
$num=$values['total']; ?>
<h3 id="tot"><?php echo"TOTAL PRODUCTS : $num"; ?></h3>
<h3>
<table class="content-table" width="900" height="100">
<thead> 
<tr><th>ID</th><th>PRODUCT</th><th>QUANTITY (In Kg)</th>
<th>PRICE</th><th>DATE</th><th>ACTION</th></tr></thead>
<?php
$res=mysql_query("select * from stockdetails");
while($row=mysql_fetch_array($res))
{
echo"<tbody><tr>";
echo"<td><center>".$row['ID']."</center></td><td><center>".$row['PRNAME']."</center></td>";
echo"<td><center>".$row['QUANTITY']."</center></td><td><center>".$row['PRICE']."</center></td>";
echo"<td><center>".$row['DATE']."</center></td>"; 
echo"<td><center><a href=delete.php?id=".$row['ID'].">"?><button id="bb"><?php echo "DELETE";?></button><?php echo "</a>";
echo"&nbsp&nbsp&nbsp<a href=stockupdate.php?id=".$row['ID'].">"?><button id="bb"><?php echo "EDIT"?></button><?php echo "</a></td></tr></tbody>";
}
?>
</table>
</h3></h2>
<h3><a href="details.php" id="bk">...Back</a></h3>
</h3>
</center>
</body>
</html>
