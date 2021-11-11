<header>

    <div id="line-top">
        <label style="margin-right: 20px;"><a href="#" class="link-top">Login</a></label>
        <label style="margin-right: 20px;"><a href="#" class="link-top">Cadastre-se</a></label>
    </div>

    <div id="container-top">
        <div style="width: 250px;">
            <a href="index.html">
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

        <?php
            include "menu.php";
        ?>

    </header>