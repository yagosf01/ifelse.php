<?php 

$idade1 = 19;
$idade2 = 17;

$maioridade = 18;
$msg = "Você é maior de idade <br>"; //<br> ja na mensagem

if($idade1 >= $maioridade){
    echo '1 - '; // para printar (1 - Você é maior de idade)
    echo $msg;
}

if($idade2 >= $maioridade){
    echo "2 - ";
    echo $msg;
}

if($idade2 >= $maioridade){
    echo "3 - ";
    echo $msg;
} else {
    echo '4 - Vc é menor de idade <br>';
}
/////////////////////////////////////////////////////////
$string = "String";
$inte = 10;
$booleano = []; 

$inteiro = "É um inteiro <br>";
$nInteiro = "Não é um inteiro <br>";

if(is_int($string)){
    echo "5 - ";
    echo $inteiro;
} else {
    echo "5 - ";
    echo $nInteiro;
}

if(is_int($inte)){
    echo "6 - ";
    echo $inteiro;
} else {
    echo "6 - ";
    echo $nInteiro;
}

if(is_int($booleano)){
    echo "7 - ";
    echo $inteiro;

} else { 
    echo "7 - ";
    echo $nInteiro;
}
////////////////////////////////////////////////////

$peso = 70;

if($peso > 80){
    echo('8 - Esta pesado dms');
} else {
    echo('8 - Peso dentro do limite <br>');
}
////////////////////////////////////////////////////
$a = 2;
$b = 10;
$c = 'teste';

if(is_numeric($a)){
    $conta = $a * 20;
    if($conta > 100){
        echo "9 - Número maior que 100! <br>";
    } else {
        echo "9 - Número menor que 100! <br>";
    }
}

if(is_numeric($c)){
    $conta = $a * 20;
    if($conta > 100){
        echo "10 - Número maior que 100! <br>";
    } else {
        echo "10 - Número menor que 100! <br>";
    }
} else {
    echo " 10 - Não é um numero <br>";
}

////////////////////////////////////////////////////////
// CRIE UMA VARIAVEL QUE RECEBE VELOCIDADE DE UM CARRO
// DEPOIS CIRE UMA ESTRUTURA IF QUE VERIFICA ESSA VELOCIDADE
// SE A VEL FOR MENOR QUE 40 (VELOCIDADE CORRETA) IGUAL 40 (CUIDADO) MAIOR QUR 40 (MULTA)

$velocidade = 50;

if($velocidade < 40) {
    echo "Velocidade Correta <br>";
}   else if($velocidade == 40) {
    echo "Cuidado <br>";
}   else {
    echo "Multa <br>";
}
////////////////////////////////////////////////////////
// SWITCH

$x = 0;

switch($x) {
    case 0:
        echo " x é igual a 0 <br>"
        break;
    case 1:
        echo "X é igual a 1 <br>"
}       break;
    default:
        echo " X não é igual a nenhum número <br>"
?>
