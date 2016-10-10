<?php

$wiadomosc = 
"Imiê i nazwisko: ".$_POST['nick']."

E-mail: ".$_POST['mail']." 

Wiek: ".$_POST['age']." 

Uwagi: ".$_POST['tresc']."  "; 

$tematyka = "Zg³oszenie na rekolekcje 'Ten Trzeci'";


mail ("cardano.p@gmail.com", $tematyka, $wiadomosc );

header("Location: /?r=true");
exit;
?>