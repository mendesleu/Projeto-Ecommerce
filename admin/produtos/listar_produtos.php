<?php
require_once "../conn.php";

session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Produtos - Ecommerce</title>

    <link rel="stylesheet" media="all" type="text/css" href="../../css/admin/style.css" />
    <link rel="stylesheet" media="all" type="text/css" href="../../css/admin/produtos.css" />

</head>

<body>

    <header>
        <?php include "../menu.php" ?>
    </header>

    <main>

        <section id="containerListarProduto">

            <div id="containerSearch">

                <form action="" method="POST">
                    <input type="search" name="search" placeholder="Buscar por nome ou SKU">
                    <button class="botao">Buscar</button>
                </form>

                <button class="botao" onclick="">Filtrar</button>

            </div>

            <div id="containerListar">

                <div class="boxListar first">
                    <div style="display: flex; align-items:center; margin-right:10px"><input type="checkbox"></div>
                    <div style="width: 300px;"><strong>Produto</strong></div>
                    <div style="width: 100px; text-align: center;"><strong>Categoria</strong></div>
                    <div style="width: 100px; text-align: center;"><strong>Preço</strong></div>
                    <div style="width: 100px; text-align: center;"><strong>Estoque</strong></div>
                    <div style="width: 100px; text-align: center;"><strong>Status</strong></div>
                </div>

                <?php

                $pg = isset($_GET['pg']) ? $_GET['pg'] : "1";
                $search = isset($_POST['search']) ? $_POST['search'] : "all";
                
                // Quantidade maxima a exibir por pagina
                $maximo = 5;

                // Calcula a página de qual valor será exibido
                $inicio = ($maximo * $pg) - $maximo;

                if($search == 'all'){
                    $select_type = "SELECT * FROM produtos LIMIT $inicio, $maximo";
                }else{
                    $select_type = "SELECT * FROM produtos WHERE sku LIKE '%$search%' OR nome LIKE '%$search%' OR ean LIKE '%$search%'";
                }

                $select = $select_type;
                $query = mysqli_query($conn, $select);

                if ($query->num_rows > 0) {
                    while ($listar = $query->fetch_assoc()) {
                ?>

                        <div class="boxListar second">
                            <div style="display: flex; align-items:center; margin-right:10px"><input type="checkbox"></div>
                            <div style="width: 300px;" class="boxNomeProduto"><?= $listar['nome'] ?></div>
                            <div style="width: 100px; text-align: center; text-transform: capitalize;"><?= $listar['categoria'] ?></div>
                            <div style="width: 100px; text-align: center;">R$ <?= number_format($listar['venda'], 2, ",", ".") ?></div>
                            <div style="width: 100px; text-align: center;"><?= $listar['quant_estoque'] ?></div>
                            <div style="width: 100px; text-align: center;">
                                <?php if ($listar['ativado']) {
                                    echo "Ativo";
                                } else {
                                    echo "Inativo";
                                } ?>
                            </div>
                        </div>

                <?php
                    }
                }

                // Paginação
                $selectPG = "SELECT id_produto FROM produtos";
                $query = mysqli_query($conn, $selectPG);

                if ($query->num_rows > 0) {
                    // Total de registro da tabela
                    $numTotal = mysqli_num_rows($query);

                    // Calculo do total de pg a ser exibido
                    $totalPG = ceil($numTotal / $maximo);
                }

                // Quantidade de blocos de pg a ser exibido
                $exibir = 1;

                // Monta o link de proximo e anterior
                $anterior = (($pg - 1) == 0) ? 1 : $pg - 1;
                $posterior = (($pg + 1) == 0) ? 1 : $pg + 1;
                ?>

                <div id="containerPaginacao">

                    <?php
                    if ($pg > 1) {
                    ?>

                        <a href="?pg=<?= $anterior ?>">
                            <div class="boxPaginacao"><strong><</strong>
                            </div>
                        </a>

                    <?php
                    }
                    ?>

                    <a href="?pg=1">
                        <div class="boxPaginacao"><strong>1</strong></div>
                    </a>

                    <?php
                    for ($i = $pg - $exibir; $i <= $pg + 1; $i++) {
                        if ($i > 1 && $i < $totalPG) {
                    ?>

                            <a href="?pg=<?= $i ?>">
                                <div class="boxPaginacao"><strong><?= $i ?></strong></div>
                            </a>

                    <?php
                        }
                    }

                    if($totalPG > 1){
                    ?>

                    <a href="?pg=<?= $totalPG ?>">
                        <div class="boxPaginacao"><strong><?= $totalPG ?></strong></div>
                    </a>

                    <?php
                    }

                    if ($pg < $totalPG) {
                    ?>

                        <a href="?pg=<?= $posterior ?>">
                            <div class="boxPaginacao"><strong>></strong></div>
                        </a>

                    <?php
                    }
                    ?>

                </div>

            </div>

        </section>

    </main>

</body>

</html>

<?php mysqli_close($conn); ?>