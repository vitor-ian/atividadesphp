<html>
 <head>
    <title>Atividade 7</title>
 </head>

 <body>

 <h2>Crie um algoritmo que pergunte ao usuário seu nome e sua idade. Em seguida verifique se a idade é maior ou menor que 18, exiba da seguinte forma: Fulano é maior de 18 e tem XX Anos ou Fulano não é maior de 18 e tem XX Anos.</h2>
  <form action="" method="get">
    <label>Insira</label>
    <input id="info" type="text" name="nome" placeholder="Nome" />
    <input id="info" type="number" name="idade" placeholder="Idade" />
    <input type="submit" id="btn" name="submit" value="Calcular" />
  </form> 

 <?php 

  $nome = $_GET['nome'];
  $idade = $_GET['idade'];
  
    if($idade >= 18){
        echo "{$nome} é maior de 18 anos, e tem {$idade} anos.";
    }else{
        echo "{$nome} não é maior de 18 anos, e tem {$idade} anos.";
    }
    
  
 ?>

 </body>

</html>