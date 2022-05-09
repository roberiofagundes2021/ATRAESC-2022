<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ATRAESC - Associação de Trânsito do Estado de Santa Catarina</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Oswald:wght@400;500;600&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Oswald:wght@400;500;600&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
      
    <!-- Topbar Start -->
    <div class="container-fluid bg-dark py-3">
        <div class="container">
            @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Acessar</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Cadastrar</a>
                    @endif
                @endauth
            </div>
        @endif
            <div class="row">
                
                <div class="col-md-6 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-white px-3" href="https://www.facebook.com/atraesc/">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-white px-3" href="https://www.instagram.com/atraesc/">
                            <i class="fab fa-instagram"></i>
                        </a>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="container position-relative" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-secondary navbar-dark py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="" class="navbar-brand">
                    <h1 class="m-0 display-5 text-white"><span class="text-primary"></span>ATRAESC</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="#home" class="nav-item nav-link active">Dashboard</a>
                        <a href="#historia" class="nav-item nav-link">Sobre</a>
                        <a href="#quem_pode" class="nav-item nav-link">Quem pode associar</a>
                        <a href="#header3-i" class="nav-item nav-link">Beneficios</a>
                        <a href="#servico" class="nav-item nav-link">Serviços</a>
                        <a href="#form1-j" class="nav-item nav-link">Contato</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Under Nav Start -->
    <div class="container-fluid bg-white py-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 text-left mb-3 mb-lg-0">
                    <div class="d-inline-flex text-left">
                        <h1 class="flaticon-office font-weight-normal text-primary m-0 mr-3"></h1>
                        <div class="d-flex flex-column">
                            <h5>Endereço</h5>
                            <p class="m-0">R. Itaipú, 140 - Itacorubi
                                R. Itaipú, 140 - Itacorubi, Florianópolis - SC, 88034-540</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 text-left text-lg-center mb-3 mb-lg-0">
                    <div class="d-inline-flex text-left">
                        <h1 class="flaticon-email font-weight-normal text-primary m-0 mr-3"></h1>
                        <div class="d-flex flex-column">
                            <h5>Email </h5>
                            <p class="m-0">contato@atraesc.com.br</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 text-left text-lg-right mb-3 mb-lg-0">
                    <div class="d-inline-flex text-left">
                        <h1 class="flaticon-telephone font-weight-normal text-primary m-0 mr-3"></h1>
                        <div class="d-flex flex-column">
                            <h5>Telefone</h5>
                            <p class="m-0">(48) 4009-2919</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Under Nav End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0" id="home">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 800px;">
                           
                            <h3 class="display-3 text-white mb-md-4">Associação de Trânsito do Estado de Santa Catarina</h3>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2 mt-md-4">Sobre </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 800px;">
                            <h3 class="display-3 text-white mb-md-4">Associação de Trânsito do Estado de Santa Catarina</h3>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2 mt-md-4">Sobre</a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-primary" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n2"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-primary" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n2"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-fluid bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="d-flex flex-column align-items-center justify-content-center bg-primary h-100 py-5 px-3">
                        <i class="flaticon-brickwall display-1 font-weight-normal text-secondary mb-3"></i>
                        
                        <h1 class="m-0" id="nossa_historia">NOSSA HISTÓRIA</h1><br>
                        
                        <img class="w-100" src="img/nossa_historia.jpeg" alt="Image">
                    </div>
                </div>
                <div class="col-lg-7 m-0 my-lg-5 pt-5 pb-5 pb-lg-2 pl-lg-5" id="historia">
                    <h6 class="text-primary font-weight-normal text-uppercase mb-3">Nossa História</h6>
                    <h1 class="mb-4 section-title">A Associação de Trânsito do Estado de Santa Catarina – ATRAESC, é a maior entidade empresarial representativa de classe do estado, foi fundada em agosto de 2013, tendo sua origem diante da necessidade dos empresários ligados aos diversos ramos de atividades empresariais credenciados ao Departamento de Trânsito do Estado de Santa Catarina - DETRAN/SC, de terem uma assessoria adequada aos desafios enfrentados diante das adversidades sofridas no dia a dia, seja pela legislação em constante atualização ou por regras implementadas pelas entidades regulamentadoras como CONTRAN e DENATRAN, trazendo assim soluções correlatas às atividades empresariais no intuito de lutar pelo direito dos seus associados.

                        A ATRAESC, no transcorrer de sua trajetória de 5 anos já garantiu inúmeras vitórias as seus associados, no âmbito jurídico e político, garantiu inclusive a continuidade dos serviços dos Centros de Formação de Condutores e dos Fabricantes de Placas que no passado tiveram suas atividades interrompidas.</p>
                    <div class="row py-2">
                       
                     
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Services Start -->
    <div class="container-fluid py-5" id="quem">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6 pr-lg-5">
                    
                    <h1 class="mb-4 section-title">MISSÃO</h1>
                    <p>Temos como missão ser uma entidade centro de reflexões, debates e sugestões para as questões do trânsito terrestre no Estado de Santa Catarina, em especial àquelas próprias da competência dos órgãos e entidades executivos de trânsito, com atuação intensa e permanente via Assembleia Legislativa, com incansáveis esforços para a difusão do conhecimento, experiências e serviços, bem como suas necessidades para uma efetiva reivindicando via Governo Estadual, sempre com o objetivo máximo de possibilitar ao cidadão o exercício do direito ao trânsito em condições seguras, com prioridade das ações para a defesa da vida, a preservação da saúde e do meio-ambiente.</p>
                    <a href="" class="btn btn-primary mt-3 py-2 px-4">Leia mais</a>
                </div>
                
                <div class="col-lg-6 pr-lg-5">
                    
                    <h1 class="mb-4 section-title">VISÃO</h1>
                    <p>
                        VISÃO
                        
                        Com o entendimento da falta de Entidade Representativa entre todas as Categorias voltadas a área de Trânsito no Estado de Santa Catarina. No intuito de dar um efetivo apoio aos empresários ligados a área, de contribuir para as atividades relativas ao trânsito, e buscando uma unificação para êxito dos pleitos da classe é que se criou a ATRAESC - Associação de Trânsito do Estado de Santa Catarina.
                        
                        
                        
                        Presidente: Yomara Julita Ribeiro
                        </p>
                    <a href="" class="btn btn-primary mt-3 py-2 px-4">Leia mais</a>
                </div>
                
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->
    

    <!-- Features Start -->
    <div class="container-fluid bg-light" id="quem_pode">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 mt-5 py-5 pr-lg-5">
                   
                    <h1 class="mb-4 section-title">QUEM PODE SE ASSOCIAR</h1>
                    <p class="mb-4"> A ATRAESC É ENTIDADE REPRESENTATIVA DE CLASSE DIVIDIDA EM NÚCLEOS EMPRESARIAIS.

                        Podendo se associar a ela qualquer empresa ou empresário cujo ramo de atividade esteja vinculado ao DETRAN/SC por meio de credenciamento, sendo as principais Categorias:</p>
                </div>
            </div>
        </div>
    </div>
   
        
    </div>
    
     
    
    
   
    <!-- Team End -->


   
    <!-- Testimonial End -->


    <!-- Blog Start -->
    <div class="container-fluid bg-light pt-5" id="servico">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col text-center mb-4">
                    
                    <h1 class="mb-4">Serviços</h1>
                </div>
            </div>
            <div class="row pb-3">
                <div class="col-md-4 mb-4">
                    <div class="card border-0 mb-2">
                        
                        <div class="card-body bg-white p-4">
                            <div class="d-flex align-items-center mb-3">
                                <a class="btn btn-primary" href=""><i class="fa fa-link"></i></a>
                                
                            </div>
                            
                            <div class="d-flex">
                                <img class="w-100" src="img/centro-formacao-condutor.jpg" alt="Image">
                                
                            </div>
                            <p>Centro de Formação de Condutores</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card border-0 mb-2">
                        <img class="card-img-top" src="img/Fabricantes-Estampadores-Placas.jpg" alt="">
                        <div class="card-body bg-white p-4">
                            <div class="d-flex align-items-center mb-3">
                                <a class="btn btn-primary" href=""><i class="fa fa-link"></i></a>
                            </div>
                            <p>Fabricantes e Estampadores de Placas</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card border-0 mb-2">
                        <img class="card-img-top" src="img/Despachantes.jpeg" alt="">
                        <div class="card-body bg-white p-4">
                            <div class="d-flex align-items-center mb-3">
                                <a class="btn btn-primary" href=""><i class="fa fa-link"></i></a>
                            </div>
                            <p>Despachantes</p>  
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 mb-4">
                    <div class="card border-0 mb-2">
                        <img class="card-img-top" src="img/Vistorias.jpg" alt="">
                        <div class="card-body bg-white p-4">
                            <div class="d-flex align-items-center mb-3">
                                <a class="btn btn-primary" href=""><i class="fa fa-link"></i></a>
                            </div>
                            <p>Vistorias</p>               
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->
    <section class="cid-roYKj6dmkE" id="title01-f">

        <div class="container align-center">
            <div class="row justify-content-md-start justify-content-md-center">
                <div class="mbr-white col-sm-12 col-md-10 col-lg-7">
                    <h1 class="mbr-section-title mbr-regular align-left mbr-fonts-style display-5">Venha fazer parte da família ATRAESC!!!</h1>
                    
                    
                    <div class="align-center mbr-section-btn"><a class="btn btn-md btn-danger display-4" href="#form1-j">ENTRE EM CONTATO</a></div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="header3 cid-roYNU2E5Vw" id="header3-i">
        <div class="container">
            <div class="media-container-row">
                <div class="mbr-figure" style="width: 100%;">
                    
                </div>
    
                <div class="media-content">
                    <h1 class="mbr-section-title mbr-white pb-3 mbr-fonts-style display-5">BENEFÍCIOS EXCLUSIVOS AOS ASSOCIADOS ATRAESC</h1>
                    
                    <div class="mbr-section-text mbr-white pb-3 ">
                        <p class="mbr-text mbr-fonts-style display-7">• &nbsp;Disponibilização de dois Veículos Adaptados para atender alunos de Centro de Formação de Condutores portadores de necessidades especiais, disponibilizados sem custos adicionais aos associados.
    <br>• &nbsp;Disponibilização de motocicleta de 50 cilindradas para aulas na categoria ACC, disponibilizados sem custos adicionais aos associados.;
    <br>• &nbsp;Assessoria direta junto ao DETRAN na Capital, seja no setor de protocolos ou renovação de alvarás;
    <br>• &nbsp;Assessoria para desbloqueio de sistema DETRAN NET .
    <br>• Disponibilização de material atualizado aos associados sobre a legislação vigente;
    <br>• &nbsp;Reuniões trimestrais para orientação e informação de politicas da Associação ;
    <br>• &nbsp;Consultoria jurídica especializada, com o DR. RICARDO GASPAR DA SILVA, OAB/SC 18.283, advogado com mais de 18 anos de experiência na área, para questões ligadas a Corregedoria do DETRAN, DENATRAN e CONTRAN. Trazendo dentre outros benefícios, Ações Coletivas e Individuais, Mandados de Segurança, etc.</p>
                    </div>
                    
                </div>
            </div>
        </div>
    
    </section>
    
    <section class="cid-roYQrbgxa7" id="form1-j">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="main-heading-content text-center" id="contato">
                        <h2 class="mbr-fonts-style mbr-section-title align-center display-2">
                            CONTATO</h2>
                        <div class="underline align-center">
                           <div class="line"></div>
                        </div>
                        <h3 class="mbr-fonts-style mbr-section-subtitle align-center mbr-light pt-3 display-7">Para mandar a sua mensagem favor preencher todos os campos abaixo ou se preferir enviar para: <strong>contato@atraesc.com.br</strong><br><strong><br>(48) 4009-2919</strong><br>Rua Itaipú, nº.: 140, Itacorubi, Florianópolis/SC, CEP 88034-540</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6" data-form-type="formoid">            
                    <div data-form-alert="" hidden="">Mensagem enviada...Obrigado!</div>
                    <form class="mbr-form" action="https://mobirise.com/" method="post" data-form-title="Contato do Site"><input type="hidden" name="email" data-form-email="true" value="DD9dGAj5+c/dMPulZUTJzebEtxR6sGhbVggLdNDou65ThTsBMWmtWxsUMv11z2DfPhqwTYc58xB5fg6vQzOFs9NSmnCU+1fCW0dwS54F4KOUKWdedl9uTOk4R1DVl5MO">
                        <div class="row row-sm-offset" id="contato">
                            <div class="col-md-12 multi-horizontal" data-for="nome">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="nome" placeholder="Nome" data-form-field="Nome" required="" id="nome-form1-j">
                                </div>
                            </div>
                            <div class="col-md-12 multi-horizontal" data-for="email">
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" placeholder="Email" data-form-field="Email" required="" id="email-form1-j">
                                </div>
                            </div>
                            <div class="col-md-12 multi-horizontal" data-for="Telefone">
                                <div class="form-group">
                                    <input type="tel" class="form-control" name="telefone" placeholder="Telefone" data-form-field="Telefone" id="telefone-form1-j">
                                </div>
                            </div>
                        </div>
                        <div class="form-group" data-for="mensagem">
                            <textarea type="text" class="form-control" name="mensagem" rows="7" placeholder="Mensagem" data-form-field="Mensagem" id="mensagem-form1-j"></textarea>
                        </div>
                        <span class="input-group-btn"><button href="" type="submit" class="btn btn-form btn-black display-4">ENVIAR</button></span>
                    </form>
                </div>
                <div class="col-md-6">
                <!--    <div class="google-map"><iframe frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAEIpgj38KyLFELm2bK9Y7krBkz1K-cMq8&amp;q=place_id:ChIJnRpzQvI4J5UR9FhKVQKO14E" allowfullscreen=""></iframe></div> -->
    
    
            <div class="google-map"><iframe frameborder="0" style="border:0" src="https://maps.google.com/maps?q=Rua%20Itaip%C3%BA%2C%20n%C2%BA.%3A%20140%2C%20Itacorubi%2C%20Florian%C3%B3polis%2FSC%2C%20CEP%2088034-540&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div>
    
                </div>
            </div>
       </div>
    </section>
    
    <section class="features6 cid-roYScao1K4" id="features06-m">
    
        <div class="container align-center">
            <div class="row justify-content-center">
                <div class="mbr-white col-lg-6 col-md-8">
                    <h1 class="mbr-section-title mbr-normal align-left mbr-white my-4 mbr-fonts-style display-7"><br></h1>
                    
                    
                </div>
            </div>
        </div>
        
        


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white py-5 px-sm-3 px-md-5">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5" >
                <h4 class="text-primary mb-4">Entrar em contato
                </h4>
                <p><i class="fa fa-map-marker-alt mr-2"></i>R. Itaipú, 140 - Itacorubi R. Itaipú, 140 - Itacorubi, Florianópolis - SC, 88034-540</p>
                <p><i class="fa fa-phone-alt mr-2"></i>(48) 4009-2919</p>
                <p><i class="fa fa-envelope mr-2"></i>contato@atraesc.com.br</p>
                <div class="d-flex justify-content-start mt-4">
                    
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-facebook-f"></i></a>
                    
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
           
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-primary mb-4">Links Rápidos</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white mb-2" href="#contato"><i class="fa fa-angle-right mr-2"></i>Home</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>sobre</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Quem pode associar</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Beneficios</a>
                    <a class="text-white" href="#"><i class="fa fa-angle-right mr-2"></i>Contatos</a>
                </div>
            </div>
          
        </div>
        <div class="container border-top border-secondary pt-5">
            <p class="m-0 text-center text-white">
                &copy; <a class="text-white font-weight-bold" href="#">ATRAESC</a> Sistema desenvolvido por Robério Fagundes dos Santos
                <a class="text-white font-weight-bold" href="https://htmlcodex.com">Endereço de email:roberiopma@hotmail.com</a>
            </p>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>