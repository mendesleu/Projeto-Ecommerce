<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Ecommerce</title>

    <link rel="stylesheet" media="all" type="text/css" href="../../css/admin/style.css" />
    <link rel="stylesheet" media="all" type="text/css" href="../../css/admin/produtos.css" />


    <script>
        function check() {
            let teste = document.getElementById('estoqueCheck').checked;

            if (teste == true) {
                document.getElementById('infoEstoque').style.display = 'block';
            } else {
                document.getElementById('infoEstoque').style.display = 'none';
            }
        }
    </script>

</head>

<body>

    <header>
        <?php include "../menu.php" ?>
    </header>

    <main>


        <form action="function/gravar.php" method="POST" id="formProd" enctype="multipart/form-data">

            <section id="containerInfoPrincipal">

                <div class="tituloBox" style="margin-bottom: 30px;">
                    <h4>Informaçãoes principais</h4>
                </div>

                <label class="titulo">Nome do Produto*</label> <br>
                <input type="text" name="produto" placeholder="Ex: Camiseta Preta Lisa">

                <div id="boxSwitch">

                    <div>
                        <label class="titulo">Produto ativado?</label><br>

                        <label class="switch">
                            <input type="checkbox" value="ativado" name="ativado" checked>
                            <span class="slider"></span>
                        </label>
                    </div>

                    <div style="padding-left: 50px;">
                        <label class="titulo">Produto em Destaque?</label><br>

                        <label class="switch">
                            <input type="checkbox" value="destaque" name="destaque">
                            <span class="slider"></span>
                        </label>
                    </div>

                    <div style="padding-left: 50px;">
                        <label class="titulo">Situação do Produto:</label><br>

                        <div style="display: flex;">
                            <div style="display: flex; align-items: center;">
                                <input type="radio" name="situacao" value="novo" checked>
                                <label style="font-size: 10pt; padding-left: 5px;">Novo</label>
                            </div>

                            <div style="display: flex; align-items: center; padding-left: 15px;">
                                <input type="radio" name="situacao" value="usado">
                                <label style="font-size: 10pt; padding-left: 5px;">Usado</label>
                            </div>

                        </div>

                    </div>

                </div>

                <label class="titulo">Descrição do Produto</label> <br>
                <textarea name="descricao"></textarea>

            </section>

            <section id="containerImg">

                <div class="tituloBox">
                    <h4>Imagens</h4>
                </div>

                <div id="containerUpImg">
                    <label for="imagens" id="labelImg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-card-image" viewBox="0 0 16 16">
                            <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                            <path d="M1.5 2A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13zm13 1a.5.5 0 0 1 .5.5v6l-3.775-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12v.54A.505.505 0 0 1 1 12.5v-9a.5.5 0 0 1 .5-.5h13z" />
                        </svg>
                        <h4>Arraste e Solte Suas Imagens Aqui</h4>
                        <label style="font-size: 8pt;" for="imagens" id="labelImg">Máximo de 10 imagens. Tamanho máximo 3MB.</label>
                        <label style="font-size: 8pt;" for="imagens" id="labelImg">Para maior qualidade envie imagens no formato JPG ou PNG.</label>
                    </label>
                    <input type="file" name="imagens" id="imagens" style="display: none;" multiple>
                </div>

                <label class="titulo">Vídeo do Produto</label> <br>
                <input type="text" name="linkVideo" placeholder="Ex: https://www.youtube.com/watch?v=000">

            </section>

            <section id="containerPreco">

                <div class="tituloBox">
                    <h4>Preços</h4>
                </div>

                <div style="display: flex; justify-content:space-around; margin-top: 30px">

                    <div>
                        <label class="titulo">Preço de Custo</label> <br>
                        <div style="display: flex;">
                            <label class="cifra">R$</label>
                            <input type="number" name="custo" placeholder="0,00" min="0" style="border-radius: 0 5px 5px 0;">
                        </div>
                    </div>

                    <div>
                        <label class="titulo">Preço de Venda*</label> <br>
                        <div style="display: flex;">
                            <label class="cifra">R$</label>
                            <input type="number" name="venda" placeholder="0,00" min="0" style="border-radius: 0 5px 5px 0;">
                        </div>
                    </div>

                    <div>
                        <label class="titulo">Preço de Promocional</label> <br>
                        <div style="display: flex;">
                            <label class="cifra">R$</label>
                            <input type="number" name="promocional" placeholder="0,00" min="0" style="border-radius: 0 5px 5px 0;">
                        </div>
                    </div>

                </div>
            </section>

            <section id="containerCodigosEEstoque">

                <div class="tituloBox">
                    <h4>Códigos e estoque</h4>
                </div>

                <div style="margin-top: 30px; display: flex; justify-content: space-around; padding-bottom: 40px; border-bottom: 1px solid rgb(167, 167, 167);">

                    <div>
                        <label class="titulo">Código Produto (SKU)*</label><br>
                        <input type="number" name="sku">
                    </div>

                    <div>
                        <label class="titulo">EAN</label><br>
                        <input type="number" name="ean">
                    </div>

                    <div>
                        <label class="titulo">NCM</label><br>
                        <input type="number" name="ncm">
                    </div>

                </div>

                <div style="margin-top: 30px; margin-bottom: 20px; display: flex; align-items: center;">

                    <label class="switch">
                        <input type="checkbox" value="estoque" name="estoque" onclick="check()" id="estoqueCheck">
                        <span class="slider"></span>
                    </label>
                    <label style="font-size: 10pt; margin-left: 10px;">Gerenciar estoque deste produto?</label>

                </div>



                <div id="infoEstoque">
                    <label class="titulo">Quantidade:</label> <br>
                    <input type="number" name="quantidade" min="0"> <br> <br>

                    <label class="titulo">Quando o estoque zerar</label><br>
                    <select name="acaoEstoque">
                        <option>Continuar vendendo normalmente</option>
                        <option>Mudar para indisponível</option>
                    </select>
                </div>

            </section>

            <section id="containerPesoEMedidas">

                <div class="tituloBox">
                    <h4>Peso e dimensões</h4>
                </div>

                <div style="margin-top: 30px; display: flex; justify-content: space-around">

                    <div>
                        <label class="titulo">Peso</label>
                        <div style="display: flex;">
                            <input type="number" name="peso" placeholder="0,000" min="0" style="border-radius: 5px 0 0 5px; width: 100px">
                            <label class="cifra" style="border-radius: 0 5px 5px 0;">Kg</label>
                        </div>
                    </div>

                    <div>
                        <label class="titulo">Altura</label>
                        <div style="display: flex;">
                            <input type="number" name="altura" placeholder="0,00" min="0" style="border-radius: 5px 0 0 5px; width: 100px">
                            <label class="cifra" style="border-radius: 0 5px 5px 0;">cm</label>
                        </div>
                    </div>

                    <div>
                        <label class="titulo">Comprimento</label>
                        <div style="display: flex;">
                            <input type="number" name="comprimento" placeholder="0,00" min="0" style="border-radius: 5px 0 0 5px; width: 100px;">
                            <label class="cifra" style="border-radius: 0 5px 5px 0;">cm</label>
                        </div>
                    </div>

                    <div>
                        <label class="titulo">Largura</label>
                        <div style="display: flex;">
                            <input type="number" name="largura" placeholder="0,00" min="0" style="border-radius: 5px 0 0 5px; width: 100px">
                            <label class="cifra" style="border-radius: 0 5px 5px 0;">cm</label>
                        </div>
                    </div>

                </div>

            </section>

            <section id="containerOrganizacao">

                <div class="tituloBox" style="margin-bottom: 30px;">
                    <h4>Organização</h4>
                </div>

                <div style="display: flex;">

                    <div>
                        <label class="titulo">Categoria</label> <br>
                        <select name="categoria" style="width: 250px;">
                            <option>Categoria</option>
                        </select>
                    </div>

                    <div style="margin-left: 30px;">
                        <label class="titulo">Marca</label> <br>
                        <select name="marca" style="width: 250px;">
                            <option>Marca</option>
                        </select>
                    </div>

                </div>

            </section>

            <section id="ceo">

                <div class="tituloBox" style="margin-bottom: 30px;">
                    <h4>CEO</h4>
                </div>

                <label class="titulo">Tag Title</label>
                <input type="text" name="titleCeo" placeholder="Ex. Camiseta Preta Lisa" style="margin-bottom: 10px;">

                <label class="titulo">Meta Tag Description</label>
                <textarea name="descriptionCeo" placeholder="Ex. Está camisa para pessoas exigentes com luques de qualidade"></textarea>

                <label class="titulo">URL do Produto</label>
                <input type="text" name="url" value="https://site.com.br/url">

            </section>

            <section id="containerBotao">
                <div id="boxBotao">
                    <button type="submit" class="botao">Cadastrar</button>
                </div>
            </section>

        </form>

    </main>

</body>

</html>