<?php

$wiadomosc = 
"Imi� i nazwisko: ".$_POST['nick']."

E-mail: ".$_POST['mail']." 

Wiek: ".$_POST['age']." 

Uwagi: ".$_POST['tresc']."  "; 

$tematyka = "Zg�oszenie na rekolekcje 'Ten Trzeci'";


mail ("cardano.p@gmail.com", $tematyka, $wiadomosc );

header("Location: /?r=true");
exit;
?>