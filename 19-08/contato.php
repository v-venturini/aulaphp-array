<?php include "header.php"; ?>

<main>

<h1><strong> Entre em contato:</strong></h1>

<form action="contato.php" method="post">

    <label for="nome">Nome:</label>
    <input type="text" name="nome" id="nome" required>

    <label for="email">E-mail:</label>
    <input type="email" name="email" id="email" required>

    <label for="mensagem">Mensagem:</label>
    <textarea name="mensagem" id="mensagem" cols="20" rows="10" required></textarea>
    
    <button type="https://www.professorburnes.com.br/arquivos/cinema/enviar.php" title="Enviar Mensagem">Enviar Mensagem</button>
   
</form>

</main>

<?php include "footer.php"; ?>