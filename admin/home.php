<?php include('session.php'); ?>
<?php include('header.php'); ?>
<html>
    <head>

    </head>
<body>

    
    <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>KHEM</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="logo.png" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="styles.css" rel="stylesheet" />
    </head>
    <body >
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg  bg-light arr resp" >
            
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="http://localhost/IRD-33/SITIO/admin/home.php" ><img src="lg.jfif" alt="" width="70px" height="70px" ></a>
                

            <!--<a class="navbar-brand" href="#!">KHEM</a> -->
                
                
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class=" nav navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4 ">
                        <li><a aria-current="page" href="http://localhost/IRD-33/SITIO/admin/home.php">Inicio</a></li>
                        
                        <!--<li class="nav-item"><a class="nav-link" href="#!">Categorias</a>-->
                           
                        <li ><a href="">Usuarios</a>
                            <ul>
                                <li><a href="http://localhost/IRD-33/SITIO/LgyRg/reg.php">Agregar</a></li>    
                                <li><a href="http://localhost/IRD-33/SITIO/LgyRg/ver.php">Reporte</a></li>
</ul></li>
<li ><a href="">Clientes</a>
                            <ul>
                                <li><a href="http://localhost/IRD-33/SITIO/lg/reg.php">Agregar</a></li>    
                                <li><a href="http://localhost/IRD-33/SITIO/lg/ver.php">Reporte</a></li>
</ul></li>
<li ><a href="">Repartidores</a>
                            <ul>
                                <li><a href="http://localhost/IRD-33/SITIO/lgr/reg.php">Agregar</a></li>    
                                <li><a href="http://localhost/IRD-33/SITIO/lgr/ver.php">Reporte</a></li>
</ul></li>
                                    
                                    
    
                                
                  </ul>
                  <h2> Bienvenido, <?php echo $user; ?>!</h2>
                  </div>
                  <a href="logout.php" class="btn btn-danger"><span class="glyphicon glyphicon-log-out"></span> Cerrar Sesion</a>
            </div>
            

            </nav>

            <div>
                <img src="ad.jpg" alt="">
                </div>
            

                 
             
        
    </body>
</html>

</body>
</html>