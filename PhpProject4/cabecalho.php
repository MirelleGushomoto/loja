//<?php
error_reporting(E_ALL ^ E_NOTICE);
require_once("mostra-alerta.php"); ?>

<html>
<head>
    <title>Minha loja</title>
    <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
    <div class="navbar navbar-inverse navbar-fixed-top">
     
        <div class="container">
            <div class="navbar-header">
                <div class="btn-group"> 
                    <a href="index.php" class="btn btn-warning">HOME</a>
                </div>
                            <a href="produto-formulario.php" class="btn btn-warning">ADICIONAR PRODUTOS</a>
                            <a href="produto-lista.php" class="btn btn-warning">PRODUTOS CADASTRADOS</a>

                </ul>
            </div>
        </div>
    </div>

    <div class="container">

    <div class="principal">

        <?php
 mostraAlerta("success");
        mostraAlerta("danger");
        ?>
