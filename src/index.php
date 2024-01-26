<?php

$nome = 'Guilherme';

echo 'O meu nome é '.$nome

?>


<?php

//Declarando variaveis 
    $nome = 'carlos';

    echo "$nome";


    $nome = 'Guilherme';
    echo "Meu nome é: $nome";
    echo '<hr/>';
?>


<?php
// Declarando constantes
define('NOME', 'GUILHERME');

echo NOME; 

echo '<hr/>';
?>


<?php
//Declarando Funcoes Nao orientada e Objetos

function printarNome($nome){
    echo 'Meu nome e' .$nome;
}
printarNome(' Ola, Mundo!');
printarNome('Joao');
echo '<hr/>';
?>