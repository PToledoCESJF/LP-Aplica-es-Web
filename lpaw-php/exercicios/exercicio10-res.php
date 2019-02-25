<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Resultado</title>
    </head>
    <body>
        <h1>Resultado</h1>
        <?php
            require_once 'class/Imc.php';
            if(isset($_POST['calcular'])){
                $p = $_POST['peso'];
                $a = $_POST['altura'];
                $imc = new Imc($p, $a);
                $imc->calcularImc();                
            }



