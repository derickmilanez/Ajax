<?php
$aluno1 = array();
$aluno1["ra"] = "123";
$aluno1["nome"] = "Insert";
$aluno2 = array();
$aluno2["ra"] = "456";
$aluno2["nome"] = "Update";
$aluno3 = array();
$aluno3["ra"] = "789";
$aluno3["nome"] = "Select";
$resultado = array();
$resultado[] = $aluno1;
$resultado[] = $aluno2;
$resultado[] = $aluno3;

echo json_encode($resultado);
?>