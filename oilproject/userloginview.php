<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>USER LOGIN VIEW</title>
<style type="text/css">
   body{
      margin:0;
	  padding:0;
	  background-image:url(http://localhost/oilproject/back.jpg);
	  background-size:cover;
	  background-repeat:no-repeat;
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
	   margin-left:280px;
	   }
	   #sh
	  {
	   width:90%;
	   font-size:30px;;
	   color:#009879;
	   font-style:italic;
	   font-family:Algerian,BOLD;
	   margin-left:200px;
	   }   
    #bk{
	  font-size:18px;
	  color:#009879;
	  margin-left:210px;
	  }
   a{
	  font-size:18px;
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
	   margin-left:230px;
	   }
	  #n1{
      width:180px;
      border:2px solid #aaa;
	  border-radius:4px;
	  margin:8px 0;
	  outline:none;
	  padding:6px;
	  box-sizing:6px;
	  color:black;
	  transition:3s;
	  }
	 #n1:focus{
	 border-color:#009879;
	 box-shadow:0 0 8px 0 #009879;
	 }
	::-webkit-input-placeholder
	  {
	  color:#009879;
	  font-size:6px;
	  text-align:center;
	  }
	  #al{
	  margin-left:300px;
	  }
</style>
</head>
<body>
<center>
<h1 id="h">OIL EXTRATION UNIT AUTOMATION</h1>
<h2 id="sh">USER LOGIN VIEW</h2>
<h3>
<?php
$host="localhost";
$user="root";
$password="";
$db="oilproject";
mysql_connect($host,$user,$password);
mysql_select_db($db);
$cnt=mysql_query("select count(id) as total from signintab");
$values=mysql_fetch_assoc($cnt);
$num=$values['total']; ?>
<h3 id="tot"><?php echo"TOTAL USERS : $num"; ?></h3>
<h3>
<div id="al">
<table class="content-table"  width="600" height="40"> 
<thead><tr><th align="center">ID</th><th align="center">NAME</th><th align="center">PASSWORD</th><th align="center">ADDRESS</th>
<th align="center">GMAIL</th><th align="center">PHONO</th><th>ACTION</th></tr></thead>
<?php
$res=mysql_query("select * from signintab");
while($row=mysql_fetch_array($res))
{
echo"<tbody><tr>";
echo"<td><center>".$row['ID']."</center></td><td><center>".$row['NAME']."</center></td>";
echo"<td><center>".$row['PASSWORD']."</center></td>";
echo"<td><center>".$row['ADDRESS']."</center></td>";
echo"<td><center>".$row['GMAIL']."</center></td>";
echo"<td><center>".$row['PHONO']."</center></td>";
echo"<td><center><a href=logindelete.php?id=".$row['ID']."> "?><button id="bb"> <?php echo "DELETE"; ?></button><?php echo "</a></td></tr></tbody>"; 
}
?>
</table></div>
</h3>
<h3><a href="details.php" id="bk">...Back</a></h3>
</center>
</body>
</html>
