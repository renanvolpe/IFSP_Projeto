<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<title>CLINICA MÉDICA</title>

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

<!-- Styles -->
<style>

    <!-- inicio .CSS boostrap -->
    html {
        line-height: 1.15;
        -webkit-text-size-adjust: 100%
    }

    body {
        margin: 0
        
    }

    a {
        background-color: transparent
    }

    [hidden] {
        display: none
    }

    html {
        font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
        line-height: 1.5
    }

    *,
    :after,
    :before {
        box-sizing: border-box;
        border: 0 solid #e2e8f0
    }

    a {
        color: inherit;
        text-decoration: inherit
    }

    svg,
    video {
        display: block;
        vertical-align: middle
    }

    video {
        max-width: 100%;
        height: auto
    }

    .bg-white {
        --bg-opacity: 1;
        background-color: #fff;
        background-color: rgba(255, 255, 255, var(--bg-opacity))
    }

    .bg-gray-100 {
        --bg-opacity: 1;
        background-color: #f7fafc;
        background-color: rgba(247, 250, 252, var(--bg-opacity))
    }

    .border-gray-200 {
        --border-opacity: 1;
        border-color: #edf2f7;
        border-color: rgba(237, 242, 247, var(--border-opacity))
    }

    .border-t {
        border-top-width: 1px
    }

    .flex {
        display: flex
    }

    .grid {
        display: grid
    }

    .hidden {
        display: none
    }

    .items-center {
        align-items: center
    }

    .justify-center {
        justify-content: center
    }

    .font-semibold {
        font-weight: 600
    }

    .h-5 {
        height: 1.25rem
    }

    .h-8 {
        height: 2rem
    }

    .h-16 {
        height: 4rem
    }

    .text-sm {
        font-size: .875rem
    }

    .text-lg {
        font-size: 2.125rem
    }

    .leading-7 {
        line-height: 1.75rem
    }

    .mx-auto {
        margin-left: auto;
        margin-right: auto
    }

    .ml-1 {
        margin-left: .25rem
    }

    .mt-2 {
        margin-top: .5rem
    }

    .mr-2 {
        margin-right: .5rem
    }

    .ml-2 {
        margin-left: .5rem
    }

    .mt-4 {
        margin-top: 1rem
    }

    .ml-4 {
        margin-left: 1rem
    }

    .mt-8 {
        margin-top: 2rem
    }

    .ml-12 {
        margin-left: 3rem
    }

    .-mt-px {
        margin-top: -1px
    }

    .max-w-6xl {
        max-width: 72rem
    }

    .min-h-screen {
        min-height: 100vh
    }

    .overflow-hidden {
        overflow: hidden
    }

    .p-6 {
        padding: 1.5rem
    }

    .py-4 {
        padding-top: 1rem;
        padding-bottom: 1rem
    }

    .px-6 {
        padding-left: 1.5rem;
        padding-right: 1.5rem
    }

    .pt-8 {
        padding-top: 2rem
    }

    .fixed {
        position: fixed
    }

    .relative {
        position: relative
    }

    .top-0 {
        top: 0
    }

    .right-0 {
        right: 0
    }

    .shadow {
        box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
    }

    .text-center {
        text-align: center
    }

    .text-gray-200 {
        --text-opacity: 1;
        color: #edf2f7;
        color: rgba(237, 242, 247, var(--text-opacity))
    }

    .text-gray-300 {
        --text-opacity: 1;
        color: #e2e8f0;
        color: rgba(226, 232, 240, var(--text-opacity))
    }

    .text-gray-400 {
        --text-opacity: 1;
        color: #cbd5e0;
        color: rgba(203, 213, 224, var(--text-opacity))
    }

    .text-gray-500 {
        --text-opacity: 1;
        color: #a0aec0;
        color: rgba(160, 174, 192, var(--text-opacity))
    }

    .text-gray-600 {
        --text-opacity: 1;
        color: #718096;
        color: rgba(113, 128, 150, var(--text-opacity))
    }

    .text-gray-700 {
        --text-opacity: 1;
        color: #4a5568;
        font-size: 19px;
        font-weight: bolder;
        ;
        color: rgba(0, 0, 255, var(--text-opacity))
    }

    .text-gray-900 {
        --text-opacity: 1;
        color: #1a202c;
        color: rgba(26, 32, 44, var(--text-opacity))
    }

    .underline {
        text-decoration: underline
    }

    .antialiased {
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale
    }

    .w-5 {
        width: 1.25rem
    }

    .w-8 {
        width: 2rem
    }

    .w-auto {
        width: auto
    }

    .grid-cols-1 {
        grid-template-columns: repeat(1, minmax(0, 1fr))
    }

    @media (min-width:640px) {
        .sm\:rounded-lg {
            border-radius: .5rem
        }

        .sm\:block {
            display: block
        }

        .sm\:items-center {
            align-items: center
        }

        .sm\:justify-start {
            justify-content: flex-start
        }

        .sm\:justify-between {
            justify-content: space-between
        }

        .sm\:h-20 {
            height: 5rem
        }

        .sm\:ml-0 {
            margin-left: 0
        }

        .sm\:px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .sm\:pt-0 {
            padding-top: 0
        }

        .sm\:text-left {
            text-align: left
        }

        .sm\:text-right {
            text-align: right
        }
    }

    @media (min-width:768px) {
        .md\:border-t-0 {
            border-top-width: 0
        }

        .md\:border-l {
            border-left-width: 1px
        }

        .md\:grid-cols-2 {
            grid-template-columns: repeat(2, minmax(0, 1fr))
        }
    }

    @media (min-width:1024px) {
        .lg\:px-8 {
            padding-left: 2rem;
            padding-right: 2rem
        }
    }

    @media (prefers-color-scheme:dark) {
        .dark\:bg-gray-800 {
            --bg-opacity: 1;
            background-color: #2d3748;
            background-color: rgba(45, 55, 72, var(--bg-opacity))
        }

        .dark\:bg-gray-900 {
            --bg-opacity: 1;
            background-color: #1a202c;
            background-color: rgba(26, 32, 44, var(--bg-opacity))
        }

        .dark\:border-gray-700 {
            --border-opacity: 1;
            border-color: #4a5568;
            border-color: rgba(74, 85, 104, var(--border-opacity))
        }

        .dark\:text-white {
            --text-opacity: 1;
            color: #fff;
            color: rgba(255, 255, 255, var(--text-opacity))
        }

        .dark\:text-gray-400 {
            --text-opacity: 1;
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--text-opacity))
        }
    }

    <!-- fim .CSS boostrap --
</style>

<style>
    body {
        text-align:justify;
        color: black;
        background-color: transparent;
        width: 100%;
        height: 100%;
        /*background-image: url("assets/home.jpg");*/
        font-family: 'Verdana';
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        background-size: 100% 100%;
    }

    #corLR {
        /*  background-color: white; /*#67a8cd ;*/
        background-color: transparent;
        color: white;
        font-size: 32px;
        text-align: center;
        font-weight: bolder;
        font-family: "Sofia";
        font-size: 22px;
        font-family: "Sofia";
    }

    #corLogado {
        /*background-color: white; /* #67a8cd ;*/
        background-color: transparent;
        color: yellow;
        font-size: 32px;
        text-align: center;
        font-weight: bolder;
        font-family: "Sofia";
        font-size: 22px;
        font-family: "Sofia";
    }

    #corSair {
        /*background-color: #67a8cd ; /* #67a8cd ;*/
        /*background-color:transparent;*/
        color: red;
        font-size: 32px;
        text-align: center;
        font-weight: bolder;
        font-family: "Sofia";
        font-size: 22px;
        font-family: "Sofia";
    }

    #sbv {
        color: green;
        font-size: 29px;
        font-weight: bolder;
        text-align: center;
    }




    .topnav {
        overflow: hidden;
        background-color: #333;
        text-align: center;
        white-space: nowrap;
        position: fixed;
        width: 100%;
    }

    .topnav a {
        float: left;
        color: #f2f2f2;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
        text-align: center;
        white-space: nowrap;
        position: static;
    }

    .topnav a:hover {
        background-color: #ddd;
        color: black;
    }

    .topnav a.active {
        background-color: #4CAF50;
        color: white;
    }

    .topnav-right {
        float: right;
    }



    /*inicio formulario contato*/
    * {
        box-sizing: border-box;
    }

    /* Style inputs */
    input[type=text],
    select,
    textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        margin-top: 6px;
        margin-bottom: 16px;
        resize: vertical;
    }

    input[type=submit] {
        background-color: #4CAF50;
        color: black;
        padding: 12px 20px;
        border: none;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: black;
    }

    /* Style the container/contact section */
    .container {
        border-radius: 5px;
        /*background-color: #f2f2f2;*/
        padding:10px;
    }

    /* Create two columns that float next to eachother */
    .column {
        float: left;
        width: 50%;
        margin-top: 6px;
        padding: 20px;
    }

    /* Clear floats after the columns */
    .row:after {
        content: "";
        display: table;
        clear: both;
    }

    /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 600px) {

        .column,
        input[type=submit] {
            width: 100%;
            margin-top: 0;
        }
    }

    /*fim formulario contato*/

    #botao{
    background-color: #4292bf;
    width: 70px;
    height: 50px;
    font-size: 15px;
    color: white;

    }

</style>


</head>

<body role="" class="bcolor" id="bodycor">

    <!-- Fixed navbar -->
    <div class="topnav" id="tituloMenu">
        <a class="active" href="#home">Home</a>
        <a href="#apresentacao">Apresentação</a>
        <a href="#sintomas">Sintomas</a>
        <a href="#especialidades">Especialidades</a>
        <a href="#contatos">Contato</a>

        <!--/ <form class="form-inline my-2 my-lg-0" aling=left>
                <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
                <button class="btn btn-outline-success my-2 my-sm-0" id="botao" type="submit">Pesquisar</button>
            </form> -->
    </div><a name="home"></a> <!-- referencia para buscar na pagina o conteudo selecionado no MENU -->
  <br><br>
   
    <!--/.nav-collapse -->
<div class="container">
    <div class="">
        <ul>
            @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                <h6 class="a" id="corLogado"> Conta logada: <a href="{{ url('/home') }}" class="a" id="corLR">{{ Auth::user()->name }}


                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();" class="a" id="corSair"> {{ __('Sair') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                </h6>
                </a>
        </ul>
    </div>


    <ul>
        @else
        <a href="{{ route('login') }}" class="a" id="corLR">Login</a>

        @if (Route::has('register'))
        <a href="{{ route('register') }}" class="a" id="corLogado">Cadastre-se</a>
        @endif
        @endauth
        </div>
        @endif
    </ul>
    <br><br>
    <div class="container">
        <div class="row">
        <div class="p-4 border-t border-gray-200 dark:border-gray-700 md:border-l">
            <div class="flex items-center">
               <div class="text-black-50">
            <h2 class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">
                SEJA BEM VINDO a </h2>
                <br><br><br>
                </div>
                 <h2 id="sbv">Clinical Vip !!!</h2>
            </div>
        </div>
        <br><br>
         <br>
            <br>
        <a name="apresentacao"></a><!-- referencia para buscar na pagina o conteudo selecionado no MENU -->
        <div class="flex items-center">
               <div class="text-black-50">    
        <h2> Quem sou?</h2>
            <p>Por Dr. Aurélio de Souza Lemes</p>
            <p> Gostaria de agradecer sua visita ao site do meu consultório. Aqui, você encontrará informações sobre o meu trabalho como urologista e meus locais de atendimento, além de poder agendar consultas de forma on-line e atendimento por Tele-orientação. Sinta-se à vontade para navegar pelo conteúdo.

                Durante 11 anos longe de Goiânia, busquei me aperfeiçoar na minha área através de cursos de Videolaparoscopia, Endourologia e iniciação científica. Visando um aperfeiçoamento constante, participo de congressos nacionais e internacionais com frequência.

                Hoje, de volta a Goiânia há 4 anos, sinto-me preparado para atender a população goiana da melhor forma possível. Acredito que o médico deve estar sempre ao lado do paciente, mantendo uma relação de proximidade, objetiva e resolutiva.
            </p>
            </div>
            </div>
        <br><br>

<a name="sintomas"> <!-- referencia para buscar na pagina o conteudo selecionado no MENU -->
        <div class="text-black-50">
            
                <h2 class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">
                    Sintomas - Quando procurar um Urologista?
            </a></h2> <br>
            <p>Por Dr. Aurélio de Souza Lemes</p>

            <ul>
                <div class="col-md-12">
                    <div class="col-md-8">
                        <li>Consulta de rotina</li>
                        <li>Sintomas de pedra nos rins</li>
                        <li>Incontinência urinária</li>
                    </div>
                    <div class="col-md-4">
                        <li>Cirurgia videolaparoscopia</li>
                        <li> Aumento da próstata</li>
                    </div>
            </ul><br>

            <p>A urologia é a especialidade médica que cuida do trato urinário do homem, da mulher e de todo o sistema reprodutor masculino no que envolve testículo, epidídimos, ducto deferente, vesículas seminais, próstata e pênis.

                Além disso, o urologista se preocupa com os cuidados dos seguintes órgãos: rins, ureteres, bexiga, urina, uretra e todos os órgãos do sistema reprodutor masculino. Conheça os principais problemas e incômodos que motivam a vinda dos pacientes ao nosso consultório.
            </p>
            <br>
            <div class="text-black-50">
                <h2 class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">
                    VOCÊ SABIA?</h2> <br>
                <p>Por Dr. Aurélio de Souza Lemes</p>

                <p> 1 a cada 6 homens vai apresentar câncer de próstata após os 80 anos;
                    Normalmente, o câncer de próstata não tem sintomas. Quando eles surgem, é sinal de que o caso pode estar avançado;
                    Em 2016, foram diagnosticados 65 mil novos casos de câncer de próstata no Brasil. Trata-se do 2º tipo de câncer mais comum em homens, ficando atrás somente do câncer de pele do tipo não melanoma;
                    Se descoberta no início, a doença tem 90% de chance de cura.
                </p>
            </div>
            <br><br>

        </div>

 <a name="especialidades"> </a> <!-- referencia para buscar na pagina o conteudo selecionado no MENU -->
        <div class="text-black-50">
            <h2 class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">
        NOSSAS ESPECIALIDADES 
            </h2> <br>
            <p>Por Dr. Aurélio de Souza Lemes</p>

            <div class="row">
                <div class="col-md-3">
                    <img src="/assets/especialidade.png" style="width:80%">
                </div>
                <div class="col-md-8">
                    <p> 1 a cada 6 homens vai apresentar câncer de próstata após os 80 anos;
                        Normalmente, o câncer de próstata não tem sintomas. Quando eles surgem, é sinal de que o caso pode estar avançado;
                        Em 2016, foram diagnosticados 65 mil novos casos de câncer de próstata no Brasil. Trata-se do 2º tipo de câncer mais comum em homens, ficando atrás somente do câncer de pele do tipo não melanoma;
                        Se descoberta no início, a doença tem 90% de chance de cura.
                    </p>

                </div>
            </div>
            <br><br>


            <div class="row">

                <div class="col-md-9">
                    <p> UROLOGIA ONCÓLICA: A urologia oncológica atua no sentido de combater tumores, sendo
                        voltada para o diagnóstico e o tratamento de tumores malignos do sistema genito-urinário.
                        Câncer de próstata, bexiga e rim incluem a gama de patologias tratadas
                    </p>
                </div>
                <div class="col-md-3">
                    <img src="/assets/especialidade2.png" style="width:80%">

                </div>
            </div>
            <br><br>
            
                <div class="row">

                    <div class="col-md-4">
                        <img src="/assets/cancerprostota.png" style="width:50%">
                        <p>CANCER DE PROSTATA</p>
                    </div>

                    <div class="col-md-4">
                        <img src="/assets/cancerbexiga.jpg" style="width:50%">
                        <p></p>CANCER DE BEXIGA</p>
                    </div>

                    <div class="col-md-4">
                        <img src="/assets/cancerrim.png" style="width:30%">
                        <p></p>CANCER DE RIM</p>
                    </div>

                    <div class="col-md-4">
                        <img src="/assets/ejaculacaoprecoce.png" style="width:30%">
                        <p></p>EJACULAÇÃO PRECOCE</p>
                    </div>

                    <div class="col-md-4">
                        <img src="/assets/pedrarim.png" style="width:50%">
                        <p></p>PEDRA NOS RINS</p>
                    </div>

                    <div class="col-md-4">
                        <img src="/assets/fimose.png" style="width:30%">
                        <p></p>FIMOSE</p>
                    </div>

                </div>
                <br><br>

<a name="contatos"></a> <!-- referencia para buscar na pagina o conteudo selecionado no MENU -->
                <!-- COMEÇA FORMULARIO CONTATO -->
                <div class="container">
                    <div style="text-align:center">
                        <h2 class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">
                          <br>  Contatos</h2>
                        <p>Visite-nos ou deixe seu recado:</p>
                    </div>


                    <!--  /**Aqui começa div do formulário de contato e maps de localizacao*/  -->
                    <div class="row">
                        <div class="column">

                            <!--  /**Aqui começa maps de localizacao*/  -->
                            <div class="text-black-50">
                                <h2 class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Localização</h2>
                                <p> Aqui você sabe onde estamos. </p>
                                <iframe style="width:100%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3182.101309593258!2d-45.98585958534364!3d-23.317618758520535!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cdcc83f96cb351%3A0xee397d3e5240b75f!2sInstituto%20Federal%20de%20Educa%C3%A7%C3%A3o%2C%20Ci%C3%AAncia%20e%20Tecnologia%20de%20S%C3%A3o%20Paulo%2C%20Campus%20Jacare%C3%AD!5e1!3m2!1spt-BR!2sbr!4v1606625973240!5m2!1spt-BR!2sbr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" "border=1px" solid align="center"></iframe>
                            </div>
                            <p>Instituto Federal de Educação, Ciência e Tecnologia de São Paulo, Campus Jacareí
                                R. Antônio Fogaça de Almeida, 200 - Jardim America, Jacareí - SP, 12322-030</p>
                            <p> (12) 2128-5200</p>
                        </div>
                        <!--  /**Aqui fim maps de localizacao*/  -->

                        <!--  /**Aqui começa formulário de contato */  -->
                        <div class="column">
                            <form action="/action_page.php">
                                <label for="fname">Nome</label>
                                <input type="text" id="fname" name="firstname" placeholder="Informe seu nome..">
                                <label for="lname">Telefone</label>
                                <input type="text" id="lname" name="telefone" placeholder="Informe seu telefone..">
                                <label for="lname">E-mail</label>
                                <input id="email" type="email" class="form-control" name="email" placeholder="Digite seu email" maxlength="120" value="{{ old('email') }}" required autofocus>
                                </select>
                                <label for="subject">Subject</label>
                                <textarea id="subject" name="subject" placeholder="Write something.." ></textarea>
                                <input id="botao" type="submit" value="Enviar">
                            </form>
                        </div>
                        <!--fim FORMULARIO CONTATO -->
                    </div> <!--  /**Aqui começa div ROW do formulário de contato e maps de localizacao*/  -->
                </div> <!--  /**fim CONTAINER*/  -->


                <!--  /**Aqui TERMINA div do formulário de contato e maps de localizacao*/  -->

                <h2 id="sbv">Muito obrigado por visitar nosso site!!!</h2>
            

                <br><br>
            </div>

        </div> <!-- finaliza <div class="container"> -->
</body>

</html>