<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Titulo</title>
	<link href="css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick-theme.css"/>
	<link rel="stylesheet" href="css/main.css">
	<style>
		.item-img-wrap {
    position: relative;
    text-align: center;
    overflow: hidden;
}

.item-img-wrap img {
    -moz-transition: all 200ms linear;
    -o-transition: all 200ms linear;
    -webkit-transition: all 200ms linear;
    transition: all 200ms linear;
    width: 100%;
}

.item-img-wrap {
    position: relative;
    text-align: center;
    overflow: hidden;
}

.item-img-wrap img {
    -moz-transition: all 200ms linear;
    -o-transition: all 200ms linear;
    -webkit-transition: all 200ms linear;
    transition: all 200ms linear;
    width: 100%;
}

.item-img-overlay {
    position: absolute;
    width: 100%;
    height: 100%;
    left: 0;
    top: 0;
}

.item-img-overlay span {
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    background: url(http://bootstraplovers.com/templates/assan-2.2/main-template/img/plus.png) no-repeat center center rgba(0, 0, 0, 0.7);
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
    filter: alpha(opacity=0);
    opacity: 0;
    -moz-transition: opacity 250ms linear;
    -o-transition: opacity 250ms linear;
    -webkit-transition: opacity 250ms linear;
    transition: opacity 250ms linear;
}

.item-img-wrap:hover .item-img-overlay span {
    opacity: 1;
}

.item-img-wrap:hover img {
    -moz-transform: scale(1.1);
    -o-transform: scale(1.1);
    -ms-transform: scale(1.1);
    -webkit-transform: scale(1.1);
    transform: scale(1.1);
}


	</style>
</head>
<body background="images/mercaBella_22.png" style="background-repeat: no-repeat;">
	<header>
		<div class="mt-3 container">
			<div class="row">
				<div class="col-md-4 mx-auto nounderline text-center">
					<button type="button" class="btn text-center" style="text-decoration:none;" data-bs-toggle="modal" data-bs-target="#exampleModal">
						<i class="fa-solid fa-bars"></i> MENU
					</button>
					<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  						<div class="modal-dialog modal-fullscreen">
  							<div class="container mx-auto">	
    							<div class="modal-content" style="background-image: url(images/home_19_w.png);">
      								<div class="modal-body" style="background-color: #DAC142; background-image: url(images/flor_bg.png); background-size: contain; background-repeat: no-repeat; background-position: center;">
        								<div class="row mt-1 md-2 text-center mx-auto">
      		  									<div class="col-md-5">
      		  										<hr class="hr-white">
      		  									</div>
        										<div class="col-md-2">
        											<img src="images/home_19_w.png" height="30px" width="50px" class="mx-auto" alt="">	
        										</div>
        										<div class="col-md-4">
        											<hr class="hr-white">
        										</div>
        										<div class="col-md-1 text-end">
        											<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        										</div>
        									</div>
        								<div class="row">
        									<div class="col-md-6 text-start">
        										<p style="margin: 0; padding: 0;">
        											<small><b>AGENDA TU CITA</b></small>
        										</p>
        										<p style="margin: 0; padding: 0;">
        											<small><b>CONSULTORIO: </b></small>
        										</p>
        										<p style="margin: 0; padding: 0;">
        											<small><b>3338096501</b></small>
        										</p>
        										<p style="margin: 0; padding: 0;">
        											<small><b>3338096501</b></small>
        										</p>
        									</div>
        									<div class="col-md-5 text-end">
        										!Hola pau! <img src="images/home_06.png" alt="">
        									</div>
        								</div>
        								<div class="row">
        									<div class="col text-center">
        										<p class="display-6 text-center" style="margin: 0;"><a href="#" style="text-decoration: none; color: black;">HOME</a></p>
        										<div class="row">
        											<div class="col-md-5"></div>
        											<div class="col-md-7 text-end mx-auto"><hr class="hr-white"></div>
        										</div>
        										<p class="display-6 text-center" style="margin: 0;"><a href="#" style="text-decoration: none; color: black;">TIENDA</a></p>
        										<p class="display-6 text-center" style="margin: 0;"><a href="#" style="text-decoration: none; color: black;">PROMOCIONES</a></p>
        										<p class="display-6 text-center" style="margin: 0;"><a href="#" style="text-decoration: none; color: black;">TRATAMIENTOS</a></p>
        										<p class="display-6 text-center" style="margin: 0;"><a href="#" style="text-decoration: none; color: black;">DRA. ROCIO MARQUEZ</a></p>
        										<p class="display-6 text-center" style="margin: 0;"><a href="#" style="text-decoration: none; color: black;">CONTACTO</a></p>
        										<p class="display-6 text-center" style="margin: 0;"><a href="#" style="text-decoration: none; color: black;">BLOG</a></p>
        							
        										<p class="display-6" style="display: inline;"><a href="#" style="text-decoration: none; color: black;"><i class="fa-brands fa-whatsapp"></i></a></p> 
        										<p class="display-6" style="display: inline;"><a href="#" style="text-decoration: none; color: black;"><i class="fa-brands fa-instagram"></i></a></p> 
        										<p class="display-6" style="display: inline;"><a href="#" style="text-decoration: none; color: black;"><i class="fa-brands fa-facebook-f"></i></a></p> 
												<p class="display-6" style="display: inline;"><a href="#" style="text-decoration: none; color: black;"><i class="fa-brands fa-youtube"></i></a></p>
											</div>
										</div>
        								<div class="row">
        									<div class="col-md-11">
        										<p class="text-end" style="margin: 0; padding: 0;">
        											<small><a href="#" style="text-decoration: none; color: black;">FAQ</a></small>
        										</p>
        										<p class="text-end" style="margin: 0; padding: 0;">
        											<small><a href="#" style="text-decoration: none; color: black;">AVISO DE PRIVACIDAD</a></small>
        										</p>
        										<p class="text-end" style="margin: 0; padding: 0;">
        											<small><a href="#" style="text-decoration: none; color: black;">TERMINOS Y CONDICIONES</a></small>
        										</p>
        										<p class="text-end" style="margin: 0; padding: 0;">
        											<small><a href="#" style="text-decoration: none; color: black;">POLITICAS DE ENVIO</a></small>
        										</p>
        									</div>
        								</div>
        							</div>
        						</div>
    						</div>
  						</div>
  					</div>
				</div>
				<div class="col-md-4 mx-auto text-center">
					<img src="images/home_03.png" alt="">
				</div>
				<div class="col-md-4 mx-auto nounderline text-center">
					<a href="#" class="btn btn-outline-link">
					    INICIAR SESION
						<img src="images/home_06.png" alt="">
					</a>
				</div>
			</div>
		</div>
	</div>
	</header>

	<section class="section">
		<div class="container mb-5 p-2">
			<div class="row bg-warning mt-2 bg-5" style="height: 400px; position: absolute;">	
				<div class="col">
					<div class="row mt-5 mb-5 text-center">
						<p class="display-6 text-center">TRATAMIENTOS</p>
					</div>
				</div>
    			<div class="row">
        			<div class="col">
        				<div class="container p-2" style="">
        					<div class="row">
        							<div class="col-md-12 mx-auto">
           	 							<div id="grid" class="row">
                							<div class="col-md-4 mt-2 mb-2 mx-auto">
                    							<div class="card">
                    								<div class="item-img-wrap ">
                        								<img src="images/DetalleTratamieto_03.png">
                        								<div class="item-img-overlay">
                          		  							<a href="#" class="show-image">
                                								<span></span>
                            								</a>
                        								</div>
                    								</div> 
                    							</div>
                							</div>     
                							<div class="col-md-4 mt-2 mb-2 mx-auto">
                    							<div class="card">
                    								<div class="item-img-wrap ">
                        								<img src="images/DetalleTratamieto_03.png">
                        								<div class="item-img-overlay">
                          							  		<a href="#" class="show-image">
                                								<span></span>
                            								</a>
                        								</div>
                    								</div> 
                    							</div>
                							</div>     
                							<div class="col-md-4 mt-2 mb-2 mx-auto">
                    							<div class="card">
                    								<div class="item-img-wrap ">
                        								<img src="images/DetalleTratamieto_03.png">
                        								<div class="item-img-overlay">
                        					  		  		<a href="#" class="show-image">
                        					        			<span></span>
                        					    			</a>
                        								</div>
                    								</div> 
                    							</div>
                							</div> 
                							<div class="col-md-4 mt-2 mb-2 mx-auto">
                    							<div class="card">
                    								<div class="item-img-wrap ">
                        								<img src="images/DetalleTratamieto_03.png">
                        								<div class="item-img-overlay">
                        					  		  		<a href="#" class="show-image">
                        					        			<span></span>
                        					    			</a>
                        								</div>
                    								</div> 
                    							</div>
                							</div>     
                							<div class="col-md-4 mt-2 mb-2 mx-auto">
                    							<div class="card">
                    								<div class="item-img-wrap ">
                        								<img src="images/DetalleTratamieto_03.png">
                        								<div class="item-img-overlay">
                        					  		  		<a href="#" class="show-image">
                        					        			<span></span>
                        					    			</a>
                        								</div>
                    								</div> 
                    							</div>
                							</div>     
                							<div class="col-md-4 mt-2 mb-2 mx-auto">
                    							<div class="card">
                    								<div class="item-img-wrap ">
                        								<img src="images/DetalleTratamieto_03.png">
                        								<div class="item-img-overlay">
                        					  		  		<a href="#" class="show-image">
                        					        			<span></span>
                        					    			</a>
                        								</div>
                    								</div> 
                    							</div>
                							</div>                                         
            							</div>
        							</div>
        						</div>
        				</div>
        			</div>
    			</div>
    		</div>
   		</div>
   		<div class="container p-2" style="">
   			<div class="row mt-5 mb-5">
    			<div class="col-md-4 mx-auto">
    				<nav aria-label="...">
  						<ul class="pagination">
    						<li class="page-item disabled">
    				 			<a class="page-link" href="#" tabindex="-1">Anterior</a>
    						</li>
    						<li class="page-item"><a class="page-link" href="#">1</a></li>
    						<li class="page-item active">
     							<a class="page-link" href="#">2 <span class="sr-only">(Actual)</span></a>
    						</li>
    						<li class="page-item"><a class="page-link" href="#">3</a></li>
    						<li class="page-item">
     			 				<a class="page-link" href="#">Siguiente</a>
    						</li>
  						</ul>
					</nav>
    			</div>
    		</div>
   		</div>
	</section>

	<footer>
	<div class="container mt-5 p-2">
		<div class="row mt-2 mb-3">
			<div class="col-md-5"><hr class="hr-1"></div>
			<div class="col-md-2 mx-auto text-center">
				<img src="images/home_19.png" alt="" width="40px" height="20px">
			</div>
			<div class="col-md-5"><hr class="hr-1"></div>
		</div>
		<div class="row">
			<div class="col">
				<div class="row mt-3">
					<div class="col-md-4 text-right">
						<div class="row">
							<div class="col">
								<h6 class="text-center"><b>NAVEGACION</b></h6>
							</div>
						</div>
						<div class="row">
							<div class="col">
								<p><hr class="hr-2"></p>
							</div>
						</div>
						<div class="row">
							<p><a href="#" style="text-decoration: none; color: black;">HOME</a></p>
							<p><a href="#" style="text-decoration: none; color: black;">SERVICIOS</a></p>
							<p><a href="#" style="text-decoration: none; color: black;">DRA. ROCIO M.</a></p>
							<p><a href="#" style="text-decoration: none; color: black;">TIENDA</a></p>
							<p><a href="#" style="text-decoration: none; color: black;">PROMOCIONES</a></p>
						</div>
					</div>
					<div class="col-md-4 text-right">
						<div class="row">
							<h6 class="text-center"><b>AYUDA</b></h6>
						</div>
						<div class="row">
							<div class="col-md-12">
								<hr class="hr-2">
							</div>
						</div>
						<div class="row">
							<p><a href="#" style="text-decoration: none; color: black;">FAQ</a></p>
							<p><a href="#" style="text-decoration: none; color: black;">AVISO DE PRIVACIDAD</a></p>
							<p><a href="#" style="text-decoration: none; color: black;">TERMINOS Y CONDICIONES</a></p>
							<p><a href="#" style="text-decoration: none; color: black;">POLITICAS DE ENVIO</a></p>
						</div>
					</div>
					<div class="col-md-4 text-right">
						<div class="row">
							<h6 class="text-center"><b>SOCIAL</b></h6>
						</div>
						<div class="row">
							<div class="col-md-12">
								<hr class="hr-2">
							</div>
						</div>
						<div class="row">
							<div class="col-md-7">
								<p><a href="#" style="text-decoration: none; color: black;">CONTACTO</a></p>
								<p><a href="#" style="text-decoration: none; color: black;">NOTICIAS</a></p>
								<p><a href="#" style="text-decoration: none; color: black;">MI CUENTA</a></p>
								<p><a href="#" style="text-decoration: none; color: black;">FACEBOOK</a></p>
								<p><a href="#" style="text-decoration: none; color: black;">INSTAGRAM</a></p>
							</div>
							<div class="col-md-5">
								<img src="images/home_27.png" alt="">
								<img src="images/home_29.png" alt="">
							</div>
						</div>
					</div>
				</div>
				<div class="row mt-2">
					<div class="col mt-1 mb-1 bg-warning text-center">
						<h3 style="display: inline;"><a href="#" style="text-decoration: none; color: black;"><i class="fa-brands fa-whatsapp"></i></a></h3>
						<h3 style="display: inline;"><a href="#" style="text-decoration: none; color: black;"><i class="fa-brands fa-instagram"></i></a></h3>
						<h3 style="display: inline;"><a href="#" style="text-decoration: none; color: black;"><i class="fa-brands fa-facebook-f"></i></a></h3>
						<h3 style="display: inline;"><a href="#" style="text-decoration: none; color: black;"><i class="fa-brands fa-whatsapp"></i></a></h3>
					</div>
				</div>
				<div class="row">
					<div class="col text-center">
						<small>TODOS LOS DERECHOS RESERVADOS MI PIEL ES ORO 2021 DISEÑO PARA WOZIAL MARKETING LOVERS</small>
					</div>
				</div>
			</div>
		</div>
		</div>
	</footer>

	<script src="js/bootstrap.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>	
	<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script type="text/javascript" src="vendor/slick/slick.min.js"></script>
	<!-- <script type="text/javascript" src="js/main.js"></script> //-->
	<script>
		$(document).ready(function() {
  			$('#carousel-4').slick({
 				slidesToShow: 1,
 				slidesToScroll: 1,
 				rows: 2,
 				slidesPerRow: 3,
 				nextArrow: '#btn-slick-4'
 			});
  		});
	</script>
</body>
</html>
