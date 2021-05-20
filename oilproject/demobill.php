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
<title>BILL GENERATION</title>
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
	   margin-left:260px;
      } 
      #b1{
       background-color:#009879;
       color:#FFFFFF;
       padding:8px 23px;
	  }
	  #b1:hover{
	  background-color:white;
	  color:#009879;
	  cursor:pointer;
	   }
  	  #hh{
	   width:90%;
	   font-size:30px;;
	   color:#009879;
	   font-style:italic;
	   font-family:Algerian,BOLD;
	   margin-left:190px;
	  }
     ::-webkit-input-placeholder
	  {
	  color:#000000;
	  font-size:9px;
	  font-family:"Times New Roman";
	  }
	 a{
	  font-size:18px;
	  color:#009879;
	  margin-left:230px;
	  }
	  #sel
	  {
	  background:#FFFFCC;
	  }
	  #sel:hover{
	  background:#009879;
	  color:#FFFFFF;
	  cursor:pointer;
     }	
</style>
</head>
<body>
<center>
<h1 id="h">OIL EXTRATION UNIT AUTOMATION</h1>
<h2 id="hh">BILLING
<center>
<form method="post" action="bills.php">
<br /><table>
<tr><td>
<select name="uname" style="width:220px" id="n1">
<option value="">SELECT NAME</option>
<?php
$res=mysql_query("select NAME from signintab");
while($row=mysql_fetch_array($res))
{?>
<option id="sel"><?php echo $row['NAME']; ?> </option>
<?php } ?></select>
<tr><td><input type="text" name="bdate" id="n1" placeholder="DD/MM/YYYY"/></td></tr>
</table><br />
<input type="submit" name="submit" value="BILL" id="b1" /><br /></form>
</center>
</h2>
<h3><a href="details.php">...Back</a></h3>
</body>
</html>
