<?php
include_once '../model/conexao.php';
include_once '../model/lutador.php';

$nome =  ( $_SERVER["REQUEST_METHOD"] == "POST" && !empty( $_POST['nome']) )? $_POST['nome'] : null; 
$nacionalidade =  ( $_SERVER["REQUEST_METHOD"] == "POST" && !empty( $_POST['nacionalidade']) )? $_POST['nacionalidade'] : null; 
$idade =  ( $_SERVER["REQUEST_METHOD"] == "POST" && !empty( $_POST['idade']) )? $_POST['idade'] : null; 
$altura =  ( $_SERVER["REQUEST_METHOD"] == "POST" && !empty( $_POST['altura']) )? $_POST['altura'] : null; 
$peso =  ( $_SERVER["REQUEST_METHOD"] == "POST" && !empty( $_POST['peso']) )? $_POST['peso'] : null; 
$vitorias =  ( $_SERVER["REQUEST_METHOD"] == "POST" && !empty( $_POST['vitorias']) )? $_POST['vitorias'] : null; 
$derrotas =  ( $_SERVER["REQUEST_METHOD"] == "POST" && !empty( $_POST['derrotas']) )? $_POST['derrotas'] : null; 
$empates =  ( $_SERVER["REQUEST_METHOD"] == "POST" && !empty( $_POST['empates']) )? $_POST['empates'] : null; 

$emoticonObj = New Lutador($nome, $nacionalidade, $idade, $altura, $peso, $vitorias, $derrotas, $empates);
// $emoticonObj->editar(6);
$emoticonObj->add();
$emoticonObj->listar();