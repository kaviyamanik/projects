<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ORDER DETAILS VIEW</title>
<style type="text/css">
 body{
      margin:0;
	  padding:0;
	  background-image:url(http://localhost/oilproject/white.jpg);
	  background-size:contain;
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
	  }
	  .content-table tbody td
	  {
	  border-color:#009879;
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
  #sh
	  {
	   width:90%;
	   font-size:30px;;
	   color:#009879;
	   font-style:italic;
	   font-family:Algerian,BOLD;
	   }
  #bk{
	  font-size:20px;
	  color:#009879;
	  }
  #eb{
	   background-color:#009879;
	   color:#FFFFFF;
	   padding:5px 8px;
	   }
  #eb:hover{
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
<h2 id="sh">ORDER DETAILS VIEW</h2>
<img src="http://localhost/oilproject/flowers.png" height="250" width="1000" />
<?php
$host="localhost";
$user="root";
$password="";
$db="oilproject";
mysql_connect($host,$user,$password);
mysql_select_db($db);
$cnt=mysql_query("select count(id) as total from orders");
$values=mysql_fetch_assoc($cnt);
$num=$values['total']; ?>
<h3 id="tot"><?php echo"ROW COUNT : $num"; ?></h3>
<h3>
<table class="content-table" width="900" height="200"> 
<thead><tr><th align="center">ID</th><th align="center">CNAME</th><th align="center">OILNAME</th>
<th align="center">QUANTITY(In Liters)</th><th align="center">DATE</th><th>ACTION</th></tr></thead>
<?php
$res=mysql_query("select * from orders");
while($row=mysql_fetch_array($res))
{
echo"<tbody><tr>";
echo"<td><center>".$row['ID']."</center></td><td><center>".$row['NAME']."</center></td>";
echo"<td><center>".$row['OILNAME']."</center></td><td><center>".$row['QUANTITY']."</center></td>";
echo"<td><center>".$row['DATE']."</center></td>"; 
echo"<td><center><a href=orderdelete.php?id=".$row['ID']."> "?><button id="eb"><?php echo "DELETE"; ?></button><?php echo "</a></td></tr></tbody>"; 
}
?>
</table>
<a href="details.php" id="bk">...Back</a>
</h3>
</center>
</body>
</html>
