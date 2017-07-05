@extends('layouts.app_dois')

@section('content')

<section class="single-page-title single-page-title-contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Contato</h2>
            </div>
        </div>
    </div>
</section>
<!-- .page-title -->
<!-- .page-title -->

<section class="contact-detail gray-bg">
  <div class="container text-left">
    <div class="row">
      <div class="col-md-4">
        <div class="promo-block-wrapper clearfix">
          <div class="promo-icon promo-icon-blue">
            <i class="fa fa-map-marker"></i>
          </div>
          <div class="promo-content">
            <h3>Endereço</h3>
              <address>
                Rua Três Marias <br>
                Petrópolis. Caruaru-PE
              </address>
            </div>
          </div><!-- /.promo-block-wrapper -->
        </div>

                    <div class="col-md-4">
                      <div class="promo-block-wrapper clearfix">
                        <div class="promo-icon promo-icon-yellow">
                          <i class="fa fa-phone"></i>
                        </div>
                        <div class="promo-content">
                          <h3>Contatos</h3>
                          <address>
                            <abbr title="Phone">Telefone:</abbr> (81) 3721 - 7069<br>
                            <abbr title="Phone">Celular:</abbr> (81) 9.9928 - 8883
                          </address>
                        </div>
                      </div><!-- /.promo-block-wrapper -->
                    </div>

                    <div class="col-md-4">
                      <div class="promo-block-wrapper clearfix">
                        <div class="promo-icon promo-icon-green">
                          <i class="fa fa-envelope-o"></i>
                        </div>
                        <div class="promo-content">
                          <h3>Email</h3>
                          <address>
                            <a href="mailto:#">contatofreelancervan@gmail.com</a><br>
                            <a href="mailto:#">douglaswilliamn@gmail.com</a><br>
                          </address>
                        </div>
                      </div><!-- /.promo-block-wrapper -->
                    </div>
                  </div><!-- /.row -->
                </div>
              </section> <!-- contact-detail -->

              <section class="contact-section">
                <div class="container">
                  <div class="section-title text-center">
                    <h2>Se você tiver alguma dúvida ou comentário,
                      <br>ou gostaria apenas de dar alguma sugestão,
                      <br>Sinta-se à vontade para entrar em contato com nossa equipe.</h2>
                  </div>

                  <div class="contact-form mt-50">

                    {{ Form::open(['url'=>url('/email')]) }}
                    {!! csrf_field() !!}

                      <div class="row">
                        <div class="col-md-4">

                          <div class="form-group">
                              {!! Form::text('nome', null, array(
                                  'required',
                                  'class'         =>  'form-control',
                                  'placeholder'   =>  'Digite nome completo',
                                  'id'            =>  'nome')) !!}
                          </div>

                          <div class="form-group">
                            {!! Form::email('email', null, array(
                                'required',
                                'class'         =>  'form-control',
                                'placeholder'   =>  'Email',
                                'id'            =>  'email')) !!}
                          </div>

                          <div class="form-group">
                            {!! Form::text('assunto', null, array(
                                'required',
                                'class'         =>  'form-control',
                                'placeholder'   =>  'Assunto',
                                'id'            =>  'assunto')) !!}
                          </div>
                        </div> <!-- col-md-4 -->

                        <div class="col-md-8">
                          <div class="form-group">
                            {!! Form::textarea('mensagem', null, array(
                                'required',
                                'class'         =>  'form-control',
                                'placeholder'   =>  'Descreva sua mensagem',
                                'id'            =>  'mensagem')) !!}
                          </div>
                        </div> <!-- col-md-8 -->
                      </div><!-- /.row-->

                      <button type="submit" class="btn btn-primary btn-lg pull-right">Enviar</button>
                    {!! Form::close() !!}
                  </div> <!-- contact-form -->
                </div>
              </section> <!-- contact-section -->

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
