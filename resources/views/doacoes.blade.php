@extends('layouts.app')

@section('content')
<div class="header-doa">
    <div class="container" >
        <div class="img-doacao container-fluid" > 
            <div class="container  flex-container"  >
                <div class="maindownloads  container-fluid" >
                    <div class="colhead-text" >
                        <br>
                        <h2 style="font-weight:bold;">Doação</h2>
                        <h4>Faça uma doação, ajude o servidor a ficar online e ganhe cashpoints e para trocar por diversos itens</h4>
                    </div>   
                    <p>O Ragna.Blue é um servidor totalmente gratuito, as doações são voluntárias e são inteiramente revertidas para os custos do servidor. Em troca disso, o player ganha cashpoints podendo trocar por itens visuais, chapéus donate e outros.</p>
                    <div class="jumbotron">
                        <form>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Nome Completo </label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" value="{{Auth::user()->name}}">
                            </div>
                            <div class="form-group">
                            <label for="exampleFormControlInput1">E-mail</label>
                              <input type="email" class="form-control" id="exampleFormControlInput1" value="{{Auth::user()->email}}" placeholder="name@example.com">
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlInput1">$ Valor da Doação </label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" value="" placeholder="Ex: 20.00">
                            </div>
                           
                            <div class="form-group">
                              <label for="exampleFormControlTextarea1">Observação</label>
                              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Anexo do Comprovante do Pagamento</label>
                                <input type="file" class="form-control-file" id="exampleFormControlFile1">
                              </div>
                          </form>
                        <hr class="my-4">
                        <input type="image" src="https://stc.pagseguro.uol.com.br/public/img/botoes/doacoes/209x48-doar-assina.gif">
                        
                      </div>
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