<?php
    include("conn.php");

    //Paso 1.
    $consulta = "SELECT * FROM user";

    //Paso 2.
    $query = $conn->prepare($consulta);

    //Paso 3.
    $query->execute();

    //Paso 4. Traer la información de la cosulta
    $usuarios = $query->get_result();
    $data = $usuarios->fetch_all(MYSQLI_ASSOC);


?>

<html>
    <head>
        <title>Ver Lista</title>
        <meta charset="utf-8">
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script> 
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.css">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <style>
            
            body{
                padding: 20px;
            }
            
            tr{
              text-align: center;
            }
            
            .icon-borrar{
                width: 20px;
                cursor: pointer;
            }
            
            .icon-edit{
                width: 30px;
                cursor: pointer;
            }
        </style>
    </head>
    
    <body>
    <nav class="navbar navbar-expand-lg  bg-light arr resp" >
            
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="http://localhost/IRD-33/SITIO/index.php" ><img src="lg.jfif" alt="" width="70px" height="70px" ></a>
                

            <!--<a class="navbar-brand" href="#!">KHEM</a> -->
                
                
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class=" nav navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4 ">
                        <li><a aria-current="page" href="http://localhost/IRD-33/SITIO/index.php">Inicio</a></li>
                        
                        <!--<li class="nav-item"><a class="nav-link" href="#!">Categorias</a>-->
                           
                                    <li><a href="http://localhost/IRD-33/SITIO/LgyRg/ver.php" target="formularios">Usuarios</a></li>    
                                    <li><a href="http://localhost/IRD-33/SITIO/lg/ver.php" target="formularios">Candidatos a Clientes</a></li>
                                    <li><a href="http://localhost/IRD-33/SITIO/lgr/ver.php" target="formularios">Candidatos a Repartidores</a></li>
                                    
                                    
    
                                
                  </ul>
                  </div>
            </div>



            </nav> 
        <h1> Lista de Usuarios</h1>
        
        <table border="2" class="table table-striped">
            <tr>
                
                <td>Username</td>
                <td>Correo</td>
                <td>Contraseña</td>
                
            </tr>
            
            <?php 
                for($x=0; $x < count($data); $x++){
            ?>  
                <tr>
                    
                    <td><?php echo $data[$x]["username"]; ?></td>
                   
                     <td><?php echo $data[$x]["correo"]; ?></td>

                     <td><?php echo $data[$x]["password"]; ?></td>
                     <td>
                            <img class="icon-edit" src="edit.png" usid="<?php echo $usuarios[$x]["id"] ?>">
                    </td>
                    <td>
                        <img class="icon" src="delete.png" usid="<?php echo $usuarios[$x]["id"] ?>">
                    </td>
                    
                </tr>
            <?php
                }
            ?>
            
        </table>
        
        <br><br>
        
        <a class="btn btn-primary" href="http://localhost/IRD-33/SITIO/index.php">Regresar a Home</a>
    
        <script>
            
            $(".icon-edit").click(function(){
               
                var id = $(this).attr("usid");
                
                window.location = "editar.php?id=" + id;
                
            });
            
            $(".icon-borrar").click(function(){
                
                var idx = $(this).attr("usid");
                
                if(confirm("¿Seguro que deseas eliminar a este Usuario?")){ 
                    window.location = "eliminar.php?id=" + idx; 
                }
                
            });
        
            
        </script>
    </body>
    
</html>