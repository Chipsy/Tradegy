<?php include ("connect.php"); ?>
<?php include ("function.php"); ?>



<?php 

session_start();


lager_abfrage();

/*
session_start();

$m_abfrage = mysql_query("SELECT * FROM material");

echo'    
    <form method="get" action="bezahl.php">

    <table border="1px">

        <tr>
            <td width="200px">Name</td>
            <td width="200px">Preis</td>
            <td></td>
        </tr>';

while($row = mysql_fetch_object($m_abfrage)) {

$m = $row->m_id;
    
echo '
    
        <tr>
            <td>'.$row->m_name.'</td>
            <td>'.$row->m_preis.'</td>
            <td><input type="number" name="menge"/></td>
        </tr>';
               
}
echo    '<td colspan="3">
        <input type="submit" value="Kaufen"/>
        </td>


        </table>

        </form>';
        
        
        
        function holz_abfrage(){
            
            $m_abfrage = mysql_query("SELECT * FROM material WHERE m_name='holz'");
            while($row = mysql_fetch_object($m_abfrage)) {

            echo '
            
                    <tr>
                        <td><a>'.$row->m_name.'</a></td>
                        <td><a>'.$row->m_preis.'</a></td>
                        <td><a><input type="number" name="holz_menge"/></a></td>
                    </tr>';
            
            }
            
        }
        
        function eisen_abfrage(){

            $m_abfrage = mysql_query("SELECT * FROM material WHERE m_name='eisen'");
            while($row = mysql_fetch_object($m_abfrage)) {

            echo '

                    <tr>
                        <td><a>'.$row->m_name.'</a></td>
                        <td><a>'.$row->m_preis.'</a></td>
                        <td><a><input type="number" name="eisen_menge"/></a></td>
                    </tr>';

            }

        }
        
        function weizen_abfrage(){

            $m_abfrage = mysql_query("SELECT * FROM material WHERE m_name='weizen'");
            while($row = mysql_fetch_object($m_abfrage)) {

            echo '

                    <tr>
                        <td><a>'.$row->m_name.'</a></td>
                        <td><a>'.$row->m_preis.'</a></td>
                        <td><a><input type="number" name="weizen_menge"/></a></td>
                    </tr>';

            }

        }
        
        $erg = holz_abfrage();
        $erg = eisen_abfrage();
        $erg = weizen_abfrage(); */
        
 ?>                                               