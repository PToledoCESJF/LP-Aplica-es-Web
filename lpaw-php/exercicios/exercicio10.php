<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>IMC</title>
    </head>
    <body>
        <h1>IMC</h1>
        <!-- 
        Elabore um programa em PHP que exiba a tabela de índice de Massa Corporal (IMC)
        e calcule o IMC para uma determinada pessoa. Os dados sobre peso(kg) e altura(m)
        são fornecidos através de variáveis. IMC = peso / altura**2.
        -->
        <div>
            <form method="post" action="exercicio10-res.php">
                <p><label for="peso">digite seu peso: </label> <input type="text" name="peso"></p>
                <p><label for="altura">digite sua altura: </label> <input type="text" name="altura"></p>
                <button type="submit" name="calcular">Calcular</button>                    
            </form>
        </div>
    </body>
</html>