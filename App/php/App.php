<?php

require_once('Model/Contato.php');
require_once('Controller/contatoController.php');
require_once('Helpers/Conexao.php');


$nome = filter_input(INPUT_POST,'nome',FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_STRING);
$fone = filter_input(INPUT_POST,'fone',FILTER_SANITIZE_STRING);
$cidade = filter_input(INPUT_POST,'cidade',FILTER_SANITIZE_STRING);
$estado = filter_input(INPUT_POST,'estado',FILTER_SANITIZE_STRING);
$modelo = filter_input(INPUT_POST,'modelo',FILTER_SANITIZE_STRING);
$hora = filter_input(INPUT_POST,'hora',FILTER_SANITIZE_STRING);
$mensagem = filter_input(INPUT_POST,'mensagem',FILTER_SANITIZE_STRING);


$contato = new Contato();

$contato->setNome($nome);
$contato->setEmail($email);
$contato->setFone($fone);
$contato->setCidade($cidade);
$contato->setEstado($estado);
$contato->setModelo($modelo);
$contato->setHora($hora);
$contato->setMensagem($mensagem);

$controller = new contatoController($contato);

$controller->cadastrar();

