<?php
// Obtenha a data atual
$dataAtual = date("d/m/Y h:i:s");

// Crie a mensagem de commit com a data atual
$mensagemCommit = "Estou trabalhando - " . $dataAtual;

// Adicione todos os arquivos alterados
exec("git add .");

// Faça o commit com a mensagem
exec("git commit -m \"$mensagemCommit\"");

// Envie o commit para o repositório remoto
exec("git push origin main");
?>