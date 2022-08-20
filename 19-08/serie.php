<?php
    include "header.php";
    include "dados.php";

    //recuperar o id enviado por GET
    $id = $_GET["id"] ?? NULL; //Para não dar erro, se não tiver id, ele vai ser nulo //verificar se o id esta em branco

    if ( empty ($id) ) {
        echo "<script>alert('Série não encontrada');history.back();</script>";
        exit;
    }

    $nome = $series[$id]["nome"];
    $imagem = $series[$id]["imagem"];
    $sinopse = $series[$id]["sinopse"];

?>

<main>
    <div class="grid-2">
        <div class="coluna">
            <img src="imagens/<?=$imagem?>">
        </div>
        <div class="coluna">
            <h2><?=$nome?></h2> <!--PARA APARECER O NOME -->
        <P><strong>Sinopse:</strong> </P>
        <p><?=$sinopse?></P>
        </div>
    </div>
</main>
<?php include "footer.php"; ?>