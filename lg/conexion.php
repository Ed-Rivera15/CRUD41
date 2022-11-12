<?php 

    $host = "localhost";
    $basededatos = "khem";
    $usuario="root";
    $contrasenia = "";
    $puerto="3306";

try{
    
    $bd = new PDO( "mysql:host=".$host.";dbname=".$basededatos.";port=".$puerto . ";charset=UTF8", $usuario, $contrasenia);
    
    $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "📡​💻​🌐" ;


}catch(PDOException $e){
    
    echo "<br>Ocurrio un error: -> ".$e->getMessage()."<br>";
    
}



?>