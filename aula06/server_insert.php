<?php 
    $banco = new PDO("sqlite:banco_dados.db");

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
    $cpf = $_POST['cpf'];

    $sql = "INSERT INTO USUARIO (nm_usuario, email, senha, cpf) VALUES (:nome, :email, :senha, :cpf)";

    $stmt = $banco->prepare($sql);

    $stmt->execute([
        ':nome'=>$nome,
        ':email'=>$email,
        ':senha'=>$senha,
        ':cpf'=>$cpf
    ]);

    echo 'Dados inseridos';
?>