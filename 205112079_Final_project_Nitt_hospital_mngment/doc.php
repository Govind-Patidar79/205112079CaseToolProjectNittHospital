

<!DOCTYPE html>
<html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>National Institute of Technology Trichy Hospital</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="National Institute of Technology Trichy Hospital" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
    </head>
    <body>
        <div class="container">
            <!-- Codrops top bar -->
            <div class="codrops-top">
                
                <div class="clr"></div>
            </div><!--/ Codrops top bar -->
            <header>
                <h1>National Iinstitute of Technology Trichy <span>Hospital</span></h1>
				 <br> <a href ="logout2.php"><i><b>Logout</b></i></a><br>	
				 
            </header>
            <section>				
                <div id="container_demo" >
                  
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="doc.php" method="POST" autocomplete="on"> 
							<h1>NIT Trichy Medical Store</h1><br>
                                <h2><b><i>All medicines are given below</i></b></h2><br>
    							
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
echo "<b>Disease</b> "." : ".$res['dis']."<br>"; 
echo "<b>Medicines</b>"." : ".$res['medi']."<br>";
?>
<summary> <b>Patient</b> 
<details>
<?php
echo "<b>Roll Number<b>"." : ".$res['prolln']."<br>";
echo "Name"." : ".$res['pname']."<br>";
echo "Address"." : ".$res['padd']."<br>";
echo "Contact"." : ".$res['pphone']; 
?> 
</details>
</summary>
<?php
}
else
{
$_SESSION['fail']=true;
header('location:login.php');
}
}
?>
 
 
<p class="change_link">
								
								</p>
                            </form>
                        </div>

                        			
                            </form>
                        </div>
						
                    </div>
                </div>  
            </section>
        </div>
  
<footer> <b><i>National Institute of Technology Tiruchirappalli   copy right @205112079</i></b></footer>  </body>
</html>
 

