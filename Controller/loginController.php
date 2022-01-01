<?php
require("../connexion.php");
session_start();
$_SESSION["nomUser"]=null;
if(isset($_POST["username"]) && isset($_POST["passwords"])){
    $username=$_POST["username"];
    $passwords=$_POST["passwords"];

    $sql= "select id, nomUser from users where username = '$username'
    and passwords='$passwords';";

    $res=$bdd->query($sql);
    while($row=$res->fetch()){
        $_SESSION["id"]=$row[0];
        $_SESSION["nomUser"]=$row[1];
    }
    if(($_SESSION["nomUser"])!=null){
      header("Location:../Edition/editExperience.php");
    }
    else{
      header("Location:../index.php");
    }
    
}
else{
    session_destroy();
  
  echo'<div style="color:red;">connexion échouée </div>';
     header("Location:../index.php");
}
?>