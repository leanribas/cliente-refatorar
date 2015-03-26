<?php

class ClienteJuridico extends Cliente
{
    protected $cnpj;

    public function getCnpj()
    {
        return $this->cnpj;
    }

    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;
        return $this;
    }
    
    public function setImportanciaCliente($estrelas)
    {
        if($estrelas > 5 || $estrelas < 1)
        {
            throw new Exception('Quantidade de estrelas para pessoa jurídica não pode ser maior que 5');
        }    
        else
        {
            $this->estrelas = $estrelas;
        }
    }
    
    public function getEnderecoCobranca()            
    {
        return 'Endereço de Cobrança Pessoa Jurídica.';
    }


}