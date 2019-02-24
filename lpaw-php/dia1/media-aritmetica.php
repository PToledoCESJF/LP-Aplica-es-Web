<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Média Aritmética</title>
    </head>
    <body>
        <!-- 
        Elabore um programa em PHP que calcule a média aritmética de duas notas 
        e exiba o resultado na tela. As notas estão armazenadas em variáveis.
        -->
        <div>
            <h2>Média Aritmética</h2>
            <form method="post" action="">
                <p><label for="n1">1º número: </label> <input type="text" name="n1"></p>
                <p><label for="n2">2º número: </label> <input type="text" name="n2"></p>
                <button type="submit" name="calcular">Calcular</button>
                <p><label>A média aritmética é: </label>
                    <?php
                    if (isset($_POST['calcular'])):
                        $n1 = $_POST['n1'];
                        $n2 = $_POST['n2'];
                        $media = (($n1 + $n2) / 2);
                        echo $media;
                    endif
                    ?></p>
            </form>
        </div>
    </body>
</html>