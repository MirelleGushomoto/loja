<?php require_once ("banco-usuario.php");
      require_once("logica-usuario.php");
$usuario = buscaUsuario($conexao, $_POST["email"], $_POST["senha"]);
if($usuario == null) {
    $_SESSION["danger"] = "Usuário ou senha inválido.";
    header("Location: index.php");
} else {
    $_SESSION["success"] = "Usuário logado com sucesso.";
    logaUsuario($usuario["email"]);
    header("Location: index.php");
}
die();

//Inicia o método busca usuário e pega os atributos via POST. 
//Caso ele não preencha corretamente, apresenta mensagem de erro. 
//Caso tenha preenchido, inicia metodo logaUsuario 
