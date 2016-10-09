<?php

$wiadomosc = 
"Imiê i nazwisko: ".$_POST['nick']."

E-mail: ".$_POST['mail']." 

Wiek: ".$_POST['age']." 

Uwagi: ".$_POST['tresc']."  "; 

$tematyka = "Zg³oszenie na rekolekcje 'Ten Trzeci'";


mail ("zapisy@tentrzeci.pl", $tematyka, $wiadomosc ); 

$dom = new DOMDocument();
libxml_use_internal_errors(true);
$dom->loadHTMLFile('after_register.html');

echo $dom->saveHTML();
?>