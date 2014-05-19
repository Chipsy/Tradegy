<?php include('Connect.php'); ?>

<?php

session_start();

$user = $_SESSION['username'];

mysql_query("UPADTE user SET
         WHERE u_name = '$user'");

$result = mysql_query("SELECT * FROM user WHERE u_name = '$user'");
while($row = mysql_fetch_object($result)){
    echo $row->loca;
}


?>