@extends('layouts.app')

@section('content')

<div class="header-downloads" style="z-index: -1;">
    <div class="img-download container-fluid" >
        <div class="container maindownloads" id="download-fluid" style="padding:0 !important;">
           <div class="page-text" style="margin:20px;">
                <br>
                <div class="text-center">
                    <h1 class="colhead-text">Downloads</h1>    
                    <p>
                    Para poder jogar temos diferentes opções de download, selecione aquela que melhor lhe convier.<br>
                    Baixe nosso cliente e comece sua aventura.
                    </p> 
                    </div>
                    <div class="row">
                        <div class="col-4"></div>    
                        <div class="col-sx-3 gpbtn-welcome" style="word-wrap: break-word !important;">
                            <a href="" class="btn btn-theme btn-block btn-lg btn-rounded  text-left">
                            Download&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <span   span class="icon-download"><i class="fa fa-download">&nbsp;</i></span><br>
                            <small>Ragna Blue</small>               
                            </a>       
                        </div>
                        <div class="col-sx-3 gpbtn-welcome" style="word-wrap: break-word !important;">
                            <a href="" class="btn btn-theme btn-block btn-lg btn-rounded  text-left">
                            Download&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <span   span class="icon-download"><i class="fa fa-download">&nbsp;</i></span><br>
                            <small>Ragna Blue</small>
                            </a>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-xl-6">
                            <h2>Instruções de Download</h2>
                            <p>
                            Nossa instalação já vem completa, com tudo que há de melhor diretamente dos servidores de Ragnarok Koreanos, Japoneses e afins. Então não há a necessidade de baixar nenhum tipo de complemento, apenas o nosso lindo patcher. Para poder instalar siga os passos abaixo:
                            </p>
                            <hr>
                            <ul>
                                <li> Clique em um dos botões acima.</li>
                                <li>Baixe o nosso instalador setupRagnaproject.exe e execute-o</li>
                                <li>Após baixar e abrir, clique no botão install.</li>
                                <li>Após o término da instalação o jogo abrirá, e criará também um atalho na sua tela chamado RagnaProject.</li>
                            </ul>
                        </div>
                        <div class="col-xl-6">
                            <h2>Download Instructions</h2>
                            <p>  Our installation is already complete, with everything that is best directly from the servers of Ragnarok Koreans, Japanese and the like. So there is no need to download any kind of add-on, just our beautiful patcher. To install, follow the steps below:</p>
                            <hr>
                           <ul>
                               <li>Click on one of the buttons above.</li>
                               <li>Download our setupRagnaProject.exe installer and run it.</li>
                               <li>After downloading and opening, click the install button.</li>
                               <li>After the installation finishes the game will open, and will also create a shortcut on your screen called RagnaProject.</li>
                           </ul>     
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer id="myFooter" class="footer" style="margin-top:500px;">
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