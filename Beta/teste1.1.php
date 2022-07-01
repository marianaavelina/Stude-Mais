<html>
    <head> 
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>  Stude Mais   </title>
        <link rel="stylesheet" type="text/css" href="estilo1.1.css" media="screen" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@700&family=Roboto&family=Yellowtail&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"  /> 
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">  
        <link rel="stylesheet" type="text/css" href="normalize.css" media="screen" /> 
        <link href="https://fonts.googleapis.com/css2?family=Noto+Serif&display=swap" rel="stylesheet">
        <link rel="shortcut icon" href="logo2.png">
        <script type="text/javascript" src="script.js"></script>

    </head>
    <body>
    
        <nav>
            <div id = "logo"> </div>       
            <ul>
                <li><a href="#sobre"> Sobre </a></li> 
                <li><a href="#servicos"> Serviços </a></li>
                <li><a href="#contatos"> Contatos </a></li>
                <li><a href="#materias"> Matérias </a></li>
                <li><a href="#cadastro"> Cadastre-se </a></li>
                <li><a href="#login"> Entrar </a></li>
            </ul>
        </nav>

        <center><header id="topo"> 
            <!-- <p> testando(dá para deixar texto aqui) </p>  -->
            <!--<a href="#servicos" class="bottom"> Ver mais </a>-->
        </header> </center>

        <section id="sobre"><br> <br> <br>  
            <h4 class="frase"> <br> <br>  “A educação é a arma mais poderosa que <br> você pode usar para mudar o mundo.” <h3> - Nelson Mandela </h3> <br></h4><br>
           
            <p> Já pensou em estudar em um cursinho que facilitará sua entrada na Universidade dos seus 
                sonhos? Pois bem, você está no lugar certo! O Stude Mais é uma plataforma educacional com o objetivo 
                de preparar os alunos para ingressarem na graduação. Aqui, você terá acesso a diversos
                conteúdos e funcionalidades que deixarão seus estudos mais leves e dinâmicos. </p>
            
        </section>   
        
        <section id="btnid" class="sobrebtn"> <a href="#sobre" class="bottom"> Explore o cursinho </a> </section>

        <section id="servicos">
            <div>
                <img class="foto" src="cronograma3.png"> 
                   <!-- <h3> Cronograma </h3> -->
                   <span id="texto"> 
                    <p> No cronograma, há possibilidade de criar um cronograma personalizado para que você aluno
                        ajuste de maneira que seja mais eficiente de acordo com a sua rotina e conforme as lacunas
                        que podem existir no seu processo de aprendizagem na escola... </p></span>
                    <span id="mais">
                    <p> No cronograma, há possibilidade de criar um cronograma personalizado para que você aluno
                        ajuste de maneira que seja mais eficiente de acordo com a sua rotina e conforme as lacunas
                        que podem existir no seu processo de aprendizagem na escola.
                        Vale salientar que além de
                        incluir a rotina de estudos propriamente dita, é muito importante que seja incluso o 
                        hábito de leitura, intervalos para descanso e atividades físicas, além de momentos para
                        cuidar do espiritual porque nosso corpo, mente e espírito, formam a tríade da saúde 
                        integrativa. Um depende do outro para fluir com leveza e para funcionar em sua potência
                        máxima sem sobrecarregá-los. </p>
                    </span> <br>

                    <!-- BOTÃO1 PARA ESCONDER E APARECER O TEXTO DOS NOSSOS SERVIÇOS -->
                    <button onclick="VejaMais()" id="btnVejaMais" class="btn1"> Veja mais </button>  
                    
            </div>
            <div>
                <img class="foto" src="pcarreira3.png">
                <!-- <h3> Plano de Carreira </h3> -->
                <span id="texto2"> 
                <p>No plano de carreira, te ajudamos a visualizar a área que tem mais habilidade e gosta de fazer. 
                    Talvez você goste de matemática e sua opção seja cursar Engenharia, Administração, Matemática ou 
                    Arquitetura, mas... </p></span>
                <span id="mais2">
                <p>No plano de carreira, te ajudamos a visualizar a área que tem mais habilidade e gosta de fazer. 
                    Talvez você goste de matemática e sua opção seja cursar Engenharia, Administração, Matemática ou 
                    Arquitetura, mas você pode gostar da Engenharia de Produção que além de poder trabalhar nessa área,
                    poderá trabalhar em Logística e Programação. O plano de carreira serve exatamente para isso:
                    mostrar as possibilidades que existem para que você tenha ampla visão sobre os cursos e diminuir
                    as dúvidas que poderão ter como consequência desistência futura.</p>
                </span>  <br>
                <button onclick="VejaMais2()" id="btnVejaMais2"> Veja mais </button>        
            </div>
            <div>
                <img  class="foto" src="material3.png" >
               <!-- <h3> Conteúdos </h3> -->
               <span id="texto3"> 
                <p> Aqui você encontrará conteúdos direcionados à vestibulares e ao ENEM. Nosso foco é te 
                    apresentá-los de forma dinâmica e completa, mas que você, de fato, aprenda os raciocínios 
                    por detrás das fórmulas de Química, Física e Matemática e... </p></span>
                <span id="mais3">
                <p> Aqui você encontrará conteúdos direcionados à vestibulares e ao ENEM. Nosso foco é te 
                    apresentá-los de forma dinâmica e completa, mas que você, de fato, aprenda os raciocínios 
                    por detrás das fórmulas de Química, Física e Matemática e desenvolva a habilidade de conectar 
                    os assuntos de humanas para que sua competência na redação alcance os 200 pontos e você consiga
                    aumentar a sua média. Também, será possível realizar diversos exercícios sobre cada tema. </p>
                </span>  <br>
                <button onclick="VejaMais3()" id="btnVejaMais3"> Veja mais </button>   
            </div>
        </section> 

        <div class="anima">
        <div class="container"> 
        <div class="estatico"> Você pode </div>
            <ul class="dinamico">
                <li><span> ter sucesso </span> </li>
                <li><span> ser aprovado </span> </li>
                <li><span> estudar no Stude Mais </span> </li>
            </ul>
        </div>
        </div>

        <div class="cadastre"><a href="paginacadastro.php" class="bottom"> Venha estudar com a gente. Inscreva-se! </a></div>


        <section id = "materias">
        <div>
            <h2 class="materia2">Matérias</h2>
            <center> <img class="materia" src="Banner.png" alt="Materia"> </center>          
        </div>    
        </section>
        <center><section class="ftrodape">  </section>   </center>
        
        <section id = "tireduvidas"> </section>
            <ul>
                <li> ohfdohn </li>
                <li> dabhj </li>
                <li>  sjstyjk</li>
            </ul>
            <br>


        <footer> 
            <div class="boxs">
                <h2> Início </h2>
                <ul>
                    <li> <a href="#"> Home </a> </li>
                    <li> <a href="#materias"> Materias </a> </li>
                    <li> <a href="#"> Downloads </a> </li>
                </ul>
            </div>
            <div class="boxs">
                <h2 class="h2rodape"> Informações </h2>
                <ul>
                    <li> <a href="#contatos"> Contato </a> </li>
                    <li> <a href="mailto:jhulenysouza@outlook.com"> Email 2</a>
                </ul>
            </div>
            <div class="boxs">
                <h2> Sobre nós </h2>
                <p> O Stude Mais é um cursinho com o objetivo de preparar os alunos para o ingresso na graduação. </p>
            </div>
        </footer>

        <div class="footer">
            <div id = "logo"> </div>

            <div class="sociais"> 
                <div class="social"> 
                    <a href="https://www.instagram.com/?hl=en"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </div>
                <div class="social">
                    <a href="https://wa.me/5522999830410"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                </div>
                <div class="social"> 
                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>

    </body>
</html>