<?php

require_once "../../conn.php";

session_start();

$nome = $_POST['produto'];
$ativado = isset($_POST['ativado']) ? $_POST['ativado'] : "";
$destaque = isset($_POST['destaque'])?$_POST['destaque']:"";

$situacao = $_POST['situacao'];
$descricao = $_POST['descricao'];
$video = $_POST['linkVideo'];

$custo = $_POST['custo'];
$venda = $_POST['venda'];
$promocional = $_POST['promocional'];

$sku = $_POST['sku'];
$ean = $_POST['ean'];
$ncm = $_POST['ncm'];

$estoque = isset($_POST['estoque']) ? $_POST['estoque'] : "";
if ($estoque == 'estoque') {
    $quantidade = $_POST['quantidade'];
    $acaoEstoque = $_POST['acaoEstoque'];
}else{
    $quantidade = 0;
    $acaoEstoque = 'nada';
}

$peso = $_POST['peso'];
$altura = $_POST['altura'];
$comprimento = $_POST['comprimento'];

$largura = $_POST['largura'];
$categoria = $_POST['categoria'];
$marca = $_POST['marca'];

$titleCeo = $_POST['titleCeo'];
$descricaoCeo = $_POST['descriptionCeo'];
$url = $_POST['url'];

$insert = "INSERT INTO produtos(nome, ativado, destaque, situacao, descricao, video, custo, venda,
                                promocional, sku, ean, ncm, estoque, quant_estoque, acao_estoque,
                                peso, altura, comprimento, largura, categoria, marca,
                                title_ceo, descricao_ceo, url)
                                VALUES ('$nome', '$ativado', '$destaque', '$situacao', '$descricao', '$video', '$custo', '$venda',
                                        '$promocional', '$sku', '$ean', '$ncm', '$estoque', '$quantidade', '$acaoEstoque',
                                        '$peso', '$altura', '$comprimento', '$largura', '$categoria', '$marca', '$titleCeo',
                                        '$descricaoCeo', '$url')";
$query = mysqli_query($conn, $insert);

if ($query == true) {
    echo 'ok';
} else {
    echo $conn->error;
}



/* UP Imagem */

if(isset($_FILES['imagens'])){
    $extensão = strtolower(substr($_FILES['imagens']['name'], -4));
    $nome_img = $sku . "-" . $nome . $extensão;
    $diretorio = "../../../assets/products/";

    move_uploaded_file($_FILES['imagens']['tmp_name'], $diretorio.$nome_img);

    $select = "SELECT * FROM produtos ORDER BY id_produto DESC";
    $query = mysqli_query($conn, $select);

    if($query -> num_rows > 0){
        $listar = $query -> fetch_assoc();

        $id = $listar['id_produto'];
    }else{
        $id = 1;
    }

    $insert = "INSERT INTO imagem_produtos (id_produto, imagem) VALUES ('$id', '$nome_img')";
    $query = mysqli_query($conn, $insert);

    if($query == true){
        echo 'img ok';
    }else{
        echo $conn -> error;
    }
}