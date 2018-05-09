<?php
     $server="localhost";
     $login=$_POST['login'];
     $password=$_POST['password'];
     $database="names";
	 $table="init";

$link = mysqli_connect($server, "root", "", $database);
if (mysqli_connect_errno())  {

   header ('Location: http://lab6');
}

if (mysqli_query($link,"INSERT INTO $table (login, password) VALUES ('$login', '$password')")) {
   session_start ();
   $_SESSION['login']=$login;
   $_SESSION['password']=$password;
   header ('Location: http://lab6');
}
else {
header ('Location: http://lab6/index.html');
}

?>
