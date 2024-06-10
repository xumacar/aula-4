<html>
    <body>
        <?php
        $idade = 20;
        if($idade > 18) {
           echo "Você é maior de idade.";
        } elseif ($idade == 18) {
           echo "Você acabou de atingir a maioridade.";
        } else {
           echo "Você é menor de idade.";
        }
        ?>
    </body>
</html>    