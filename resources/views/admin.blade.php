


@extends('layouts.app')



@section('content')

    <div class="header" >
        <div class="img-download5 container-fluid" style="margin: 0 !important; padding:0 !important;" > 
            <div class="container flex-container">
            <div class="classes container-fluid shadow";>
                <div class="colhead-text text-center" >
                    <br>
                    <h2 style="font-weight:bold;">Área Administrativa - Listagem e Cadastro de Usuários [Permissões]</h2>
                    <hr>
                </div>
                @if (session('success'))
                    <div class="row">
                        <div class="col-12">
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        </div>
                    </div>
                @endif
                <button type="button" class="btn btn-dark btn-sm" onclick="showModal();" href="">Cadastrar Usuário</button>
                
                <table class="table table-sm table-bordered table" id="tableAdmin">
                    <thead class="thead">
                        <tr>
                            <th>#</th>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Tipo</th>
                            <th>
                                Tornar Admin ?
                               
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                    
                            @foreach ($users as $item)
                            <tr>
                                <td>
                                    {{ $item->id}}
                                </td>
                                <td>
                                    {{ $item->name}}
                                </td>
                                <td>
                                    {{ $item->email}}
                                </td>
                                
                                <td>
                                    <span  class="btn btn-sm tipo"> {{ $item->tipo}} </span>
                                </td>
                                <td class="text-center">
                                   
                                    @if($item->tipo == 99)
                                       
                                        @if ($item->email === "msandro39@gmail.com")
                                        
                                        <button href="" class="btn btn-sm" style="background:purple !important; color:white;"><strong style="font-size:14px">DONO</strong></button>
                                        @else
                                        <form action="{{route('removeradmin',$item->id)}}" method="POST">
                                            @csrf
                                            @method("PUT")
                                            <button type="submit" class="btn btn-danger btn-sm"><strong style="font-size:14px">REMOVER</strong>&nbsp; <i class="fa fa-times" style="color:white; font-size:15px;"></i></button>
                                        </form>
                                        @endif
                                    @else
                                        <form action="{{route('tornaradmin',$item->id)}}" method="POST">
                                            @csrf
                                            @method("PUT")
                                            <button  type="submit" class="btn btn-success btn-sm"><strong style="font-size:14px">TORNAR</strong>&nbsp; <i class="fa fa-check" style="color:white; font-size:15px;"></i></button>
                                        </form>
                                    @endif
                                   
                                    
                                </td>
                            </tr>        
                            @endforeach
                        
                    </tbody>
                </table>

                <div class="modal fade bd-example-modal-lg" id="modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <form class="" action="{{route('admin.store')}}" method="POST" style="background:white !important;">
                                @csrf
                                <h1 class="text-center">Cadastrar Usuário</h1>
                                <div class="row">
                                    <div class="col-3"></div>
                                    
                                    <div class="col-6">
                                        <hr>
                                        <div class="form-group">
                                            <label for="">Nome do Usuário</label>
                                            <input class="form-control" type="text" name="name">
                                        </div>
                                        
                                        <div class="form-group">    
                                            <label for="">E-Mail do Usuário</label>
                                            <input class="form-control" type="text" name="email">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="">Senha do Usuário</label>
                                            <input class="form-control" type="password" name="password">
                                        </div>
                                        <div class="text-center">
                                            <input class="btn btn-primary btn-sm" type="submit" value="Cadastrar Usuário">
                                            <br><br><br>
                                        </div>
                                    </div>    
                                    <div class="col-3"></div>
                                </div> 
                            </form>
                        </div>
                    </div>
                </div>  
            </div>    
        </div>  
    </div>
    <br>
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
<script src="{{ asset ('/js/datatables-ptbr.js') }}"></script>
<script type="text/javascript">
    var value = '';
    function showModal(){
        $("#modal").modal('show');
    }
    $(".header").addClass("ajszindex");
  
    $(".tipo").each(function(){
       value = $(this).html().trim();
    
       if (value ==  "99"){
           
           $(this).addClass('btn-danger');
           $(this).html('Administrador de Sistemas');
       }else{
            $(this).addClass('btn-primary');
           $(this).html('Usuário Comum');
       }
    });
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
    // var src =  asset('/js/datatables-ptbr.js');
    $(document).ready(function($){
        $("#tableAdmin").DataTable(json);
    });
</script>
@endpush
