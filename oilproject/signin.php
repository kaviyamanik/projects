<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>SIGNIN FORM</title>
<style>
 body{
      margin:0;
	  padding:0;
	  background-image:url(http://localhost/oilproject/back.jpg);
	  background-size:cover;
	  }
 .container{
      top:55%;
	  left:50%;
	  position:absolute;
	  transform:translate(-50%,-50%);
	  }
  .card{
      padding:70px 80px 30px 60px;
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
	  margin-left:320px;
	  }
	 #n1:focus{
	 border-color:#009879;
	 box-shadow:0 0 8px 0 #009879;
	 }
    #b1{
     background-color:#009879;
     color:#FFFFFF;
     padding:9px 19px;
	 margin-left:310px;
	  }
	#b1:hover{
	  background-color:white;
	  color:#009879;
	  cursor:pointer;
	   }
	  ::-webkit-input-placeholder
	  {
	  color:#009878;
	  font-size:9px;
	  font-family:"Times New Roman";
	  }
	  #log
	  {
	  color:#009879;
	  font-family:Algerian,BOLD;
	  font-size:24px;
	  margin-left:330px;
	  }
	  #h
	  {
	   width:90%;
	   font-size:50px;;
	   color:#009879;
	   margin-left:270px;
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
	   margin-left:210px;
	   }  
	   #hhh
	   {
	   color:#9A0E18;
	   font-family:BOLD;
	   }
	  #bk{
	  font-size:18px;
	  margin-left:320px;
	  color:#009879;
	  }
</style>

</head>
<body>
<center>
<h1 id="h">OIL EXTRATION UNIT AUTOMATION</h1>
<h2 id="sh">REGISTRATION FORM</center>
<h3 id="hhh">
<?php
$host="localhost";
$user="root";
$password="";
$db="oilproject";
mysql_connect($host,$user,$password);
mysql_select_db($db);
if(isset($_POST['submit']))
{
if(empty($_POST['name']) && empty($_POST['pass']) && empty($_POST['address']) && empty($_POST['mail']) && empty($_POST['phn']))
echo'<script>alert("Check All Fields!!!")</script>';
elseif(empty($_POST['name']))
echo'<script>alert("Check UserName!!!")</script>';
elseif(empty($_POST['pass']))
echo'<script>alert("Check Password!!!")</script>';
elseif(empty($_POST['address']))
echo'<script>alert("Check Address!!!")</script>';
elseif(empty($_POST['mail']))
echo'<script>alert("Check Email!!!")</script>';
elseif(empty($_POST['phn']))
echo'<script>alert("Check Phone Number!!!")</script>';
else
{
if(isset($_POST['name']) && isset($_POST['pass']) && isset($_POST['address']) && isset($_POST['mail']) && isset($_POST['phn']) )
{
$uname=$_POST['name'];
$gm=$_POST['mail'];
$upass=$_POST['pass'];
$cpass=$_POST['cpass'];
$no=$_POST['phn'];
$query=mysql_query("select * from signintab where NAME='$uname'");
if(mysql_num_rows($query)>0)
 echo'<script>alert("UserName Already Exist!!!")</script>';
else
{
 $sql1="insert into signintab(NAME,PASSWORD,ADDRESS,GMAIL,PHONO) values ('$uname','$upass','$add','$gm','$no')";
 mysql_query($sql1);
 header('location:login.php');
}
}
}
}
?></h3>
<form method="post">
<div class="container">
 <div class="card">
<br />
<center><table cellspacing="3">
<tr><td> <input type="text" name="name" placeholder="USERNAME" id="n1" value="<?php echo $uname;?>"  /></td></tr>
<tr><td> <input type="text" name="mail" placeholder="GMAIL" id="n1" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
 title="characters@characters.domain" value="<?php echo $gm;?>" /></td></tr>
<tr><td> <input type="password" name="pass" placeholder="PASSWORD" id="n1" maxlength="16" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
 title="Must Contain Atleast One Number and One UpperCase and LowerCase Letter,And Atleast 8 or More" value="<?php echo $upass;?>" /></td></tr>
 <tr><td> <input type="password" name="cpass" placeholder="PASSWORD" id="n1" maxlength="16" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
 title="Must Contain Atleast One Number and One UpperCase and LowerCase Letter,And Atleast 8 or More" value="<?php echo $upass;?>" /></td></tr>
<tr><td> <input type="text" name="phn" placeholder="PHONE NUMBER" pattern="[0-9]{10}" title="9876543210 (Exact 10 Numbers)"
id="n1" value="<?php echo $no;?>" maxlength="10" 
onkeypress="return event.charCode >=48 && event.charCode<=57" /></td></tr>
<tr><td align="center"><input type="submit" name="submit" value="SUBMIT" id="b1" /></td></tr></table></center>
<br /> <a href="login.php" id="log">LOGIN</a>&nbsp&nbsp;(If Already SignIn)<br />
 </div>
</div>
</form>
</h2>
</center>
</body>
</html>
