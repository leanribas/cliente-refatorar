<?php

class ClienteFisico extends Cliente
{
    protected $cpf;   
    public function getCpf()
    {
        return $this->cnpj;
    }

    public function setCpf($cpf)
    {
        $this->cnpj = $cpf;
        return $this;
    }
    
    public function setImportanciaCliente($estrelas)
    {
        if($estrelas > 3 || $estrelas < 1)
        {
            throw new Exception('Quantidade de estrelas para pessoa física não pode ser maior que 3');
        }    
        else
        {
            $this->estrelas = $estrelas;
        }
    }
    
    public function getEnderecoCobranca()
    {
        return 'Endereço de Cobrança Pessoa Física';
    }


}