<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page of Product</title>
    
    <link rel="stylesheet" media="all" type="text/css" href="../css/style.css">
    <link rel="stylesheet" media="all" type="text/css" href="../css/page-product.css">

</head>
<body>

    <?php
        include "header.php";
    ?>

    <main>

        <!--Container Product-->
        <div id="container-product">

            <!--Container Showcase-->
            <div id="container-showcase">
                
                <!--Product Top-->
                <div id="product-top">
                    
                    <!--Showcase Product-->
                    <div id="showcase-product">

                        <div id="featured-img">
                            <img src="../assets/products/product.png" alt="product-featured" id="product-featured">
                        </div>
                        
                        <!--Menu-img-product-->
                        <div id="menu-img-product">
                            <div class="thumbnail-product">
                                <a href=""><img src="../assets/products/product.png" alt="product-img" class="thumbnail-img-product">
                            </div>
                            <div class="thumbnail-product">
                                <a href=""><img src="../assets/products/produtct2.jpg" alt="product-img" class="thumbnail-img-product">
                            </div>
                            <div class="thumbnail-product">
                                <a href=""><img src="../assets/products/product3.png" alt="product-img" class="thumbnail-img-product">
                            </div>
                            <div class="thumbnail-product">
                                <a href=""><img src="../assets/products/produtct4.png" alt="product-img" class="thumbnail-img-product">
                            </div>
                        </div>
                        <!--Menu-img-product-->
                        
                    </div>
                    <!--Showcase Product-->
                    
                </div>
                <!--Product Top-->
                
                <!--Price Info-->
                <div id="price-info">
                    
                    <div style="height: 100px; width: 400px; margin-bottom: 20px;">
                        <h6>Código: 123456</h6>
                        <h1 style="font-size: 20px; text-transform: uppercase;">Cadeira Eames Eiffel Preta</h1>
                    </div>
                    
                    <h5>De R$ 200,00</h5>
                    <h2>R$ 135,00</h2>
                    <h6>Ou 10x de R$ 13,50</h6>
                    
                    <form action="" method="POST" name="shipping-form" id="shipping-form">
                        <input type="text" id="shipping" name="shipping">
                        <button type="submit" value="calcular" id="calcular" name="calcular">Calcular</button>
                    </form>
                    
                    <div id="pay-button">
                        <p>COMPRAR</p>
                    </div>
                    
                </div>
                <!--Price Info-->

            </div>
            <!--Container Showcase-->

            
        <!--Description Product-->
        <div id="description-product">

            <label>
            O Banjo RJ11 ROZINI foi feito para músicos exigentes, que procuram um instrumento de alta qualidade, para tocar com amigos, ensaios, como também em palco, se você é um músico profissional. Um timbre impecável e de uma leve tocabilidade.
            <br>
            <br>
            CORDAS: D'ADDARIO J93<br>
            COR: NATURAL<br>
            ACABAMENTO: BRILHO<br>
            TAMPO: ARO DE ALUMÍNIO<br>
            PELE: ANIMAL<br>
            LATERAL E FUNDO: LAMINADO<br>
            MADEIRA: IMBUIA<br>
            BORDO: SIM<br>
            BRAÇO: CEDRO<br>
            TENSOR: NÃO<br>
            ESCALA: PURPLE HEART<br>
            TRASTE: CROMO NÍQUEL<br>
            CAPTAÇÃO: ELÉTRICO<br>
            MEDIDAS // COMP. TOTAL: 620 MMPESTANA: 30 MMLARGURA DA CAIXA: 57 MM<br>
            TARRAXA MODELO: CROMADAS PINO FINO<br>
            </label>

        </div>
        <!--Description Product-->
                
        </div>
        <!--Container Product-->

    </main>

    <?php
        include "footer.php";
    ?>
        
</body>
</html>