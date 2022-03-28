@extends('layouts.app')

@section('content')


<div class="header">
    <div class="container">
        @if (session('status'))
            <div class="row">
                <div class="col"></div>
                <div class="col-6">
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                </div>
                <div class="col"></div>
            </div>
        @endif
        @if (session('error'))
        <div class="row">
            <div class="col"></div>
            <div class="col-6">
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            </div>
            <div class="col"></div>
             </div>
         @endif
        <div class="row">
            <div class="col">
              
            </div>
            <div class="col-6">
                <form action="{{route('cadclass.store')}}" method="POST" enctype="multipart/form-data" >
                    @csrf
                    <div class="form-group">
                      <label for="nomeclass">Nome</label>
                      <input type="text" class="form-control" id="nomeclass" name="nomeclass">
                      <small class="form-text text-muted">Digite o nome da classe</small>
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text">Informações</span>
                        </div>
                        <textarea rows="5" cols="33" name="infoclass" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Selecionar Imagem</label>
                        <input type="file" class="form-control-file" name="file">
                    </div>
                    <hr>
                    <button type="submit" class="btn btn-dark">Cadastrar</button>
                </form>
            </div>
            <div class="col">
                
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