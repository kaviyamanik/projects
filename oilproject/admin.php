<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ADMIN LOGIN</title>
<style type="text/css">
 body{
      margin:0;
	  padding:0;
	  background-image:url(http://localhost/oilproject/back.jpg);
	  background-size:cover;
	  }
.container{
      top:60%;
	  left:50%;
	  position:absolute;
	  transform:translate(-50%,-50%)	  ;
	  }
  .card{
      padding:70px 80px 30px 60px;
	  border-radius:20px;
	  color:black;
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
	  margin-left:240px;
	  }
	 #n1:focus{
	 border-color:#009879;
	 box-shadow:0 0 8px 0 #009879;
	 }
    #b1{
     background-color:#009879;
     color:#FFFFFF;
     padding:9px 19px;
	 margin-left:240px;
	  }
	#b1:hover{
	  background-color:white;
	  color:#009879;
	  cursor:pointer;
	   }
	#img{
	  border-radius:50%;
	  position:absolute;
	  margin-left:120px;
	  margin-top:-40px; 
	  }
     a{
	  font-size:18px;
	  color:#009879;
	  margin-left:230px;
	  }
	  ::-webkit-input-placeholder
	  {
	  color:#009879;
	  font-size:9px;
	  font-family:"Times New Roman";
	  }
	  #log
	  {
	  color:white;
	  font-family:Algerian,BOLD;
	  font-size:24px;
	  margin-left:10px;
	  }
	  #h
	  {
	   width:90%;
	   font-size:50px;;
	   color:#009879;
	   font-style:italic;
	   font-family:Algerian,BOLD;
	   margin-left:260PX;
	   }
	   #hhh
	   {
	   color:#9A0E18;
	   font-family:BOLD;
	   }

	 #h1
	  {
	   width:90%;
	   font-size:30px;;
	   color:#009879;
	   font-style:italic;
	   font-family:Algerian,BOLD;
	   margin-left:170px;
     }
</style>
</head>
<body>
<center>
<h1 id="h">OIL EXTRATION UNIT AUTOMATION</h1>
<h1 id="h1"> ADMIN LOGIN </h1><br />
<h2 id="hh">
<?php
$host="localhost";
$user="root";
$password="";
$db="oilproject";
mysql_connect($host,$user,$password);
mysql_select_db($db);
  if(isset($_POST['submit']))
  {
   $aname=$_POST['name'];
   $apass=$_POST['pass'];
  if(empty($_POST['name']) && empty($_POST['pass']))
   echo'<script>alert("Check UserName & Password!!!")</script>';
  elseif(empty($_POST['name']))
   echo'<script>alert("Check UserName!!!")</script>';
  elseif(empty($_POST['pass']))
   echo'<script>alert("Check Password!!!")</script>';
  else
  {
   $sql=mysql_query("select * from admintab where NAME='$aname' and PASSWORD='$apass' limit 1");
  if(mysql_num_rows($sql)>0)
  {
   header('location:details.php');
  }
  else
    echo'<script>alert("Login Failed!!!")</script>';	
  }
  }	
  if(isset($_POST['admin']))
  {
   $check=mysql_query("select * from admintab");
  if(mysql_num_rows($check)>2)
  echo'<script>alert("You Cannot Create Admin Account!!.Only Limited Administrators Are Allowed!!")</script>';
  else 
  header('location:adminacc.php');
  }
 ?>
<form method="post">
<div class="container">
 <div class="card">
 <input type="text" name="name" placeholder="ADMIN NAME" id="n1" value="<?php echo $aname;?>"/><br />
 <input type="password" name="pass" placeholder="PASSWORD" id="n1" value="<?php echo $apass;?>"/><br /><br />
 <input type="submit" name="submit" value="LOGIN" id="b1" /><br />
 <h3><a href="change.php">Change Password</a></h3>
 <input type="submit" name="admin" value="Create Admin Account"  id="b1"/>
<h3> <a href="logo.php">...Back</a></h3>
 </div>
</div>
</form>
</h2>
 </center>
</body>
</html>
