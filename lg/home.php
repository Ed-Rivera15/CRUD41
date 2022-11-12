<?php include('session.php'); ?>
<?php include('header.php'); ?>


<?php session_start(); 

if(isset($_SESSION['carrito'])){
$carrito_mio=$_SESSION['carrito'];
}
if(isset($_SESSION['carrito'])){
    for($i=0;$i<=count($carrito_mio)-1;$i ++){
        if(isset($carrito_mio[$i])){
        if($carrito_mio[$i]!=NULL){ 
        if(!isset($carrito_mio['cantidad'])){$carrito_mio['cantidad'] = '0';}else{ $carrito_mio['cantidad'] = $carrito_mio['cantidad'];}
        $total_cantidad = $carrito_mio['cantidad'];
    $total_cantidad ++ ;
    if(!isset($totalcantidad)){$totalcantidad = '0';}else{ $totalcantidad = $totalcantidad;}
    $totalcantidad += $total_cantidad;
    }}}
}
     if(!isset($totalcantidad)){$totalcantidad = '';}else{ $totalcantidad = $totalcantidad;}
?>


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
    <body>
    
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg  bg-light arr resp" >
            
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="http://localhost/IRD-33/SITIO/index.php" ><img src="logo.png" alt="" width="70px" height="70px" ></a>
                

            <!--<a class="navbar-brand" href="#!">KHEM</a> -->
                
                
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class=" nav navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4 ">
                        <li><a aria-current="page" href="index.php">Inicio</a></li>
                        
                        <!--<li class="nav-item"><a class="nav-link" href="#!">Categorias</a>-->
                            <li ><a href="">Categorias</a>
                                <ul>
                                    <li><a href="tiendas.html">Frutas/Verduras</a></li>    
                                    <li><a href="tiendascdehogar.html">Cosas del Hogar</a></li>
                                    <li><a href="tiendasnacks.html">Snacks</a></li>
                                    <li><a href="Productos.html#">Promociones</a></li>
                                    <li><a href="tiendasropa.html">Ropa</a></li>
                                    <li><a href="http://localhost/IRD-33/SITIO/LgyRg/ver.php">Ver Lista Users</a></li>
                                    
    
                                </ul></li>
                        <li ><a href="Acercade.html">Acerca de Nosotros</a></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        
                             
                           

                             
                            
                    </ul>
                    <h2> Bienvenid@, <?php echo $user; ?>!</h2>

                    
                    <form class="d-flex" id="Mc" >
                            
                                <ul class="nav">
                    <li><a  class="nav-link"  href="Javascript:abrir()"><i class="bi-cart-fill me-1" >Mi Carrito <span class="badge bg-dark text-white ms-1 rounded-pill"><?php echo $totalcantidad; ?></span></i></li></a>
                    
                    </ul>
                    
                </form>
                <form class="d-flex" id="Mc" >
                            
                                <ul class="nav">
                                <li ><a href="logout.php" class="btn btn-danger"><span class="glyphicon glyphicon-log-out"></span> Cerrar Sesion</a>
                              
                    
                    </ul>
                    
                </form>

                
                
                </div>
            </div>
        </nav>
        
       


        <!-- Header-->
        <header class="bg-dark py-5 >
            <div class="container px-4 px-lg-5 my-5 ">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Compras Hechas en Minutos</h1>
                    <p class="lead fw-normal text-white-50 mb-0">Somos la forma más rápida de comprar en línea</p>
                </div>
            </div>
        </header>
        <!--TIENDA ALIADA-->
        
        <section class="py-5">
            <div class="container my-5">
                <table>
                    <td >
                        <div  id="animacion" heigth="30%">
                            
                            <img class="visible" src="cras.jpg" width="550px" heigth="400px" >
                        </div>
                    </td>
                </table>
                
            </div>
            <div class="row justify-content-rigth">
                <div class="col-lg-6">
                    <h2 class="hdos"><a href="snaks.html">Crazy Snacks</a> </h2>
                    <p class="lead">Planificación de la estructura base del negocio, orientando las acciones con el fin de que este se logre mantener a flote y no llegue a la quiebra.</p>
                    <p class="lead">Somos un negocio dedicado a llevar entregas a domicilio a las personas que nos lo pidan, comprometiéndonos con nuestros clientes en brindarles producto con gran calidad y a que lleguen con bien y tiempo con un servicio amable y oportuno.</p>
                </div>
            </div>
        </section>


        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="promos.jfif" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Productos en Rebaja</h5>
                                    <!-- Product price-->
                                    $20.00 - $80.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="productos.html">Ver Opciones</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Rebaja</div>
                            <!-- Product image-->
                            <img class="card-img-top" src="pb.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Pan Blanco Bimbo 20pz</h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    <span class="text-muted text-decoration-line-through">$20.00</span>
                                    $18.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
            <form id="formulario" name="formulario" method="post" action="cart.php">
                
                            <input name="ref" type="hidden" id="ref" value="mu001" />                           
                            <input name="precio" type="hidden" id="precio" value="18" />
                            <input name="titulo" type="hidden" id="titulo" value="Pan Blanco Bimbo 20pz" />
                            <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />  
                

            



                                <div class="text-center"><button type="submit" class="btn btn-sm btn-outline-secondary">Añadir al carrito</button></a></div>
          </form>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Rebaja</div>
                            <!-- Product image-->
                            <img class="card-img-top" src="parace.jfif" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Paracetamol 500mg</h5>
                                    <!-- Product price-->
                                    <span class="text-muted text-decoration-line-through">$50.00</span>
                                    $25.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <form id="formulario" name="formulario" method="post" action="cart.php">
                
                                    
                <input name="ref" type="hidden" id="ref" value="mu001" />                           
                <input name="precio" type="hidden" id="precio" value="25" />
                <input name="titulo" type="hidden" id="titulo" value="Paracetamol 500mg" />
                <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />

            



          <div class="text-center"><button type="submit" class="btn btn-sm btn-outline-secondary">Añadir al carrito</button></a></div>
          </form>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="fab.jpg" alt="..."/>
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Fabuloso Frescura Activa 2L</h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    $40.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <form id="formulario" name="formulario" method="post" action="cart.php">
                
                                    
                <input name="ref" type="hidden" id="ref" value="mu001" />                           
                <input name="precio" type="hidden" id="precio" value="40" />
                <input name="titulo" type="hidden" id="titulo" value="Fabuloso Frescura Activa 2L" />
                <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />

            



          <div class="text-center"><button type="submit" class="btn btn-sm btn-outline-secondary">Añadir al carrito</button></a></div>
          </form>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                            <!-- Product image-->
                            <img class="card-img-top" src="gom.jfif" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Bolsa Gomitas 80g</h5>
                                    <!-- Product price-->
                                    <span class="text-muted text-decoration-line-through">$50.00</span>
                                    $25.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <form id="formulario" name="formulario" method="post" action="cart.php">
                
                                    
                <input name="ref" type="hidden" id="ref" value="mu001" />                           
                <input name="precio" type="hidden" id="precio" value="25" />
                <input name="titulo" type="hidden" id="titulo" value="Bolsa gomitas 80g" />
                <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />

            



          <div class="text-center"><button type="submit" class="btn btn-sm btn-outline-secondary">Añadir al carrito</button></a></div>
          </form>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="rop.jfif" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Prendas de Vestir</h5>
                                    <!-- Product price-->
                                    $120.00 - $280.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="tiendasropa.html">Ver Opciones</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Rebaja</div>
                            <!-- IMAGEN-->
                            <img class="card-img-top" src="jug.jfif" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- NOMBRE-->
                                    <h5 class="fw-bolder">Jugo del Valle 200ml</h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                  <!-- PRECIO-->
                                  <span class="text-muted text-decoration-line-through">$20.00</span>
                                  $18.00
                                </div>
                            </div>
                            <!-- ACCIONES-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">

                                <form id="formulario" name="formulario" method="post" action="cart.php">
                
                                    
                                      <input name="ref" type="hidden" id="ref" value="mu001" />                           
                                      <input name="precio" type="hidden" id="precio" value="33" />
                                      <input name="titulo" type="hidden" id="titulo" value="Jugo del Valle 200 ml" />
                                      <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
                    
                                  



                                <div class="text-center"><button type="submit" class="btn btn-sm btn-outline-secondary">Añadir al carrito</button></a></div>
                                </form>

                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- IMAGEN-->
                            <img class="card-img-top" src="agua.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- NOMBRE-->
                                    <h5 class="fw-bolder">Aguacate 1kg</h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                  <!-- PRECIO-->
                                  <span class="text-muted text-decoration-line-through">$70.00</span>
                                  $50.00
                                </div>
                            </div>
                            <!-- ACCIONES-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <form id="formulario" name="formulario" method="post" action="cart.php">
                
                                    
                <input name="ref" type="hidden" id="ref" value="mu001" />                           
                <input name="precio" type="hidden" id="precio" value="50" />
                <input name="titulo" type="hidden" id="titulo" value="Aguacate 1kg" />
                <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />

            



          <div class="text-center"><button type="submit" class="btn btn-sm btn-outline-secondary">Añadir al carrito</button></a></div>
          </form>
        </section>
        <!-- PIE-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; KHEM S.A. 2022</p></div>
            
        </footer>
       


      
        <div class="ventana" id="vent">
     <div  id="cerrar"><a href="Javascript:cerrar()" class="./tp"><img src="cerrar-sesion.png" id="user" alt="" width="35px"></a></div>

    
        <h5 class="modal-title" id="exampleModalLabel">Mi carrito</h5>
        <div class="modal-body">
				<div>
					<div class="p-2">
						<ul class="list-group mb-3">
							<?php
							if(isset($_SESSION['carrito'])){
							$total=0;
							for($i=0;$i<=count($carrito_mio)-1;$i ++){
                                if(isset($carrito_mio[$i])){
                                if($carrito_mio[$i]!=NULL){
							?>
						
                            <li class="list-group-item justify-content-between px-4">
								<div class="row" >
									<div class="col-10 p-0" style="text-align: left; color: #000000;"><h6 class="my-0">Cantidad: <?php echo $carrito_mio[$i]['cantidad'] ?> : <?php echo $carrito_mio[$i]['titulo']; ?></h6>
									</div>
									<div class="col-2 p-0"  style="text-align: right; color: #000000;" >
									<span class="text-muted"  style="text-align: right; color: #000000;">$<?php echo $carrito_mio[$i]['precio'] * $carrito_mio[$i]['cantidad'];    ?> </span>
									</div>
								</div>
							</li>
							<?php
							$total=$total + ($carrito_mio[$i]['precio'] * $carrito_mio[$i]['cantidad']);
							}
                            }
							}
							}
							?>
							<li class="list-group-item d-flex justify-content-between">
							<span  style="text-align: left; color: #000000;">Total (Mxn): $</span>
							<strong  style="text-align: left; color: #000000;"><?php
							if(isset($_SESSION['carrito'])){
							$total=0;
							for($i=0;$i<=count($carrito_mio)-1;$i ++){
                                if(isset($carrito_mio[$i])){
							if($carrito_mio[$i]!=NULL){ 
							$total=$total + ($carrito_mio[$i]['precio'] * $carrito_mio[$i]['cantidad']);
                            }
							}}}
                            if(!isset($total)){$total = '0';}else{ $total = $total;}
							echo $total ; ?> </strong>
							</li>
						</ul>
					</div>
				</div>
			</div>
      <div class="modal-footer">
     
        <a type="button" class="btn btn-primary" href="borrarcarro.php">Vaciar carrito</a>
      </div>
    </div>
  </div>
      </div>
			



</div>




<script src="./1.js"></script>  

    </body>
    
</html>
