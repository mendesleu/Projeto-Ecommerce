<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>

    <link rel="stylesheet" media="all" type="text/css" href="../css/style.css">
    <link rel="stylesheet" media="all" type="text/css" href="../css/shopping-cart.css">

</head>
<body>

    <?php
        include "header.php";
    ?>

    <main>

        <!--Container Cart Description-->
        <div id="container-cart-description">

            <!--Box Cart Description-->
            <div class="box-cart-description">
                <h4 style="width: 500px; text-align: center;">Descrição:</h4>
                <h4 style="width: 150px; text-align: center;">Quantidade:</h4>
                <h4 style="width: 150px; text-align: center;">Preço:</h4>
            </div>
            <!--Box Cart Description-->
            
            <div style="background-color: black; width: 800px; height: 1px; margin: 5px 0 5px 0;"></div>

            <!--Box Cart Description-->
            <div class="box-cart-description">
                <h4 style="width: 500px; text-align: center;">Cadeira Eames Eiffel Preta</h4>
                <h4 style="width: 150px; text-align: center;">1</h4>
                <h4 style="width: 150px; text-align: center;">R$ 135,00:</h4>
            </div>
            <!--Box Cart Description-->

        </div>
        <!--Container Cart Description-->


        <!--Container Cart Price-->
        <div id="container-cart-price">
            <div style="display: flex; flex-direction: row;">
                <h4 style="width: 150px;">Subtotal:</h4>
                <h4>R$ 135,00</h4>
            </div>
            <select id="frete" name="frete" style="width: 220px;">
                <option value="pac R$ 10,00">Pac  R$ 10,00</option>
                <option value="sedex R$ 30,00">Sedex  R$ 30,00</option>
            </select>
            <div style="display: flex; flex-direction: row;">
                <h4 style="width: 150px;">Desconto:</h4>
                <h4>R$ 135,00</h4>
            </div>
            <div>
                <h4>Cupom:</h4>
                <input type="text" name="cupom" id="cupom" style="width: 220px;">
            </div>
            <div style="display: flex; flex-direction: row;">
                <h4 style="width: 150px;">Total:</h4>
                <h4>R$ 135,00</h4>
            </div>
            <button type="submit" value="finalizar" id="button-finalizar">Finalizar</button>
        </div>
        <!--Container Cart Price-->

    </main>

    <?php
        include "footer.php";
    ?>

</body>
</html>