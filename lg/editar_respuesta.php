<?php
    
    include("conexion.php");

    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    $name = $_POST["username"];
    $email = $_POST["correo"];
    $nom = $_POST["nom"];
    $tel = $_POST["tel"];
    $dir = $_POST["dir"];
    $neg = $_POST["neg"];
    $dneg =$_POST["dneg"];
    $pass = $_POST["password"];
    $id = $_POST["userid"];

    $consulta = "UPDATE cli SET username = '" . $name . "', correo = '" . $email. "', password = '" . $pass . "', nom = '".$nom."', tel = '".$tel."', dir = '".$dir."', neg = '".$neg."', dneg = '".$dneg."' WHERE userid = " . $id;
    $query = $bd->prepare($consulta);

    $query->execute();

    header("Location:ver.php");

    
?>