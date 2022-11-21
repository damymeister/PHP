
<?php
 //include 'klasy/user.php';
 //$user1 = new User ('kp', 'Kubus Puchatek',
// 'kubus@stumilowylas.pl', 'nielubietygryska');
 //$user1->show();
// $UserNameCheck =  $user1->getUserName();
// print($UserNameCheck);
//$user1 -> setEmail('nowy@puchatek.pl');
//$emailCheck =  $user1->getEmail();
//print($emailCheck);
 ?>
<?php
 include_once('klasy/user.php');
 include_once('klasy/RegistrationForm.php');
 $rf = new RegistrationForm(); //wyświetla formularz rejestracji
 if (filter_input(INPUT_POST, 'submit',
FILTER_SANITIZE_FULL_SPECIAL_CHARS)) {
 $user = $rf->checkUser(); //sprawdza poprawność danych
 if ($user === NULL)
 echo "<p>Niepoprawne dane rejestracji.</p>";
 else{
 echo "<p>Poprawne dane rejestracji:</p>";
 $user->show();
 }
 }