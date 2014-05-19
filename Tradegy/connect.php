<?php

    $verbindung = mysql_connect("localhost", "root", "")
    or die ("Fehler!");

    mysql_select_db("tradegy")
    or die ("Fehler!");

?>