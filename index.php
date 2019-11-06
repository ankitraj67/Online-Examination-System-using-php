<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Wel come to Online Exam</title>

<link href="quiz.css" rel="stylesheet" type="text/css">
</head>
<style>
body
{
background: url(a.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  }
</style>

<body>





<?php
include("header.php");
include("database.php");
extract($_POST);

if(isset($submit))
{
	$rs=mysqli_query($cn,"select * from mst_user where login='$loginid' and pass='$pass'");
	if(mysqli_num_rows($rs)<1)
	{
		$found="N";
	}
	else
	{
		$_SESSION[login]=$loginid;
	}
}
if (isset($_SESSION[login]))
{
echo "<h1 class='style8' align=center>Wel come to Online Exam</h1>";
		echo '<table width="28%"  border="0" align="center">
  <tr>
    <td width="7%" height="65" valign="bottom"><img src="image/HLPBUTT2.JPG" width="50" height="50" align="middle"></td>
    <td width="93%" valign="bottom" bordercolor="#0000FF"> <a href="sublist.php" class="style4">Subject for Quiz </a></td>
  </tr>
  <tr>
    <td height="58" valign="bottom"><img src="image/DEGREE.JPG" width="43" height="43" align="absmiddle"></td>
    <td valign="bottom"> <a href="result.php" class="style4">Result </a></td>
  </tr>
  <tr>
  <td height="58" valign="bottom"><img src="image/ins.png" width="43" height="43" align="absmiddle"></td>
  <td valign="bottom"> <a href="instr1.html" class="style4">Instructions </a></td>
  
</table>';
   
		exit;
		

}


?>
<table width="100%" border="0">
  <tr>
    <td width="70%" height="25">&nbsp;</td>
    <td width="1%" rowspan="2"><span></span></td>
    <td width="29%" ><div align="left"><font color="red"> <h2>User Login</font> </div></td>
  </tr>
  <tr>
    <td height="296" valign="top"><div align="center">
        <font face="inherit" color="blue" size="6px"><h2>Welcome to Online Examination</h2></font>
     
      
<p align="left" class="style5">&nbsp;</p>
      <blockquote>
           <font face="inherit" color="black" size="6px"><p align="center"><span>A computer science test portal</br>
Check yourself for free "Sign up now"</span></p></font>
      </blockquote>
    </div></td>
    <td valign="top"><form name="form1" method="post" action="">
      <table width="200" border="0">
        <tr>
          <td><span><b>Login ID: </b></span></td>
          <td><input name="loginid" type="text" id="loginid2"></td>
        </tr>
        <tr>
          <td><span><b>Password: </b></span></td>
          <td><input name="pass" type="password" id="pass2"></td>
        </tr>
        <tr>
          <td colspan="2"><span class="errors">
            <?php
		  if(isset($found))
		  {
		  	echo "Invalid Username or Password";
		  }
		  ?>
          </span></td>
          </tr>
        <tr>
          <td colspan=2 align=center class="errors">
		  <input name="submit" type="submit" id="submit" value="Login">		  </td>
        </tr>
        <tr>
          <td colspan="2"><div align="center"><span class="style4">New User ? <a href="signup.php">Signup Free</a></span></div></td>
          </tr>
      </table>
      <div align="center">
        
        </div>
    </form></td>
  </tr>
</table>
</body>
</html>
