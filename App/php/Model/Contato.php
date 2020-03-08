<?php



class Contato
{
    private $nome;
    private $email;
    private $fone;
    private $cidade;
    private $estado;
    private $modelo;
    private $hora;
    private $mensagem;

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function setEmail($email){
        $this->email = $email;
    }
    public function setFone($fone){
        $this->fone = $fone;
    }
    public function setCidade($cidade){
        $this->cidade = $cidade;
    }
    public function setEstado($estado){
        $this->estado = $estado;
    }
    public function setModelo($modelo){
        $this->modelo = $modelo;
    }
    public function setHora($hora){
        $this->hora = $hora;
    }
    public function setMensagem($mensagem){
        $this->mensagem = $mensagem;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getFone(){
        return $this->fone;
    }

    public function getCidade(){
        return $this->cidade;
    }

    public function getEstado(){
        return $this->estado;
    }

    public function getModelo(){
        return $this->modelo;
    }

    public function getHora(){
        return $this->hora;
    }

    public function getMensagem(){
        return $this->mensagem;
    }
}