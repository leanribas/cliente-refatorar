<?php

namespace CodeEducation\Cliente\Types;

use CodeEducation\Cliente\ClienteAbstract;

class ClienteJuridicoType extends ClienteAbstract
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
        if($estrelas > 5)
        {
            $this->estrelas = 5;
        }   
        elseif($estrelas < 1)
        {
            $this->estrelas = 1;
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