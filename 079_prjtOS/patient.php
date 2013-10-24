<html>
<body bgcolor="gray">
<div style="background-color:#F5F5F5;text-align : right">
<a href ="logout.php"  >Logout</a>
</div> 
<div style="background-color:#F5F5F5;text-align : center">
<h1>Under Construction</h1>
</div>
</body>
</html>
<?php
session_start();
mysql_connect("localhost" ,"root", "") or die("notconnected");
 mysql_select_db("detail") or die("not connected");
 if(isset($_POST['submit']))
 {
$roll=$_POST['rn'];



$read=mysql_query("select * from patient where prolln=$roll");
$n=mysql_num_rows($read);
if($n>0)
{
$_SESSION['success']=true;
$res=mysql_fetch_array($read);
echo "Welcome"."  ".$res['prolln']."<br>";
echo "Patient Details are given below"."<br>";
echo "Name"." : ".$res['pname']."<br>";
echo "Adress"." : ".$res['padd']."<br>";
echo "Contact"." : ".$res['pphone'];
?>
<?php
}
else
{
$_SESSION['fail']=true;
header('location:login.php');
}
}
?>
 