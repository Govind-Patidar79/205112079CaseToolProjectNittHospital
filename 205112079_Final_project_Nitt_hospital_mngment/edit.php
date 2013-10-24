<?php 
session_start();
mysql_connect("localhost" ,"root", "") or die("notconnected");
 mysql_select_db("detail") or die("not connected");
 $rnum=$_POST['rn'];
 $med=$_POST['md'];
 $d=$_POST['d'];
 
 $row1 = mysql_query("update patient set medi='$med' where prolln='$rnum'") or die(mysql_error());
 $row2 = mysql_query("update patient set dis='$d' where prolln='$rnum'") or die(mysql_error());
 //$query=mysql_query("select prolln from patient where prolln=$rnum");
if($row1)
 {
     $_SESSION[regsuccess]=true;
	 header('location:medilogin.php');
	} 
 else
   {
   echo "<script>alert('try again')</script>";
   header('location:patient.php');
   }
   if($row1)
    echo "succeed";
	if($row2)
  echo "ok"; 
 ?>