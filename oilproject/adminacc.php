<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ADMIN ACCOUNT</title>
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
	  margin-left:230px;
	  }
	 #n1:focus{
	 border-color:#009879;
	 box-shadow:0 0 8px 0 #009879;
	 }
     #b1{
      background-color:#009879;
      color:#FFFFFF;
      padding:7px 16px;
	  margin-left:230px;
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
     a{
	  font-size:14px;
	  color:#009879;
	  }
	 #bk{
	  font-size:18px;
	  margin-left:210px;
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
	   margin-left:250px;
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
	   margin-left:170px;
	   }
</style>
</head>
<body>
<center>
<h1 id="h">OIL EXTRATION UNIT AUTOMATION</h1>
<h2 id="sh">ADMIN ACCOUNT CREATION</h2>
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
$check=mysql_query("select * from admintab where NAME='$aname' and PASSWORD='$apass'");
$checkpass=mysql_query("select * from admintab where PASSWORD='$apass'");
if(empty($_POST['name']) && empty($_POST['pass']))
 echo'<script>alert("Check Admin Name & Password!!!")</script>';
elseif(empty($_POST['name'])) 
 echo'<script>alert("Check Admin Name!!!")</script>';
elseif(empty($_POST['pass']))
 echo'<script>alert("Check Password!!!")</script>';
elseif(mysql_num_rows($check)>0)
 echo'<script>alert("Admin Name & Password Already Exist!!!")</script>';
elseif(mysql_num_rows($checkpass)>0)
echo'<script>alert("Password Already Exist!!!")</script>';
else
{ 
$sql="insert into admintab (NAME,PASSWORD) values('$aname','$apass')";
if(mysql_query($sql))
 {
  $aname="";
  $apass="";
  echo'<script>alert("Account Created Successfully!!!")</script>';
 }
 else
 {
  echo'<script>alert("Account Creation Failed!!!")</script>';
 }
}
}
?>
<form method="post">
<div class="container">
 <div class="card">
 <input type="text" name="name" placeholder="ADMIN NAME" id="n1" value="<?php echo $aname;?>"  /><br />
 <input type="password" name="pass" placeholder="PASSWORD" id="n1" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8}"
 title="Must Contain Atleast One Number and One UpperCase and LowerCase Letter,And Atleast 8 or More" value="<?php echo $apass;?>" /><br /><br />
 <input type="submit" name="submit" value="Create Account" id="b1" /><br />
 <br /><a href="admin.php" id="bk">...Back</a> <a href="logo.php" id="bk">Home...</a></div></center>
 </div>
</div>
 </form>
</h2>
</center>
</body>
</html>
