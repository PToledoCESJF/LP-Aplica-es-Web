<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sucessor</title>
    </head>
    <body>
        <!-- 
        Leia um número e exiba seu sucessor.
        -->
        <div>
            <h2>Sucessor</h2>
            <form method="post" action="">
                <p><label for="numeo">número: </label> <input type="text" name="numero"></p>
                <button type="submit" name="sucessor">Sucessor</button>
                <p><label>O sucessor é: </label>
                    <?php
                    if (isset($_POST['sucessor'])):
                        $n = $_POST['numero'];
                        echo ++$n;
                    endif
                    ?></p>
            </form>
        </div>
    </body>
</html>