<html>
    <corpo>
        <form action="avaliacao.php" método="GET">
            <rótulo>Nome</rótulo>
            <input type="text" name="text" /><br/><br/>
            <rótulo>Nota 1</rótulo>
            <input type="number" name="number" /><br/><br/>
            <rótulo>Nota 2</rótulo>
            <input type="number" name="number" /><br/><br/>
            <tipo de entrada="texto" nome="nome" espaço reservado="Digite o seu nome" necessário/><br/>
            
        </forma>
        <rh/>
<?php
    
    $nome = $_GET["nome"];
    $nota1 = $_GET["nota1"];
    $nota2 = $_GET["nota2"];
    $media = ($nota1 + $nota2)/2;
    if ($media >= 7){
        echo "Aluno: <b>". $nome. "</b><br/>";
        echo "Você foi <b>Aprovado</b>, com média: ". $media;
        echo "<hr>";
    }
    else
    {
        echo "Aluno: <b>". $nome. "</b><br/>";
        echo "Você foi <b>Reprovado</b>, com média: ". $media;
        echo "<hr>";
    }

   ?>
    </corpo>
</html>