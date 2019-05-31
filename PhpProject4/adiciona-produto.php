<?php require_once("cabecalho.php");
      require_once("banco-produto.php");
      require_once("logica-usuario.php");

verificaUsuario(); //Chama o método verficiaUsuario e confere se ele é admin para poder adicionar novos itens.

$nome = $_POST["nome"];
$preco = $_POST["preco"];
$descricao = $_POST["descricao"];
$categoria_id = $_POST['categoria_id'];

//Pegando os valores via método POST 
//
//
//Confere se todos os dados foram inseridos corretamente

if(insereProduto($conexao, $nome, $preco, $descricao, $categoria_id)) { ?>
   <div class="alert alert-warning" role="alert"> O produto <?= $nome; ?> adicionado com sucesso!</div>
<?php } else {
    $msg = mysqli_error($conexao);
?>
 
    <div class="alert alert-warning" role="alert">O produto <?= $nome; ?> não foi adicionado. Por favor, adicione todas as informações 
necessárias <?= $msg ?></p>
<?php
}
?>

<?php require_once("rodape.php"); ?>
