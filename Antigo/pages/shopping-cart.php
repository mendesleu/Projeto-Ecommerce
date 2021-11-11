<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart - Loja Online</title>

    
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
        <div id="shopping-cart-conteudo">
            <div id="shopping-cart-conteudo2">

                <div class="list-shopping-cart">
                    <h4 style="width: 300px; text-align: center;">Descrição:</h4>
                    <h4 style="width: 100px; text-align: center;">Quantidade:</h4>
                    <h4 style="width: 100px; text-align: center;">Preço:</h4>
                </div>        
            
                <div style="background-color: black; width: 100%; height: 1px; margin-bottom: 5px;"></div>

                <div class="list-shopping-cart">
                    <h4 style="width: 300px; text-align: center;">Cadeira Eames Eiffel Preta</h4>
                    <div style="width: 100px; display: flex; justify-content: center;">
                        <input type="text" id="select-quantidade" name="select-quantidade">                        
                    </div>
                    <h4 style="width: 100px; text-align: center;">R$ 135,00</h4>
                </div>

            </div> <!-- Fim Shopppig Cart Conteudo 2 -->

            <div id="shopping-cart-soma-total">
                <div id="shopping-cart-soma-total2">
                    
                    <div style="display: flex; flex-direction: row; justify-content: space-around; align-items: center;">
                        <h4 style="width: 150px;">Subtotal:</h4>
                        <h4 style="width: 80px;">R$ 135,00</h4>
                    </div>
                    <select name="frete-select" id="frete-select" style="width: 200px;">
                        <option value="pac">PAC R$ 10,00</option>
                        <option value="sedex">sedex R$ 12,00</option>
                    </select>
                    <div style="display: flex; flex-direction: row; justify-content: space-around; align-items: center;">
                        <h4 style="width: 150px;">Deconto::</h4>
                        <h4 style="width: 80px;">R$ 0,00</h4>
                    </div>
                    <div style="display: flex; flex-direction: row; justify-content: space-around; align-items: center;">
                        <h4 style="width: 150px;">Total:</h4>
                        <h4 style="width: 80px;">R$ 145,00</h4>
                    </div>

                </div>
            </div>

        </div> <!-- Fim Shopping Cart Conteudo -->

    </div> <!-- Fim Container -->

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