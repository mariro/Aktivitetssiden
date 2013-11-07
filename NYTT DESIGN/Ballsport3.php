<!Doctype html>
<html>
	<head>
		<title>Design Test</title>
		<link href="css.css" rel="stylesheet" type="text/css">
	</head>
<body>
	<div id="background"> <br>
	<div id="topptekst">Aktiviteter i Kristiansand</div>
	
<div id="topp">	
	<ul>
		<li class="meny">
			<a href="index.html">Nyheter</a>
		</li>
		<li class="meny">
			<a href="#">Ballsport</a>
			<ul>
				<li><a href="fotball.php">Fotball</a></li>
				<li><a href="Ballsport2.php">Innendørs</a></li>
				<li><a href="Ballsport3.php">Utendørs</a></li>
			</ul>
		</li>
		<li class="meny">
			<a href="#">Friidrett</a>
			<ul>
				<li><a href="Friidrett1.php">Link1</a></li>
				<li><a href="Friidrett2.php">Link2</a></li>
				<li><a href="Friidrett3.php">Link2</a></li>
			</ul>
		</li>
		<li class="meny">
			<a href="treningss.php">Treningssenter</a>
		</li>
		<li class="meny">
			<a href="omoss.html">Om oss</a>
		</li>
	</ul>
</div>

	<div id="midten" class="gjennomsiktig">
	<div class="tekst">
	<?PHP
include 'db.php'; 

		$query="SELECT * FROM Uteball"; 
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
            echo "<div id=tekstboks><h3>$Navn<br></h3>" . "<B>Sted:</B> $Sted<br>" . "<b>Klokka:</b> $Tid<br>" . "<b>Pris:</b> $Kostnader<br>" . "<b>Hjemmeside:</b> <a href='$Hjemmeside'>$Hjemmeside</a><br>" . "<b>Kontakt:</b> $Kontakt<br></div>"; 
            $i++; 
        }

 ?>
	</div></div>
	<div id="bunntekst">
	(C) iSmart
	</div>
	</div>
	
</body>
</html>