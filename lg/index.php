
<html lang="es">
<head>
	
	<title>Document</title>
	<link rel="stylesheet" href="est.css">
</head>
<?php
	session_start();
	if(isset($_SESSION['user'])){
		header('location:home.php');
	}
?>

<?php include('header.php'); ?>
	

<body class="fn">
	
<div class="container " >
	<div style="height:50px;">
	</div>
    <div class="row" id="loginform">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"><span class="glyphicon glyphicon-lock"></span> Iniciar sesion
                    	<span class="pull-right"><span class="glyphicon glyphicon-pencil"></span> <a style="text-decoration:none; cursor:pointer; color:white;" id="signup">Registrate</a></span>
                    </h3>
                </div>
            	<div class="panel-body">
                	<form role="form" id="logform">
                    	<fieldset>
                        	<div class="form-group">
                            	<input class="form-control" placeholder="Username" name="username" id="username" type="text" autofocus>
                        	</div>
                        	<div class="form-group">
                            	<input class="form-control" placeholder="Password" name="password" id="password" type="password">
                        	</div>
                        	<button type="button" id="loginbutton" class="btn btn-lg btn-primary btn-block"><span class="glyphicon glyphicon-log-in"></span> <span id="logtext">Iniciar Sesion</span></button>
                    	</fieldset>
                	</form>
            	</div>
            </div>
			<a class="btn btn-primary" href="http://localhost/IRD-33/SITIO/index.php">Regresar a Home</a>
        </div>
    </div>

    <div class="row" id="signupform" style="display:none;">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"><span class="glyphicon glyphicon-pencil"></span> Registrate
                    	<span class="pull-right"><span class="glyphicon glyphicon-log-in"></span> <a style="text-decoration:none; cursor:pointer; color:white;" id="login">Iniciar Sesion</a></span>
                    </h3>
                </div>
            	<div class="panel-body">
                	<form role="form" id="signform">
                    	<fieldset>
                        	<div class="form-group">
                            	<input class="form-control" placeholder="Username" name="susername" id="susername" type="text" autofocus>
                        	</div>
							<div class="form-group">
                            	<input class="form-control" placeholder="Nombre Completo" name="nom" id="nom" type="text" autofocus>
                        	</div>
							<div class="form-group">
                            	<input class="form-control" placeholder="Correo" name="correo" id="correo" type="text" autofocus>
                        	</div>
							<div class="form-group">
                            	<input class="form-control" placeholder="Telefono" name="tel" id="tel" type="text" autofocus>
                        	</div>
							<div class="form-group">
                            	<input class="form-control" placeholder="Direccion" name="dir" id="dir" type="text" autofocus>
                        	</div>
							<div class="form-group">
                            	<input class="form-control" placeholder="Nombre del Negocio" name="neg" id="neg" type="text" autofocus>
                        	</div>
							<div class="form-group">
                            	<input class="form-control" placeholder="Direccion del Negocio" name="dneg" id="dneg" type="text" autofocus>
                        	</div>

							
                        	<div class="form-group">
                            	<input class="form-control" placeholder="Password" name="spassword" id="spassword" type="password">
                        	</div>
							
                        	<button type="button" id="signupbutton" class="btn btn-lg btn-primary btn-block"><span class="glyphicon glyphicon-check"></span> <span id="signtext">Registrarse</span></button>
                    	</fieldset>
                	</form>
            	</div>
            </div>
			<a class="btn btn-primary" href="http://localhost/IRD-33/SITIO/index.php">Regresar a Home</a>
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
