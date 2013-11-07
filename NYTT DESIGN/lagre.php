<?PHP  
include 'db.php'; 

$Navn = $_POST['Navn']; 
$Sted = $_POST['Sted']; 
$Tid = $_POST['Tid']; 
$Kostnader = $_POST['Kostnader']; 
$Hjemmeside = $_POST['Hjemmeside']; 
$Kontakt = $_POST['Kontakt'];
$lagre = $_POST['lagre'];
$hente = $_POST['hente'];
$datab = $_POST['gren'];

if ($lagre)
    {    
    mysql_query("INSERT INTO $datab(Navn,Sted,Tid,Kostnader,Hjemmeside,Kontakt) VALUES('$Navn','$Sted','$Tid','$Kostnader','$Hjemmeside','$Kontakt')"); 
    mysql_close;
	echo "Registreringen er godkjent";
	echo "<a href=lagre.html>Tilbake</a>";
    }

else if ($hente) 
    {   $query="SELECT * FROM $datab"; 
        $result=mysql_query($query);

        $num=mysql_numrows($result);
        mysql_close();

        $i=0; 
          
        while ($i < $num)  
        { 
            $Navn=mysql_result($result,$i,"Navn"); 
            $Sted=mysql_result($result,$i,"Sted"); 
            $Tid=mysql_result($result,$i,"Tid"); 
            $Kostnader=mysql_result($result,$i,"Kostnader"); 
            $Hjemmeside=mysql_result($result,$i,"Hjemmeside");
			$Kontakt=mysql_result($result,$i,"Kontakt"); 
            echo "$Navn<br>" . "$Sted<br>" . "$Tid<br>" . "$Kostnader<br>" . "$Hjemmeside<br>" . "$Kontakt<br><br><br>"; 
            $i++;
			echo "<a href=lagre.html>Tilbake</a>";
        } 
}
 ?>
 