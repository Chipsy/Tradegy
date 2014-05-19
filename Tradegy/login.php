<?php include('Connect.php'); ?>

<?php 

session_start();
$verhalten = 0;

if(!isset($_SESSION['username']) and !isset($_GET['page'])) {
$verhalten = 0;
}

if(isset($_GET['page'])){

if($_GET['page'] == "log") {

	$user = strtolower($_POST['user']);
	$passwort = md5($_POST['passwort']);

	$control = 0;
	$abfrage = "SELECT * FROM user WHERE u_name = '$user' AND passwort = '$passwort'";
	$ergebnis = mysql_query($abfrage);

	while($row = mysql_fetch_object($ergebnis)) {
		$control++;
	}

	if($control != 0) {
		$_SESSION['username'] = $user;
		$verhalten = 1;
	} else {
		$verhalten = 2; 
	}
}
}

?>

<html>

    <head>
    
        <?php 
        
        	if($verhalten == 1) {
     
        	echo '<meta http-equiv="refresh" content="1; url=index.php" />';     
     
		    }
		    
    	?>
        	
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
    
                        </ul>
    
                    </div>
    
                    <div id="login">
    
                        <ul>
    
                            <li><a href="login.php">Login</a></li>
    
                        </ul>
    
                    </div>

                </div>

            </div>
            
            <div id="form" class="coner shadow">
            
            	<?php
            
            		if($verhalten == 0) {
            
            		echo '  <h1>Login</h1>';
                    
                       	echo '	<form method="post" action="login.php?page=log">
                       	
                       	        <br />
                        
                            	<a>Name:</a><br />
                                	<input type="text" name="user"/><br /><br />
                            	<a>Passwort:</a><br />
                                	<input type="password" name="passwort" /><br /><br />
                            	<input type="submit" value="Login" /> 
                    
                    		    </form>'; 
            
                    	echo '	<p><a href="Register.php">Registriere dich jetzt und spiele mit!</a></p>';
            
            		}
            		
            		if($verhalten == 2) {

                        echo '<a>Fehler bei der Anmeldung. Achte darauf, dass du deinen Namen und dein Passwort richtig schreibts</a><a href="login.php">Zum Login!</a>';
                        
                    }
            
            	?>
            
            </div>
            
        </div>
    
    </body>
    
</html>