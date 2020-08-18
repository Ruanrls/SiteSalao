<?php
    $nome = $_POST['nome'];
    $usuario = $_POST['usuario'];
    $senha = MD5($_POST['senha']);
    $email = $_POST['email'];
    $celular = $_POST['celular'];
    $connect = mysql_connect('mysqli', 'root', 'pass');
    $db = mysql_select_db('banco');
    $query_select = "SELECT usuario FROM cliente where usuario = '$usuario'"
    $select = mysql_query($query_select,$connect);
    $array = mysql_fetch_array($select);
    $logarray = $array['usuario'];

    if( $login == "" || $login == NULL ){
        echo "<script language='javascript' type='text/javascript'>
        alert('O campo login deve ser preenchido');window.location.href='
        cadastro.html';</script>";
    }else{
        if( $logarray == $login){
            echo"<script language='javascript' type='text/javascript'>
            alert('Esse login já existe');window.location.href='
            cadastro.html';</script>";
            die();
        }
        
        $query = "INSERT into cliente (usuario, senha, nome, email, celular) values ('$usuario', '$senha', '$nome', '$email', '$celular')";
        $insert = mysql_query($query, $connect);
        if( $insert){
            echo"<script language='javascript' type='text/javascript'>
          alert('Usuário cadastrado com sucesso!');window.location.
          href='login.html'</script>";
        }else{
            echo"<script language='javascript' type='text/javascript'>
          alert('Não foi possível cadastrar esse usuário');window.location
          .href='cadastro.html'</script>";
        }
    }
?>