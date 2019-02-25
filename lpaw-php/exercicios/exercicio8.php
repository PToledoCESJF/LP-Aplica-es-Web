<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>3 Salários</title>
    </head>
    <body>
        <!-- 
        Construa um algoritmo que leia o salário de 3 pessoas, 
        escreva o maior valor e a diferença percentual para o menor valor.
        -->
        <div>
            <h2>3 Salários</h2>
            <form method="post" action="">
                <p><label for="salario1">Salário 1: </label> <input type="text" name="salario1"></p>
                <p><label for="salario2">Salário 2: </label> <input type="text" name="salario2"></p>
                <p><label for="salario3">Salário 3: </label> <input type="text" name="salario3"></p>
                <button type="submit" name="calcular" >Calcular</button><br>
            </form>
        </div>
    </body>
</html>
<?php
    if (isset($_POST['calcular'])) {
        $s1 = $_POST['salario1'];
        $s2 = $_POST['salario2'];
        $s3 = $_POST['salario3'];
        maiorMenor($s1, $s2, $s3);
    }
    
    function maiorMenor($s1, $s2, $s3) {
        $arraySalario = array($s1, $s2, $s3);
        $maior = max($arraySalario);
        $menor = min($arraySalario);
        resultado($maior, $menor);
    }

    function resultado($maior, $menor) {
        echo 'O maior salário é: R$' . number_format($maior,2) . '<br>';
        echo 'com uma diferença percentual de: ' . number_format((($maior / $menor)-1)*100,2) . '% sobre o menor salário';
    }
