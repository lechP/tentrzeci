<?php

$wiadomosc = 
"Imi� i nazwisko: ".$_POST['nick']."

E-mail: ".$_POST['mail']." 

Wiek: ".$_POST['age']." 

Uwagi: ".$_POST['tresc']."  "; 

$tematyka = "Zg�oszenie na rekolekcje 'Ten Trzeci'";


mail ("zapisy@tentrzeci.pl", $tematyka, $wiadomosc );

header("Location: /?after_register");
exit;
?>