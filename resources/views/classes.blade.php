

@extends('layouts.app')



@section('content')

<div class="header">
    
    <div class="img-download3 container-fluid" style="margin: 0 !important; padding:0 !important;" > 
        <div class="container flex-container"  >
        <div class="classes container-fluid" >
            <div class="colhead-text text-center" >
                <br>
                <h2 style="font-weight:bold;">Conheça um pouco mais sobre as classes do jogo.</h2>
                
                </p>  
                <div class="row">
                   <div class="col col-card"> 

                    </div>
                </div>
            </div>    
        </div>  
    </div>
    <div class="container" style="text-align:center !important">
        <button type="button" class="btn btn-dark btn-fluid  btnCarregarMais" style="margin-bottom: 20px; margin-top: 20px; width:200px">Carregar Mais</button>
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
<div class="modal fade modalInfoClasses" id="ExemploModalCentralizado" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="TituloModalCentralizado">Informações da Classe: <i class="fas fa-arrow-right" style="color: green;"></i> <span class="nameclass"></span></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div style="text-align: center !important;">
            <img class="imgclass" src="" alt="">
          </div>
          
         
        </div>
        <div class="">
            <div class="modal-body" style="border-top:3px solid black; border-top-left-radius:40px; border-top-right-radius:30px;">
                <p class="infom">
    
                </p>
            </div>
        </div>
       
        <div class="modal-footer shadow" style="border-top:0px !important; text-align:center !important;">
           
                <strong style="color:blue;">#</strong> Projeto Integrado 2020 !
            
        </div>
      </div>
    </div>
  </div>
@endsection
@push('styles')
<link rel="stylesheet" href="{{ asset ('css/style.css')}}">
<script src="{{asset('js/ajax/carregarMais.js')}}"></script>
@endpush
@push('script')
<script type="text/javascript">
    //Armazenamos a rota para usar na URL da Requisão Ajax;
    let url = "{{ route('carregar') }}";
    //Pegamos da tag meta  o CSRF_TOKEN que é obrigatório em requisões no framework laravel.
    let CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    //Zeramos  uma variavél que será responsável por exibir o botão carregar mais.
    let contador = 0;
    //Document ready -> quando o documento é carregador executamos alguma função.
    $(document).ready(function(){
        // Botão ao clicar executa uma função " carregarMais " passando o inicio que é sempre 4 por padrão.
        // e incrementa passandro na requisição ajax verificando o inicio de valor que já está em exibição.
        // e Incrementa mais 4 a cada requisição.
        $('.btnCarregarMais').on('click',function(evento){
            evento.preventDefault();
            //Pega quantidade de cards pelo atributo class e verifica com o length para saber quantos cards
            //Estão sendo Exibido.
            let inicio = $('.card').length;
            console.log(inicio);
            //Faz a Requisição // que se encontra no arquivo  public/js/ajax/mostrarMais.js
            carregarMais(inicio,4,url);
        });
        // Quanto o documento for carregado ele já traz por padrão 4 imagens.
        carregarMais(0,4,url);
        // Se o contador == 0 adicionar um display none para esconder o botão.
        if (contador==0){
            $(".btnCarregarMais").addClass("hide");
        }
    });

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




