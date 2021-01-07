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
    
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#Home">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#apresentacao">Apresentacao</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#sintomas">Sintomas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#especialidades">Especialidades</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contatos">Contato</a>
        </li>
       
      </ul>

      <ul>
            @if (Route::has('login'))
            
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
      </div>
      
    </div>
  </div>
</nav>
    <!-- Fixed navbar 
    
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
    
        
    
    <div class="container">
        
        
            
               <div class="text-center">
               <h2>
                SEJA BEM-VINDO </h2>
               </div>
           
                
                
           
        </div>
        <br><br>
         <br>
            <br>
        <a name="apresentacao"></a><!-- referencia para buscar na pagina o conteudo selecionado no MENU -->
        <div class="flex items-center">
               <div class="text-black-50">    
        <h2> Quem sou?</h2>
            <p>Por Dr. Nome completo</p>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.   </p>
            </div>
            </div>
        <br><br>

<a name="sintomas"> <!-- referencia para buscar na pagina o conteudo selecionado no MENU -->
        <div class="text-black-50">
            
                <h2 class="text-center">
                    Sintomas - Quando procurar (Especialização)?
            </a></h2> <br>
            <h4>Por Dr. Nome completo</h4>

            <ul>
                <div >
                    <div class="col-md-6">
                        <li>Tópico 1</li>
                        <li>Tópico 2</li>
                        <li>Tópico 3</li>
                    </div>
                    <div class="col-md-6">
                        <li>Tópico 4</li>
                        <li>Tópico 5</li>
                        <li>Tópico 5</li>
                    </div>
                </div>
            </ul><br>

            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.

            The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
           </p>
            <br>
            <div class="text-black-50">
                <h2 class=" text-center ">  VOCÊ SABIA?</h2> <br>
                    <h4>Por Dr. Nome completo</h4>

                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.

The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
                </p>
            </div>
            <br><br>

        </div>

 <a name="especialidades"> </a> <!-- referencia para buscar na pagina o conteudo selecionado no MENU -->
        <div class="text-black-50">
            <h2 class=" text-center">
        Nossas especialidades:
            </h2> <br>
            <h4>Por Dr. Nome completo</h4>

            <div class="row">
                <div class="col-md-3">
                    <img src="{{ URL::to('/assets/especialidade.png') }}" style="width:80%">
                </div>
                <div class="col-md-8">
                    <p> Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                    </p>

                </div>
            </div>
            <br><br>


            <div class="row">

                <div class="col-md-9">
                    <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                    </p>
                </div>
                <div class="col-md-3">
                    <img src="{{ URL::to('/assets/especialidade2.png') }}" style="width:80%">

                </div>
            </div>
            <br><br>
            
                <div class="row">

                    <div class="col-md-4">
                        <img src="{{ URL::to('/assets/cancerprostota.png') }}" style="width:50%">
                        <h5>Tratamento 1</h5>
                    </div>

                    <div class="col-md-4">
                        <img src="{{ URL::to('/assets/cancerbexiga.jpg') }}" style="width:50%">
                        <h5>Tratamento 2</h5>
                    </div>

                    <div class="col-md-4">
                        <img src="{{ URL::to('/assets/cancerrim.png') }}" style="width:30%">
                        <h5>Tratamento 3</h5>
                    </div>

                    <div class="col-md-4">
                        <img src="{{ URL::to('/assets/ejaculacaoprecoce.png') }}" style="width:30%">
                        <h5>Tratamento 4</h5>
                    </div>

                    <div class="col-md-4">
                        <img src="{{ URL::to('/assets/pedrarim.png') }}" style="width:50%">
                        <h5>Tratamento 5</h5>
                    </div>

                    <div class="col-md-4">
                        <img src="{{ URL::to('/assets/fimose.png') }}" style="width:30%">
                        <h5>Tratamento 6</h5>
                    </div>

                </div>
                <br><br>

<a name="contatos"></a> <!-- referencia para buscar na pagina o conteudo selecionado no MENU -->
                <!-- COMEÇA FORMULARIO CONTATO -->
                <div class="container">
                    <div style="text-align:center">
                        <h2 class=" text-center"> Contatos:</h2>
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