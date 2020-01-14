<?php
include 'conexao/conexao.php';
$sql = "SELECT * FROM  lucros";
$buscar = mysqli_query($conexao, $sql);

$ano2019 = "";
$ano2018 = "";
$mes = "";
while ($dados = mysqli_fetch_array($buscar)) {

  $mes = $mes . '"' . $dados['mes'] . '",';
  $ano2018 = $ano2018 . '"' . $dados['ano_2018'] . '",';
  $ano2019 = $ano2019 . '"' . $dados['ano_2019'] . '",';
  $mes = trim($mes);
  $ano2018 = trim($ano2018);
  $ano2019 = trim($ano2019);
}

?>