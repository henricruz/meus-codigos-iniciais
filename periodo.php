<html>
    <corpo>
        <h2>Exercício 01</h2>
        <form action="periodo.php" método="POST">
            <rótulo>Nome</rótulo><br/>
            <tipo de entrada="texto" nome="nome" espaço reservado="Digite o seu nome" obrigatório/><br/><br/>
            <rótulo>Períodos</rótulo><br/>
            <selecionar nome="periodo">
                <opcao Valor="matutino" selecionado>Matutino</switch>
                <opcao Valor="vespertino">Vespertino</switch>
                <opcao valor="noturno">Noturno</switch>
            </selecionar><br/><br/>
            <tipo de entrada="submit" valor="Manda ver...."/>
        </forma>
        <rh/>
        <?php
            if (isset ($_POST['nome']))
            {
                $nome = $_POST['nome'];
                $periodo = $_POST['periodo'];
                echo "Nome do aluno: <b>".$nome. "</b><br/>";
                switch ($periodo){
                    case 'matutino':
                        echo "<h3>Bom dia!</h3>";
                        break;
                    case 'vespertino':
                        echo "<h3>Boa tarde!</h3>";
                        break;
                    case 'noturno':
                        echo "<h3>Boa noite!</h3>";
                        break;
                }
            }
            else 
            {
                echo "";
            }  
        ?>
        <rh/>
        <h2>Exercício 02</h2>
        
    </corpo>
</html>