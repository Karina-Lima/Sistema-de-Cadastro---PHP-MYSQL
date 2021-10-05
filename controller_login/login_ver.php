<?php

$nome = $_POST['nome'];
$email = $_POST['email'];

$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "syscadastro";
$dbcon = new MySQLi("$host", "$usuario", "$senha", "$banco");

//executar pesquisa no banco de dados
$sql = $dbcon->query("SELECT * FROM clientes WHERE nome = '$nome' AND email= '$email' ");

//laço para verificar conexao com o banco
if ($nome === 'admin' and $email === 'admin'){
    header("Location: ../user_admin.php");
}else{

    if (mysqli_num_rows($sql) > 0) {
        $user = $nome;
        header("Location: ../user_ok.php?nome=$nome");
    } else {
        $user = $nome;
        header("Location: ../user_erro.php?nome=$nome");
    }    

}


