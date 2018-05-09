<?php
     $server="http://name1.ru";
     $login=$_POST['login'];
     $password=$_POST['password'];
     $database="names";
	 $table="init";

$link = mysqli_connect('localhost', "root", "", $database);
if (mysqli_connect_errno())  {

   header ('Location: http://lab6');
}

if ($result = mysqli_query($link,"SELECT * FROM $table WHERE login='$login' AND password='$password'")) {
   //echo "<script>console.log($result->num_rows);</script>";
   if ($result->num_rows > 0){
   session_start ();
   $_SESSION['login']=$login;
   $_SESSION['password']=$password;
   header ('Location: http://lab6/index.php');
   }
   else {
	header ('Location: http://lab6/index.html');
	}

   mysqli_free_result($result);
}
else {
header ('Location: http://lab6');
}

?>
