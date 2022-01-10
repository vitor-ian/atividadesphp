<html>
 <head>
    <title>Atividade 1</title>
 </head>

 <body>

 <h2>Crie um algoritmo que receba um número digitado pelo usuário e verifique se esse valor é positivo, negativo ou igual a zero. A saída deve ser: "Valor Positivo", "Valor Negativo" ou "Igual a Zero".</h2>
  <form action="" method="get">
    <label>Insira</label>
    <input id="info" type="number" name="number" placeholder="0" />
    <input type="submit" id="btn" name="submit" value="Calcular" />
  </form> 

 <?php 

  $n = $_GET['number'];
  
    if($n == 0){
        echo 'Valor Igual a Zero';
    }else if($n > 0){
        echo 'Valor Positivo';
    }else{
        echo 'Valor Negativo';
    }
  
 ?>

 </body>

</html>