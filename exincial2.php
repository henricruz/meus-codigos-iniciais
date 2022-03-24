<html>
    <cabeça>
        <título>Maioridade</título>
        <meta nome="descrição" conteúdo="Exercício 1"/>
    </cabeça>
    <corpo>
        <centro>Maioridade</centro>
        <rh/>
        <form action="exinicial2.php" método="POST">
            <rótulo>Digite o seu nome</label><br/> 
            <tipo de entrada="texto" nome="nome" espaço reservado="Digite o seu nome" necessário/><br/>
            <rótulo>Digite a sua idade</rótulo><br/> 
            <tipo de entrada="texto" nome="idade" espaço reservado="Digite a sua idade" required/><br/><br/>
            <tipo de entrada="enviar" valor="Resultado"/>
        </forma>
<?php
    if (isset ($_POST['nome'])){
        $nome = $_POST['nome'];
        $idade = $_POST['idade'];
        echo "<hr/>";
        echo "Seu nome é: <b>". Nome de $. "</b><br/>";
        if ($idade >= 18){
            echo "É maior.<br/>";
        }else {
            echo "Não é de maior.<br/>";
        }
        echo "Sua idade é: <b>". $idade. "</b>";
    } else {
        echo "";
    }
?>
</corpo>
</html>