<!DOCTYPE html>
<html lang="pt-br">

    <!-- Metas -->
    <?php
        include('../padrao/head.php');
    ?>

        <title>Perfil</title>
    </head>
    <body>
        <!-- Cabeçalho -->
        <?php
            include('../padrao/header.php');
        ?>

        <!-- CONTEUDO -->
        <h1 class="precos">Meu Perfil</h1>
        <form class="form">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Usuário</label>
                    <input type="text" class="form-control" id="user" readonly value="Seu usuario">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Nome</label>
                    <input type="text" class="form-control" id="pass" readonly value="Seu nome">
                </div>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" id="email" readonly value="Seu email">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Agendamentos</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" readonly></textarea>
            </div>
        </form>
        <!-- Rodape -->
        <?php
            include('../padrao/footer.php');
        ?>
        <script type="text/javascript" src="../script.js"></script>
    </body>
</html>