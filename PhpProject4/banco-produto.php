<?php
require_once("conecta.php");

function listaProdutos($conexao) {
    $produtos = array();
    $resultado = mysqli_query($conexao, "select p.*, c.nome as categoria_nome from produtos as p join categorias as c on p.categoria_id = c.id");

    while($produto = mysqli_fetch_assoc($resultado)) {
        array_push($produtos, $produto);
    }

    return $produtos;
}
//Método lista produtos cria um array e utiliza o SELECT para listar os produtos. 

function insereProduto($conexao, $nome, $preco, $descricao, $categoria_id) {
    $query = "insert into produtos (nome, preco, descricao, categoria_id)
        values ('{$nome}', {$preco}, '{$descricao}', {$categoria_id})";
    return mysqli_query($conexao, $query);
}
//Método insere produto utiliza como parametro nome, preço etc depois utiliza insert para adicionar
function alteraProduto($conexao, $id, $nome, $preco, $descricao, $categoria_id) {
    $query = "update produtos set nome = '{$nome}', preco = {$preco}, descricao = '{$descricao}',
        categoria_id= {$categoria_id}, where id = '{$id}'";
    return mysqli_query($conexao, $query);
}
//Método altera produto utiliza como parametro nome, preço etc depois utiliza insert para alterar

function buscaProduto($conexao, $id) {
    $query = "select * from produtos where id = {$id}";
    $resultado = mysqli_query($conexao, $query);
    return mysqli_fetch_assoc($resultado);
}
function removeProduto($conexao, $id) {
    $query = "delete from produtos where id = {$id}";
    return mysqli_query($conexao, $query);
}
//Método insere produto utiliza como parametro apenas o id para deletar o produto todo
