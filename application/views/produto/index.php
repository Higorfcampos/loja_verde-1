<?php
$base = __DIR__;
include $base .'\..\layout\menu.php';
 
 ?>

<html>
<head>

</head>
<body>
    <h1> Listar Produtos </h1>

    <hr />
    <p> <a href="/produto/cadastrarProduto"> Adicionar Produto  </a> </p>


    <a href="/produto/iniciarEditar/<?=$produto->getCodigo()?>"> EDITAR </a>
    


</body>
</html>
