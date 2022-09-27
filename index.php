<?php
 include_once './conexao.php';
?>

<!DOCTYPE html>
 <html lang="zxx">

<head>

    	<!-- Metas -->
        <meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
		<meta name="keywords" content="Vegas Vigilância" />
		<meta name="description" content="Vegas Vigilância" />
		<meta name="author" content="Agência Color" />

		<!-- Title  -->
		<title>Vegas Vigilância</title>

		<!-- Favicon -->
        <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
        <link rel="manifest" href="favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,500,600,700,800" rel="stylesheet">
		
		<!-- Plugins -->
		<link rel="stylesheet" href="css/plugins.css" />

        <!-- Core Style Css -->
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/style4.css" />

        <!-- Plugins modal de vídeo -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="js/videopopup.js"></script>
        <link rel="stylesheet" type="text/css" href="css/videopopup.css" media="screen" />

    </head>

    <body>

    <?php
    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    if (!empty($dados['AddMsgCont'])) {
        //var_dump($dados);

        $query_contato = "INSERT INTO formulario (email, name, assunto, message) VALUES (:email, :name, :assunto, :message)";
        $add_contato = $conn->prepare($query_contato);
        $add_contato->bindParam(':email', $dados['email'], PDO::PARAM_STR);
        $add_contato->bindParam(':name', $dados['name'], PDO::PARAM_STR);       
        $add_contato->bindParam(':assunto', $dados['assunto'], PDO::PARAM_STR);
        $add_contato->bindParam(':message', $dados['message'], PDO::PARAM_STR);

        $add_contato->execute();

        if($add_contato->rowCount()){
            echo "<p style='color: green;'>Mensagem enviada com sucesso!</p>";
        }else{
            echo "<p style='color: #f00;'>Erro: Mensagem não enviada com sucesso!</p>";
        }

    }
    ?>

    	<!-- =====================================
    	==== Start Loading -->

    	<div class="loading">
    		<div class="text-center middle">
    			<div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
    		</div>
    	</div>
        
    	<!-- End Loading ====
    	======================================= -->

       
    	<!-- =====================================
    	==== Start Navbar -->

		<nav class="navbar navbar-expand-lg" id="toposeta">
			<div class="container">

            <!-- Logo -->
            <a class="logo" href="#">
                <img src="img/logo-light.png" alt="logo">          
            </a>

			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="icon-bar"><i class="fas fa-bars"></i></span>
			  </button>

			  <!-- navbar links -->
			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			    <ul class="navbar-nav ml-auto">
			      <li class="nav-item">
			        <a class="nav-link active" href="#" data-scroll-nav="0">Home</a>
			      </li>
			      <li class="nav-item">
                    <a class="nav-link" href="#" data-scroll-nav="1">Sobre</a>
                  </li>
                  <li class="nav-item">
			        <a class="nav-link" href="#" data-scroll-nav="2">Galeria</a>
			      </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#" data-scroll-nav="3">Serviços</a>
                  </li>
			     
			      <!-- <li class="nav-item">
			        <a class="nav-link" href="#" data-scroll-nav="4">Price</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#" data-scroll-nav="5">Blog</a>
			      </li> -->
			      <li class="nav-item">
			        <a class="nav-link" href="#" data-scroll-nav="6">Contato</a>
			      </li>
			    </ul>
			  </div>
			</div>
		</nav>

    	<!-- End Navbar ====
    	======================================= -->


    	<!-- =====================================
    	==== Start Header -->

    	<header class="header valign bg-img" data-scroll-index="0" data-overlay-dark="5" data-background="img/bg2.jpg" data-stellar-background-ratio="0.5">

            <!-- particles -->
            <div id="particles-js"></div>

    		<div class="container">
    			<div class="row">
    				<div class="full-width text-center caption mt-30">
    					<h3>Somos especialistas em</h3>
                        <h1 class="cd-headline clip">
                            <span class="blc">Segurança </span>
                            <span class="cd-words-wrapper">
                              <b class="is-visible">Privada</b>
                              <b>Eletrônica</b>                            
                              <b>Patrimonial</b>
                            </span>
                        </h1>
                        <p>Entre em contato conosco e solicite um orçamento</p>
                       
    				</div>
    			</div>
    		</div>

    		<div class="arrow">
				<a href="#" data-scroll-nav="1">
					<i class="fas fa-chevron-down"></i>
				</a>
			</div>
    	</header>

    	<!-- End Header ====
    	======================================= -->


    	<!-- =====================================
    	==== Start Hero -->
    	
        <section class="hero section-padding pb-0" data-scroll-index="1">
            <div class="container">
                <div class="row">
                    <div class="offset-lg-2 col-lg-8 text-center mb-80">
                        <h4 class="extra-text">Quem <span>Somos</span></h4>
                        <p>Há quase 1 década, a VEGAS VIGIL NCIA E SEGURANÇA se consolida no rol das empresas mais renomadas no setor de segurança armada, segurança eletrônica  e serviços terceirizados do Estado do Rio de Janeiro. Temos a missão de cuidar, com responsabilidade, das pessoas e dos seus patrimônios. </p>
                        </br><p>A excelência dos nossos serviços está no comprometimento da nossa equipe, formada por profissionais treinados nas suas respectivas áreas de atuação, prontos …</p>
                    </div>

                    <div class="col-lg-7">
                        <div class="mission">

                            <div class="section-head mb-30">
                                <h4><span>Nossa</span><br>
                                    História
                                </h4>
                            </div>

                            <p>Apaixonados pela cidade de Volta Redonda, 02 amigos tomados por múltiplos sonhos idealizaram um empreendimento que fomentasse a geração de emprego e renda naquela região, tão sofrida e carente de recursos e de oportunidades, oferecendo trabalho digno e remuneração justa.
                            </p>
                            <p>
                                Em 2015, munidos muita disposição, coragem e boa vontade, esses amigos não mediram esforços, nem pouparam seus escassos recursos na consolidação de mercado da empresa, buscando conhecimento, formação e capacitação.
                            </p>
                            <p>
                                O resultado de todo este trabalho cuidadosamente planejado, pode ser medido através do crescimento exponencial da empresa nos últimos anos, destacando-se no mercado como paradigma de modernidade e competência, aliados a uma cultura ética e humanista na condução do empreendimento.
                            </p>

                        </div>
                    </div>

                    <div class="col-lg-5">
                        <img src="img/quem-somos.jpg">
                    </div>

                </div>
            </div>
        </section>
            
            <!-- =====================================
    	==== Start Numbers -->
    	
                    <div class="numbers section-padding bg-img" data-overlay-dark="6" data-background="img/4.jpg">
                        <div class="container">
                            <div class="row">

                                <div class="col-lg-4 col-md-6">
                                    <div class="item text-center mb-md50">
                                        <span class="icon"><i class="icofont icofont-users-alt-3"></i></span>
                                        <h2 class="count">3279</h2>
                                        <h6>Clientes Atendidos</h6>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="item text-center mb-md50">
                                        <span class="icon"><i class="icofont icofont-briefcase-alt-2"></i></span>
                                        <h2 class="count">153</h2>
                                        <h6>Eventos Realizados</h6>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="item text-center mb-sm50">
                                        <span class="icon"><i class="icofont icofont-businessman"></i></span>
                                        <h2 class="count">232</h2>
                                        <h6>Colaboradores</h6>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

    	<!-- End Numbers ====
    	======================================= -->
       

    	<!-- End Hero ====
    	======================================= -->


    	<!-- =====================================
    	==== Start Portfolio -->
    	
        <section class="portfolio section-padding" data-scroll-index="2">
            <div class="container">
                <div class="row">
                    
                    <div class="section-head col-sm-12">
                        <h4>
                            Galeria
                        </h4>
                    </div>

                    <!-- filter links -->
                    <div class="filtering col-sm-12">
                        <span data-filter='*' class="active">Todos</span>
                        <span data-filter='.foto'>Fotos</span>
                        <span data-filter='.video'>Vídeos</span>
                    </div>

                    <div class="clearfix"></div>

                    <!-- gallery -->
                    <div class="gallery text-center full-width">

                        <!-- gallery item -->
                        <div class="col-md-4 items foto">
                            <div class="item-img">
                                <img src="img/portfolio/1.jpg" alt="image">
                                <div class="item-img-overlay valign">
                                    <div class="overlay-info full-width vertical-center">
                                        <h6>Segurança de Eventos</h6>                                     
                                    </div>                         
                                            <a href="img/portfolio/1.jpg" class="test-popup-link">  
                                            <i class="icofont icofont-image"></i>
                                    </a>                 
                                </div>
                            </div>
                        </div>

                     
                        <!-- gallery item -->
                        <div class="col-md-4 items">
                            <div class="item-img">
                                <img src="img/portfolio/4.jpg" alt="image">
                                <div class="item-img-overlay valign">
                                    <div class="overlay-info full-width vertical-center">
                                        <h6>Vegas Vigilância</h6>
                                        
                                    </div>
                                    <a class="video" href="video/vegas.mp4" >
                                        <i class="icofont icofont-video"></i>
                                    </a>
                                </div>
                            </div>
                        </div>    
                        
                    

                        <!-- gallery item -->
                        <div class="col-md-4 items foto">
                            <div class="item-img">
                                <img src="img/portfolio/3.jpg" alt="image">
                                <div class="item-img-overlay valign">
                                    <div class="overlay-info full-width vertical-center">
                                        <h6>Escolta</h6>
                                       
                                    </div>
                                    <a href="img/portfolio/3.jpg" class="test-popup-link"">
                                        <i class="icofont icofont-image"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                          <!-- gallery item -->
                          <div class="col-md-4 items foto">
                            <div class="item-img">
                                <img src="img/portfolio/1.jpg" alt="image">
                                <div class="item-img-overlay valign">
                                    <div class="overlay-info full-width vertical-center">
                                        <h6>Segurança de Eventos</h6>
                                        
                                    </div>
                                    <a href="img/portfolio/1.jpg" class="test-popup-link">
                                        <i class="icofont icofont-image"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                     
                        <!-- gallery item -->
                        <div class="col-md-4 items video">
                            <div class="item-img">
                                <img src="img/portfolio/4.jpg" alt="image">
                                <div class="item-img-overlay valign">
                                    <div class="overlay-info full-width vertical-center">
                                        <h6>Vegas Vigilância</h6>
                                        
                                    </div>
                                    <a href="img/portfolio/vegas.mp4" class="popimg">
                                        <i class="icofont icofont-video"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- gallery item -->
                        <div class="col-md-4 items foto">
                            <div class="item-img">
                                <img src="img/portfolio/3.jpg" alt="image">
                                <div class="item-img-overlay valign">
                                    <div class="overlay-info full-width vertical-center">
                                        <h6>Escolta</h6>
                                        
                                    </div>
                                    <a href="img/portfolio/3.jpg" class="popimg">
                                        <i class="icofont icofont-image"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                          <!-- gallery item -->
                          <div class="col-md-4 items foto">
                            <div class="item-img">
                                <img src="img/portfolio/1.jpg" alt="image">
                                <div class="item-img-overlay valign">
                                    <div class="overlay-info full-width vertical-center">
                                        <h6>Segurança de Eventos</h6>
                                        
                                    </div>
                                    <a href="img/portfolio/1.jpg" class="popimg">
                                        <i class="icofont icofont-image"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                     
                        <!-- gallery item -->
                        <div class="col-md-4 items video">
                            <div class="item-img">
                                <img src="img/portfolio/4.jpg" alt="image">
                                <div class="item-img-overlay valign">
                                    <div class="overlay-info full-width vertical-center">
                                        <h6>Vegas Vigilância</h6>
                                        
                                    </div>
                                    <a href="img/portfolio/vegas.mp4" class="popimg">
                                        <i class="icofont icofont-video"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- gallery item -->
                        <div class="col-md-4 items foto">
                            <div class="item-img">
                                <img src="img/portfolio/3.jpg" alt="image">
                                <div class="item-img-overlay valign">
                                    <div class="overlay-info full-width vertical-center">
                                        <h6>Escolta</h6>
                                        
                                    </div>
                                    <a href="img/portfolio/3.jpg" class="popimg">
                                        <i class="icofont icofont-image"></i>
                                    </a>
                                </div>
                            </div>
                        </div>


                        <div class="clear-fix"></div>

                    </div>

                </div>
            </div>
        </section>

    	<!-- End Portfolio ====
    	======================================= -->

        <!-- =====================================
        ==== Start Services Tabs -->

        <section class="serv-tabs section-padding" data-scroll-index="3">
            <div class="container">
                <div class="row">
                    
                     <div class="section-head col-sm-12">
                        <h4>
                            <span>Nossos</span><br>
                            Serviços
                        </h4>
                    </div>

                    <div class="tabs col-sm-12 offset-1">

                    
                        <div class="tabs-icon row">
                            <div id="tab-1" class="col-md-2 col-sm-6 active item">
                                <div>
                                    <span class="icon"><i class="icofont icofont-lock"></i></span>
                                    <h6>RASTREAMENTO DE VEÍCULOS</h6>
                                </div>
                            </div>

                            <div id="tab-2" class="col-md-2 col-sm-6 item">
                                <div>
                                    <span class="icon"><i class="icofont icofont-cc-camera"></i></span>
                                    <h6>ALARMES MONITORADOS</h6>
                                </div>
                            </div>

                            <div id="tab-3" class="col-md-2 col-sm-6 item">
                                <div>
                                    <span class="icon"><i class="icofont icofont-man-in-glasses"></i></span>
                                    <h6>CAMERAS DE SEGURANÇA</h6>
                                </div>
                            </div>

                            <div id="tab-4" class="col-md-2 col-sm-6 item">
                                <div>
                                    <span class="icon"><i class="icofont icofont-police-car-alt-1"></i></span>
                                    <h6>VIGILANCIA </br>ARMADA</h6>
                                </div>
                            </div>

                            <div id="tab-5" class="col-md-2 col-sm-6 item">
                                <div>
                                    <span class="icon"><i class="icofont icofont-police-car-alt-1"></i></span>
                                    <h6>SERVIÇOS TERCEIRIZADOS</h6>
                                </div>
                            </div>
            
                        </div>

                        <div class="content">
                            <div id="tab-1-content" class="tab-item curent">
                                <div class="row">
                                    <div class="col-lg-10">
                                        <div class="item">
                                            <p>O rastreamento veicular da Vegas Vigilância permite que você fique por dentro de tudo o que acontece com veículos e motoristas. Você poderá acompanhar no mapa quais carros, motos ou caminhões estão ligados, o local exato onde eles estão passando, além de ter um controle maior de horas extras, tempo de almoço e horários de início e final de serviço de todos os dias.</p>
                                        </div>
                                    </div>
                                
                                </div>
                            </div>

                            <div id="tab-2-content" class="tab-item">
                                <div class="row">
                                    <div class="col-lg-10">
                                        <div class="item">
                                            <p>Quando um sensor/detector do alarme monitorado dispara na sua casa ou empresa, um sinal é enviado imediatamente a nossa central de monitoramento de alarmes 24 horas, e nossa equipe toma as medidas de segurança conforme o plano contratado. Sendo ainda completar do alarme os serviços de: arme/desarme programado , botão de pânico ,  rondas programadas,  entre outras funcionalidades.</p>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>

                            <div id="tab-3-content" class="tab-item">
                                <div class="row">
                                    <div class="col-lg-10">
                                        <div class="item">
                                            <p>Seja  em casa, condomínio ou empresa, independente de porte ou tamanho do negócio, o uso de câmeras de segurança atualmente é indispensável. Garantir a segurança e bem estar da sua família, colaboradores ou clientes é um dos pontos mais importante no dia a dia das pessoas. Vale a pena ressaltar que possuir um bom sistema de CFTV não é um luxo, pelo contrário, é uma necessidade, que sempre acaba por reduzir custos e prejuízos.</p>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>

                            <div id="tab-4-content" class="tab-item">
                                <div class="row">
                                    <div class="col-lg-10">
                                        <div class="item">
                                            <p>A Vegas Vigilância e Segurança atua com a terceirização de vigilantes armados e desarmados totalmente regularizada pela Policia Federal, proﬁssionais treinados e devidamente uniformizados, supervisionados pelo nosso Centro de Operações 24h. Nosso compromisso é direcionar profissionais extremamente qualificados, adequados às funções destinadas nos responsabilizando pela qualidade dos serviços prestados.</p>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>

                            <div id="tab-5-content" class="tab-item">
                                <div class="row">
                                    <div class="col-lg-10">
                                        <div class="item">
                                            <p>Comprometidos com a satisfação de clientes e profissionais, desenvolvemos projetos que possibilitam a gestão completa de materiais, ativos, pessoas e processos, proporcionando redução de custos, menores impactos ambientais e incorporação da mais alta tecnologia disponível no mercado.</p>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </section>

        <!-- End Services Tabs ====
        ======================================= -->


        <!-- =====================================
        ==== Start Testimonails -->
        
        <div class="testimonails bg-img section-padding" data-overlay-dark="7" data-background="img/3.jpg">
            <div class="container">
                <div class="row">

                    <div class="offset-lg-1 col-lg-10 text-center over">

                        <div class="owl-carousel owl-theme">
                            <div class="citem">
                                <div class="client-img">
                                    <img src="img/team/1.jpg" alt="">
                                </div>
                                <h5>Leandro Beltrão</h5>
                                <h6>FarmaUsa</h6>
                                <p>A VEGAS é uma empresa que procura sempre compreender as necessidades de seu cliente, disponibilizando profissionais qualificados que sempre se colocam na posição do cliente para solucionar os problemas e aprender com o cliente.</p>
                            </div>
                            <div class="citem">
                                <div class="client-img">
                                    <img src="img/team/2.jpg" alt="">
                                </div>
                                <h5>Patrícia Rodrigues</h5>
                                <h6>Vincol Pneus</h6>
                                <p>LA VINCOL quando iniciou seus trabalhos com a VEGAS buscou e alcançou uma relação de parceria entre as empresas em que ambas fossem parte de uma equipe para atingir objetivos comuns com eficiência e qualidade, onde os méritos nos resultados alcançados não seria virtude de apenas uma empresa.</p>
                            </div>
                            <div class="citem">
                                <div class="client-img">
                                    <img src="img/team/3.jpg" alt="">
                                </div>
                                <h5>Rodrigo Marins Araújo</h5>
                                <h6>Impactante Comunicação Visual</h6>
                                <p>Minha experiência com relação a VEGAS é ótima. Aproveito para agradecer o departamento de assistência técnica que sempre me atende com muita rapidez e eficiência e auxiliando o meus colaboradores sempre que necessário.</p>
                            </div>
                            <div class="citem">
                                <div class="client-img">
                                    <img src="img/team/3.jpg" alt="">
                                </div>
                                <h5>Cesar Ghirlinzone da Rocha Junior</h5>
                                <h6>Grupo Lanlimp</h6>
                                <p>A VEGAS é uma empresa parceira há vários anos, sempre nos atendendo com agilidade e entrega imediata, negociação clara, aberta e objetiva e financeiro flexível. É uma empresa pela qual prezamos muito em ser de longo prazo.</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- End Testimonails ====
        ======================================= -->

    	<!-- =====================================
    	==== Start Clients -->
    	<div class="clients bg-gray text-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="brand">
                            <img src="" alt="">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="brand">
                            <img src="img/clients-logo/1.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="brand">
                            <img src="img/clients-logo/2.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="brand">
                            <img src="img/clients-logo/3.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="brand">
                            <img src="img/clients-logo/4.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="brand">
                            <img src="" alt="">
                        </div>
                    </div>

                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    	<!-- End Clients ====
    	======================================= -->


        <!-- =====================================
        ==== Start Contact -->
        <section class="contact" data-scroll-index="6">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3686.1412117808795!2d-44.09566927439643!3d-22.49888443794923!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9ebd5381d23c03%3A0x608a72599d6c7881!2sAv.%20N.%20Sra.%20do%20Amparo%2C%2099%20-%20Niter%C3%B3i%2C%20Volta%20Redonda%20-%20RJ%2C%2027283-370!5e0!3m2!1spt-BR!2sbr!4v1656882601652!5m2!1spt-BR!2sbr" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="col-lg-6 contact-form">
                        <form class="form" id="form" method="post" action="conexao.php">

                            <div class="messages"></div>

                            <div class="controls">

                                <div class="row">

                                    <div class="section-head col-sm-12">
                                        <h4>
                                            <span>Entre em</span><br>
                                            Contato
                                        </h4>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group" >
                                            <input id="username" type="text" name="name" placeholder="Nome" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input id="form_email" type="email" name="email" placeholder="Email" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                
                                            <select id="assunto" name="assunto" required>
                                                <option selected disabled value="">Selecione</option>
                                                <option value="financeiro">financeiro</option>
                                                <option value="cancelamento">cancelamento</option>
                                                <option value="orcamento">orçamento</option>
                                                <option value="trabalhe conosco ">trabalhe conosco </option>
                                                <option value="sugestão/ reclamação / elogio">sugestão/ reclamação / elogio</option>                                       
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea id="form_message" name="message" placeholder="Mensagem" rows="4" required></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-12 text-center">
                                        <button type="submit" name="AddMsgCont"><span>Enviar</span></button>
                                    </div>

                                </div>                             
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Contact ====
        ======================================= -->


        <!-- =====================================
        ==== Information -->
        <section class="information bg-img" data-overlay-dark="9" data-background="img/3.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="info">
                            <div class="item">
                                <span class="icon"><i class="icofont icofont-phone"></i></span>
                                <div class="cont">
                                    <h6>Telefone: </h6>
                                    <p>0800 0522 555</p>
                                </div>
                            </div>
                        </div>

                        <div class="info">
                            <div class="item">                            
                                <div class="cont">
                                    <div class="social">
                                       <h4>  <a href="#0"><i class="icofont icofont-social-facebook"></i></a>
                                        <a href="#0"><i class="icofont icofont-social-twitter"></i></a>
                                        <a href="#0"><i class="icofont icofont-social-instagram"></i></a>
                                        <a href="#0"><i class="icofont icofont-brand-linkedin"></i></a> </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="info">
                            <div class="item">
                                <span class="icon"><i class="icofont icofont-map"></i></span>
                                <div class="cont">
                                    <h6>Filial Volta Redonda: </h6>
                                    <p>Av. Nossa Senhora do Amparo<br/>
                                        Nº 99<br/>Niterói<br/>Volta Redonda/RJ</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="info">
                            <div class="item">
                                <span class="icon"><i class="icofont icofont-map"></i></span>
                                <div class="cont">
                                    <h6>Filial Rio de Janeiro: </h6>
                                    <p>Av. Embaixador Abelardo Bueno, 
                                        <br/>Nº 1 - Sala 207 D<br/>Edifício Lagoa 1<br/>
                                        Dimension Office Park<br/>
                                        Barra da Tijuca<br/>Rio de Janeiro/RJ</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- Information ====
        ======================================= -->


    	<!-- =====================================
    	==== Start Footer -->
    	<footer class="text-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="info">
                            <div class="item">
                                <!-- Logo -->
                                <a class="logo" href="#">
                                    <img src="img/logo-light.png" alt="logo">          
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="info">
                            <div class="item">
                                <!-- Logo -->
                                <a class="logo02" >
                                    <img src="img/pflogo.png">          
                                </a>
                                <p>Consulte <a href="https://servicos.dpf.gov.br/pgdwebcertificado/public/pages/empresa/consultarSituacaoEmpresa.jsf">Aqui!</a> Empresas legalizadas pela PF</p>
                
                            </div>
                        </div>
                    </div>
                </div>
            
                <p>&copy; 2022. Todos os direitos reservados.</p>

                <p>CNPJ: 29.890.721/0001-04</p>

            </div>
        </footer>
    	<!-- End Footer ====
    	======================================= -->


        <div class="wc_whatsapp_app right">
            <a href="https://wa.me/552499999999" target="_blank" class="wc_whatsapp"></a>
        </div>

        <div class="wc_phone_app right">
            <a href="https://wa.me/552499999999" target="_blank" class="wc_phone"></a>
        </div>

         <div class="wc_seta_app right">
            <a href="#toposeta" target="_blank" class="wc_seta"></a>
            
        </div>


       
        <!-- jQuery -->
		<script src="js/jquery-3.0.0.min.js"></script>
		<script src="js/jquery-migrate-3.0.0.min.js"></script>

		<!-- popper.min -->
		<script src="js/popper.min.js"></script>

	  	<!-- bootstrap -->
		<script src="js/bootstrap.min.js"></script>

		<!-- scrollIt -->
		<script src="js/scrollIt.min.js"></script>

		<!-- animated.headline -->
		<script src="js/animated.headline.js"></script>

		<!-- jquery.waypoints.min -->
		<script src="js/jquery.waypoints.min.js"></script>

		<!-- jquery.counterup.min -->
		<script src="js/jquery.counterup.min.js"></script>

		<!-- owl carousel -->
		<script src="js/owl.carousel.min.js"></script>

		<!-- jquery.magnific-popup js -->
		<script src="js/jquery.magnific-popup.min.js"></script>

		<!-- stellar js -->
		<script src="js/jquery.stellar.min.js"></script>

      	<!-- isotope.pkgd.min js -->
      	<script src="js/isotope.pkgd.min.js"></script>

        <!-- YouTubePopUp.jquery -->
        <script src="js/YouTubePopUp.jquery.js"></script>

        <!-- particles.min js -->
        <script src="js/particles.min.js"></script>

        <!-- app js -->
        <script src="js/app.js"></script>

        <!-- Map -->
        <script src="js/map.js"></script>

      	<!-- validator js -->
      	<script src="js/validator.js"></script>

      	<!-- custom scripts -->
        <script src="js/scripts.js"></script>

        <!-- google map api -->
        <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBK7lXLHQgaGdP3IvMPi1ej0B9JHUbcqB0&amp;callback=initMap">
        </script>

<script
src="https://kit.fontawesome.com/f9e19193d6.js"
crossorigin="anonymous"
></script>

<script src="./scripts4.js"></script>

<script type="text/javascript">
    $(function() {
        $('#vidBox').VideoPopUp({
            backgroundColor: "#17212a",
            opener: "video1",
            idvideo: "v1",
            pausevideo: false
        });
    });
</script>

    </body>

<!-- Mirrored from www.innovationplans.com/idesign/bemax/particles.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Jul 2022 18:51:41 GMT -->
</html>
