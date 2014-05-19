<?php
	
        function m_abfrage_kauf(){

            $m_abfrage = mysql_query("SELECT * FROM material");
            while($row = mysql_fetch_object($m_abfrage)) {

            echo '
				
                <form method="get" action="kauf.php">  	
					<tr>
					    <input type="hidden" name="ware" value="'.$row->m_id.'" />
                        <td><a>'.$row->m_name.'</a></td>
                        <td><a>'.$row->m_preis.'</a></td>
                        <td><a><input type="number" name="menge"/></a></td>
                        <td><a><input type="submit" value="Kaufen"/></a></td>
                    </tr>
                </form>';

            }

        }

        function m_abfrage_verkauf(){

            $m_abfrage = mysql_query("SELECT * FROM material");
            while($row = mysql_fetch_object($m_abfrage)) {

            echo '

                <form method="get" action="verkauf.php">
					<tr>
					    <input type="hidden" name="ware" value="'.$row->m_id.'" />
                        <td><a>'.$row->m_name.'</a></td>
                        <td><a>'.$row->m_preis.'</a></td>
                        <td><a><input type="number" name="menge"/></a></td>
                        <td><a><input type="submit" value="Verkaufen"/></a></td>
                    </tr>
                </form>';

            }

        }

        function geld_abfrage(){

            $user = $_SESSION['username'];
            $result = mysql_query("SELECT * FROM user WHERE u_name = '$user'");
            while($row = mysql_fetch_object($result)){
                return $row->geld;
            }

        }

        function stadt_abfrage(){

            $user = $_SESSION['username'];
            $result = mysql_query("SELECT * FROM user WHERE u_name = '$user'");
            while($row = mysql_fetch_object($result)){
                return $row->stadt;
            }

        }

        function lager_abfrage(){
            
            $user = $_SESSION['username'];
            $result = mysql_query("SELECT * FROM user WHERE u_name = '$user'");
            while($row = mysql_fetch_object($result)) {
                $u_id = $row->u_id;
            } 
            
            $result = mysql_query("SELECT * FROM lager WHERE u_id = '$u_id'");
            while($row = mysql_fetch_object($result)) {
                $m_id = $row->m_id;
                $menge = $row->menge;
                $result1 = mysql_query("SELECT * FROM material WHERE m_id = '$m_id'");
                while($row = mysql_fetch_object($result1)){
                    $m_name = $row->m_name;
					echo '
					
						<tr>
							<td width="250px"><img align="middle" src="design/img/waren/'.$m_name.'.png"/></td>
							<td width="250px">'.$m_name.'</td>
							<td width="250px">'.$menge.'</td>
						</tr>
					
					';
                }
            }

        }
		
		function hamburg() {
		
			$preis = 30;
			$user = $_SESSION['username'];
            $result = mysql_query("SELECT * FROM user WHERE u_name='$user'");
            while($row = mysql_fetch_object($result)) {
                $geld = $row->geld;
				$stadt = $row->stadt;
            }
			
			if($stadt=='hamburg') {
				$preis=0;
			}
			
			$neu = $geld -$preis;
			
			mysql_query("UPDATE user SET geld=$neu WHERE u_name='$user'");
			mysql_query("UPDATE user SET stadt='hamburg' WHERE u_name='$user'");
		
		}
		
		function berlin() {
		
			$preis = 30;
			$user = $_SESSION['username'];
            $result = mysql_query("SELECT * FROM user WHERE u_name='$user'");
            while($row = mysql_fetch_object($result)) {
                $geld = $row->geld;
				$stadt = $row->stadt;
            }
			
			if($stadt=='berlin') {
				$preis=0;
			}
			
			$neu = $geld -$preis;
			
			mysql_query("UPDATE user SET geld=$neu WHERE u_name='$user'");
			mysql_query("UPDATE user SET stadt='berlin' WHERE u_name='$user'");

		}
		
		function frankfurt() {
		
			$preis = 30;
			$user = $_SESSION['username'];
            $result = mysql_query("SELECT * FROM user WHERE u_name='$user'");
            while($row = mysql_fetch_object($result)) {
                $geld = $row->geld;
				$stadt = $row->stadt;
            }
			
			if($stadt=='frankfurt') {
				$preis=0;
			}
			
			$neu = $geld -$preis;
			
			mysql_query("UPDATE user SET geld=$neu WHERE u_name='$user'");
			mysql_query("UPDATE user SET stadt='frankfurt' WHERE u_name='$user'");

		}
		
		function buxtehude() {
		
			$preis = 30;
			$user = $_SESSION['username'];
            $result = mysql_query("SELECT * FROM user WHERE u_name='$user'");
            while($row = mysql_fetch_object($result)) {
                $geld = $row->geld;
				$stadt = $row->stadt;
            }
			
			if($stadt=='buxtehude') {
				$preis=0;
			}
			
			$neu = $geld -$preis;
			
			mysql_query("UPDATE user SET geld=$neu WHERE u_name='$user'");
			mysql_query("UPDATE user SET stadt='buxtehude' WHERE u_name='$user'");

		}
?>