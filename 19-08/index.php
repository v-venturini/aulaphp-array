<?php 
include "header.php"; 
include "dados.php"; 

//conteudo de um array
//echo "<pre";
//print_r($series);
//echo "</pre>"; //irá tirar a formatação padrão
?> 
<main>
    <h1> Séries em destaque:</h1>
    <div class="grid">
        <?php
            $i = 0;
            //RANDOMIZAR O ARRAY (bagunçar o array)
            shuffle($series);
        foreach ( $series as $serie) {//"as" apelido  

             $i++;
             if($i > 4) break;

            $id = $serie["id"];
            $nome = $serie["nome"];
            $imagem = $serie["imagem"];

            echo "<div class='coluna'>
            <img src='imagens/{$imagem}'>
            <p><strong>{$nome}</strong></p>
            <p>
                <a href='serie.php?id={$id}'>
                Detalhes
                /a>
            </p>
            </div>";//irá aparecer todas as imagens
            
        }

        ?>
    </div>
</main>
<?php include "footer.php"; ?>
