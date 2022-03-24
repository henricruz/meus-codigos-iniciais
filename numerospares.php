<html>
<body>

    <form action="numerospares.php" method="POST">
    <label>Numeros pares de 0 a 80</label><br/><br/>
    </form>
 
    <?php
        
    for($cont=1; $cont<=80;$cont++){
       if(($cont % 2 ) == 0){
          echo $cont. "-";
     echo "\n";
    }
    else {
        echo "";
    }
    }  
    ?>

    </body>
    </html>
