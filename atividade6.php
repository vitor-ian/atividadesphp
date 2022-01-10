<html>
 <head>
    <title>Atividade 6</title>
 </head>

 <body>

 <h2>Crie um algoritmo para calcular a média final de um aluno, para isso, solicite a entrada de três notas e as insira, por fim, calcule a média geral. Caso a média seja maior ou igual a seis, exiba aprovado, caso contrário, exiba reprovado. Exiba também a média final calculada.</h2>
  <form action="" method="get">
    <label>Insira</label>
    <input id="info" type="number" name="number" placeholder="0" />
    <input id="info" type="number" name="numberdois" placeholder="0" />
    <input id="info" type="number" name="numbertres" placeholder="0" />
    <input type="submit" id="btn" name="submit" value="Calcular" />
  </form> 

 <?php 

  $n = $_GET['number'];
  $nd = $_GET['numberdois'];
  $nt = $_GET['numbertres'];
  $resultado = '';

    $resultado = (($n+$nd+$nt)/3);
  
    if($resultado >= 6){
        echo "Média: ". $resultado ." | Situação: Aprovado";   
    }else{
        echo "Média: ". $resultado ." | Situação: Reprovado";
    }
    
  
 ?>

 </body>

</html>