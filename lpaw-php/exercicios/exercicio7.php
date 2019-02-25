<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Número quantas vezes ele</title>
    </head>
    <body>
        <!-- 
        Construa um algoritmo para entrar com um número de 1 a 10 e imprimi-lo
        o número de vezes correspondente ao seu valor.
        -->
        <div>
            <h2>Número quantas vezes ele</h2>
            <form method="post" action="">
                <p><label for="numero">Número: </label> <input type="text" name="numero"></p>
                <button type="submit" name="imprimir" >Imprimir</button><br>
            </form>
        </div>
    </body>
</html>
<?php
    if (isset($_POST['imprimir'])) {
        $n = $_POST['numero'];
        resultado($n);
    }
    
    function resultado($n) {
        for($i = 0; $i < $n; $i++){
            echo $n . '<br>';
        }
    }
