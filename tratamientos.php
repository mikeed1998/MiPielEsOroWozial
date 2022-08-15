<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick-theme.css"/>
	<link rel="stylesheet" href="css/main.css">
	<style>
		.flex-container {
		  display: flex;
		  flex-wrap: wrap;
		  flex-direction: row;
		}

		.flex-container > div.elem {
		  background-color: #f1f1f1;
		  width: 25%;
		  margin: 20px;
		  text-align: center;
		  line-height: 75px;
		  font-size: 30px;
		}

		@media (max-width: 800px) {
 		 .flex-container > div {
    		flex: 100%; /*Hacer de una columna las filas para dispositivos pequeños*/
  		}
</style>
</head>
<body>
	<header>
		<div class="mt-3 container-fluid" style="padding:0px; margin:0px; width: 100%;">
			<div class="row">
				<div class="col-md-4 mx-auto nounderline text-center">
					<button type="button" class="btn text-center" style="text-decoration:none;" data-bs-toggle="modal" data-bs-target="#exampleModal">
						<i class="fa-solid fa-bars"></i> MENU
					</button>
					<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"> 
  						<div class="modal-dialog modal-fullscreen">
  							<div class="container-fluid mx-auto" style="padding:0px; margin:0px;">	
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

	<section>
		<div class="container-fluid bg-warning text-center" style="background: linear-gradient(to bottom, #ffc107 50%, white 50%);">
			<div class="row mt-5 mb-5">
				<div class="col mt-5">
					<h1>TRATAMIENTOS</h1>
				</div>
			</div>	
			<div class="row mx-auto text-center">
				<div class="flex-container">
					<div class="elem"><a href="#"><img src="images/DetalleTratamieto_03.png" alt="" class="img-fluid"></a></div>
			  		<div class="elem"><a href="#"><img src="images/DetalleTratamieto_03.png" alt="" class="img-fluid"></a></div>
			  		<div class="elem"><a href="#"><img src="images/DetalleTratamieto_03.png" alt="" class="img-fluid"></a></div> 
			  		<div class="elem"><a href="#"><img src="images/DetalleTratamieto_03.png" alt="" class="img-fluid"></a></div>
			  		<div class="elem"><a href="#"><img src="images/DetalleTratamieto_03.png" alt="" class="img-fluid"></a></div>
			  		<div class="elem"><a href="#"><img src="images/DetalleTratamieto_03.png" alt="" class="img-fluid"></a></div>
				</div>
			</div>	
		</div>
		<div class="container-fluid mx-auto">
            <div class="row mt-5 mb-5">
                <div class="col-md-2 mx-auto">
                    <nav aria-label="...">
                        <ul class="pagination">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">Anterior</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="#">2 <span class="sr-only">(Actual)</span></a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">3</a>
                            </li>
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
		<div class="container-fluid mt-5">
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
  			$('#carousel-1').slick({
  				slidesToShow: 3,
  				slidesToScroll: 1,
  				nextArrow: '#btn-slick-1'
  			});

  			$('#carousel-2').slick({
  				slidesToShow: 4,
  				slidesToScroll: 1,
  				nextArrow: '#btn-slick-2'
  			});
		});
	</script>
</body>
</html>