<?php 

    include_once("connect.php");
    $nome_usuario = $_POST['usuario'];
    $email_usuario = $_POST['email'];
    $senha = $_POST['senha'];
    //echo "$nome_usuario - $email_usuario";
    
    $result_usuario = "INSERT INTO usuarios(usuarioNome, usuarioEmail, senha) VALUES ('$nome_usuario','$email_usuario', '$senha')";
    $resultado_usuario = mysqli_query($conn, $result_usuario);
    
    if(mysqli_affected_rows($conn) != 0){
                echo "
                    <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/aula/cadastro.php'>
                    <script type='text/javascript'>
                        alert('Usuario cadastrado com Sucesso.');
                    </script>
                ";    
            }else{
                echo "
                    <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/aula/cadastro.php'>
                    <script type='text/javascript'>
                        alert('O Usuario não foi cadastrado com Sucesso.');
                    </script>
                ";    
            }
?>
