<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produto - Loja Onine</title>

    <?php
    
        include "../css.html"

    ?>

</head>
<body>
    
    <header>
        <div id="topo">
            <div id="linha-topo">
                <label style="margin-right: 20px;"><a href="#" class="link-topo">Login</a></label>
                <label style="margin-right: 20px;"><a href="#" class="link-topo">Cadastre-se</a></label>
            </div>

            <div id="linha-centro-topo">
                <div style="width: 250px;">
                    <a href="../index.html">
                        <img src="../assets/logo.png" alt="logo" style="width: 100%;">
                    </a>
                </div>

                <form action="" method="POST" id="search-form" name="search-form">
                    <input type="search" name="search" id="search">
                    <button id="search-button" name="search-button" value="pesquisar">Pesquisar</button>
                </form>

                <div id="shopping-cart">
                    <div style="width: 60px; display: flex; justify-content: center;">
                        <a href="#" class="shopping-cart-link">
                            <img src="../assets/shopping-cart.png" alt="shopping-cart" style="width: 100%;">
                        </a>
                    </div>
                        <label><a href="#" class="shopping-cart-link">Carrinho</a></label>
                    </div>
            </div><!-- Fim Linha Centro Topo -->

            <nav>
                <ul>
                    <li><a href="#">Item</a>
                        <ul>
                            <li><a href="#">Item</a></li>
                            <li><a href="#">Item</a></li>
                            <li><a href="#">Item</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Item</a>
                        <ul>
                            <li><a href="#">Item</a></li>
                            <li><a href="#">Item</a></li>
                            <li><a href="#">Item</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Item</a>
                        <ul>
                            <li><a href="#">Item</a></li>
                            <li><a href="#">Item</a></li>
                            <li><a href="#">Item</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Item</a>
                        <ul>
                            <li><a href="#">Item</a></li>
                            <li><a href="#">Item</a></li>
                            <li><a href="#">Item</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Item</a>
                        <ul>
                            <li><a href="#">Item</a></li>
                            <li><a href="#">Item</a></li>
                            <li><a href="#">Item</a></li>
                        </ul></li>
                    <li><a href="#">Item</a>
                        <ul>
                            <li><a href="#">Item</a></li>
                            <li><a href="#">Item</a></li>
                            <li><a href="#">Item</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Item</a>
                        <ul>
                            <li><a href="#">Item</a></li>
                            <li><a href="#">Item</a></li>
                            <li><a href="#">Item</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Item</a>
                        <ul>
                            <li><a href="#">Item</a></li>
                            <li><a href="#">Item</a></li>
                            <li><a href="#">Item</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Item</a>
                        <ul>
                            <li><a href="#">Item</a></li>
                            <li><a href="#">Item</a></li>
                            <li><a href="#">Item</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>

        </div>
    </header>

    <div id="container">

        <div id="conteudo-produto">

            <div id="produto-topo">

                <div id="showcase-product">

                    <div id="destaque-area-img">
                        <img src="../assets/products/product.png" alt="product-destaque" id="imagem-destaque">
                    </div>
                    <div id="menu-img-product">
                        <div class="div-product-img">
                            <a href="#"><img src="../assets/products/product.png" alt="product-img" class="img-menu-product"></a>
                        </div>
                        <div class="div-product-img">
                            <a href="#"><img src="../assets/products/produtct2.jpg" alt="product-img" class="img-menu-product"></a>
                        </div>
                        <div class="div-product-img">
                            <a href="#"><img src="../assets/products/product3.png" alt="product-img" class="img-menu-product"></a>
                        </div>
                        <div class="div-product-img">
                            <a href="#"><img src="../assets/products/produtct4.png" alt="product-img" class="img-menu-product"></a>
                        </div>
                    </div>

                </div>
                <div id="price-info">
                    <div style="height: 100px; width: 400px; margin-bottom: 20px;">
                        <h6>Código: 123456</h6>
                        <h1 style="font-size: 20px; text-transform: uppercase;">Cadeira Eames Eiffel Preta</h1>
                    </div>

                    <h5>De R$ 200,00</h5>
                    <h2>R$ 135,00</h2>
                    <h6>Ou em 10X de R$ 13,50</h6>

                    <form action="" method="POST" name="frete-form" id="frete-form">
                        <input type="text" id="frete" name="frete">
                        <button type="submit" value="calcular" id="calcular" name="calcular">Calcular</button>
                    </form>

                    <div id="comprar-botao">
                        <label>COMPRAR</label>
                    </div>

                </div>

            </div>

            <div id="descricao-product">
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
            
        </div><!-- Fim Conteudo-->

    </div>

    <footer id="footer">

        <div id="footer-container">

            <div id="footer-menu">
                <h1 style="font-size: 20px; margin-bottom: 10px;">Informações:</h1>
                <label><a href="#" class="footer-links-menu">Contato</a></label>
                <label><a href="#" class="footer-links-menu">Politicas de Privacidade</a></label>
                <label><a href="#" class="footer-links-menu">Envio</a></label>
                <label><a href="#" class="footer-links-menu">Trocas e Devoluções</a></label>
            </div>

            <div style="width: 300px; display: flex; flex-direction: column;">
                <h1 style="font-size: 20px; margin-bottom: 10px;">Contato:</h1>
                <label>Telefone: (00) 0000-0000</label>
                <label>E-mail: seuemail@servidor.com</label>
                <label>Rua Mora Naquela casa legal ali Nº 123</label>
                
            </div>

            <div style="width: 350px;">
                <h1 style="font-size: 20px; margin-bottom: 10px;">Sobre-nós:</h1>
                <p>
                    Aqui vai um pequeno texto falando um pouco sobre a nossa empresa, para você
                    cliente ver que somo legais, um textinho contando nossa pequena historia no
                    comercio, espero que goste.
                </p>
            </div>

            <div id="footer-socail">

                <h1 style="font-size: 20px; margin-bottom: 10px;">Social:</h1>

                <div style="display: flex; flex-direction: row;">
                    <div style="width: 30px; margin-right: 5px;">
                        <a href="#"><img src="../assets/social/face.png" alt="face" style="width: 100%;"></a>
                    </div>
                    <div style="width: 30px; margin-right: 5px;">
                        <a href="#"><img src="../assets/social/insta.png" alt="insta" style="width: 100%;"></a>
                    </div>
                    <div style="width: 30px; margin-right: 5px;">
                        <a href="#"><img src="../assets/social/maps.png" alt="maps" style="width: 100%;"></a>
                    </div>
                    <div style="width: 30px; margin-right: 5px;">
                        <a href="#"><img src="../assets/social/whats.png" alt="whats" style="width: 100%;"></a>
                    </div>
                </div>

            </div> <!-- Fim Social -->

        </div> <!-- Fim Container -->

        <div style="margin-top: 30px; margin-bottom: 20px;">
            <div style="display: flex; flex-direction: row; align-items: center; justify-content: center;">
                <img src="../assets/correios.png" alt="correios" style="width: 100px; margin-right: 30px;">
                <img src="../assets/pagseguro.png" alt="pagseguro" style="width: 120px">
            </div>
        </div>

        <div id="footer-footer">
            <div id="footer-pe">
                <label style="color: white; font-size: 15px;">Todos os Direitos Reservados a InfoDev</label>
                <div style="width: 150px;"><img src="../assets/logo.png" alt="logo" style="width: 100%;"></div>
            </div>
        </div>
                 
    </footer>
    

</body>
</html>