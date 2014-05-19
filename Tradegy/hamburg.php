<?php include ("connect.php"); ?>
<?php include ("function.php"); ?>

<?php

session_start();

hamburg();

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
                                <li><a href="stadt.php">St&auml;dte</a></li>

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

					<h1>Hamburg</h1>
				
                    <fieldset class="field">
                    <legend><a> Kaufen </a></legend>
                    
                        <table border="1px">
                                
                            <tr>
                            <td width="200px"><a>Name</a></td>
                            <td width="200px"><a>Preis</a></td>
                            <td width="200px"><a>Menge</a></td>
                            <td width="200px"><a>Kaufen</a></td>
                            </tr>';
                            
                            $func = m_abfrage_kauf();
                                
                        echo '</table>                        
                    
                    </fieldset>
                    
                    <fieldset class="field">
                    <legend><a> Verkaufen </a></legend>
                    
                        <table border="1px">

                            <tr>
                            <td width="200px"><a>Name</a></td>
                            <td width="200px"><a>Preis</a></td>
                            <td width="200px"><a>Menge</a></td>
                            <td width="200px"><a>Verkaufen</a></td>
                            </tr>';

                            $func = m_abfrage_verkauf();

                        echo '</table>
                    
                    </fieldset>

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