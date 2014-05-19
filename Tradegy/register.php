<?php include ("Connect.php"); ?>

<html>

<head>
    
    <link href="design/style.css" rel="stylesheet" type="text/css"/>
    
</head>


<body>

    <div id="website">

        <div id="header" class="shadow">
            <p><img align="middle" src="design/img/Tradegy.png" alt="Tradegy" /></p>
        </div>
        
        <div id="navi" class="coner shadow">

            <div id="naviMenu">

                <div id="norm">

                    <ul>

                        <li><a href="index.php">Home</a></li>
    
                    </ul>
    
                </div>
    
                <div id="login">
    
                    <ul>
    
                        <li><a href="login.php">Login</a></li>
    
                    </ul>
    
                </div>

            </div>
            
        </div>
    
        <div id="form" class="shadow">
    
            <h1 align="center">Registrierung</h1>
            
            <br />
    
            <?php 
            if(!isset($_GET["page"])) {
    
    
            echo	'<form method="post" action="Register.php?page=2">
                	<a>Name:</a><br />
                    	<input type="text" name="user" /> <br /> <br /> 
                	<a>Passwort:</a><br />
                    	<input type="password" name="pw" /> <br /> <br />
                	<a>Passwort wdh.:</a><br />
                    	<input type="password" name="pw2" /> <br /> <br />
                    <a>E-Mail:</a><br />
                        <input type="email" name="email"/> <br /> <br />
                		<input type="submit" value="Register" />
            	</form>';
            
    
            }
             ?>
             
            <?php 
                if(isset($_GET["page"])) {
                    if($_GET["page"] == "2") {
                        $u_name = strtolower($_POST["user"]);
                        $pw = md5($_POST["pw"]);
                        $pw2 = md5($_POST["pw2"]);
                        $email = strtolower($_POST["email"]);
                        
                        if($u_name!="" && $pw!="" && $pw2!="" && $email!="") {
                     
                        if($pw != $pw2){
                            echo "Die Passw&ouml;rter stimmen nicht &uuml;berein!";
                        } else {
    
                            $control = 0;
                            $abfrage = "SELECT u_name FROM user WHERE u_name = '$u_name'";
                            $ergebnis = mysql_query($abfrage);
                            while($row = mysql_fetch_object($ergebnis)) {
                                $control++;
                            }
                            if($control != 0) {
                                echo 'Der Username ist vergeben! <a href="Register.php">zurück</a>';    
                            } else {
                                $eintrag = "INSERT INTO user
                                (u_name, passwort, email)
                                
                                VALUES
                                ('$u_name', '$pw', '$email')";
                                
                                $eintrag = mysql_query($eintrag);
                                
                                if($eintrag == true) {
                                    echo 'Du hast dich Registriert! <a href="login.php">Melde dich an!</a>';
                                } else {
                                    echo 'Fehler beim Registrieren! <a href="register.php">zurück</a>';
                                }
								
                            mysql_close($verbindung);
     
                            } 
                        }
                        
                        } else {
                            echo "Du musst alle Felder ausf&uuml;llen!";
                        }
						
                        
                    }
                }  
             ?>
    
        </div>
        
    </div>

</body>

</html>