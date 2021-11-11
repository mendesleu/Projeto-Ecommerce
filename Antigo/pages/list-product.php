<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisa Produto - Loja Online</title>

    
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
        <div id="conteudo-list-product">

            <div id="sidebar">

                <h3>Categoria:</h3>
                <a href="#" class="sidebar-links"><h4>Gamer</h4></a>
                <a href="#" class="sidebar-links"><h4>Escritorio</h4></a>
                <a href="#" class="sidebar-links"><h4>Jantar</h4></a>
                <a href="#" class="sidebar-links"><h4>Descaço</h4></a>
                <br>
                <h3>Marcas:</h3>
                <a href="#" class="sidebar-links"><h4>Samsung</h4></a>
                <a href="#" class="sidebar-links"><h4>Apple</h4></a>
                <a href="#" class="sidebar-links"><h4>Nokia</h4></a>
                <a href="#" class="sidebar-links"><h4>Lenovo</h4></a>
                <br>
                <h3>Preço:</h3>
                <form method="POST" action="#" id="form-price" name="form-price">
                    <div>
                        <label style="font-size:13px;">R$</label>
                        <input type="text" id="maior" name="maior" class="input-price">
                        <label>-</label>
                        <input type="text" id="menor" name="menor" class="input-price">                        
                    </div>
                    <button type="submit" id="filtrar-botao" name="filtrar-botao" value="filtrar">FILTRAR</button>
                </form>

            </div>
            <div id="container-list">

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
                </a> <!--fim cards--> 

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
                </a> <!--fim cards--> 

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
                </a> <!--fim cards--> 

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
                </a> <!--fim cards--> 
                
                
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
                                </a> <!--fim cards--> 
                
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
                                </a> <!--fim cards--> 
            </div>

        </div>
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