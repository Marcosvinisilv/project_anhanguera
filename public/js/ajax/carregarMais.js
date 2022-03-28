
function infoModal(descricao,nameclass,img){
    $(".infom").text(descricao);
    $(".nameclass").text(nameclass);
    $(".imgclass").attr("src",img);
    $(".modalInfoClasses").modal('show');
}



//Recebemos 3 parametros na função.
function carregarMais(inicio,max,url){
    // Criamos um objeto json passando as informações que será passada via GET. pelo navegador.
    let dados = {inicio:inicio,max:max,_token:CSRF_TOKEN};
    // Iniciamos a variavel card como branco para podemos usar ela abaixo.
    let card = '';

    $.ajax({

        type: 'GET', //Tipo de Requição "GET" envia dados pela URL.
        url: url, // Url que será feita a Requisição está lá no cadclass.blade.php
        dataType: 'JSON', // Tipo de Arquivo "JSON".
        data: dados , // Dados a serem enviados pelos parametros que passando na variavel data da criação do objeto;
        success: function(data){
            $(".imgclass").attr("src","");
            
            console.log(data);
            data.forEach(function(element,index){ //Percorremos o resultado e abaixo  montamos os cards.
                
                $(".btnCarregarMais").removeClass("hide");
                contador++;
               
                if (contador < 4){
                    console.log("ENTREI");
                    $(".btnCarregarMais").addClass("hide");
                }
                card += `<div class="card widthcardclass" style="width: 16rem; float:left; margin-left:10px; margin-top:5px; margin-bottom:5px;">`;
                card += `<div style="text-align:center !important;">`;
                card += `<img src="/storage/${element.imagem}" class="card-img-top" style="width:40%" alt="...">`;
                card += `</div>`;
                card += `<div class="card-body">`;
                card += `<h5 class="card-title">${element.nome}</h5>`;
                card += `<hr>`;
                card += `<div class="col text-center">`;
                card += `<button class="btn btn-primary btn-block" onclick="infoModal('${element.description}','${element.nome}','/storage/${element.imagem}');">Saiba Mais...</button>`;
                card += `</div>`;
                card += `</div>`;
                card += `</div>`;
                console.log(element);
                $(".infoDetalhes").text(element.description);
                // Esconder o Botão carregar mais se no json que está vindo o count_able == ao contador.
                if (contador == parseInt(element.count_able)){
                    $(".btnCarregarMais").addClass("hide");
                }
            });
            //Fazmos um append para inclur dentro da class .col-card todos os cards que passaram pelo foreach
            // Dentro da  div que contem o attributo classe de nome  .col-card.
            $(".col-card").append(card);


        },
        error: function(){
            //Se a Requisição Falhar emite um alerta de ERRO.
            alert('ERROR');
        }

    });
}