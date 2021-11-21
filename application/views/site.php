<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php

		if(isset($css)) for ($i=0;$i<count($css);$i++) {
				echo "\n\t<link rel='stylesheet' type='text/css' href='".base_url().$css[$i]."' />\n";
			}
		if(isset($js))for ($i=0;$i<count($js);$i++) {
				echo "\n\t<script type='text/javascript' src='".base_url().$js[$i]."'></script>\n";
			}

?>

<title>Ezoom - Teste Front</title>

<link
			rel="stylesheet"
			href="https://unpkg.com/swiper/swiper-bundle.min.css"
			/>

<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
  
  jQuery.ajax({
    type: "GET",
    url: "http://localhost:3000/services",
    dataType: 'json',
    success: function(res) {
        if (res)
        {
            for(i = 0; i < res.length; i++){
                $('#img_integrado'+i).addClass(res[i].image);
                $('#h5_integrado'+i).html(res[i].title);
                $('#p_integrado'+i).html(res[i].description);
            }
        }
    }
  });

  jQuery.ajax({
    type: "GET",
    url: "http://localhost:3000/clients",
    dataType: 'json',
    success: function(res) {
        if (res)
        {
            for(i = 0; i < res.length; i++){
                $("#img_"+i).attr("src", res[i].image);
                $('#img_'+i).attr("alt",res[i].title);
                $('#clt_'+i).attr("href",res[i].link);
            }
        }
    }
  });

</script>
</head>

<body>

		<!-- loader -->
		<div class="fakeLoader"></div>
		<!-- end loader -->
		
		<!-- navbar -->
		<nav class="navbar navbar-expand-md fixed-top">
			<div class="container">
				<a href="index.html" class="navbar-brand"><span>Site</span>Demo</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<i class="fa fa-bars"></i>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link" href="#home">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#clientes">Clientes</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#portifolio">Desenvolvedores</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#precos">Preços</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#areacliente">Ajuda</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#contato">Contato</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- end navbar -->
		
		<!-- home intro -->
		<div class="home-intro" id="home">
			<div class="container">
				<div class="row">
					<div class="col col-sm-12 col-md-6 col-12">
						<div class="content">
							<h5><span class="line"></span>TESTE FRONT</h5>
							<h2>AGENCIA</h2>
							<h2>EZOOM</h2>
						</div>
					</div>
					<div class="col col-sm-12 col-md-6 col-12">
						<div class="content-image">
							<div class="swiper mySwiper">
							<div class="swiper-wrapper">
								<div class="swiper-slide"><img src="images/ti.png" alt=""></div>
								<div class="swiper-slide"><img src="images/ti2.png" alt=""></div>
							</div>
							<div class="swiper-button-next"></div>
							<div class="swiper-button-prev"></div>
							<div class="swiper-pagination"></div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end end intro -->

		<!-- sobre -->
		<div class="cliente section bg-grey" id="clientes">
			<div class="container">
				<div class="title-section">
					<h3>Clientes</h3>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="content">
							<a href="" target="_blanc" id="clt_0">
								<img id="img_0" src="" width="250px" alt="">
							</a>
						</div>
					</div>
					<div class="col-md-4">
						<div class="content">
							<a href="" target="_blanc" id="clt_1">
								<img id="img_1" src="" width="250px" alt="">
							</a>
						</div>
					</div>
					<div class="col-md-4">
						<div class="content">
							<a href="" target="_blanc" id="clt_2">
								<img id="img_2" src="" width="250px" alt="">
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end about -->
		
		<!-- portfolio -->
		
		<div class="about section bg-grey" id="portifolio">
			<div class="container">
				<div class="title-section">
					<h3>Estamos <span>Integrados</span></h3>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="content">
							<i id="img_integrado0" class="lni"></i>
							<h5 id="h5_integrado0"></h5>
							<p id="p_integrado0" class="mb-0"></p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="content1">
							<i id="img_integrado1" class="lni"></i>
							<h5 id="h5_integrado1"></h5>
							<p id="p_integrado1" class="mb-0"></p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="content">
							<i id="img_integrado2" class="lni"></i>
							<h5 id="h5_integrado2"></h5>
							<p id="p_integrado2" class="mb-0"></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end portfolio -->
		
		<!-- pricing -->
		<div class="pricing section" id="precos">
			<div class="container">
				<div class="title-section">
					<h3>Planos e <span>Preços</span></h3>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="content">
							<h4>Básico</h4>
							<span>R$ 60,00</span>
							<ul>
								<li>Suporte 24h</li>
								<li>MySQL Remoto</li>
								<li>phpMyAdmin</li>
								<li class="not-active">Domínio grátis</li>
								<li class="not-active">BackUp Diário</li>
								<li class="not-active">Banco Ilimitado</li>
								
							</ul>
						</div>
						<button class="button">Querro esse!</button>
					</div>
					<div class="col-md-4">
						<div class="content content-center">
							<h4>Intermediário</h4>
							<span>R$ 90,00</span>
							<ul>
								<li>Suporte 24h</li>
								<li>MySQL Remoto</li>
								<li>phpMyAdmin</li>
								<li>Domínio grátis</li>
								<li class="not-active">BackUp Diário</li>
								<li class="not-active">Banco Ilimitado</li>
							</ul>
						</div>
						<button class="button">Quero esse!</button>
					</div>
					<div class="col-md-4">
						<div class="content">
							<h4>Avançado</h4>
							<span>R$ 150,00</span>
							<ul>
								<li>Suporte 24h</li>
								<li>MySQL Remoto</li>
								<li>phpMyAdmin</li>
								<li>Domínio grátis</li>
								<li>BackUp Diário</li>
								<li>Banco Ilimitado</li>
							</ul>
						</div>
						<button class="button">Quero esse!</button>
					</div>
				</div>
			</div>
		</div>
		<!-- end pricing -->
		<div class="areacliente section" id="areacliente">
			<div class="container">
				<div class="row">
					<div class="texto">
						<h3>Área do Cliente</h3>
						<br>
						<p>Precisando entrar em contato, utilize nossos canais de atendimento ou consulte a documentação para mais informações.</p>
						<div class="buttonCliente">
							<button class="button">Enviar um Ticket</button>
							<button class="button2">Documentação</button>
						</div>
					</div>
					<div class="col-md-12">
						<img src="images/PC.png" width="600" alt="" style="float: right;">
					</div>
				</div>
			</div>
		</div>

		<!-- contato -->
	    <div id="contato" class="contact section">
	        <div class="container">
	            <div class="box-content">
	                
					<div class="content">
						<h3>Newsletter</h5>
						<p>Receba nossas informações por email e fique sabendo de todas as nossas novidades</p>
						<div id="email-field">
							<input type="text" placeholder="E-mail" name="email">
							<button class="button">Salvar</button>
						</div>
					</div>
	                    
	            </div>
	        </div>
	    </div>
	    <!-- end contact -->

		<!-- footer -->
		<footer>
			<div class="container">
				<div class="content">
					<div class="brand"><span>Site</span>Demo</div>
				</div>
				<div class="links">

					<ul class="navbar-footer">
						<li class="nav-item">
							<a class="nav-link" href="#home">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#clientes">Clientes</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#portifolio">Desenvolvedores</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#precos">Preços</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#areacliente">Ajuda</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#contato">Contato</a>
						</li>
					</ul>

				</div>
				<div class="right">+80 1234 56789 | ola@sitedemo.com.br</div>
			 </div>
		</footer>
		<!-- end footer -->

		<!-- footer bottom -->
		<div class="footer-bottom">
			<span>Copyright © All Right Reserved</span>
		</div>
		<!-- end footer bottom -->
		
		<script>
			var swiper = new Swiper(".mySwiper", {
			cssMode: true,
			navigation: {
			  nextEl: ".swiper-button-next",
			  prevEl: ".swiper-button-prev",
			},
			pagination: {
			  el: ".swiper-pagination",
			},
			mousewheel: true,
			keyboard: true,
		  });
		</script>


	</body>
</html>