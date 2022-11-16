<?php
 include 'klasa.php';
 $user1 = new User ('kp', 'Kubus Puchatek',
 'kubus@stumilowylas.pl', 'nielubietygryska');
 $user1->show();
 $UserNameCheck =  $user1->getUserName();
 print($UserNameCheck);
$user1 -> setEmail('nowy@puchatek.pl');
$emailCheck =  $user1->getEmail();
print($emailCheck);
 ?>