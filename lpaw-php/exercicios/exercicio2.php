<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        

        <div>
            <h2>Divisores</h2>
            <!-- 
            Elabore um programa em PHP que, a partir de um número inteiro e positivo, 
            escreva todos os seus divisores. Por exemplo: se o número for 6, os divisores serão: 1, 2, 3 e 6
            -->
            <form method="post" action="">
                <p><label for="inteiro">Digite um inteiro: </label>
                    <input type="text" name="inteiro"></p>
                <button type="submit" name="divisores">Divisores</button>
                <p><label>Seus divisores são: </label>
                    <?php
                    if (isset($_POST['divisores'])):
                        $inteiro = $_POST['inteiro'];
                        for ($i = 1; $i <= $inteiro; $i++) {
                            if ($inteiro % $i === 0) {
                                echo ' ' . $i;
                            }
                        }
                    endif
                    ?></p>
            </form>
        </div>
    </body>
</html>