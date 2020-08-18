<!DOCTYPE html>
<html lang="pt-br">

        <!-- Metas -->
        <?php
            include('../padrao/head.php');
        ?>

        <title>Login</title>
    </head>
    <body>
    
    <!-- Cabeçalho -->
    <?php
        include('../padrao/header.php');
    ?>
    <!-- CONTEUDO -->
    <h1 class="precos" >Login</h1>
    <form class="form" id="form1">
        <div class="form-group">
            <label for="exampleInputEmail1">Usuário</label>
            <input type="text" class="form-control" id="inlineFormInputGroupUsername" aria-describedby="emailHelp" placeholder="Seu usuário" required>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Senha</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha" required>
        </div>
        <button type="submit" class="btn btn-primary" style="font-size:0.8em; background-color: black;">Entrar</button>
    </form>

    <!-- RODAPE -->
    <?php
        include('../padrao/footer.php');
    ?>
    </body>
</html>