<?php include ("connect.php"); ?>

<?php

session_start();

if(isset($_SESSION['username'])){

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

                                <li><a href="index.php">Home</a></li>
                                <li><a href="#">Lager</a></li>
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

                        <h1>'. $_SESSION['username'] .'</h1>

                    </div>

                    <div id="right" class="coner shadow">

                        <h3>Profil</h3>

                        <br />

                        <hr />

                        <h4><a href="logout.php">Logout</a></h4>

                    </div>

                </div>

                <div id="footer" class="coner shadow">

                </div>

            </div>

        </body>

    </html>';

} else {
    
    echo 'Du musst dich anmelden um dein Profil betrachten zu k&ouml;nnen!';
    
}
 ?>