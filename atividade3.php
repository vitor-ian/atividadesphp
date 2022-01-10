<html>
 <head>
    <title>Atividade 3</title>
 </head>

 <body>

 <h2>Crie um programa em que o usuário escolha uma operação (soma, subtração, multiplicação ou divisão). Crie duas caixas de texto para receber 2 números. Realize a operação escolhida em cada um dos números. </h2>
  <form action="" method="get">
    <label>Insira</label>
    <input id="info" type="number" name="number" placeholder="0" />
    <input id="info" type="number" name="numberdois" placeholder="0" />
    <br>
    <label>1: Soma | 2:Subtração | 3: multipilcação | 4: divisão</label>
    <br>
    <input id="info" type="number" name="operacao" placeholder="1 - 2 - 3 - 4" />
    <input type="submit" id="btn" name="submit" value="Calcular" />
  </form> 

 <?php 

  $n = $_GET['number'];
  $nd = $_GET['numberdois'];
  $op = $_GET['operacao'];
  $resultado = '';

  switch($op){
      case"1":
        $resultado = ($n+$nd);
        break;
      case"2":
        $resultado = ($n-$nd);
        break;
      case"3":
        $resultado = ($n*$nd);
        break;
      case"4":
        $resultado = ($n/$nd);
        break;
  }

  echo 'O resultado é: '. $resultado;
  
 ?>

 </body>

</html>