<?php 
session_start();
mysql_connect("localhost" ,"root", "") or die("notconnected");
 mysql_select_db("detail") or die("not connected");
$name=$_POST['pname'];
 $rnum=$_POST['rolln'];
 $phone=$_POST['phone'];
 $add=$_POST['address'];
 $sex=$_POST['gender'];
 $day=$_POST['day'];
 $month=$_POST['month'];
 $year=$_POST['year'];
 $row = mysql_query("insert into patient values('$name',$rnum,$phone,'$add','$sex')") or die(mysql_error());
 //$query=mysql_query("select prolln from patient where prolln=$rnum");
 if($row)
 {
     $_SESSION[regsuccess]=true;
	 header('location:login.php');
	} 
 else
 {
   echo "<script>alert('try again')</script>";
   header('location:regis.php');
   }
   ?>