<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora PHP</title>
</head>
<body>

<form method="post" action="calcular.php">
    <label for="numero1">Primeiro Número:
        <input type="text" name="numero1" id="numero1" placeholder="Somente números">
    </label>
    <br>
    
    <label for="numero2">Segundo Número:
        <input type="text" name="numero2" id="numero2" placeholder="Somente números">
    </label>
    <br>
    Operação:
    <br>
    <label for="somar">
        <input type="radio" name="operacao" id="somar" value="somar">    
    Somar</label>
    <label for="subtrair">
        <input type="radio" name="operacao" id="subtrair" value="subtrair">    
    Subtrair</label>
    <label for="mutiplicar">
        <input type="radio" name="operacao" id="mutiplicar" value="multiplicar">    
    Multiplicar</label>
    <label for="dividir">
        <input type="radio" name="operacao" id="dividir" value="dividir">    
    Dividir</label>
    <br>
    <input type="submit" value="Calcular">
    

</form>
    
</body>
</html>