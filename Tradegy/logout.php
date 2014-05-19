<?php
session_start();
session_destroy();
?>

<html>

    <head>
        
        <title>Tradegy - Trade With Strategy</title>
        <link href="design/style.css" rel="stylesheet" type="text/css" />

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
            
                <h1 align="center">Ausgeloggt!</h1>
                <br />
                <br />
                <a href="index.php">Zur Startseite</a>
            
            </div>
        
        </div>
    
    </body>

</html>