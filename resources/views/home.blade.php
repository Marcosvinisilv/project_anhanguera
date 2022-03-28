@extends('layouts.app')

@section('content')
<div class="header">
    <div class="container" >
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{ asset('/carousel-slides/slide-1.png') }}" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('/carousel-slides/slide-2.png') }}" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('/carousel-slides/slide-6.png') }}" alt="Third slide">
                </div>
            </div>
        </div> 
    </div>
</div>
<div class="status">
    <div class="container flex-container">
        <div class="row">
            <div class="col-xs-2 myst">
                <div class="card text-center" style="width: 10.6rem;height:170px; border-radius:8px">
                    <div class="card-body">
                        <h5 class="card-title">
                            <div class="iconfeatures">
                                <i class="fa fa-check lg"></i>
                            </div>
                        </h5><br>
                        <p class="card-text">Staff Ativa</p>
                       
                    </div>
                </div>
            </div>
            <div class="col-xs-2 myst">
                <div class="card text-center" style="width: 10.6rem;height:170px; border-radius:8px">
                    <div class="card-body">
                        <h5 class="card-title">
                            <div class="iconfeatures">
                                <i class="fa fa-bug"></i>
                            </div>
                        </h5><br>
                        <p class="card-text">100% Livre de Erros</p>
                       
                    </div>
                </div>
            </div>
            <div class="col-xs-2 myst">
                <div class="card text-center" style="width: 10.6rem;height:170px; border-radius:8px">
                    <div class="card-body">
                        <h5 class="card-title">
                            <p style="color:#00ff66;">Online</p>
                        </h5>
                        <h2 style="font-weight: 800;">46</h2>
                        <p class="card-text">Jogadores online</p>
                       
                    </div>
                </div>
            </div>
            <div class="col-xs-2 myst">
                <div class="card text-center" style="width: 10.6rem; height:170px; border-radius:8px">
                    <div class="card-body">
                        <h5 class="card-title">
                            <div class="iconfeatures">
                                <i class="fab fa-snapchat-ghost"></i>
                            </div>
                        </h5><br>
                        <p class="card-text">Eventos Automáticos</p>
                       
                    </div>
                </div>
            
            </div>
            <div class="col-xs-2 myst">
                <div class="card text-center" style="width: 10.6rem;height:170px; border-radius:8px">
                    <div class="card-body">
                        <h5 class="card-title">
                            <div class="iconfeatures">
                                <i class="fa fa-bolt"></i>
                            </div>
                        </h5> <br>
                        <p class="card-text">Servidor Livre de Lag.</p>
                       
                    </div>
                </div>
            </div>  
        </div>
    </div>
</div>
<div class="welcome">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="colhead-text text-center">
                    <h2>Seja bem-vindo!</h2>
                    <p>Aventure-se nesta nova experiência de Renewal, Rate Médio, podemos garantir sua diversão com a grande variedade de <br> missões, eventos, instâncias, missões de caça, sistemas únicos e muito mais, estabilidade garantida, não espere mais e divirta-se.</p>
                </div>
            </div>
        </div>
        <br>
        <div   div class="row">
        <div class="col-sx-4">
            <img class="img-responsive" src="{{ asset('bg/welcome-render.png') }}" width="470px" alt="">
        </div>
        
            
        <div class="col-xs-3 gpbtn-welcome" style="word-wrap: break-word !important;">
            <br>
            <a href="" class="btn btn-theme btn-block btn-lg btn-rounded appear animated text-left">
                Download&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <span   span class="icon-download"><i class="fa fa-download">&nbsp;</i></span><br>
                <small>Ragna Blue</small>
                
            </a>
        
            <a href="" class="btn btn-theme btn-block btn-lg btn-rounded appear animated text-left">
                Cadastro&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <span   span class="icon-download"><i class="fa fa-user-plus">&nbsp;</i></span><br>
                <small>Criar Conta</small>
                
            </a>
            <a href="" class="btn btn-theme btn-block btn-lg btn-rounded appear animated text-left">
                Informações&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                 <span   span class="icon-download"><i class="fa fa-download">&nbsp;</i></span><br>
                <small>Sobre o Servidor</small>
                
            </a>
            
        </div>
        <div class="col-sx-4">
            <div class="discord"><br>
            <iframe src="https://discordapp.com/widget?id=315868621702168576&amp;theme=dark" width="330" height="250" allowtransparency="true" frameborder="0"></iframe>
            </div>
        </div> 
           
       </div>
    </div>
</div>
<hr>
<div class="rules">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="colhead-text">
                    <h2>Regras e Regulamento</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <p>Compartilhar as informações da conta com outro usuário isenta completamente a responsabilidade da equipe em relação às ações decorrentes de qualquer inconveniente.

                    É proíbida a publicação de imagens alteradas que mostram os seguintes fatores: "Objetos falsos, Visuais falsos, Monstros falsos, Animais de estimação falsos ou qualquer coisa relacionada ao jogo", a punição assumida por este ato resultará em um bloqueio permanente de sua conta.</p>
            </div>
            <div class="col-6">
                <p>O uso de programas externos externos ao cliente é proibido, incluindo scripts de auto-bot, hot-key, auto-farming, etc.

                    É proibido solicitar tratamento especial da equipe, as compras feitas no Ragna.Blue são para pontos virtuais. Nenhum produto físico será enviado ou prova de entrega será fornecida, não é obrigatório fazer uma compra para jogar na comunidade, todas as compras são feitas à vontade e para apoiar o crescimento da comunidade.  </p>
            </div>
        </div>
    </div>
</div>

<footer id="myFooter" class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3">
                <h2 class="logo"><a href="#"> <img class="" style="width:100%" src="{{ asset('/bg/footer.png')}}" alt=""></a></h2>
            </div>
            <div class="col-sm-2">
                <h5>Inicio</h5>
                <ul>
                    <li><a href="#">Início</a></li>
                    <li><a href="#">Doações</a></li>
                    <li><a href="#">Informações</a></li>
                    <li><a href="#">Downloads</a></li>
                    <li><a href="#">Votar</a></li>
                </ul>
            </div>
            <div class="col-sm-2">
                <h5>Sobre-nós</h5>
                <ul>
                    <li><a href="#">Desenvolvedores</a></li>
                    <li><a href="#">Contato</a></li>
                    <li><a href="#">Blog</a></li>
                </ul>
            </div>
            <div class="col-sm-2">
                <h5>Suporte</h5>
                <ul>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Telefones</a></li>
                    <li><a href="#">Chat</a></li>
                </ul>
            </div>
            <div class="col-sm-3">
                <div class="social-networks">
                    <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="facebook"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
                </div>
                <a href="#">
                    <button type="button" class="btn btn-default">Contato</button>
                </a>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <p> &copy; {{ now()->year }} Copyright - Ragnaproject</p>
    </div>
</footer>

@endsection



@push('styles')
<link rel="stylesheet" href="{{ asset ('css/style.css')}}">
@endpush
@push('script')
<script type="text/javascript">
    $('.img-fluid').css({ 'width': '100px',});
    $('.menu').css({ 'padding-top': '15px','padding-bottom':'15px'});
    $('#navbarDropdown').css({ 'padding-top': '10px','padding-bottom':'14.8px'});
    $(window).scroll( function() {
        var scrollpos = $(window).scrollTop();
       
        if (scrollpos >0){
          
            $('.img-fluid').stop().animate({ 'width': '180px',},300)
            $('.menu').stop().animate({ 'padding-top': '21.8px','padding-bottom':'21.8px'},-20)
            $('#navbarDropdown').stop().animate({ 'padding-top': '18px','padding-bottom':'20.2px'},-20)
            
        }else{
            $('.img-fluid').stop().animate({ 'width': '120px'},200)
            $('.menu').stop().animate({ 'padding-top': '13px','padding-bottom':'13px'},-20)
            $('#navbarDropdown').stop().animate({ 'padding-top': '9px','padding-bottom':'11px'},-20)
        }
    });
</script>
@endpush


