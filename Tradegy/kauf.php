<?php include ("connect.php"); ?>
<?php include ("function.php"); ?>

<?php

session_start();

$ware = (int)$_GET['ware'];
$menge = (int)$_GET['menge'];

$m_abfrage = mysql_query("SELECT * FROM material WHERE m_id='$ware'");
while($row = mysql_fetch_object($m_abfrage)) {
    
    $preis = $row->m_preis;
    
}

$kosten = $preis*$menge;

$user = $_SESSION['username'];
$result = mysql_query("SELECT * FROM user WHERE u_name = '$user'");
while($row = mysql_fetch_object($result)){
    $geld = $row->geld;
    $id = $row->u_id;
}

$geld_neu = $geld-$kosten;

if($kosten>$geld){
    
    echo 'Du hast nicht genug Geld!';
    
}else{
    
    $l_abfrage = mysql_query("SELECT COUNT(*) FROM lager WHERE u_id='$id' AND m_id='$ware'");
    if(mysql_result($l_abfrage,0)==1){
    
        $l_menge = mysql_query("SELECT * FROM lager WHERE u_id='$id' AND m_id='$ware'");
        while($row = mysql_fetch_object($l_menge)){
            $w_menge = $row->menge;
        }
        
        $menge_neu = $w_menge+$menge;
        
        mysql_query("UPDATE lager SET menge='$menge_neu' WHERE u_id='$id' AND m_id='$ware'");
        mysql_query("UPDATE user SET geld='$geld_neu' WHERE u_name='$user'");
    
    }else{
    
        $eintrag = "INSERT INTO lager 
                    (u_id, m_id, menge) 
                    
                    VALUES 
                    ('$id', '$ware', '$menge')";
        
        $eintrag = mysql_query($eintrag);
        
    }
    
    echo 'Ihr Geld wurde abgebucht und die Waren befinden sich in ihrem Lager!';

}

?>