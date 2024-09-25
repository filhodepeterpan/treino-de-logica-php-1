<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/style.css">
    <title>Lista de Exercícios</title>
</head>
<body>
    <div class="conteudo">
        <h1 id="conteudo-titulo">Escolha uma opção</h1>
        <br>
        <form class="formulario" action="dados.php" method="POST">
            <p><strong id="numero-destaque">1.</strong> Números de 1 a 100 - pares e em ordem crescente</p>
            <p><strong id="numero-destaque">2.</strong> Números de 1 a 100 - ímpares e em ordem decrescente </p>
            <label><strong id="numero-destaque">3.</strong> Tabuada do número:</label>
            <input type="number" min="1" max="10" placeholder="De 1 a 10" name="tabuada">
            <p><strong id="numero-destaque">4.</strong> Todas as tabuadas de 1 a 10</p>
            <p><strong id="numero-destaque">5.</strong> 20 primeiros termos da sequência Fibonacci</p>
            <br><br>
            <label>Digite o número correspondente:</label>
            <br>
            <input type="number" min="1" max="5" name="opcao" id="opcao">
            <input type="submit" id="botao">
        </form>
        <div class="resultado">
            <?php 
                $tabuada = intval($_POST["tabuada"]);
                $opcao = $_POST["opcao"];

                switch ($opcao){
                    case 1:
                        echo "<br><h1 id='numeros'>Números:<br></h1>";
                        echo "<ul class='lista'>";
                        for($i = 1; $i <= 100; $i++){
                            if($i % 2 == 0){
                                echo "<li id='lista-item'>" .$i ."</li>";
                            }
                        }
                        echo "</ul>";
                    break;

                    case 2:
                        echo "<br><h1 id='numeros'>Números:<br></h1>";
                        echo "<ul class='lista'>";
                        for($i = 100; $i >= 1; $i--){
                            if($i % 2 != 0){
                                echo "<li id='lista-item'>" .$i ."</li>";
                            }
                        }
                        echo "</ul>";
                    break;

                    case 3:
                        if ($tabuada == 0){
                            echo "<ul class='lista'>";
                            echo "<li id='lista-item'>Você precisa adicionar um número antes de solicitar a tabuada.</li>";
                            echo "</ul>";
                        }
                        else{
                            echo "<br><h1 id='nome-da-tabuada'>Tabuada do " .$tabuada .":<br></h1>";
                            echo "<ul class='lista'>";
                            for ($i = 1; $i <= 10; $i++){
                                echo "<li id='lista-item'>" .$tabuada ." x " .$i ." = " .($tabuada*$i) ."</li>";
                            }
                        }
                        echo "</ul>";
                    break;

                    case 4:
                        for($i = 1; $i <= 10; $i++){
                            echo "<br><h1 id='nome-da-tabuada'>Tabuada do " .$i .":<br></h1>";
                            echo "<ul class='lista'>";

                            for($t = 1; $t <= 10; $t++){
                                echo "<li id='lista-item'>" .$i ." x " .$t ." = " .($i*$t) ."</li>";
                            }

                            echo "</ul><br>";
                        }
                    break;

                    case 5:
                        $penultimo = 1;
                        $ultimo = 1;

                        echo "<br><h1 id='fibonacci'>Sequência Fibonacci:<br></h1>";
                        echo "<ul class='lista'>";
                        echo "<li id='lista-item'>1º termo: " . $penultimo . "</li>";
                        echo "<li id='lista-item'>2º termo: " . $ultimo . "</li>";

                        for($i = 3; $i <= 20; $i++){
                            $resultado = $penultimo + $ultimo;
                            echo "<li id='lista-item'>".$i ."º termo: " . $resultado . "</li>";
                            $penultimo = $ultimo;
                            $ultimo = $resultado;
                        }
                        echo "</ul>";
                    break;

                    default:
                    echo "<ul class='lista'>";
                    echo "<li id='lista-item'>Nenhuma das opções foi selecionada.</li>";
                    echo "</ul>";
                    break;
                }
            ?>
        </div>
    </div>
</body>
</html>