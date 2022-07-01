<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Botão Veja Mais </title>

<style>

#texto{
  text-align: justify;
}

#mais{
    display: none;
    text-align: justify;
}

#btnVejaMais{
 margin-left: 300;
 margin-right: 400;
 width: 100px;
 height: 50px;
 background-color: #68e620;
}

</style>
</head>
<body>

    <span id="texto">  Após realizar os exercícios, clique no botão e tenha as respostas disponíveis. 
    Não se esqueça que uma parte muito importante...   </span>  
        <span id="mais"> 
        Após realizar os exercícios, clique no botão e tenha as respostas disponíveis. 
    Não se esqueça que uma parte muito importante do estudo é a identificação e a análise dos erros,
    nunca deixe de corrigir seus simulados ou atividades, ok?
        </span>

        <br> <br>
    <button onclick="VejaMais()" id="btnVejaMais"> Veja mais </button>

    <script type="text/javascript">
    function VejaMais(){
        var texto=document.getElementById("texto");
        var acesso=document.getElementById("mais");
        var btnVejaMais=document.getElementById("btnVejaMais");
    
    if(texto.style.display === "none"){
        texto.style.display="inline";
        acesso.style.display="none";
        btnVejaMais.innerHTML= "Veja mais";
    } else {
        texto.style.display="none";
        acesso.style.display="inline";
        btnVejaMais.innerHTML= "Veja menos";
    }
    
    }
    </script>  
    
</body>
</html>