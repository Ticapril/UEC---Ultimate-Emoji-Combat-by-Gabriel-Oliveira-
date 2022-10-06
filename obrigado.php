<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de Obrigado</title>
</head>
<body>
    <!-- 1 - modificação apenas trazer as informaçoes dos lutadores cadastrados -->
    <h1 class="mb-5 mt-3">Obrigado por utilizar nosso sistema!</h1>
    <?php 
        echo '<div class="d-none">';
        require_once 'index.php'; 
        echo '</div>';
    ?>
    <!-- não consigo exibir os demais lutadores -->
    <?php
        for ($count=0; $count < count($lutadores) ; $count++) { 
            $lutadores[$count]->apresentar();
        }
    ?>
</body>
</html>