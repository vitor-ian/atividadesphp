<html>
 <head>
    <title>Atividade 2</title>
 </head>

 <body>

 <h2>Crie um algoritmo que solicite a entrada de um número, e exiba a tabuada de 0 a 10 de acordo com o número solicitado</h2>
  <form action="" method="get">
    <label>Insira</label>
    <input id="info" type="number" name="number" placeholder="0" />
    <input type="submit" id="btn" name="submit" value="Calcular" />
  </form> 

 <?php 

  $n = $_GET['number'];
  
    for($i = 0; $i<=10; $i++){
        echo "{$n} * {$i} = " . ($n * $i) . "<br>";
    }
    
  
 ?>

 </body>

</html>