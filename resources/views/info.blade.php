@extends('layouts.app')



@section('content')

<div class="header">
    
    <div class="img-download2 container-fluid" > 
        <div class="container  flex-container"  >
        <div class="maindownloads  container-fluid" >
            <div class="colhead-text text-center" >
                <br>
                <h2 style="font-weight:bold;">Informações Gerais do Servidor</h2>
                <p>
                Informações oficiais do RagnaProject Ragnarök Online. 
                <br>
        Curta jogue, e aproveite todas as nossas características únicas.
                </p>
            </div>    
            <div class="row" style="padding-left:135px; padding-top:50px;">
                    <div class="col-xs-2 myst">
                        <div class="card text-center" style="width: 10.2rem;height:170px; border-radius:8px">
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
                        <div class="card text-center" style="width: 10.2rem;height:170px; border-radius:8px">
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
                        <div class="card text-center" style="width: 10.2rem; height:170px; border-radius:8px">
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
                        <div class="card text-center" style="width: 10.2rem; height:170px; border-radius:8px">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <div class="iconfeatures">
                                        <i class="fa fa-cog"></i>
                                    </div>
                                </h5><br>
                                <p class="card-text">Sistemas <br> Únicos</p>
                            
                            </div>
                        </div>
                    
                    </div>
                
                    <div class="col-xs-2 myst">
                        <div class="card text-center" style="width: 10.2rem;height:170px; border-radius:8px">
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
                <br><br><br>
                <div class="row">
                    <div class="col-md-5">
                        <img class="img" src="{{ asset('/bg/render-1.png')  }}" style="width: 100%" height="350px;" alt="">
                    </div>
                    <div class="col-md-7" >
                        <div class="colhead-text">
                            <h2 style="font-weight:bold;">Diferenciais RagnaProject</h2>
                            <p>
                                Convidamos você para a nossa comunidade de Ragnarok Online, somos um servidor com rates agradáveis, que permite que você crie seu personagem em menos tempo, participe das diferentes modalidades que o nosso servidor tem a oferecer, também temos muitas instâncias para que você possa desfrutar eles.

                                Nosso servidor tem proteção contra DDoS e Gepard Shield, para incentivar um jogo justo e sem trapaças, também temos um servidor dedicado hospedado no Canadá, dentro da rede OVH, para oferecer o melhor desempenho ao jogar de qualquer lugar do planeta.

                                Venha se divertir os episódios 16.1 Banquet for Heroes, 16.2 Rock Ridge, Illusion Dungeons e muito mais!
                            </p>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="listcheck">
                                        <div> <i class="fa fa-check"></i> Nível Base / Job Máximo: 185 / 60</div>
                                        <div> <i class="fa fa-check"></i> Mecânica: Renovação</div>
                                        <div> <i class="fa fa-check"></i> Exp Base / Job: 20k / 20k</div>
                                        <div> <i class="fa fa-check"></i> Atributo Máximo: 120</div>
                                        <div> <i class="fa fa-check"></i> Instant Cast: Igual ao kRO</div>
                                        <div> <i class="fa fa-check"></i> Instant Cast: Igual ao kRO</div>
                                        <div> <i class="fa fa-check"></i> Drop Cartas MvPs / Mobs: 1% / 1%</div>
                                        <div> <i class="fa fa-check"></i> Drop 100x</div>
                                        <div> <i class="fa fa-check"></i> Eventos Automáticos</div>
                                    
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="listcheck">
                                        <div> <i class="fa fa-check"></i> Classes: Star Emperor, Soul Reaper Kagerou, Oboro e Rebellion.</div>
                                        <div> <i class="fa fa-check"></i> Raça: Doram.</div>
                                        <div> <i class="fa fa-check"></i> Classes Balanceadas</div>
                                        <div> <i class="fa fa-check"></i> Vip por Votos</div>
                                        <div> <i class="fa fa-check"></i> Pontos de Presença</div>
                                        <div> <i class="fa fa-check"></i> Ranking MvP/PvP</div>
                                        <div> <i class="fa fa-check"></i> Pack Guild / Iniciantee</div>
                                        <div> <i class="fa fa-check"></i> Donates por PvM / BG</div>
                                    </div>
                                </div>
                            </div>
                        </div> 
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