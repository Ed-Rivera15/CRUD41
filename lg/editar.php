<?php

    include("conexion.php");

    $id = $_GET["userid"];

    $consulta = "SELECT * FROM cli WHERE userid = " . $id;

    $query = $bd->prepare($consulta);
    $query->execute();

    $usuario = $query->fetchAll();
?>

<html>
    <head>
        <meta charset="utf-8">
        
        
        <style>
             body{
                padding: 20px;
            }
        </style>
        
    </head>
    
    <body>
        
        
        
        <form action="editar_respuesta.php" method="post">
        <?php
	session_start();
	if(isset($_SESSION['user'])){
		
	}
?>

<?php include('header.php'); ?>
<html>
	<head>
		<link rel="stylesheet" href="est.css">
	</head>
<body>
<div class="container">
<div class="container">
	<div style="height:50px;">
	</div>
<div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"><span class="glyphicon glyphicon-pencil"></span> Registrate
                    	
                    </h3>
                </div>
            	<div class="panel-body">
                	<form role="form" id="signform">
                    	<fieldset>
                        	<div class="form-group">
                                <div>Username:</div>
                            <input class="form-control" type="text" name="username" value="<?php echo $usuario[0]["username"]; ?>">
                        	</div>
                            <div class="form-group">
                                <div>Nombre Completo:</div>
                            <input class="form-control" type="text" name="nom" value="<?php echo $usuario[0]["nom"]; ?>">
                        	</div>
							<div class="form-group">
                                <div>Correo:</div>
                            <input  class="form-control" type="text" name="correo" value="<?php echo $usuario[0]["correo"]; ?>">
                        	</div>
                            <div class="form-group">
                                <div>Telefono:</div>
                            <input class="form-control" type="text" name="tel" value="<?php echo $usuario[0]["tel"]; ?>">
                        	</div>
                            <div class="form-group">
                                <div>Direccion:</div>
                            <input class="form-control" type="text" name="dir" value="<?php echo $usuario[0]["dir"]; ?>">
                        	</div>
                            <div class="form-group">
                                <div>Nombre del Negocio:</div>
                            <input class="form-control" type="text" name="neg" value="<?php echo $usuario[0]["neg"]; ?>">
                        	</div>
                            <div class="form-group">
                                <div>Dirección del Negocio:</div>
                            <input class="form-control" type="text" name="dneg" value="<?php echo $usuario[0]["dneg"]; ?>">
                        	</div>
                        	<div class="form-group">
                                <div>Password:</div>
                            <input class="form-control" type="text" name="password" value="<?php echo $usuario[0]["password"]; ?>">
            
            <input type="hidden" name="userid" value="<?php echo $usuario[0]["userid"]; ?>">
                        	</div>
							
                        	<button class="btn btn-lg btn-primary btn-block">Modificar Usuario</button>
                    	</fieldset>
                	</form>
            	</div>
            </div>
			<a class="btn btn-primary" href="http://localhost/IRD-33/SITIO/admin/home.php">Regresar a Home</a>
        </div>
		
    </div>

    <div id="myalert" style="display:none;">
    	<div class="col-md-4 col-md-offset-4">
    		<div class="alert alert-info">
    			<center><span id="alerttext"></span></center>
    		</div>
   	 	</div>
    </div>
</div>
<script src="custom.js"></script>
</body>
</html>
            
        </form>
    
    </body>
    
</html>




