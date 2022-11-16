<?php
class User {
    const STATUS_USER = 1;
    const STATUS_ADMIN = 2;
//pola klasy
    protected $userName;
    protected $passwd;
    protected $fullName;
    protected $email;
    protected $date;
    protected $status;
//metody klasy:
    function __construct($userName, $fullName, $email, $passwd ){
//implementacja konstruktora
$this->status=User::STATUS_USER;
$this->userName=$userName;
$this->passwd=password_hash($passwd, PASSWORD_BCRYPT);
$this->date = date("Y-m-d");
$this->fullName=$fullName;
$this->email=$email;
}
    Public function show() {
        $t = '<p>Username: ' . $this->userName . ',';
        $t .= '<p>Full time: ' . $this->fullName . ',';
        $t .= '<p>Password: ' . $this->passwd . ',';
        $t .= '<p>E-Mail: ' . $this->email . ',';
        $t .= '<p>Date: ' . $this->date . ',';
        if($this->status==2)
        {
            $t .= 'Admin';
        }
        else
        {
            $t .= 'User';
        }
        $t .= '</p>';
        echo $t;
}
//settery
public function setUserName($newName)
{
    $this->userName = $newName;
}
public function setFullName($newfullName)
{
    $this->fullName = $newfullName;
}
public function setEmail($newEmail)
{
    $this->email = $newEmail;
}
public function setPassword($newpasswd)
{
    $this->passwd = password_hash($newpasswd, PASSWORD_BCRYPT);
}
public function setStatus($newStatus)
{
    if($newStatus != User::STATUS_ADMIN && $newStatus != User::STATUS_USER)
    {
        $newStatus = USER::STATUS_USER;
    }
    $this->status = $newStatus;
}
//gettery
public function getUserName()
{
    return $this->userName;
}
public function getFullName()
{
    return $this->fullName;
}
public function getEmail()
{
    return $this->email;
}
public function getDate()
{
    return $this->date;
}
public function getPassword()
{
    return $this->passwd;
}
public function getStatus()
{
    return $this->status;
}
}
?>