@extends('layouts.app')



@section('content')

<div class="header">
    
    <div class="img-download4 container-fluid" style="margin: 0 !important; padding:0 !important;" > 
        <div class="container  flex-container"  >
        <div class="maindownloads  container-fluid" >
            <div class="colhead-text text-center" >
                <br>
                <h2 style="font-weight:bold;">Créditos Autorais de Imagens e Textos</h2>
                <p style="font-size:17px">
                    - Inspiração no WebSite: <a href="https://www.ragna.blue">Ragna blue</a> <br>
                    - Algumas Imagens retiradas do Wekpédia. <br>
                    - Algumas Imagens retiradas do <a href="https://www.pngwing.com/"> Free Png's</a><br>
                    <hr>
                    <strong style="font-size:1rem"> Obs: Este Webiste foi desenvolvido no intuito de Projetos da Faculdade Anhanguera Santo André - SP, Localizada na Av.Industrial.</strong>
                <br>
                </p>
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
</div>



@endsection


@push('styles')
<link rel="stylesheet" href="{{ asset ('css/style.css')}}">

@endpush
@push('script')
<script type="text/javascript">
    $(".header").addClass("ajszindex");
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