<html>
 <head>
  
 </head>
 <body>
 <form action="parOUimpar.php" method="get">
  Digite um número:  <input type="number" name="number" /><br />
  <input type="submit" name="nome" value="Testar" />
 </form> 
 <?php 
  $number = $_GET['number'];

  if($number % 2 == 0)
   echo "$number é par";
  else
   echo "$number é ímpar";
 ?>
 </body>
</html>