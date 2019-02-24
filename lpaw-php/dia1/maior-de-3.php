<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Maior de 3</title>
    </head>
    <body>

        <div>
            <h2>Maior de 3</h2>
            <!-- 
            Elabore um programa em PHP que compare três números inteiros e determine 
            qual o maior entre eles. Imprima os três números em ordem crescente e informe o maior
            -->
            <form method="post" action="">
                <p><label for="num1">1º numero: </label> <input type="text" name="num1"></p>
                <p><label for="num2">2º numero: </label> <input type="text" name="num2"></p>
                <p><label for="num3">3º numero: </label> <input type="text" name="num3"></p>
                <button type="submit" name="maior">Maior dos 3</button>
                <p><label>O maior é: </label>
                    <?php
                    if (isset($_POST['maior'])):
                        $num1 = $_POST['num1'];
                        $num2 = $_POST['num2'];
                        $num3 = $_POST['num3'];
                        $aux = '';

                        if ($num1 > $num2) {
                            $aux = $num1;
                            $num1 = $num2;
                            $num2 = $aux;
                        }
                        if ($num1 > $num3) {
                            $aux = $num1;
                            $num1 = $num3;
                            $num3 = $aux;
                        }
                        if ($num2 > $num3) {
                            $aux = $num2;
                            $num2 = $num3;
                            $num3 = $aux;
                        }
                        echo $num3;
                        echo '<br>a ordem crescente é: ' . $num1 . ', ' . $num2 . ', ' . $num3;
                    endif;
                    ?></p>
            </form>
        </div>
    </body>
</html>