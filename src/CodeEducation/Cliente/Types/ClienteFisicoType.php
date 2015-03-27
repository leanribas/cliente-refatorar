<?php

namespace CodeEducation\Cliente\Types;

use CodeEducation\Cliente\ClienteAbstract;

class ClienteFisicoType extends ClienteAbstract
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
        if($estrelas > 3)
        {
            $this->estrelas = 3;
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
        return 'Endereço de Cobrança Pessoa Física';
    }


}