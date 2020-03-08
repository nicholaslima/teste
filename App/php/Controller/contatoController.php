<?php

class contatoController{
    private $contato;

    public function __construct($contato){
        $this->contato = $contato;
    }

    public function cadastrar(){
        $conexao = new Conexao();
        
        $query = "insert into contato (nome,email,fone,cidade,estado,modelo_carro,hora_ligar,mensagem) VALUES 
        ('{$this->contato->getNome()}','{$this->contato->getEmail()}','{$this->contato->getFone()}',
        '{$this->contato->getCidade()}','{$this->contato->getEstado()}','{$this->contato->getModelo()}',
        '{$this->contato->getHora()}','{$this->contato->getMensagem()}')"; 

		$conexao = conexao::conectar();
		return $conexao->exec($query);

    }
}

