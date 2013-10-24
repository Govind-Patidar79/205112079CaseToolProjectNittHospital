
<!DOCTYPE html>
<html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
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
				
            </header>
            <section>				
                <div id="container_demo" >
                  
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
						<br> <a href ="logout.php"><i><b>Logout</b></i></a><br>
                            <form  action="edit.php" method="POST" autocomplete="on"> 
                     Patient ID: <input type="text" name="rn" required="required" 

placeholder=" For eg. 205112079"/><br>        
Disease:<br> <input type="text" name="d"><br><br>
Doctor Description and Medicines<br>
           <textarea cols="50" rows="5" name="md"></textarea><br><br>
<a href ="test.php"><i><b>Test</b></i></a><br>	
<p class="login button"> 
<input type="submit" value="Save" name="save" /></p>
</form>
      
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
?><summary> <b>Patient</b> 
<details>
<?php
$_SESSION['success']=true;
$res=mysql_fetch_array($read);
echo "<b>Roll Number<b>"." : ".$res['prolln']."<br>";
echo "Name"." : ".$res['pname']."<br>";
echo "Birth Date"." : ".$res['pdob']."<br>";
echo "Address"." : ".$res['padd']."<br>";
echo "Contact"." : ".$res['pphone']; ?> 
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
 
	  
								</p>
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
   <footer> <b><i>National Institute of Technology Tiruchirappalli   copy right @205112079</i></b></footer> </body>
</html>
