<html>
    <body>
        <h1>Exercicio 01</h1>
        <hr/>

        <form action="lista1.php" method="POST">
        <label>Distancia percorrida</label><br/>
        <input type="number" name="distancia" required/><br/><br/>
        <label>Litros consumidos</label><br/>
        <input type="number" name="litros" required/><br/><br/>
        <input type="submit" value="Verificar"/>


        </form>

<?php
    if (isset($_POST['distancia'])){
    $km = $_POST['distancia'];
    $litros = $_POST['litros'];
    $cm = $km/$litros;
    echo "O consumo médio foi: ".number_format($cm,2);
    }
    else{
        echo"";
    }
    ?>
    <hr/>
    <h1>Exercicio 02</h1>
    <hr/>

    <form action="lista1.php" method="POST">
        <label>Digite a temperaura em Farenheit</label><br/>
        <input type="number" name="fare" required/><br/><br/>
        <input type="submit" value="Converter"/>
        </form>
    <?php
        if(isset($_POST['fare'])){
            $f = $_POST['fare'];
            $c = 5*($f-32)/9;
            echo "Temperatura em Celsius é: ".number_format($c,2);
        }else {
            echo "";
        }
         
    ?>
    <hr/>
    <h1>Exercicio 03</h1>
    <hr/>

    <form action="lista1.php" method="POST">
    <label>Digite um valor</label><br/>
    <input type="number" name="numero" required/><br/><br/>
    <input type="submit" value="Verificar"/>
    </form>

    <?php
    if(isset($_POST['numero'])){
        $num = $_POST['numero'];
        if($num % 2 == 0){
        echo " É par";
    }
    else{
        echo "É ímpar"; 
        } 
    }else {
        echo "";
    }
    ?>
    <hr/>
    <h1>Exercicio 04</h1>
    <hr/>

    <form action="lista1.php" method="POST">
        <label>Informe seu salario</label><br/>
        <input type="number" name="salario" required/><br/><br/>
        <input type="submit" value="Calcular"/>
    </form>

    <?php
        if(isset($_POST['numero'])){
            $salario= $_POST['salario'];
            if($salario <= 280){
                $reajuste = 20;
                $aumento = $salario/100*$reajuste;
                $novosalario = $salario + $aumento;
                echo "<hr/>";
                echo "Salario anterior: R$ ".number_format($salario,2);
                echo "Reajuste: <b>".$reajuste."%</b>";
                echo "Valor do aumento: R$ ".number_format($aumento,2);
                echo "Novo salário R$ ".number_format($novosalario,2);
            }
            elseif($salario > 280 && $salario <=700){
                $reajuste = 15;
                $aumento = $salario/100*$reajuste;
                $novosalario = $salario + $aumento;
                echo "<hr/>";
                echo "Salario anterior: R$ ".number_format($salario,2);
                echo "Reajuste: <b>".$reajuste."%</b>";
                echo "Valor do aumento: R$ ".number_format($aumento,2);
                echo "Novo salário R$ ".number_format($novosalario,2);

            }
            elseif($salario > 700 && $salario <=1500){
                $reajuste = 10;
                $aumento = $salario/100*$reajuste;
                $novosalario = $salario + $aumento;
                echo "<hr/>";
                echo "Salario anterior: R$ ".number_format($salario,2);
                echo "Reajuste: <b>".$reajuste."%</b>";
                echo "Valor do aumento: R$ ".number_format($aumento,2);
                echo "Novo salário R$ ".number_format($novosalario,2);

            }
            else{
                $reajuste = 5;
                $aumento = $salario/100*$reajuste;
                $novosalario = $salario + $aumento;
                echo "<hr/>";
                echo "Salario anterior: R$ ".number_format($salario,2);
                echo "Reajuste: <b>".$reajuste."%</b>";
                echo "Valor do aumento: R$ ".number_format($aumento,2);
                echo "Novo salário R$ ".number_format($novosalario,2);

            }
        }else{
            echo "";
        }
        
        

    ?>



    </body>
    </html>
