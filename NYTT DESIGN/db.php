<?PHP
$result = mysql_connect("boltit", "mariro12", "2Y9ygYmAbE4Ydezy"); 
      if ($result == FALSE) 
      echo "Connect NOT OK";
		
$result = mysql_select_db("mariro12"); 
      if (!$result) 
      echo "Select DB NOT OK"; 
		
?>