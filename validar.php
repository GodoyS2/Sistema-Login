<?php

$Usuario = $_POST["Usuario"];
$Senha = $_POST["Senha"];

if($Usuario == "Godoy" && $Senha == 123){
    header("location: painel.php");
}
else{
    header("location: usuario-invalido.php");
}

?>