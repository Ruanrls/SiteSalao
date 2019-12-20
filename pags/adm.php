<!DOCTYPE html>
<html lang="pt-br">

    <!-- Metas -->
    <?php
        include('../padrao/head.php');
    ?>

        <title>Administradores</title>
    </head>
    <body>
        <!-- Cabeçalho -->
        <?php
            include('../padrao/header.php');
        ?>

        <div class="adm">
            <input class="inputsCad" type="text" id="user" name="user" placeholder="Usuário">
            <input class="inputsCad" type="password" id="senha" name="senha" placeholder="Senha">
        </div>

        <!-- Rodape -->
        <?php
            include('..padrao/footer.php');
        ?>
        <script type="text/javascript" src="../script.js"></script>
    </body>
</html>