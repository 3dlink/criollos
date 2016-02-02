<?php
/**
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 */
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		Criollos Media
	</title>
	<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
	<?php
		echo $this->Html->meta('icon');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
		echo $this->Html->css('bootstrap.css');
		echo $this->Html->css('criollos.css');
    echo $this->Html->script('bootstrap.js');
	?>
</head>
<body>
	<div id="container">
		<div id="header">
		</div>
		<div id="content">

			<section id="home">
				<div id="slider_home">
					<img id="img_slider_home" src="img/cocacola.png" style="width:100%;">
				</div>
				<div id="home_mask">
					<img src="img/letter.png" style="width:100%;">
				</div>
			</section>

			<section id="about" class="contenedor">
				<div class="diagonal_r"></div>
				<div class="section_content">
					<h1>¿QUIÉNES SOMOS?</h1>
					<br><br>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eu varius augue. Etiam sodales elementum laoreet. Vestibulum eu convallis est. Morbi ornare leo quis tortor mattis, ac ultrices enim fringilla. Praesent at dui pellentesque, ultrices arcu quis, volutpat arcu. Aenean magna diam, rhoncus scelerisque </p>

				</div>
				<div class="diagonal_l"></div>
			</section>

			<section id="frases">

			 <div id="carousel_frases" class="carousel slide" data-ride="carousel">
        
        <div class="carousel-inner">
            <div class="item active">
                <div class="carousel-caption">
                    <p>"Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                        tempor invidunt."</p>
                </div>
            </div>
            
            <div class="item">
                <div class="carousel-caption">
                    <p>"Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                        tempor invidunt."</p>
                </div>
            </div>
            
            <div class="item">
                <div class="carousel-caption">
                    <p>"Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                        tempor invidunt."</p>
                </div>
            </div>
            
            <div class="item">
                <div class="carousel-caption">
                    <p>"Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                        tempor invidunt."</p>
                </div>
            </div>
            
        </div>
        
    		</div> 
			</section>

			<section id="services">
				<div class="diagonal_l_top"></div>
				<div class="section_content">
					<h1>SERVICIOS</h1>
					<br><br>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eu varius augue.</p>

				</div>
				<div class="diagonal_r_top"></div>
			</section>

			<section id="twitter">
				<div id="twitter_frases" class="carousel slide" data-ride="carousel">
        
        <div class="carousel-inner">
            <div class="item active">
                <div class="carousel-caption">
                	<img src="img/twitter.png" style="width:50px;margin-bottom:30px;">
                    <p>"Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                        tempor invidunt."</p><br>
                        <p>NOMBRE CLIENTE</p>
                </div>
            </div>
            
            <div class="item">
                <div class="carousel-caption">
                	<img src="img/twitter.png" style="width:50px;margin-bottom:30px;">
                    <p>"Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                        tempor invidunt."</p><br>
                        <p>NOMBRE CLIENTE</p>
                </div>
            </div>
            
            <div class="item">
                <div class="carousel-caption">
                	<img src="img/twitter.png" style="width:50px;margin-bottom:30px;">
                    <p>"Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                        tempor invidunt."</p><br>
                        <p>NOMBRE CLIENTE</p>
                </div>
            </div>
            
            <div class="item">
                <div class="carousel-caption">
                	<img src="img/twitter.png" style="width:50px;margin-bottom:30px;">
                    <p>"Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                        tempor invidunt."</p><br>
                        <p>NOMBRE CLIENTE</p>
                </div>
            </div>
            
        </div>
        
    		</div> 
			</section>

			<section id="portfolio">
				<div class="diagonal_r"></div>
				<div class="section_content">
					<h1>PORTAFOLIO</h1>
					<br><br><br>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eu varius augue. Etiam sodales elementum laoreet. Vestibulum eu convallis est. Morbi ornare leo quis tortor mattis, ac ultrices enim fringilla. Praesent at dui pellentesque, ultrices arcu quis, volutpat arcu. Aenean magna diam, rhoncus scelerisque </p>

				</div>
				<div class="diagonal_l"></div>
			</section>

			<section id="contact">
				<div class="section_content">
					<h1>CONTÁCTANOS</h1>
					<br><br>
					<div class="row">
						<div class="col-md-6">
							<form id="formulario">
								<div class="row">
									<div class="col-md-6">
										<input type="text" class="form-control" placeholder="Nombre y Apellido" id="name">
									</div>
									<div class="col-md-6">
										<input type="email" class="form-control" placeholder="Email" id="email">
									</div>
									<div class="col-xs-12">
										<textarea name="" class="form-control" cols="30" rows="10" id="cuestion"></textarea>
									</div>
									<div class="col-xs-12">
										<button id="enviar" class="boton" type="button">ENVIAR</button>
									</div>
								</div>
							</form>
						</div>
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-6">
									<p style="font-size:23px;text-align: right;margin-top: 60px;">
										<b>PARA MÁS INFORMACIÓN</b> <br>
										(5555) 555 5555 <br>
										info@criollosmedia.com <br>
										Caracas, Venezuela
									</p>
								</div>
								<div class="col-md-6"><img src="img/qr.png"></div>
							</div>
						</div>
					</div>

				</div>
			</section>
		</div>
		<div id="footer">
				<div class="diagonal_r"></div>
				<div class="section_content">
					<h1>SÍGUENOS</h1>
					<div class="linea_completa"></div>
					<br><br>
					<div class="icons">
						<a alt="Youtube" target="_blank" href="#"><div id="youtube" class="icono"></div></a>
						<a alt="Facebook" target="_blank" href="#"><div id="facebook" class="icono"></div></a>
						<a alt="Linkedin" target="_blank" href="#"><div id="linkedin" class="icono"></div></a>
						<a alt="Twitter" target="_blank" href="#"><div id="twitter_logo" class="icono"></div></a>
						<a alt="Instagram" target="_blank" href="#"><div id="instagram" class="icono"></div></a>
					</div>
			</div>
		</div>
	</div>


<script type="text/javascript">

$(document).ready(function() { 
	var i=0;
	var imgs = ["img/cocacola.png", "img/cocacola_2.png", "img/cocacola_3.png"];
	
	function slider(){
		if(i==3){i=0;}
		$('#img_slider_home').prop('src', imgs[i]);
		i++;
	}

	setInterval(slider, 3000);

	$('#carousel_frases').carousel({
    	interval:   4000
	});

	$('#twitter_frases').carousel({
    	interval:   4000
	});

});

</script>



</body>
</html>

