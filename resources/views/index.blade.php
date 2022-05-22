@extends('layouts.base')
@section('title', 'Portfolio Leonardo Gomes')
@section('content')

<div class="btn-back_to_top">
    <span class="ti-arrow-up"></span>
</div>

<!-- Setting button -->
<div class="config">
    <div class="template-config">
        <!-- Settings -->
        <div class="d-block">
            <button class="btn btn-fab btn-sm" id="sideel" title="Settings"><span class="ti-settings"></span></button>
        </div>
        <!-- Puschase -->
        <div class="d-block">
            <a href="https://macodeid.com/projects/virtual-folio/" class="btn btn-fab btn-sm" title="Get this template"
                data-toggle="tooltip" data-placement="left"><span class="ti-download"></span></a>
        </div>
        <!-- Help -->
        <div class="d-block">
            <a href="#" class="btn btn-fab btn-sm" title="Help" data-toggle="tooltip" data-placement="left"><span
                    class="ti-help"></span></a>
        </div>
    </div>
</div>

<div class="vg-page page-home" id="home">
    <!-- Navbar -->
    <div class="navbar navbar-expand-lg navbar-dark sticky" data-offset="500">
        <div class="container">
            <button class="navbar-toggler" data-toggle="collapse" data-target="#main-navbar" aria-expanded="true">
                <span class="ti-menu"></span>
            </button>
            <div class="collapse navbar-collapse" id="main-navbar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a href="#home" class="nav-link" data-animate="scrolling">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#about" class="nav-link" data-animate="scrolling">Sobre Mim</a>
                    </li>
                    <li class="nav-item">
                        <a href="#skills" class="nav-link" data-animate="scrolling">Skills</a>
                    </li>
                    <li class="nav-item">
                        <a href="#portfolio" class="nav-link" data-animate="scrolling">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a href="#contact" class="nav-link" data-animate="scrolling">Contato</a>
                    </li>
                </ul>
                <ul class="nav ml-auto">
                </ul>
            </div>
        </div>
    </div> <!-- End Navbar -->
    <!-- Caption header -->
    <div class="caption-header text-center wow zoomInDown">
        <h5 class="fw-normal">Olá,</h5>
        <h1 class="fw-light mb-4">Me chamo <b class="fg-theme">Leonardo</b></h1>
        <div class="badge">Desenvolvedor Web</div>
    </div> <!-- End Caption header -->
</div>

<div class="vg-page page-about" id="about">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-4 py-3">
                <div class="img-place wow fadeInUp">
                    <img class="img_portf" src="/img/person.jpg" alt="">
                </div>
            </div>
            <div class="col-lg-6 offset-lg-1 wow fadeInRight">
                <h1 class="fw-light">Leonardo Gomes da Silva</h1>
                <h5 class="fg-theme mb-3">Desenvolvedor Web</h5>
                <h5 class="fg-theme mb-3"><b>Principal Stack:</b> Laravel</h5>
                <p class="text-muted">Meus objetivos são aplicar conhecimentos adquiridos focando sempre no trabalho em
                    equipe, melhoria
                    contínua, ganho de experiência e inovação</p>
                <ul class="theme-list">
                    <li><b>De:</b> Cruzeiro, São Paulo</li>
                    <li><b>Moro Atualmente:</b> Cruzeiro, São Paulo</li>
                    <li><b>Idade:</b>
                        <age id='actual-age'>22</age>
                    </li>
                    <li><b>Gênero:</b> Masculino</li>
                </ul>
                <a class="btn btn-primary" href="/cv/Curriculum vitae - Resumé - BR.pdf" target="_blank">Baixar
                    Currículo</a>
            </div>
        </div>
    </div>
    <div class="container py-5" id="skills">
        <h1 class="text-center fw-normal wow fadeIn">Skills</h1>
        <div class="row py-3">
            <div class="col-md-6">
                <div class="px-lg-3">
                    <h4 class="wow fadeInUp">Coding Skills</h4>
                    <div class="progress-wrapper wow fadeInUp">
                        <span class="caption">PHP</span>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="75"
                                aria-valuemin="0" aria-valuemax="100">80%</div>
                        </div>
                    </div>
                    <div class="progress-wrapper wow fadeInUp">
                        <span class="caption">JavaScript</span>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="75"
                                aria-valuemin="0" aria-valuemax="100">80%</div>
                        </div>
                    </div>
                    <div class="progress-wrapper wow fadeInUp">
                        <span class="caption">HTML + CSS</span>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75"
                                aria-valuemin="0" aria-valuemax="100">75%</div>
                        </div>
                    </div>
                    <div class="progress-wrapper wow fadeInUp">
                        <span class="caption">Phyton</span>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 55%;" aria-valuenow="75"
                                aria-valuemin="0" aria-valuemax="100">55%</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="px-lg-3">
                    <h4 class="wow fadeInUp">Sistemas Operacionais</h4>
                    <div class="progress-wrapper wow fadeInUp">
                        <span class="caption">Windows</span>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="75"
                                aria-valuemin="0" aria-valuemax="100">90%</div>
                        </div>
                    </div>
                    <div class="progress-wrapper wow fadeInUp">
                        <span class="caption">Unix</span>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 70%;" aria-valuenow="75"
                                aria-valuemin="0" aria-valuemax="100">70%</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container py-5">
        <div class="row py-3">
            <div class="col-md-6">
                <div class="px-lg-3">
                    <h4 class="wow fadeInUp">Framework</h4>
                    <div class="progress-wrapper wow fadeInUp">
                        <span class="caption">Laravel</span>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75"
                                aria-valuemin="0" aria-valuemax="100">75%</div>
                        </div>
                    </div>
                    <div class="progress-wrapper wow fadeInUp">
                        <span class="caption">NodeJs</span>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 55%;" aria-valuenow="75"
                                aria-valuemin="0" aria-valuemax="100">55%</div>
                        </div>
                    </div>
                    <div class="progress-wrapper wow fadeInUp">
                        <span class="caption">Flask</span>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 35%;" aria-valuenow="75"
                                aria-valuemin="0" aria-valuemax="100">35%</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="px-lg-3">
                    <h4 class="wow fadeInUp">Idiomas</h4>
                    <div class="progress-wrapper wow fadeInUp">
                        <span class="caption">Português</span>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="75"
                                aria-valuemin="0" aria-valuemax="100">Nativo</div>
                        </div>
                    </div>
                    <div class="progress-wrapper wow fadeInUp">
                        <span class="caption">Inglês</span>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75"
                                aria-valuemin="0" aria-valuemax="100">Avançado</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container pt-5">
        <div class="row">
            <div class="col-md-6 wow fadeInRight">
                <h2 class="fw-normal">Formação Academica</h2>
                <ul class="timeline mt-4 pr-md-5">
                    <li>
                        <div class="title">2022 - Atual</div>
                        <div class="details">
                            <h5>Pós-graduação - Segurança da Informação</h5>
                            <small class="fg-theme">SENAC</small>
                        </div>
                    </li>
                    <li>
                        <div class="title">2018-2021</div>
                        <div class="details">
                            <h5>Análise e Desenvolvimento de Sistemas</h5>
                            <small class="fg-theme">Fatec Cruzeiro - Prof. Waldomiro May</small>
                        </div>
                    </li>
                    <li>
                        <div class="title">2015-2017</div>
                        <div class="details">
                            <h5>Tecnico em Tecnologia da Informação</h5>
                            <small class="fg-theme">Etec Cruzeiro - Prof. José Sant’Ana de Castro em Cruzeiro</small>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-md-6 wow fadeInRight" data-wow-delay="200ms">
                <h2 class="fw-normal">Experiência</h2>
                <ul class="timeline mt-4 pr-md-5">
                    <li>
                        <div class="title">2021/06 - 2022/05</div>
                        <div class="details">
                            <h5>Software Engineer</h5>
                            <small class="fg-theme">Vexpenses</small>
                            <p>Trabalhei como desenvolvedor back-end utilizando o framework Laravel para uma startup,
                                cujo o objetivo era facilitar o reembolso
                                que as empresas forneciam para os funcionários
                                em algumas atividades como viagens, alimentação entre outros.
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="title">2020/08 - 2021/05</div>
                        <div class="details">
                            <h5>Programador Full Stack e Suporte</h5>
                            <small class="fg-theme">Phooto Brasil</small>
                            <p>Atuei utilizando o Laravel Framework e Javascript como Programador Júnior trazendo
                                melhorias e correções de bugs no sistema.</p>
                            <br>
                            <p>Atuei como parte da equipe de suporte usando Zendesk, onde trazia a melhor solução para
                                um problema que ocorre dentro do sistema em relação a pedidos e relatórios de E-Commerce
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="title">2020/03 - 2020/06</div>
                        <div class="details">
                            <h5>Programador Full Stack (Estagiário)</h5>
                            <small class="fg-theme">GetInstall</small>
                            <p>Trabalhei como estagiário atuando como desenvolvedor Full Stack usando o framework Flask,
                                Bootstrap e Javascript em um projeto sobre economia de energia dentro de empresas.</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="vg-page page-funfact">
    <div class="container">

    </div>
</div>

<!-- Portfolio page -->
<div class="vg-page page-portfolio" id="portfolio">
    <div class="container">
        <div class="text-center wow fadeInUp">
            <div class="badge badge-subhead">Portfolio</div>
        </div>
        <h1 class="text-center fw-normal wow fadeInUp">Meus Projetos</h1>

        <div class="gridder my-3">
            <a href="https://github.com/LeonardoGomes99/laravel-8-apache-mysql" target="_blank">
                <div class="grid-item apps wow zoomIn">
                    <div class="img-place" data-src="/img/work/work-1.jpg" data-fancybox
                        data-caption="<h5 class='fg-theme'></h5> <p></p>">
                        <img src="/img/work/docker-laravel.png" alt="">
                        <div class="img-caption">
                            <h5 class="fg-theme">Docker With Php,Apache2,Mysql</h5>
                        </div>
                    </div>
                </div>
            </a>
            <a href="https://github.com/LeonardoGomes99/Agenda-VExpenses" target="_blank">
                <div class="grid-item template wireframes wow zoomIn">
                    <div class="img-place" data-src="/img/work/agendaVex.png" data-fancybox
                        data-caption="<h5 class='fg-theme'></h5> <p></p>">
                        <img src="/img/work/agendaVex.png" alt="">
                        <div class="img-caption">
                            <h5 class="fg-theme">Agenda de Contato Criado em Laravel</h5>
                        </div>
                    </div>
                </div>
            </a>
            <a href="https://github.com/LeonardoGomes99/NVPC-test-graphQL-laravel" target="_blank">
            <div class="grid-item apps ios wow zoomIn">
                <div class="img-place" data-src="/img/work/GithubApi.png" data-fancybox
                    data-caption="<h5 class='fg-theme'></h5> <p></p>">
                    <img src="/img/work/GithubApi.png" alt="">
                    <div class="img-caption">
                        <h5 class="fg-theme">Github Api Laravel</h5>
                    </div>
                </div>
            </div>
            <a href="https://github.com/LeonardoGomes99/PedraPapelTesoura" target="_blank">
            <div class="grid-item graphic ui-ux wow zoomIn">
                <div class="img-place" data-src="/img/work/pedra-papel-tesoura-lagarto-spock.png" data-fancybox
                    data-caption="<h5 class='fg-theme'></h5> <p></p>">
                    <img src="/img/work/pedra-papel-tesoura-lagarto-spock.png" alt="">
                    <div class="img-caption">
                        <h5 class="fg-theme">Pedra, Papel, Tesoura, Lagarto e Spock(PHP)</h5>
                    </div>
                </div>
            </div>
            </a>
            <a href="https://github.com/LeonardoGomes99/VueJS-estudo" target="_blank">
            <div class="grid-item apps ios wow zoomIn">
                <div class="img-place" data-src="/img/work/bitcoin-vuejs.png" data-fancybox
                    data-caption="<h5 class='fg-theme'>Musics Discover</h5> <p>Musics, Dashboard</p>">
                    <img src="/img/work/bitcoin-vuejs.png" alt="">
                    <div class="img-caption">
                        <h5 class="fg-theme">Aplicação Simples VueJS - Valor Bitcoin</h5>
                    </div>
                </div>
            </div>
            </a>
            <!-- <div class="grid-item graphic ui-ux wireframes wow zoomIn">
                <div class="img-place" data-src="/img/work/work-6.jpg" data-fancybox
                    data-caption="<h5 class='fg-theme'>Game Streaming</h5> <p>Games, Streaming</p>">
                    <img src="/img/work/work-6.jpg" alt="">
                    <div class="img-caption">
                        <h5 class="fg-theme">Game Streaming</h5>
                        <p>Games, Streaming</p>
                    </div>
                </div>
            </div> -->
        </div> <!-- End gridder -->
        <!-- <div class="text-center wow fadeInUp">
            <a href="javascript:void(0)" class="btn btn-theme">Load More</a>
        </div> -->
    </div>
</div> <!-- End Portfolio page -->


<!-- Footer -->
<div class="vg-footer" id="contact">
    <h1 class="text-center">Portfolio Leonardo Gomes</h1>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-3 py-3">
                <div class="float-lg-right">
                    <p>Entre em Contato</p>
                    <hr class="divider">
                    <ul class="list-unstyled">
                        <li>Leogomes16477@gmail.com</li>
                        <li>Celular/WhatsApp</li>
                        <li>(12) 987081018</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 py-3">
                <div class="float-lg-right">
                    <p>Meu Linkedin</p>
                    <hr class="divider">
                    <ul class="list-unstyled">
                        <li><a href="https://www.linkedin.com/in/leonardo-gomes-63a2b717b/">Linkedin</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-3">
            <div class="col-12 mb-3">
            </div>
            <div class="col-lg-6">

            </div>
            <div class="col-12">
                <p class="text-center mb-0 mt-4">Copyright &copy;2020. All right reserved | This template is made with
                    <span class="ti-heart fg-theme-red"></span> by <a href="https://www.macodeid.com/">MACode ID</a></p>
            </div>
        </div>
    </div>
</div> <!-- End footer -->
@stop
