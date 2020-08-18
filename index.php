<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- METAS -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no,user-scalable=no">
    <title>Document</title>

    <link rel="stylesheet" href="assets/css/style.css">

    <!-- GOOGLE FONTS --> 
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&family=Tangerine:wght@700&display=swap" rel="stylesheet">
    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    
    <!-- CABEÇALHO -->
    <div class="bg">
        <header class="container col-auto">
            <div class='menu'>
                <a href="index.php"><img src="assets/images/logo.jpg" class="logo"></a>

                <nav class="navigator navbar navbar-expand-lg navbar-dark bg-black" style="float: right; border-radius: 15px;">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <ul class="navbar-nav mr-auto">
                            <div class="navbar-nav bg-menu">
                                <a style="color: white;" class="nav-item nav-link links" href="#">Home</a>
                                <a style="color: white;" class="nav-item nav-link links" href="#">Localização</a>
                                <a style="color: white;" class="nav-item nav-link links" href="#">Serviços</a>
                                <a style="color: white;" class="nav-item nav-link links" href="#">História</a>
                            </div>
                        </ul>
                    </div>
                </nav>

                <div class="sociais">
                    <a class="botoes" href="https://www.facebook.com/fernanda.vieira.31586526">
                    <i class="fab fa-facebook-square"></i>
                    </a>
                    <a class="botoes"  href='https://www.instagram.com/fernanda.vieirareis/'>
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="botoes" style="cursor: pointer" onclick='alert("Entre em contanto com este numero: (37) 99839-1269")'>
                        <i class="fab fa-whatsapp"></i>
                    </a>
                </div>

            </div>
        </header>
    </div>

<!-- BODY -->

    <div class="tudo">
        <div class="row no-gutters">
            <div class="titulo col" style="margin-left: 25%;">
                <h1 class="titulo">Fernanda Vieira</h1>
            </div>            
            <div class="divLogin col">
                <a class="btn btn-dark" href="#"><span class="icon fas fa-user"></span> Login</a>
                <a class="btn btn-dark" href="#"><span class="icon fas fa-user-plus"></span> Registrar</a>
            </div>
        </div>
        <br>
        <div class="containImg">
            <img src="assets/images/fotosalao.jpg" class="fotoSalao" alt="Foto do salão">
            <div class="imgText">
                <h1 class="frase">Ser cabelereira é um dom que vai das mãos ao coração!</h1>
            </div>
        </div>
        <div class="horario">
            <h1 class="clock"><i class="far fa-clock"></i></h1>
            <h1 class="info">Segunda a Sábado - 7:00 às 20:00</h1>
        </div>
    </div>  

<!-- FONT AWESOME -->
<script src="https://kit.fontawesome.com/e29d3659d9.js" crossorigin="anonymous"></script>
<!-- BOOTSTRAP SCRIPTS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>