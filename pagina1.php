<?php
$nume=$_POST['nume'];
$prenume=$_POST['prenume'];
$username=$_POST['username'];
$xml = simplexml_load_file('data.xml');
$date=$xml->addChild('date');
$date->addChild('Nume', $nume);
$date->addChild('Prenume', $prenume);
$date->addChild('Username', $username);
file_put_contents('data.xml', $xml->asXML());
?>
<a href="pagina2.php">View xml data</a>
