<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Moedas</title>
    </head>
    <body>
        <!-- 
        Elabore um programa em PHP que calcule e escreva a quantidade de moedas 
        de 10, 25 e50 centavos necessárias para igualar o valor de uma nota de 
        dinheiro existente no mercado.Informe a nota e a quantidade de moedas.
        -->
        <div>
            <h2>Moedas</h2>
            <form method="post" action="">
                <p><label for="nota">Nota: </label> <input type="text" name="nota"></p>
                <button type="submit" name="calcular" >Calcular</button><br>
            </form>
        </div>
    </body>
</html>
<?php
    if (isset($_POST['calcular'])) {
        $nota = $_POST['nota'];
        resultado($nota);
    }
    
    function maiorMenor($s1, $s2, $s3) {
        $arraySalario = array($s1, $s2, $s3);
        $maior = max($arraySalario);
        $menor = min($arraySalario);
        resultado($maior, $menor);
    }

    function resultado($nota) {
        echo 'Nota de: R$' . number_format($nota,2) . ' pode ser dividida em: <br>';
        echo ($nota / 0.10) . ' moedas de 10 centavos ou <br>';
        echo ($nota / 0.25) . ' moedas de 25 centavos ou <br>';
        echo ($nota / 0.50) . ' moedas de 50 centavos <br>';
    }
