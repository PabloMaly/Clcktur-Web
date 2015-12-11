<?php
Header("Cache-Control: must-revalidate");
$offset = 60 * 60 * 24 * 3;
$ExpStr = "Expires: " . gmdate("D, d M Y H:i:s", time() + $offset) . " GMT";
Header($ExpStr);
?>
<?include ("fx.php")?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html style="margin-top: 0 !important" class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html style="margin-top: 0 !important" class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html style="margin-top: 0 !important" class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <!--<![endif]-->
<html style="margin-top: 0 !important" lang="es"> <!--<![endif]-->
	<?ob_start?>
<head>
<meta name="Keywords" content="software,Clicktur,Web,Turismo,Sistema,sistema,web,servicio,webservices" >
<meta http-equiv="Pragma" content="no-cache" >
<meta http-equiv="Content-Type" content="text/html;charset=ISO-8859-8">
<title>Clicktur</title>
<?= GetIncludes();?>
<script>
    $(document).ready(function(){
  //      $(document).scroll(function(){
//           if($(window).scrollTop() + $(window).height() > $(document).height() - 1500) {
				$("#all").load('_load_pages.php #footer');
				$("#all2").load('_load_pages.php #loading');
				$(window).unbind('scroll');
	//	   }
      //  });
    });
    </script>
</head>
<body data-spy="scroll" data-target=".navbar">
<div id="navbar" class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
      <button data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar" type="button">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="#" class="brand logo" style="width:120px"><img class="logo-click" src="assets/img/click-logo.png"></a>
      <div class="nav-collapse collapse">
        <ul class="nav">
          <li class="">
            <a href="#services">
            	<i class="flaticon-inspiration" style="font-size:30px;vertical-align:center;margin-left:10px;"></i>
            	Servicios
            </a>
          </li>
          <li class="">
            <a href="#portfolio"><i class="flaticon-user161" style="font-size:30px;vertical-align:center;padding-top:5px"></i>Clientes</a>
          </li>
           <li class="">
            <a href="#about-us"><i class="flaticon-speech-bubble17" style="font-size:30px;vertical-align:center;"></i> Quienes somos</a>
          </li>
          <li class="">
            <a href="#blog"><i class="flaticon-monitor97"></i>Webservices</a>
          </li>
          <li class="">
            <a href="#contact"><i class="flaticon-paper-airplane"></i>Contactenos</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div> <!-- end navbar -->

<div id="slider" class="">
	<div class="container">
		<div id="sequence">
			<ul class="sequence-canvas">
				<li class="slide slide1">
					<img class="item1" src="assets/img/slide/slide3_1.png" alt="">
					<img class="item2" src="assets/img/slide/slide3_2.png" alt="">
					<div class="hero">
						<h2>Argo Theme dolor sit amet Elasde</h2>
						<p>
							Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
							dolore magna aliqua. br
							Ut enim ad minim veniam, quis nostrud ARGO.
						</p>
						<p>
							<a class="link_a" href="#contact"><button class="btn btn-large" type="button"><div class="nav-hover"></div>Adquieralo AHORA</button></a><a href="http://www.clicktur.com/demo/" target="_blank"><button class="btn btn-large btn-primary" type="button"><div class="nav-hover"></div>Demo</button></a>
						</p>
					</div>

				</li>
				<li class="slide slide2">
					<img class="item1" src="assets/img/slide/slide2_1.png" alt="">
					<img class="item2" src="assets/img/slide/slide2_2.png" alt="">
					<a class="item3" href="#modalbox_pho" data-toggle="modal" class="modal-fortress">
            			<img class="item3" src="assets/img/slide/slide2_3.png" alt="">
          			</a>
					<div class="hero">
						<h2>Argo is Great theme <br> with possibilities and options!</h2>
						<p>
							Argo Theme is awesome with clean, elegant design and easily to customize.<br>
							Ut enim ad minim veniam, quis nostrud ARGO.
						</p>
            			<p>
							<button class="btn btn-large" type="button"><div class="nav-hover"></div>Adquieralo AHORA</button>
							<button class="btn btn-large btn-primary" type="button"><div class="nav-hover"></div>Demo</button>
						</p>
					</div>
		        </li>
			</ul>
			<a class="left sequence-prev carousel-control" href="javascript:void(0);" >&lsaquo;</a>
            <a class="right sequence-next carousel-control" href="javascript:void(0);">&rsaquo;</a>
		</div>
	</div>
</div>

<?include ("_modals.php")?>

<div id="services" class="section">
	<div class="container">
		<div class="hero">
			<h1>Incluye <img src="http://archivo.giganet.com.ar/imagenes/clicktur/2010/ic-admir.gif">:</h1>
			<p>Este sistema contiene varios sectores:</p>
		</div>
		<div class="brow sev_list">
    <a href="#modalbox_fort" data-toggle="modal" class="modal-fortress">
			<div class="brick2">
      <i class="flaticon-check25"></i>
			<h2 class="serv_icon">Fortalezas</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, tempor incididunt.</p>
			</div>
      </a>
      	<a href="#modalbox_pho" data-toggle="modal" class="modal-fortress">
			<div class="brick2">
				<i class="flaticon-smartphone86"></i>
				<h2 class="serv_icon">Celular</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, tempor incididunt.</p>
			</div>
			</a>
      <a href="#modalbox_atri" data-toggle="modal" class="modal-fortress">
			<div class="brick2">
				<i class="li_star"></i>
				<h2 class="serv_icon">Atributos</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, tempor incididunt.</p>
			</div>
    </a>
		</div>
    <div class="brow sev_list">
    <a href="#modalbox_cont" data-toggle="modal" class="modal-fortress">
      <div class="brick2">
        <i class="flaticon-chart44"></i>
        <h2 class="serv_icon">Contabilidad</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, tempor incididunt.</p>
      </div>
    </a>
      <div class="brick2">
        <i class="li_lab"></i>
        <h2 class="serv_icon">Atributos</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, tempor incididunt.</p>
      </div>
      <a href="#modalbox_mod" data-toggle="modal" class="modal-fortress">
	      <div class="brick2">
	        <i class="li_settings"></i>
	        <h2 class="serv_icon">Modulos</h2>
	        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, tempor incididunt.</p>
	      </div>
      </a>
    </div>
	</div>
</div>
<div id="portfolio" class="section">
	<div class="container">
		<div class="hero">
			<h1>CLIENTES</h1>
			<p>Check out our portfolio and click to see them.</p>
		</div>
		<ul class="filter clearfix">
			<li><a href="#" data-filter=".clients_var">Nuestros Clientes Standar</a></li>
			<li><a href="#" data-filter=".ver-mouse">Clicktur Version Mouse</a></li>
			<li><a href="#" data-filter=".tango">Venta Online para Casas de Tango - Clicktur Tango</a></li>
			<li><a href="#" data-filter=".univ">Clicktur en las Universidades</a></li>
		</ul>
	<?include("_clients.php")?>
	
	</div>
</div>
<div id="purchase" class="divider section">
	<div class="bg-holder">
		<div class="container">
			<div class="hero">
				<h1>great one page theme with possibilities and options</h1>
				<p>
					<button class="btn btn-large  " type="button"><div class="nav-hover"></div>Adquieralo AHORA</button><button class="btn btn-large btn-primary" type="button"><div class="nav-hover"></div>Demo</button>
				</p>
			</div>
		</div>
	</div>
</div>
<div id="about-us" class="section">
	<div class="container">
		<div class="hero">
			<h1>Quienes Somos</h1>
			<!--<p>Argo Theme is awesome with clean, elegant design and easily to customize</p>-->
      <p>
        Somos una empresa nueva, una Sociedad Anףnima Argentina, especializada en desarrollos de
       </p>
		</div>
		<div class="row">
			<div class="hero" style="text-align:left;">
				<h3>Que hacemos?</h3>
        <p>
          Somos una empresa nueva, una Sociedad Anonima Argentina, especializada en desarrollos de
          sistemas aplicados al turismo.Tenemos mas de cuarenta anos de experiencia en el sector del
           turismo.</p><p>Contamos con un equipo multi-disciplinario, multi-etario, multi-tarea y lםquido
          (podemos cambiar rapidamente de estructura sin perder la entidad) cuyo objetivo principal es la
           innovacion tecnologica, para acompaסar los cambios en el paradigma del negocio del turismo, y generar
           nuevos cambios a partir de la creatividad y el libre pensamiento.
         </p>
			</div>
			<!--<div class="span6">
				<h3>Nuestras Habilidades</h3>
				    <div class="progress">
				    	<div class="bar" data-width="60"><span>Funiture design</span></div>
				    </div>
				    <div class="progress">
				    	<div class="bar" data-width="80"><span>Advice</span></div>
				    </div>
				    <div class="progress">
				    	<div class="bar" data-width="70"><span>Construction</span></div>
				    </div>
				    <div class="progress">
				    	<div class="bar" data-width="90"><span>Building design</span></div>
				    </div>
			</div>
		</div>-->
		<h3>Alta direccion de nuestra empresa</h3>

			<div class="our-team row">
				<div class="span6">
					<div class="team">
						<div class="ava">
							<img src="assets/img/team1.png" alt="team 1">
						</div>
						<div class="info">
							<h4 class="name">Lic. Sergio L. Turi <small> - Presidente de Clicktur S.A</small></h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut dui ante. In malesuada arcu metus, at pulvinar erat.</p>
						</div>
						<div class="social">
							<a href="#" class="facebook"><i class="icon-facebook"></i></a><a href="#" class="twitter"><i class="icon-twitter"></i></a><a href="#" class="gplus"><i class="icon-google-plus"></i></a>
						</div>
					</div>
				</div>
				<div class="span6">
					<div class="team">
						<div class="ava">
							<img src="assets/img/team2.png" alt="team 1">
						</div>
						<div class="info">
							<h4 class="name">Ing. Mariano A. Giudice<small> - Presidente de Clicktur S.A</small></h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut dui ante. In malesuada arcu metus, at pulvinar erat.</p>
						</div>
						<div class="social">
							<a href="#" class="facebook"><i class="icon-facebook"></i></a><a href="#" class="gplus"><i class="icon-google-plus"></i></a>
						</div>
					</div>
				</div>

			</div>
	</div>
</div> <!-- end About us  -->
<div id="download" class="section">
	<div id="download-content" class="container" style="border-bottom:1px solid #ddd;padding-bottom: 50px">
         <div class="span6">
            <h1>Descargar presentacion Power Point</h1>
            <p>
              Si quiere conocernos mas descarque el Power Piont y vera mas informaciÃ³n
             </p>
          </div>
          <center><button class="btn btn-large download" type="button"><div class="download"></div>Descargalo AQUI</button></center>
	</div>
</div>
<div id="blog" class="section">
	<div class="container">
		<div class="hero">
			<h1>Blog section</h1>
			<p>Wordpress theme in it's most beautiful form ever. It's just as spectacular on the inside.</p>
		</div>
		<div class="blog_container">
			<div class="row-full clearfix">
				<div class="brick1">
					<a href="blog.php" class="article">
						<img src="assets/img/blog1.png" alt="blog">
						<div class="meta">
							<h5><i class="flaticon-document162"></i> veniam, quis nostrud ARGO</h5>
						</div>
					</a>
				</div>
				<div class="brick2">
					<a href="blog.php" class="article">
						<img src="assets/img/blog3.png" alt="blog">
						<div class="meta">
							<h5><i class="flaticon-document162"></i> veniam, quis nostrud ARGO beautiful form ever</h5>
							<p class="desc">
								Maecenas lectus tellus, faucibus id auctor vitae, egestas nec turpis. Proin accumsan interdum lacus nec convallis. Sed vestibulum placerat auctor.
							</p>
						</div>
					</a>
				</div>
				<div class="brick2">
					<a href="blog.php" class="article">
						<img src="assets/img/blog6.png" alt="blog">
						<div class="meta">
							<h5><i class="flaticon-document162"></i> veniam, quis nostrud ARGO beautiful form ever</h5>
							<p class="desc">
								Maecenas lectus tellus, faucibus id auctor vitae, egestas nec turpis. Proin accumsan interdum lacus nec convallis. Sed vestibulum placerat auctor.
							</p>
						</div>
					</a>
				</div>
				<div class="brick1">
				<a href="blog.php" class="article">
						<img src="assets/img/blog7.png" alt="blog">
						<div class="meta">
							<h5><i class="flaticon-document162"></i> veniam, quis nostrud ARGO beautiful form ever</h5>
							<p class="desc">
								Maecenas lectus tellus, faucibus id auctor vitae, egestas nec turpis. Proin accumsan interdum lacus nec convallis. Sed vestibulum placerat auctor.
							</p>
						</div>
					</a>
				</div>
				<div class="brick1 odd">
					<a href="blog.php" class="article">
						<img src="assets/img/blog8.png" alt="blog">
						<div class="meta">
							<h5><i class="flaticon-document162"></i> veniam, quis nostrud ARGO beautiful form ever</h5>
							<p class="desc">
								Maecenas lectus tellus, faucibus id auctor vitae, egestas nec turpis. Proin accumsan interdum lacus nec convallis. Sed vestibulum placerat auctor.
							</p>
						</div>
					</a>
				</div>
			</div>
			<div class="row-full clearfix">
				<div class="brick1">
				<a href="blog.php" class="article">
						<img src="assets/img/blog7.png" alt="blog">
						<div class="meta">
							<h5><i class="flaticon-document162"></i> veniam, quis nostrud ARGO beautiful form ever</h5>
							<p class="desc">
								Maecenas lectus tellus, faucibus id auctor vitae, egestas nec turpis. Proin accumsan interdum lacus nec convallis. Sed vestibulum placerat auctor.
							</p>
						</div>
					</a>
				</div>
				<div class="brick1">
					<a href="blog.php" class="article">
						<img src="assets/img/blog5.png" alt="blog">
						<div class="meta">
							<h5><i class="icon-file-alt"></i> veniam, quis nostrud ARGO beautiful form ever</h5>
							<p class="desc">
								Maecenas lectus tellus, faucibus id auctor vitae, egestas nec turpis. Proin accumsan interdum lacus nec convallis. Sed vestibulum placerat auctor.
							</p>
						</div>
					</a>
				</div>

				<div class="brick2 odd">
					<a href="blog.php" class="article">
						<img src="assets/img/blog6.png" alt="blog">
						<div class="meta">
							<h5><i class="icon-file-alt"></i> veniam, quis nostrud ARGO beautiful form ever</h5>
							<p class="desc">
								Maecenas lectus tellus, faucibus id auctor vitae, egestas nec turpis. Proin accumsan interdum lacus nec convallis. Sed vestibulum placerat auctor.
							</p>
						</div>
					</a>
				</div>
				<div class="brick1 odd">
					<a href="blog.php" class="article">
						<img src="assets/img/blog8.png" alt="blog">
						<div class="meta">
							<h5><i class="icon-file-alt"></i> veniam, quis nostrud ARGO beautiful form ever</h5>
							<p class="desc">
								Maecenas lectus tellus, faucibus id auctor vitae, egestas nec turpis. Proin accumsan interdum lacus nec convallis. Sed vestibulum placerat auctor.
							</p>
						</div>
					</a>
				</div>
				<div class="brick1">
					<a href="blog.php" class="article">
						<img src="assets/img/blog7.png" alt="blog">
						<div class="meta">
							<h5><i class="icon-file-alt"></i> veniam, quis nostrud ARGO beautiful form ever</h5>
							<p class="desc">
								Maecenas lectus tellus, faucibus id auctor vitae, egestas nec turpis. Proin accumsan interdum lacus nec convallis. Sed vestibulum placerat auctor.
							</p>
						</div>
					</a>
				</div>
				<div class="brick1 odd"><img src="assets/img/blog2.png" alt="blog"></div>
				<div class="brick1"><img src="assets/img/blog1.png" alt="blog"></div>

			</div>
		</div>
	</div>
</div>	<!-- end Blog -->

<div id="testimonial" class="divider section">
	<div class="bg-holder">
		<div class="container">

			<!-- Bootstrap carousel -->

			<div id="msgs" class="carousel slide" >
				<h3>Testimonial</h3>
				 <!-- Carousel items -->
				<div class="carousel-inner">
					<div class="active item">
						<img class="thumbnail" src="assets/img/ava2.jpg" alt="">
						<div class="msg">
							<strong>ArgoTheme</strong>
							<p>"ARGO did a great job with the layout of our website. It is easy to navigate and has a clean, modern appearance. Feedback was encouraged throughout the process, and emails were always answered in a timely . <br>

We are very proud of our new website. It has much improved functionality and metrics. ARGO worked to make sure that we were happy with the end product."</p>
						</div>
					</div>
					<div class="item">
						<img class="thumbnail" src="assets/img/ava3.jpg" alt="">
						<div class="msg">
							<strong>Astro Galaxy</strong>
							<p>
"We are very proud of our new website. It has much improved functionality and metrics. ARGO worked to make sure that we were happy with the end product."</p>
						</div>
					</div>
					<div class="item">
						<img class="thumbnail" src="assets/img/ava1.jpg" alt="">
						<div class="msg">
							<strong>Joe Doe</strong>
							<p>
" It is easy to navigate and has a clean, modern appearance. Feedback was encouraged throughout the process, and emails were always answered in a timely."</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="contact" class="section">
	<div class="container">
		<div class="hero">
			<h1> Solicitar Tarifas</h1>
			<p>Please don't heristate to contact us for more information about work</p>
		</div>
		<div id="all2"></div>
			<!--<div class="map"> <iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=vi&amp;geocode=&amp;q=Times+Square,+Th%C3%A0nh+ph%E1%BB%91+New+York,+Ti%E1%BB%83u+bang+New+York,+Hoa+K%E1%BB%B3&amp;aq=0&amp;oq=time&amp;sll=37.0625,-95.677068&amp;sspn=49.357162,127.265625&amp;ie=UTF8&amp;hq=Times+Square,+Th%C3%A0nh+ph%E1%BB%91+New+York,+Ti%E1%BB%83u+bang+New+York,+Hoa+K%E1%BB%B3&amp;t=m&amp;ll=40.758882,-73.985176&amp;spn=0.016904,0.032015&amp;output=embed"></iframe> -->
	    <div id="contact-map" class="section"></div>
			<!--<img src="assets/img/map.png" alt="">--><!--</div>-->
	</div>
</div>
<center>
<div class="map">
	<iframe style="width: 90%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3284.168953255015!2d-58.37817738477047!3d-34.5998889804604!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccacbeb64e9e7%3A0x5ca0c6486254b6f4!2sViamonte+640%2C+C1053ABN+CABA!5e0!3m2!1ses!2sar!4v1448543883834" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
</center>
</div>
<div id="all"></div>
<!-- Bootstrap js -->
<script src="assets/js/bootstrap-transition.js"></script>
<script src="assets/js/bootstrap-modal.js"></script>
<script src="assets/js/bootstrap-dropdown.js"></script>
<script src="assets/js/bootstrap-carousel.js"></script>
<script src="assets/js/bootstrap-collapse.js"></script>
<script src="assets/js/bootstrap-scrollspy.js"></script>

<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="assets/js/sequence.jquery-min.js"></script>
<script src="assets/js/jquery.mousewheel.min.js"></script>
<script src="assets/js/jquery.hoverdir.js"></script>
<script src="assets/js/jquery.isotope.min.js"></script>
<script src="assets/js/argo.slide.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>
