<?php include ("connect.php"); ?>
<?php include ("function.php"); ?>

<?php

session_start();

if(!isset($_SESSION['username'])){

echo '  <html>
                
            <head>
                    
                <title>Tradegy - Trade With Strategy</title>
                <link href="design/style.css" rel="stylesheet" type="text/css" />
                    
            </head>
                
            <body>
                        
                <div id="website">
                        
                    <div id="header" class="coner shadow">
                            
                        <p><img align="middle" src="design/img/Tradegy.png" alt="Tradegy" /></p>
                            
                    </div>
                            
                    <div id="navi" class="coner shadow">
                    
                        <div id="naviMenu">
                        
                            <div id="norm">
                        
                                <ul>
                                
                                    <li><a href="#">Home</a></li>
                                
                                </ul>
                                
                            </div>
                                
                            <div id="login">
        
                                <ul>
            
                                    <li><a href="login.php">Login</a></li>
            
                                </ul>
        
                            </div>       
                        
                        </div>
                
                    </div>
                        
                    <div id="wrapper">
                                
                        <div id="info" class="coner shadow">
                    
                            <h1>Melde Dich an und spiel mit!</h1>
                            
                            <br />
                            
                            <a>Dieses kleine Spiel bietet dir die M&ouml;glichkeit mit Freunden zu handeln und gro&szlig;e gewinne zu machen.
                            Steig ein und werde der wohlhabenste in ganz (Hier passenden Namen f&uuml;r ein Land einsetzten).</a>
                           
                            <br />
                            <br />
                            
                            <a href="login.php"><h3>Viel Spa&szlig; beim Spielen</h3></a>
                            
                            <br />
                            
                            <h2>Das Spielprinzip</h2>
                            
                            <br />
                            
                            <a>Um euch im Spiel besser zurechtzufinden stellen wir euch eine Seite zur Verf&uuml;gung auf der ihr alles nachlesen k&ouml;nnt
                            was ihr wissen m&uuml;sst. Solltet ihr trotzdem Probleme haben, k&ouml;nnt ihr jeder Zeit ein Ticket an uns schreiben, welches ihr am Ende der Hilfe-Seite findet
                            und wir nehmen uns dem an.</a>
                            
                            <br />
                            <br />
                            
                            <a href="hilfe.html"><h3>Hier gehts zur Hilfe-Seite</h3></a>
                                                
                        </div>
                
                    </div>
                
                    <div id="footer" class="coner shadow">
                
                    </div>                    
                        
                </div>
                    
            </body>
                
        </html>';
        
} else {
        
    echo '<html>

        <head>

            <title>Tradegy - Trade With Strategy</title>
            <link href="design/style.css" rel="stylesheet" type="text/css" />

        </head>

        <body>

            <div id="website">

                <div id="header" class="coner shadow">

                    <p><img align="middle" src="design/img/Tradegy.png" alt="Tradegy" /></p>

                </div>

                <div id="navi" class="coner shadow">

                    <div id="naviMenu">

                        <div id="norm">

                            <ul>

                                <li><a href="#">Home</a></li>
                                <li><a href="lager.php">Lager</a></li>
                                <li><a href="stadt.php">St&auml;dte</a></li>

                            </ul>

                        </div>

                        <div id="login">

                            <ul>

                                <li><a href="profil.php">'. $_SESSION['username'] .'</a></li>
                                
                            </ul>

                        </div>

                    </div>

                </div>

                <div id="wrapper">

                    <div id="left" class="coner shadow">

                    </div>

                    <div id="right" class="coner shadow">

                        <h3>Profil</h3><br />
                        <a>Stadt: '. stadt_abfrage() .'</a><br />
                        <a>Geld: '. geld_abfrage() .'</a><br />

                        <hr />

                        <h4><a href="logout.php">Logout</a></h4>

                    </div>

                </div>

                <div id="footer" class="coner shadow">

                </div>

            </div>

        </body>

    </html>';        
        
}
 ?>

        
        