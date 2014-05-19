<?php include ("connect.php"); ?>

<?php

session_start();


if(isset($_SESSION['username'])){

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

                                <li><a href="index.php">Home</a></li>
                                <li><a href="lager.php">Lager</a></li>
                                <li><a href="#">St&auml;dte</a></li>

                            </ul>

                        </div>

                        <div id="login">

                            <ul>

                                <li><a href="#">', $_SESSION['username'] ,'</a></li>

                            </ul>

                        </div>

                    </div>

                </div>

                <div id="info" class="coner shadow">

                    

                        <table>
                        
                            <form action="hamburg.php">
                        
                            <tr>
                                <td width="100px" height="100px"><a>Bild</a></td>
                                <td width="100px" height="100px"><a>Hamburg</a></td>
                                <td width="300px" height="100px"><a>Beschreibung</a></td>
                                <td width="100px" height="100px"><input type="submit" value="Reisen"/></td>
                            </tr>
                            
                            </form>
                            
                            <form action="berlin.php">
                            
                            <tr>
                                <td width="100px" height="100px"><a>Bild</a></td>
                                <td width="100px" height="100px"><a>Berlin</a></td>
                                <td width="300px" height="100px"><a>Beschreibung</a></td>
                                <td width="100px" height="100px"><input type="submit" value="Reisen"/></td>
                            </tr>
                            
                            </form>
                            
                            <form action="frankfurt.php">
                            
                            <tr>
                                <td width="100px" height="100px"><a>Bild</a></td>
                                <td width="100px" height="100px"><a>Frankfurt</a></td>
                                <td width="300px" height="100px"><a>Beschreibung</a></td>
                                <td width="100px" height="100px"><input type="submit" value="Reisen"/></td>
                            </tr>
                            
                            </form>
							
							<form action="buxtehude.php">
                            
                            <tr>
                                <td width="100px" height="100px"><a>Bild</a></td>
                                <td width="100px" height="100px"><a>Buxtehude</a></td>
                                <td width="300px" height="100px"><a>Beschreibung</a></td>
                                <td width="100px" height="100px"><input type="submit" value="Reisen"/></td>
                            </tr>
                            
                            </form>
                            
                        </table>
                    
                    

                </div>

                <div id="footer" class="coner shadow">

                </div>

            </div>




        </body>

    </html>';

} else {

    echo	'<a>Du musst eingeloggt sein! <a href="Login.php">Login</a></a>';

}
 ?>