<?php 
    $banco = new PDO("sqlite:banco_dados.db");
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql="SELECT * FROM USUARIO WHERE email=:email";

    $stmt = $banco->prepare($sql);

    if($stmt){
        $stmt->execute([':email'=>$email]);
        $usuario = $stmt->fetchAll((PDO::FETCH_ASSOC));

        if($usuario && password_verify($senha, $usuario['password'])){
            $_SESSION['user_id'] = $usuario['id'];
            $_SESSION['user_email'] = $usuario['email'];
    }}

?>