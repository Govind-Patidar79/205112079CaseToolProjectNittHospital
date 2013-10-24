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
                   Roll Number:<input type="text" class="long" name="rolln"/>
                </p>
                              


                <p>
                    <label>Phone:<input type="text" maxlength="10" name="phone"/>
                </p>
                
                <p>
                    Adress :<input type="text" class="long" name="address"/>
                </p>
				<p>
                    Gender :<select class="gender" name="gender">
                    <option value ="male">Male</option>
                   <option value ="female">Female</option></select><br>
               </p>
               
                   Birthdate:<br>
                    <select class="date" name="day">
                        <option value="1" >01
                        </option>
                        <option value="2">02
                        </option>
                        <option value="3">03
                        </option>
                        <option value="4">04
                        </option>
                        <option value="5">05
                        </option>
                        <option value="6">06
                        </option>
                        <option value="7">07
                        </option>
                        <option value="8">08
                        </option>
                        <option value="9">09
                        </option>
                        <option value="10">10
                        </option>
                        <option value="11">11
                        </option>
                        <option value="12">12
                        </option>
                        <option value="13">13
                        </option>
                        <option value="14">14
                        </option>
                        <option value="15">15
                        </option>
                        <option value="16">16
                        </option>
                        <option value="17">17
                        </option>
                        <option value="18">18
                        </option>
                        <option value="19">19
                        </option>
                        <option value="20">20
                        </option>
                        <option value="21">21
                        </option>
                        <option value="22">22
                        </option>
                        <option value="23">23
                        </option>
                        <option value="24">24
                        </option>
                        <option value="25">25
                        </option>
                        <option value="26">26
                        </option>
                        <option value="27">27
                        </option>
                        <option value="28">28
                        </option>
                        <option value="29">29
                        </option>
                        <option value="30">30
                        </option>
                        <option value="31">31
                        </option>
                    </select>
                    <select name="month">
                        <option value="1">January
                        </option>
                        <option value="2">February
                        </option>
                        <option value="3">March
                        </option>
                        <option value="4">April
                        </option>
                        <option value="5">May
                        </option>
                        <option value="6">June
                        </option>
                        <option value="7">July
                        </option>
                        <option value="8">August
                        </option>
                        <option value="9">September
                        </option>
                        <option value="10">October
                        </option>
                        <option value="11">November
                        </option>
                        <option value="12">December
                        </option>

                    </select>
					<select class="date" name="year">
                        <option value="2000">2000
                        </option>
                        <option value="1999">1999
                        </option>
                        <option value="1998">1998
                        </option>
                        <option value="1997">1997
                        </option>
                        <option value="1996">1996
                        </option>
                        <option value="1995">1995
                        </option>
                        <option value="1994">1994
                        </option>
                        <option value="1993">1993
                        </option>
                        <option value="1992">1992
                        </option>
                        <option value="1991">1991
                        </option>
                        <option value="1990">1990
                        </option>
                        <option value="1989">1989
                        </option>
                        <option value="1988">1988
                        </option>
                        <option value="1987">1987
                        </option>
                        <option value="1986">1986
                        </option>
                        <option value="1985">1985
                        </option>
                        <option value="1984">1984
                        </option>
                        <option value="1983">1983
                        </option>
                        <option value="1982">1982
                        </option>
                        <option value="1981">1981</br>
                        </option>
                             <input type="submit" value="Register" /> 
	
                              
                            </form>
                        </div>
                        </div>
						
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>