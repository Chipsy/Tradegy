<?php include ("connect.php"); ?>

<?php

    
    function zeit_alt(){
        
        $zeit = "UPDATE hamburg SET alt=now()";
        $eintrag = mysql_query($zeit);           
        
    }
    
    function zeit_neu(){

        $zeit = "UPDATE hamburg SET neu=now()";
        $eintrag = mysql_query($zeit);

    }
    
    function zeit_vergleich(){
        
        $zeit = "SELECT * FROM hamburg";
        $abfrg = mysql_query($zeit);
        while($row = mysql_fetch_object($abfrg)){
            $alt = $row->alt;
            $neu = $row->neu;
        }
        
        if($neu > $alt) {
            
            $zeit_a = $neu;
            
            echo $zeit_a;
            
        }else {
            
            echo 'ich bin immernoch toll';
            
        }
        
    }
    
    zeit_vergleich();

    function preisbildung(){
        
                
        
    }
    
    
    function formel(){
        
        $preis = 90;
        $menge = 700;
        
        $upadte = ($menge/1000) * $preis + $preis;
        $preis_neu = (int)$upadte;
        
        echo $preis_neu;
        
    }
    

?>