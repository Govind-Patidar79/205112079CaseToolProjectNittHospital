<?php
session_start();


?>


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
				<br> <a href ="index1.php"><i><b>Home</b></i></a><br>
				
            </header>
            <section>				
                <div id="container_demo" >
                  
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="patho.php" method="POST" autocomplete="on"> 
                                <h1>Pathology</h1> 
                                <p> 
                                    <label for="username" class="uname" data-icon="u" > Enter Roll Number </label>
                                    <input type="text" name="rn" required="required" 

placeholder=" For eg. 205112079"/>
                                </p>
                                <p class="login button"> 
                                    <input type="submit" value="Login" name="submit" />
<?php if(isset($_SESSION['fail'])) {echo "Does not exist";}unset($_SESSION['fail']); if(isset($_SESSION['regsuccess'])) {echo "Stored successful";}unset($_SESSION['regsuccess']); ?>									
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