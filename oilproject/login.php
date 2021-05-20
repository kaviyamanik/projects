<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>USER LOGIN FORM</title>
<style type="text/css">
 body{
      margin:0;
	  padding:0;
	  background-image:url(http://localhost/oilproject/back.jpg);
	  background-size:cover;
	  }
 .container{
      top:50%;
	  left:50%;
	  position:absolute;
	  transform:translate(-50%,-50%)	  ;
	  }
  .card{
      padding:70px 50px 50px 40px;
	  border-radius:20px;
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
	  margin-left:310px;
	  }
	 #n1:focus{
	 border-color:#009879;
	 box-shadow:0 0 8px 0 #009879;
	 }
     #b1{
      background-color:#009879;
      color:#FFFFFF;
      padding:7px 16px;
	  margin-left:290px;
	  }
	#b1:hover{
	  background-color:#FFFFFF;
	  color:#009879;
	  cursor:pointer;
	   }
	#img{
	  border-radius:50%;
	  position:absolute;
	  margin-left:-50px;
	  margin-top:-60px; 
	  }
     #for{
	  font-size:14px;
	  margin-left:200px;
	  color:#009879;
	  }
	 #bk{
	  font-size:18px;
	  margin-left:290px;
	  color:#009879;
	  }
	 ::-webkit-input-placeholder
	  {
	  color:#009879;
      font-size:9px;
	  font-family:"Times New Roman";
	  }
      #h
	  {
	   width:90%;
	   font-size:50px;;
	   color:#009879;
	   font-style:italic;
	   font-family:Algerian,BOLD;
	   margin-left:290px;
      } 
	  #hh
	  {
	   color:black;
	   margin-left:680px;
	  }
	   #sh
	  {
	   width:90%;
	   font-size:30px;;
	   color:#009879;
	   font-style:italic;
	   font-family:Algerian,BOLD;
	   margin-left:210px;
	   }
</style>
</head>
<body>
<center>
<h1 id="h">OIL EXTRATION UNIT AUTOMATION</h1>
<h2 id="sh">LOGIN FORM</h2>
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
if(empty($_POST['name']) && empty($_POST['pass']))
 echo'<script>alert("Check UserName & Password!!!")</script>';
elseif(empty($_POST['name'])) 
 echo'<script>alert("Check UserName!!!")</script>';
elseif(empty($_POST['pass']))
 echo'<script>alert("Check Password!!!")</script>';
else
{ 
$uname=$_POST['name'];
$upass=$_POST['pass'];
$sql="select * from signintab where NAME='$uname' and PASSWORD='$upass' limit 1";
$result=mysql_query($sql);
if(mysql_num_rows($result)>0)
 {
  $_SESSION['name']=$uname;
  echo"LOGIN SUCCESS";
  header('location:dem.php');
 }
 else
 {
  $upass="";
  echo'<script>alert("Login Failed!!!")</script>';
 }
}
}
?>
<form method="post">
<div class="container">
 <div class="card">
 <input type="text" name="name" placeholder="USERNAME" id="n1" value="<?php echo $uname;?>"  /><br />
 <input type="password" name="pass" placeholder="PASSWORD" id="n1" value="<?php echo $upass;?>" /><br /><br />
 <a href="forgot.php" id="for">Forget Password?</a><br /><br />
 <input type="submit" name="submit" value="LOGIN" id="b1" /><br />
 <br /><a href="signin.php" id="bk">...Back</a></div></center>
 </div>
</div>
 </form>
</h2>
</center>
</body>
</html>
