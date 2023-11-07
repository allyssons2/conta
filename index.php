<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
          <h1>Atividade</h1>
 
<form action="">
        <label for="nome">numero</label>
        <input type="text" name="numero">
        <br>
        <label for="nome">agencia</label>
        <input type="text" name="agencia">
        <br>        
        <label for="nome">proprietario</label>
        <input type="text" name="proprietario">
        <br>        
        <label for="nome">saldo</label>
        <input type="text" name="saldo">
        <br>        
        <label for="nome">limite</label>
        <input type="text" name="limite">
        <br>
        <input type="submit" value="Salvar">
         
<?php
 .
    include("conta.php");
    $conta = new conta();
    
 
   if (isset($_get["cadastrar"]))
   {
    $conta = new conta();
       
    $conta->create($_get["numero"],$_get["agencia"],$_get["proprietario"],$_get["saldo"],$_get["limite"]);
   }
     echo "<p> "conta cadastrada"</p>";
  ?>
 
 
</body>
</html>
 