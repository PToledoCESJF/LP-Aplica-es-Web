<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Quociente e Resto</title>
    </head>
    <body>
        <!-- 
        Ler dois números inteiros, x e y, e imprimir o quociente e o resto da 
        divisão inteira entre eles.
        -->
        <div>
            <h2>Quociente e Resto</h2>
            <form method="post" action="">
                <p><label for="n1">dividendo: </label> <input type="text" name="n1"></p>
                <p><label for="n2">divisor: </label> <input type="text" name="n2"></p>
                <button type="submit" name="calcular" >Calcular</button><br>
            </form>
        </div>
    </body>
</html>
<?php
    if (isset($_POST['calcular'])) {
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];
        echo resultado($n1, $n2);
    }
    
    function resultado($n1, $n2) {
        return 'O quociente da divisão: ' . floor($n1/$n2) . ' o resto é: ' . ($n1 % $n2);
    }
