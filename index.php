<?php
include_once ('config.php');
include 'ChamarBoostrap.php';



?>
<!DOCTYPE html>

<html>
<head>

    <link href="css/estlioPaginaPrincipal.css" rel="stylesheet" />
    <?php
        include 'View/navHome.php';
    ?>
</head>
<body id="page-top">
<header class="masthead">
    <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-18 align-self-end">
                        <h1 class="text-uppercase text-white font-weight-bold">Seja Bem Vindo Ao Consutorio Medico</h1>
                        <hr class="divider my-4" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <h1 class="text-white-75 font-weight-light mb-5">Dr. Katsuki Bakugou</h1>
                    </div>
                </div>
            </div>
</header>
<!--Agendar-->
<section class="page-section bg-primary" id="about">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h1 class="text-white mt-0">Agende Seu Horario Já</h1>
                        <hr class="divider light my-4" />
                        <h3 class="text-white-50 mb-4">Login para agendar sua consulta com o Dr. Katsuki Bakugou</h3>
                        <a class="btn btn-light btn-xl js-scroll-trigger" href="View/Login.php">Agendar</a>
                    </div>
                </div>
            </div>
</section>
<!--Sobre Medico-->
<section class="page-section " id="SobMedico">
            <div class="container text-center">
                <h1 class="mb-4">Sobre o Dr.Katsuki Bakugou</h1>
                <hr class="divider my-4" />
                <h3 class="mb-4">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec metus sollicitudin, tincidunt massa sit amet, sagittis quam.
                Pellentesque metus lacus, eleifend et leo maximus, faucibus interdum elit. Nunc et massa sed justo dapibus congue vitae at ex. Etiam et euismod sem.
                Etiam aliquet cursus augue non commodo. Maecenas tristique congue venenatis. Suspendisse vitae eros non ipsum volutpat rutrum. In fringilla pellentesque gravida. Duis a placerat velit. Quisque quis aliquet nisl, ac aliquam nunc. Nulla fringilla, sapien ac molestie ullamcorper, turpis erat finibus metus, vitae mattis ligula est sit amet leo. Morbi eu hendrerit ex.
                <h3>
                <h3 class="mb-4">
                Etiam placerat elit massa, ut hendrerit metus laoreet ut. Suspendisse faucibus aliquam lorem, quis lacinia ante congue at. Etiam quis tempus dui. Ut consectetur dui non accumsan mollis.
                Etiam pellentesque, felis sit amet luctus elementum, ipsum nibh fermentum nisl, id ultrices ipsum magna in nunc. Sed vestibulum vestibulum fringilla. Sed cursus risus sit amet nisi eleifend vestibulum. Morbi vulputate congue nunc in imperdiet.
                Praesent ornare lacinia augue at consectetur.tae eros non ipsum volutpat rutrum. In fringilla pellentesque gravida. Duis a placerat velit. Quisque quis aliquet nisl, ac aliquam nunc. Nulla fringilla, sapien ac molestie ullamcorper, turpis erat finibus metus, vitae mattis ligula est sit amet leo. Morbi eu hendrerit ex.
                <h3>
            </div>
</section>
<!--Sobre Especialidade-->
<section class="page-section bg-primary" id="SobEspec">
            <div class="container text-center">
                <h1 class="text-white mt-0"> Sobre o Especialidade</h1>
                <hr class="divider light mb-4" />
                <h3 class="text-white-50 mb-4">
                Sed id semper eros. Morbi ultricies sit amet ipsum eu porta. Fusce non rhoncus tellus. Suspendisse tempus iaculis condimentum. Nullam dictum libero vel est suscipit, ut egestas elit iaculis.
                Duis maximus sollicitudin lectus eu commodo. Maecenas blandit euismod diam, non porttitor diam placerat dignissim. Nunc porta sapien sed felis suscipit, a porttitor elit imperdiet.
                Quisque interdum pellentesque lectus, eu bibendum nisi malesuada id. Sed accumsan lobortis magna. Vivamus et ante tellus. Fusce eget porta leo. In vehicula tincidunt odio id placerat. Vestibulum efficitur semper felis, laoreet rutrum tortor iaculis et.
                <h3>
                <h3 class="text-white-50 mb-4">
                Pellentesque porttitor vel ipsum vel tincidunt. Aliquam sollicitudin nisi vel urna sagittis molestie. Quisque condimentum mauris arcu, eget fringilla est maximus eu. Vivamus condimentum nulla in magna dictum, quis ultrices nisl fringilla.
                Fusce volutpat dolor sapien, sit amet tincidunt lacus fermentum eu. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nulla augue ligula, euismod eu massa a, convallis elementum neque. Vivamus eget tristique nisl. Etiam vel neque scelerisque, suscipit nisi at, posuere nibh. Sed dignissim sem et sem convallis ultricies.
                Integer mauris tortor, egestas ut dictum ut, dapibus eu dolor. Integer in luctus massa. Suspendisse sed nibh fermentum, tincidunt nulla eu, commodo quam. Quisque at hendrerit diam.
                <h3>
            </div>
</section>
<section class="page-section" id="Local">
    <div class="container text-center">
        <h2>Localização</h2>
        <hr class="divider my-4" />
        <p> Aqui você sabe onde estamos. </p>
        <iframe style="width:100%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3182.101309593258!2d-45.98585958534364!3d-23.317618758520535!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cdcc83f96cb351%3A0xee397d3e5240b75f!2sInstituto%20Federal%20de%20Educa%C3%A7%C3%A3o%2C%20Ci%C3%AAncia%20e%20Tecnologia%20de%20S%C3%A3o%20Paulo%2C%20Campus%20Jacare%C3%AD!5e1!3m2!1spt-BR!2sbr!4v1606625973240!5m2!1spt-BR!2sbr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" "border=1px" solid align="center"></iframe>
    </div>
</section>

</body>
</html>

