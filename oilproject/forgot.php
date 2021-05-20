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
<title>FORGET PASSWORD</title>
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
	  margin-left:260px;
	  }
	 #n1:focus{
	 border-color:#009879;
	 box-shadow:0 0 8px 0 #009879;
	 }
   #b1{
      background-color:#009879;
      color:#FFFFFF;
      padding:9px 16px;
	  margin-left:260px;
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
      #h
	  {
	   width:90%;
	   font-size:50px;;
	   color:#009879;
	   font-style:italic;
	   font-family:Algerian,BOLD;
	   margin-left:270px;
      } 
	  #hh
	  {
	   color:white;
	   margin-left:880px;
	  }
	  a{
	  font-size:18px;
	  color:#009879;
	  margin-left:250px;
	  cursor:pointer;
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
</style>
</head>
<body>
<center>
<h1 id="h">OIL EXTRATION UNIT AUTOMATION</h1>
<h2 id="sh">RESET PASSWORD FORM</h2>
<h2 id="hh">
<?php
if(isset($_POST['submit']))
{
$nn=$_POST['uname'];
$email=$_POST['mail'];
$password=$_POST['pass'];
$sel=mysql_query("select * from signintab where NAME='$nn'");
$row=mysql_fetch_array($sel);
$oldpass=$row['PASSWORD'];
if(empty($_POST['uname']) && empty($_POST['mail']) && empty($_POST['pass']))
echo'<script>alert("Check All Fields!!!")</script>';
elseif(empty($_POST['uname']))
echo'<script>alert("Check User Name!!!")</script>';
elseif(empty($_POST['mail']))
echo'<script>alert("Check Email!!!")</script>';
elseif(empty($_POST['pass']))
echo'<script>alert("Check Password!!!")</script>';
elseif($password==$oldpass)
 echo'<script>alert("Password Already Exist!!! Enter New Password")</script>';
else
{
$sql=mysql_query("update signintab set PASSWORD='$password' where GMAIL='$email'");
if($sql)
{
echo'<script>alert("Password Changed!!!")</script>';
}
else
echo'<script>alert("Password Changed!!!")</script>';
}
}
?>
<form method="post">
<div class="container">
 <div class="card">
 <input type="text" name="uname" placeholder="USER NAME" id="n1" value="<?php echo $nn;?>" /><br />
 <input type="text" name="mail" placeholder="GMAIL" id="n1" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
 title="characters@characters.domain" value="<?php echo $email;?>"/><br />
 <input type="password" name="pass" placeholder="PASSWORD" id="n1" maxlength="16" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
 title="Must Contain Atleast One Number and One UpperCase and LowerCase Letter,And Atleast 8 or More" value="<?php echo $password;?>"/><br /><br />
 <input type="submit" name="submit" value="CHANGE" id="b1" /><br />
 <br /><a href="login.php">...Back</a>
 </div>
</div>
</center>
</form>
</body>
</html>