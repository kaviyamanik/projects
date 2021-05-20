<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>PRODUCTS</title>
</head>
<body>
<style type="text/css">
     body{
      margin:0;
	  padding:0;
	  background-image:url(http://localhost/oilproject/white.jpg);
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
     input::-webkit-input-placeholder
	 {
	  color:#009879;
	 }
	 a{
	  font-size:18px;
	  color:#009879;
	  cursor:pointer;
	  }
	  #sh{
	   width:90%;
	   font-size:30px;;
	   color:#009879;
	   font-style:italic;
	   font-family:Algerian,BOLD;
	  }
	 #eb{
	   background-color:#009879;
	   color:#FFFFFF;
	   padding:8px 17px;
	   }
	   #eb:hover{
	   background-color:#FFFFFF;
	   color:#009879;
	   cursor:pointer;
	   }
	   #tot{
	   font-size:22px;;
	   color:#009879;
	   font-style:italic;
	   font-family:Algerian,BOLD;
	   }
 </style>
</head>
<body>
<center>
<h1 id="h">OIL EXTRATION UNIT AUTOMATION</h1>
<h2 id="sh">PRODUCT INFORMATION</h2>
<img src="http://localhost/oilproject/flowers.png" height="250" width="900" />
<h2>
<?php
$host="localhost";
$user="root";
$password="";
$db="oilproject";
mysql_connect($host,$user,$password);
mysql_select_db($db);
if(isset($_POST['submit']))
{
$oname=$_POST['name'];
$oprice=$_POST['price'];
$filename=$_FILES['img']['name'];
$tmpname=$_FILES['img']['tmp_name'];
if(empty($_POST['name']) && empty($filename) && empty($_POST['price']))
echo'<script>alert("Check All Fields!!!")</script>';
elseif(empty($_POST['name']))
echo'<script>alert("Check OilName!!!")</script>';
elseif(empty($filename))
echo'<script>alert("Select Image!!!")</script>';
elseif(empty($_POST['price']))
echo'<script>alert("Check Price!!!")</script>';
else
{
$query=mysql_query("select * from shopping where NAME='$oname'");
$query1=mysql_query("select * from shopping where IMAGE='$filename'");
if(mysql_num_rows($query)>0)
 echo'<script>alert("OilName Already Exist!!!")</script>';
elseif(mysql_num_rows($query1)>0)
  echo'<script>alert("Image Already Exist!!!")</script>';
else
{
move_uploaded_file($tmpname,"C:\wamp\www\upload/$filename");
$sql=mysql_query("insert into shopping(NAME,IMAGE,PRICE) values ('$oname','$filename','$oprice')"); 
if($sql)
   echo'<script>alert("Data Inserted!!!")</script>';   
else
  echo'<script>alert("Not Inserted!!!")</script>';
}
}
}  ?>
<form method="post" action="#" enctype="multipart/form-data">
<table cellspacing="20">
<tr><td> <input type="text"  name="name" size="30" id="n1" placeholder="OIL NAME" value="<?php echo $oname;?>"/></td></tr>
<tr><td> <input type="file"  name="img" size="30" id="n1" value="<?php echo $filename;?>"/></td></tr>
<tr><td><input type="text"  name="price" size="30" id="n1" placeholder="PRICE" maxlength="15" value="<?php echo $oprice;?>"
onkeypress="return event.charCode >=48 && event.charCode<=57" /></td></tr>
</table>
<button type="submit" name="submit" class="button">
 <img src="http://localhost/oilproject/update.jpg" height="40" width="95"/></button><br />
</form>
<?php
$cnt=mysql_query("select count(id) as total from shopping");
$values=mysql_fetch_assoc($cnt);
$num=$values['total']; ?>
<h3 id="tot"><?php echo"TOTAL PRODUCT : $num"; ?></h3>
<h2>
<table  class="content-table" width="800" height="200">
<thead>
<tr><th>ID</th><th>OILNAME</th><th>IMAGE</th><th>PRICE</th><th>ACTON</th></tr>
</thead>
<?php 
$res=mysql_query("select * from shopping");
while($row=mysql_fetch_array($res))
{
echo"<tbody><tr>";
echo"<td><center>".$row['ID']."</center></td>";
echo"<td><center>".$row['NAME']."</center></td>";
echo"<td><center>"?><img src="<?php echo $row['IMAGE']; ?>" height="150" width="250" />
<?php
echo"</center></td><td><center>".$row['PRICE']."</center></td>";
echo"<td><center><a href=samdel.php?id=".$row['ID']."> "?><button id="eb"><?php echo "DELETE"; ?></button><?php echo "</a>";
echo"&nbsp&nbsp&nbsp<a href=shopupdate.php?id=".$row['ID'].">"?><button id="eb"><?php echo "EDIT"?></button><?php echo "</a></td></tr></tbody>"; 
}
?>
</table>
<h3><br /><a href="details.php" id="bk">...Back</a></h3>
</h2>
</center>
</body>
</html>
