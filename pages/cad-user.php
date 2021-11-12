<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usúario</title>

    <link rel="stylesheet" media="all" type="text/css" href="../css/style.css">
    <link rel="stylesheet" media="all" type="text/css" href="../css/cad-user.css">

</head>
<body>

    <?php
        include "header.php";
    ?>

    <main>

        <form id="user-cad-form" action="#" method="POST">

            <input type="text" name="nome" placeholder="Nome:" class="input-names" style="margin-bottom: 10px;">

            <div style="display: flex; flex-direction: row; margin-bottom: 10px">
                <input type="text" name="RG" placeholder="RG:">
                <input type="text" name="cpf" placeholder="CPF:" style="margin-left: 10px;">
            </div>

            <input type="text" name="end" placeholder="Endereço:" class="input-names">

            <div style="display: flex; flex-direction: row; margin: 10px 0 10px 0">
                <input type="text" name="bairro" placeholder="Bairro:" style="margin-right: 10px;">
                <input type="text" name="cidade" placeholder="Cidade:" style="margin-right: 10px;">
                <input type="text" name="estado" placeholder="Estado:">
            </div>

            <input type="text" name="email" placeholder="E-mail:" class="input-names">

            <div style="display: flex; flex-direction: row; margin-top: 10px;">
                <input type="text" name="cel" placeholder="Celular:" style="margin-right: 10px;">
                <input type="text" name="tel" placeholder="Telefone:" style="margin-right: 10px;">
                <input type="text" name="nasc" placeholder="Data de Nascimento:">
            </div>

            <button type="submit" name="cadastrar" value="cadastrar" id="cadastrar">Cadastrar:</button>

        </form>

    </main>

    <?php
        include "footer.php";
    ?>

</body>
</html>