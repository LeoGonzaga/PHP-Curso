<!-- Arrays -->

<?php
// $nome = array('Leo', 'Jao', 'Pedro');
// echo $nome[0];
// echo $nome[1];
// echo $nome[2];
?>

<!-- Com a versão nova do php podemos tirar a palavra array e trocar parentes por colchetes -->

<!-- <?php
$variaveis = ['Teste', 'Pipoca','Feliz natal'];
echo $variaveis[2];
?> -->

<!-- Podemos usar strings como seletores da array -->
<?php
$informacao['nome'] = 'Leo';
$informacao['idade'] = 22;
$informacao['cidade'] = 'Pedralva';

echo $informacao['nome'];

echo $informacao['idade'];

echo $informacao['cidade'];

?>