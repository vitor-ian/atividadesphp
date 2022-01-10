<html>
 <head>
    <title>Atividade 5</title>
 </head>

 <body>

 <h2>Faça um algoritmo PHP que receba os valores A e B, imprima-os em ordem crescente em relação aos seus valores.</h2>
  <form action="" method="get">
    <label>Insira</label>
    <input id="info" type="number" name="number" placeholder="0" />
    <input id="info" type="number" name="numberdois" placeholder="0" />
    <input type="submit" id="btn" name="submit" value="Calcular" />
  </form> 

 <?php 

  $n = $_GET['number'];
  $nd = $_GET['numberdois'];
  
    if($n < $nd){
        echo $n ."<br>". $nd;
    }else{
        echo $nd ."<br>". $n;
    }
    
  
 ?>

 </body>

</html>