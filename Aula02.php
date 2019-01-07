<?php
// Exibe o nome do nosso servidor
    echo  $_SERVER['SERVER_NAME'];
// Exibe o caminho ate nosso servidor
    echo $_SERVER['DOCUMENT_ROOT'];

//Podemos usar outra função que gera todas as informações
// A tag <pre> serve para organizar as variaveis
echo '<pre>';
print_r($_SERVER);
echo '</pre>';

?>