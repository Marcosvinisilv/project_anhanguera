@extends('layouts.app')

@section('navbar')
    <!-- <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">Fixed navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li>
            </ul>
            <form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav> -->
@endsection
@section('content')

<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-12">
        <br>
        <h1 class="text-center"><span class="badge badge-secondary" style="min-width:80%;">#Projeto Anhaguera</span></h1>
        <hr>
            <div class="row">
                <div class="col">
                    <div class="card" style="width: 15.9rem;">
                        <img src="{{asset('/img/marcos.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Marcos Sandro</h5>
                            <p class="card-text">Cursando CST em Análise e Desenvolvimento de Sistemas - Anhaguera... </p>
                            <hr>
                            <div class="col text-center">
                            <a href="#" class="btn btn-primary btn-block" id="maisMarcos" >Ver Mais</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 15.9rem;">
                        <img src="{{asset('/img/luis.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Luis Ricardo Schick</h5>
                            <p class="card-text">Cursando CST em Análise e Desenvolvimento de Sistemas - Anhaguera... </p>
                            <hr>
                            <div class="col text-center">
                            <a href="#" class="btn btn-primary btn-block" id="maisLuis" >Ver Mais</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 15.9rem;">
                        <img src="{{asset('/img/jucy.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Juciele Santos</h5>
                            <p class="card-text">Cursando CST em Análise e Desenvolvimento de Sistemas - Anhaguera... </p>
                            <hr>
                            <div class="col text-center">
                            <a href="#" class="btn btn-primary btn-block" id="maisJuci" >Ver Mais</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 15.9rem;">
                        <img src="{{asset('/img/marcos.jpeg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Marcos Vinicius</h5>
                            <p class="card-text">Cursando CST em Análise e Desenvolvimento de Sistemas - Anhaguera... </p>
                            <hr>
                            <div class="col text-center">
                            <a href="#" class="btn btn-primary btn-block" id="maisMarcosv" >Ver Mais</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 


 <div class="modal fade bd-example-modal-lg"  id="modalB" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle"> Mais Informações </h5>
      </div>
      <div class="modal-body">
       <p><span id="vermais"></span></p>
      </div>
    </div>
  </div>
</div>
    
@endsection
@push('script')    
<script type="text/javascript">

    $(document).ready(function(){
        $("a#maisMarcos").on('click',function(){
            $("#modalB").modal('show');
            $("#vermais").html("{!! $description['DESCMSOUZA'] !!}");
        });
        $("a#maisLuis").on('click',function(){
            $("#modalB").modal('show');
            $("#vermais").html("{{$description['DESCLUIS']}}")
        });
        $("a#maisJuci").on('click',function(){
            $("#modalB").modal('show');
            $("#vermais").html("{{$description['DESCJUCY']}}");
        });
        $("a#maisMarcosv").on('click',function(){
            $("#modalB").modal('show');
            $("#vermais").html("{{$description['DESCMVINI']}}");
        });
       
    });
</script>
@endpush
</html>
