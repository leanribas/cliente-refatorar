<?php

abstract class Cliente implements ImportanciaClienteInterface, EnderecoCobrancaInterface
{
    protected $nome;
    protected $email;
    protected $redesocial;
    protected $celular;
    protected $fixo;
    protected $endereco;
    protected $estrelas;

    public function getNome() {
        return $this->nome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getRedesocial() {
        return $this->redesocial;
    }

    public function getCelular() {
        return $this->celular;
    }

    public function getFixo() {
        return $this->fixo;
    }

    public function getEndereco() {
        return $this->endereco;
    }

    public function setNome($nome) {
        $this->nome = $nome;
        return $this;
    }

    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }

    public function setRedesocial($redesocial) {
        $this->redesocial = $redesocial;
        return $this;
    }

    public function setCelular($celular) {
        $this->celular = $celular;
        return $this;
    }

    public function setFixo($fixo) {
        $this->fixo = $fixo;
        return $this;
    }

    public function setEndereco($endereco) {
        $this->endereco = $endereco;
        return $this;
    }
    
    public function getImportanciaCliente()
    {
        return $this->estrelas;
    }


    
}
