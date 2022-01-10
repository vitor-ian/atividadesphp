<html>
 <head>
    <title>Atividade 8</title>
 </head>

 <body>

 <h2>Ler um número inteiro entre 1 e 12 e escrever o mês correspondente. Caso o número seja fora desse intervalo, informar que não existe mês com este número.</h2>
  <form action="" method="get">
    <label>Insira</label>
    <input id="info" type="number" name="mes" placeholder="Mês" />
    <input type="submit" id="btn" name="submit" value="Calcular" />
  </form> 

 <?php 

  $m = $_GET['mes'];
  $mes = ["Janeiro","Fevereiro","Março","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro"];
  
    if($m >= 1 && $m <= 12){
        echo $mes[$m-1];
    }else{
        echo 'Mês inválido';
    }
    
  
 ?>

 </body>

</html>