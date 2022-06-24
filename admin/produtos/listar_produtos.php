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

    <link rel="stylesheet" media="all" type="text/css" href="../../assets/css/admin/style.css" />
    <link rel="stylesheet" media="all" type="text/css" href="../../assets/css/admin/produtos.css" />

    <script>
        function openModal() {
            document.getElementById('modalFiltrar').style.display = 'block';
        }

        function closeModal() {
            document.getElementById('modalFiltrar').style.display = 'none';
        }
    </script>

</head>

<body>

    <header>
        <?php include "../menu.php" ?>
    </header>

    <main style="padding-bottom: 80px;">

        <section id="containerListarProduto">

            <div id="containerSearch">

                <form action="" method="GET">
                    <input type="search" name="search" placeholder="Buscar por nome ou SKU">
                    <button class="botao">Buscar</button>
                </form>

                <!-- <button class="botao" onclick="openModal()">Filtrar</button> -->

            </div>

            <div id="containerListar">

                <div class="boxListar first">
                    <div style="display: flex; align-items:center; margin-right:10px"><input type="checkbox" id="checkAll"></div>
                    <div style="width: 300px;"><strong>Produto</strong></div>
                    <div style="width: 100px; text-align: center;"><strong>Categoria</strong></div>
                    <div style="width: 100px; text-align: center;"><strong>Preço</strong></div>
                    <div style="width: 100px; text-align: center;"><strong>Estoque</strong></div>
                    <div style="width: 100px; text-align: center;"><strong>Status</strong></div>
                </div>

                <?php

                $pg = isset($_GET['pg']) ? $_GET['pg'] : "1";
                $search = isset($_GET['search']) ? $_GET['search'] : "";

                // Quantidade maxima a exibir por pagina
                $maximo = 10;

                // Calcula a página de qual valor será exibido
                $inicio = ($maximo * $pg) - $maximo;
                
                $select = "SELECT * FROM produtos 
                           WHERE sku LIKE '%$search%' OR nome LIKE '%$search%' OR ean LIKE '%$search%'
                           LIMIT $inicio, $maximo";
                $query = mysqli_query($conn, $select);

                if ($query->num_rows > 0) {
                    while ($listar = $query->fetch_assoc()) {
                ?>

                        <div class="boxListar second">
                            <div style="display: flex; align-items:center; margin-right:10px"><input type="checkbox" class="check"></div>
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

                #
                #
                #
                #
                // Paginação
                $totalPG = 0;
                $select = "SELECT * FROM produtos WHERE sku LIKE '%$search%' OR nome LIKE '%$search%' OR ean LIKE '%$search%'";
                $query = mysqli_query($conn, $select);
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
                            <div class="boxPaginacao nome"><strong>Anterior</strong>
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

                    if ($totalPG > 1) {
                        ?>

                        <a href="?pg=<?= $totalPG ?>">
                            <div class="boxPaginacao"><strong><?= $totalPG ?></strong></div>
                        </a>

                    <?php
                    }

                    if ($pg < $totalPG) {
                    ?>

                        <a href="?pg=<?= $posterior ?>">
                            <div class="boxPaginacao nome"><strong>Próximo</strong></div>
                        </a>

                    <?php
                    }
                    ?>

                </div>
                <!-- 
                # Container Paginação 
                #
                #
                #
                #
                -->

            </div>
            <!-- Container Listar -->

        </section>

    </main>

    <!-- Modal ==================== -->
    <div class="containerModal" id="modalFiltrar" style="display: none;">
        <div class="boxModal">
            <div class="boxConteudoModal">

                <div class="tituloBox tituloFiltrar">
                    <h4>Filtros</h4>
                    <input type="button" value="X" id="botaoFecharModal" onclick="closeModal()">
                </div>
                <!-- Titulo -->

                <form action="" id="formFiltrar">

                    <div style="display: flex;">

                        <div style="display: flex; flex-direction: column;">

                            <label class="titulo">Ordenar por</label>
                            <select class="selectFiltrar" name="ordem">
                                <option value="alfabetica">Ordem alfabetica</option>
                                <option value="ultimos">Últimos Produtos</option>
                                <option value="destaque">Destaque</option>
                            </select>

                            <label class="titulo">Status do produto</label>
                            <select class="selectFiltrar" name="status">
                                <option value="">Todos</option>
                                <option value="ativos">Ativos</option>
                                <option value="inativos">Inativos</option>
                            </select>

                        </div>

                        <div style="display: flex; flex-direction: column; margin-left: 20px;">

                            <label class="titulo">Produto em destaque</label>
                            <select class="selectFiltrar" name="destaque">
                                <option value="">Selecionar</option>
                                <option value="sim">Sim</option>
                                <option value="nao">Não</option>
                            </select>

                            <label class="titulo">Produto sem estoque</label>
                            <select class="selectFiltrar" name="estoque">
                                <option value="">Selecionar</option>
                                <option value="sim">Sim</option>
                                <option value="nao">Não</option>
                            </select>

                        </div>

                    </div>

                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <a href="listar_produtos.php" id="botaoLimparFiltro">X Limpar Filtros</a>

                        <button type="submit" class="botao">Filtrar</button>
                    </div>

                </form>

            </div>
        </div>
    </div>
    <!-- Modal ==================== -->

    <!-- Marcar todos checkbox -->
    <script>
        let checkbox = document.querySelectorAll('.check');
        let checkAll = document.querySelector('#checkAll');

        checkAll.addEventListener('click', () => {
            for (let current of checkbox) {
                current.checked = !current.checked
            }
        })
    </script>
    <!-- Marcar todos checkbox -->
</body>

</html>

<?php mysqli_close($conn); ?>