@extends('layouts.app_dois')

@section('content')

<div id="my-carousel" class="slide hero-slide hidden-xs" data-ride="carousel">
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <img src="{{ asset('../../../../style/img/hero-1.jpg') }}" alt="Hero Slide">

            <div class="carousel-caption">
                <h1>Chegue lá</h1>
            </div>
        </div>
    </div>
</div>
<!-- #my-carousel-->

<section class="section-content-left-icon">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="left-icon-wraper">
                    <div class="icon">
                        <i class="flaticon-tags"></i>
                    </div>
                    
                    <div class="content">
                    <h2>Fácil de pesquisar</h2>
                    <p>Basta pesquisar no app ou aqui no site uma condução para sua viagem.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="left-icon-wraper">
                <div class="icon"><i class="flaticon-ranking"></i></div>
                
                <div class="content">
                    <h2>Você avalia</h2>
                    <p>Avalie o seu motorista e forneça informações sobre a sua viagem. A sua contribuição ajuda a tornar melhor cada viagem.</p>
                </div>
                    
                </div>
            </div>
            <div class="col-md-4">
                <div class="left-icon-wraper">
                <div class="icon"><i class="flaticon-monitoring"></i></div>

                <div class="content">
                     <h2>A sua segurança</h2>
                     <p>É importante para nós, antes, durante e depois de cada viagem. Por isso, continuamos a responsabilidade de tornar as viagens mais seguras todos os dias.</p>
                </div>
                   
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="left-icon-wraper">
                <div class="icon"><i class="flaticon-blogging"></i></div>

                 <div class="content">
                    <h2>Qualidade</h2>
                    <p>Você verá as informações de contato do motorista e os detalhes do veículo, assim você encontrará mais facilmente o veículo correto.</p>
                 </div>
                    
                </div>
            </div>
            <div class="col-md-4">
                <div class="left-icon-wraper">
                <div class="icon"><i class="flaticon-social-media"></i></div>

                 <div class="content">
                    <h2>Localização</h2>
                    <p>Você poderá localizar o veículo apartir do seu ponto no app. Você encontrará mais facilmente o veículo. </p>
                 </div>
                    
                </div>
            </div>
            <div class="col-md-4">
                <div class="left-icon-wraper">
                <div class="icon"><i class="flaticon-viral-marketing"></i></div>

                <div class="content">
                    <h2>Pagamento</h2>
                    <p>Quando você chegar ao destino, o pagamento é realizado diretamente com motorista.</p>
                </div>
                   
                </div>
            </div>
        </div>
    </div>
    <!-- .container -->
</section>
<!-- /.services-left-icon -->

<div id="my-carousel" class="slide hero-slide hidden-xs" data-ride="carousel">
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <img src="{{ asset('../../../../style/img/hero-2.jpg') }}" alt="Hero Slide">

            <div class="carousel-caption">
                <h1>Ajuda você a encontrar <br> mais rápido</h1>
            </div>
        </div>
    </div>
</div>

<!-- <section class="testimonial">
    <div class="container">
        <div id="testimonialSlider" class="carousel slide" data-ride="carousel">
             Indicators
            <ol class="carousel-indicators">
                <li data-target="#testimonialSlider" data-slide-to="0" class="active"></li>
                <li data-target="#testimonialSlider" data-slide-to="1"></li>
                <li data-target="#testimonialSlider" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <blockquote>
                    
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum egetvel lacus
                            pretium rhoncus a quis nisly Ut vehicula gravida dui in pulvinar donec diam elit
                            consequat eget augue vitae aliquet sollicitudin.
                        </p>

                        <ul class="user-details">
                            <li class="avatar"><img src="{{ asset('../../../../style/img/img-testimonial-1.jpg') }}" class="img-responsive" alt=""/></li>
                            <li class="name">Justus Kühn</li>
                            <li class="company">uiCookies</li>
                        </ul>

                    </blockquote>
                </div>
                <div class="item">
                    <blockquote>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum egetvel lacus
                            pretium rhoncus a quis nisly Ut vehicula gravida dui in pulvinar donec diam elit
                            consequat eget augue vitae aliquet sollicitudin.
                        </p>
                         <ul class="user-details">
                            <li class="avatar"><img src="{{ asset('../../../../style/img/img-testimonial-2.jpg') }}" class="img-responsive" alt=""/></li>
                            <li class="name">Lennox Arnold</li>
                            <li class="company">uiCookies</li>
                        </ul>

                    </blockquote>
                </div>
                <div class="item">
                    <blockquote>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum egetvel lacus
                            pretium rhoncus a quis nisly Ut vehicula gravida dui in pulvinar donec diam elit
                            consequat eget augue vitae aliquet sollicitudin.
                        </p>
                         <ul class="user-details">
                            <li class="avatar"><img src="{{ asset('../../../../style/img/img-testimonial-3.jpg') }}" class="img-responsive" alt=""/></li>
                            <li class="name">Paulina Berger</li>
                            <li class="company">uiCookies</li>
                        </ul>

                    </blockquote>
                </div>
            </div>
        </div>
         #testimonialSlider
    </div>
</section>
/.testimonial -->

<br><br><br><section class="featured-box">
    <div class="container">
        <div class="row">
        <div class="col-md-12">
            <div class="featured-content-wrapper">
            <div class="featured-img">
                <img class="img-responsive" src="{{ asset('../../../../style/img/hero-3.jpg') }}" alt="">
            </div>
            <div class="featured-content">
                <h1>App</h1>
                <p>
                <div class="margin-text">
                    O app está sendo lançado. 
                    <br> Facilitando comunicação e navegação para chegar  
                    <br> ao seu destino de forma mais rápida e mais fácil.
                </p>
                <a href="" class="btn btn-default btn-lg">Confira</a>
                </div>
            </div>
            </div>
            </div>
        </div>
    </div>
</section>
<!-- /.featured-box -->

@section('footer')

<footer class="footer">
    <!-- Footer Widget Section -->
    <div class="footer-widget-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-logo">
                        <a href="#"><img class="img-responsive" src="{{ asset('../../../../style/img/logo-footer.png') }}" alt=""></a>
                    </div>
                </div><!-- /.col-sm-4 -->

                <br><div class="col-md-8">
                    <div class="footer-text">
                      <p>Facilitando os serviços de transporte com qualidade, segurança e comprometimento dos motoristas.</p>
                    </div>
                </div><!-- /.col-sm-4 -->
            </div>
        </div>
    </div><!-- /.Footer Widget Section -->

    <div class="copyright-section">
        <div class="container clearfix">
             <span class="copytext">Copyright &copy; 2017 | Collective Transportation By: <strong style="color:#4d6de3">Freelancer</strong></span>

            <ul class="list-inline pull-right">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">Contato</a></li>
                <li><a href="#">Entrar</a></li>
            </ul>
        </div><!-- .container -->

    </div><!-- .copyright-section -->
</footer>
<!-- .footer -->

        @endsection
        </div

@endsection