<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisa Produto - Loja Online</title>

    <link rel="stylesheet" media="all" type="text/css" href="../css/style.css">
    <link rel="stylesheet" media="all" type="text/css" href="../css/cards.css">
    <link rel="stylesheet" media="all" type="text/css" href="../css/list-product.css">
   

</head>
<body>

    <?php
        include "header.php";
    ?>

    <main>

        <!--Sidebar-->
        <div id="sidebar">

            <h3>Categoria:</h3>
            <a href="" class="sidebar-links"><h4>Gamer</h4></a>
            <a href="" class="sidebar-links"><h4>Escritorio</h4></a>
            <a href="" class="sidebar-links"><h4>Jantar</h4></a>
            <a href="" class="sidebar-links"><h4>Descanço</h4></a>
            <br>
            <h3>Marcas:</h3>
            <a href="" class="sidebar-links"><h4>Samsung</h4></a>
            <a href="" class="sidebar-links"><h4>Apple</h4></a>
            <a href="" class="sidebar-links"><h4>Nokia</h4></a>
            <a href="" class="sidebar-links"><h4>Lenovo</h4></a>
            <br>
            <h3>Preço:</h3>
            <form method="POST" action="#" id="form-price" name="form-price">
                <div>
                    <label style="font-size: 13px">R$</label>
                    <input type="text" id="maior" name="maior" class="input-price">
                    <label>-</label>
                    <input type="text" id="maior" name="maior" class="input-price">
                </div>
                <button type="submit" id="filtrar-botao" name="filtrar-botao" value="Filtrar">Filtrar</button>
            </form>

        </div>
        <!--Sidebar-->

        <!--Container List-->
        <div id="container-list">

            <!--Card-->
            <a href="#" class="link-cards">
                <div class="cards">

                    <div class="img-card">
                        <img src="../assets/products/product.png" alt="product" style="width: 100%;">
                    </div>
    
                    <div  class="text-card">
                        <h1 style="font-size: 15px;">Cadeira Eames Eiffel Preta</h1>
                        <h6 style="margin-top: 10px;">De R$ 200,00</h6>
                        <h3 style="font-size: 20px;">R$ 135,00</h3>
                        <h6>Ou 10x de R$ 13,50</h6>
                    </div>
                </div>
            </a>
            <!--Card-->

            <!--Card-->
            <a href="#" class="link-cards">
                <div class="cards">

                    <div class="img-card">
                        <img src="../assets/products/product.png" alt="product" style="width: 100%;">
                    </div>
    
                    <div  class="text-card">
                        <h1 style="font-size: 15px;">Cadeira Eames Eiffel Preta</h1>
                        <h6 style="margin-top: 10px;">De R$ 200,00</h6>
                        <h3 style="font-size: 20px;">R$ 135,00</h3>
                        <h6>Ou 10x de R$ 13,50</h6>
                    </div>
                </div>
            </a>
            <!--Card-->

            <!--Card-->
            <a href="#" class="link-cards">
                <div class="cards">

                    <div class="img-card">
                        <img src="../assets/products/product.png" alt="product" style="width: 100%;">
                    </div>
    
                    <div  class="text-card">
                        <h1 style="font-size: 15px;">Cadeira Eames Eiffel Preta</h1>
                        <h6 style="margin-top: 10px;">De R$ 200,00</h6>
                        <h3 style="font-size: 20px;">R$ 135,00</h3>
                        <h6>Ou 10x de R$ 13,50</h6>
                    </div>
                </div>
            </a>
            <!--Card-->

            <!--Card-->
            <a href="#" class="link-cards">
                <div class="cards">

                    <div class="img-card">
                        <img src="../assets/products/product.png" alt="product" style="width: 100%;">
                    </div>
    
                    <div  class="text-card">
                        <h1 style="font-size: 15px;">Cadeira Eames Eiffel Preta</h1>
                        <h6 style="margin-top: 10px;">De R$ 200,00</h6>
                        <h3 style="font-size: 20px;">R$ 135,00</h3>
                        <h6>Ou 10x de R$ 13,50</h6>
                    </div>
                </div>
            </a>
            <!--Card-->

            <!--Card-->
            <a href="#" class="link-cards">
                <div class="cards">

                    <div class="img-card">
                        <img src="../assets/products/product.png" alt="product" style="width: 100%;">
                    </div>
    
                    <div  class="text-card">
                        <h1 style="font-size: 15px;">Cadeira Eames Eiffel Preta</h1>
                        <h6 style="margin-top: 10px;">De R$ 200,00</h6>
                        <h3 style="font-size: 20px;">R$ 135,00</h3>
                        <h6>Ou 10x de R$ 13,50</h6>
                    </div>
                </div>
            </a>
            <!--Card-->

            <!--Card-->
            <a href="#" class="link-cards">
                <div class="cards">

                    <div class="img-card">
                        <img src="../assets/products/product.png" alt="product" style="width: 100%;">
                    </div>
    
                    <div  class="text-card">
                        <h1 style="font-size: 15px;">Cadeira Eames Eiffel Preta</h1>
                        <h6 style="margin-top: 10px;">De R$ 200,00</h6>
                        <h3 style="font-size: 20px;">R$ 135,00</h3>
                        <h6>Ou 10x de R$ 13,50</h6>
                    </div>
                </div>
            </a>
            <!--Card-->

        </div>
        <!--Container List-->

    </main>

    <?php
        include "footer.php";
    ?>
    
</body>
</html>