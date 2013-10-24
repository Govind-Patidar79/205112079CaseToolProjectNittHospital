<?php
session_start();
?>

<!DOCTYPE html>

<html lang="en" class="no-js">
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
				<br> <a href ="index1.php"><i><b>Home</b></i></a><br>
            </header>
            <section>				
                <div id="container_demo" >
                  
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="detail.php" method="POST" autocomplete="on"> 
                              
                                <p> 
                                 
            <h1>Registration</h1>
                    Name:<input type="text" class="long" name="pname"/>
                </p>
            <p>
                   Roll Number:<input type="text" class="long" name="rolln" required />
                </p>
                              


                <p>
                    <label>Phone:<input type="text" name="p" maxlength="10" required />
                </p>
                
                <p>
                    Adress :<input type="text" class="long" name="address" required />
                </p>
				<p>
                    Gender :<select class="gender" name="gender" required >
                    <option value ="male">Male</option>
                   <option value ="female">Female</option></select><br>
               </p>
               
                   Birthdate:<br> <input type="date" name="bday" required />
				  <p class="login button">  <input type="submit" value="Register" /> </p>
	
                              
                            </form>
                        </div>
                        </div>
						
                    </div>
                </div>  
            </section>
        </div>
		<footer> <b><i>National Institute of Technology Tiruchirappalli   copy right @205112079</i></b></footer> 
    </body>
</html>