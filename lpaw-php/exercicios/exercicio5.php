<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Média 3 provas</title>
    </head>
    <body>
        <!-- 
        Calcular a média final dadas as notas das 3 provas e produzir uma saida com a 
        média e a situação do aluno de acordo com o seguinte critério: média >= 7, aprovado;
        5 < média < 7, recuperação; média < 5, reprovado.
        -->
        <div>
            <h2>Média de 3 Provas</h2>
            <form method="post" action="">
                <p><label for="prova1">prova 1: </label> <input type="text" name="prova1"></p>
                <p><label for="prova2">prova 2: </label> <input type="text" name="prova2"></p>
                <p><label for="prova3">prova 3: </label> <input type="text" name="prova3"></p>
                <button type="submit" name="calcular" >Calcular</button><br>
            </form>
        </div>
    </body>
</html>
<?php
    if (isset($_POST['calcular'])) {
        $p1 = $_POST['prova1'];
        $p2 = $_POST['prova2'];
        $p3 = $_POST['prova3'];
        echo resultado(calcularMedia($p1, $p2, $p3));
    }
    
    function calcularMedia($p1, $p2, $p3) {
        return ($p1 + $p2 + $p3) / 3;
    }

    function resultado($m) {
        $msg = "";
        if ($m >= 7) {
            $msg = ' Aluno aprovado';
        } else if ($m > 5) {
            $msg = ' Aluno em recuperação';
        } else {
            $msg = ' Aluno reprovado';
        }
        return 'A média é: ' . $m . $msg;
    }
