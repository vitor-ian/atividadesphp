<html>
 <head>
    <title>Atividade 4</title>
 </head>

 <body>

 <h2>Solicite a entrada de um número e descubra se um número digitado é par ou ímpar. </h2>
  <form action="" method="get">
    <label>Insira</label>
    <input id="info" type="number" name="number" placeholder="0" />
    <input type="submit" id="btn" name="submit" value="Calcular" />
  </form> 

 <?php 

  $n = $_GET['number'];
  
    if($n%2 == 0){
        echo 'Numero par';
    }else{
        echo 'Numero impar';
    }
    
  
 ?>

 </body>

</html>