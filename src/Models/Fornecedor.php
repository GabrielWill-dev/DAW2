<?php

namespace Sisfin\Models;

use MongoDB\Driver\ClientEncryption;
use Sisfin\Util\Connection;
use Sisfin\Util\TipoPessoa;
use \PDO;


class Fornecedor
{
    private int|null $_id;
    private int|null $_tipoPessoa;
    private string|null $_nome;
    private string|null $_email;
    private string|null $_cpf_cnpj;
    private string|null $_razao_social;
    private string|null $_rua;
    private int|null $_numero;
    private string|null $_bairro;
    private string|null $_cidade;
    private string|null $_complemento;
    private int|null $_cep;
    private string|null $_telefone;
    private string|null $_celular;

    public function getCpfCnpj()
    {
        return $this->_cpf_cnpj;
    }

    public function setCpfCnpj(?string $cpf_cnpj): Fornecedor
    {
        $this->_cpf_cnpj = $cpf_cnpj;
        return $this;
    }

    public function __construct(int $id = 0){
        $this->_id = $id;
        $this->_nome="";
        $this->_tipoPessoa=0;
        $this->_cpf_cnpj = "";
        $this->_email="";
        $this->_razao_social = "";
        $this->_rua = "";
        $this->_numero = 0;
        $this->_bairro = "";
        $this->_cidade = "";
        $this->_complemento = "";
        $this->_cep = 0;
        $this->_telefone = "";
        $this->_celular = "";
    }

    public function getRazaoSocial()
    {
        return $this->_razao_social;
    }

    public function setRazaoSocial(string $razao_social): Fornecedor
    {
        $this->_razao_social = $razao_social;
        return $this;
    }

    public function getRua()
    {
        return $this->_rua;
    }

    public function setRua(string $rua): Fornecedor
    {
        $this->_rua = $rua;
        return $this;
    }

    public function getNumero()
    {
        return $this->_numero;
    }

    public function setNumero(?int $numero): Fornecedor
    {
        $this->_numero = $numero;
        return $this;
    }

    public function getBairro()
    {
        return $this->_bairro;
    }

    public function setBairro(string $bairro): Fornecedor
    {
        $this->_bairro = $bairro;
        return $this;
    }

    public function getCidade()
    {
        return $this->_cidade;
    }

    public function setCidade(string $cidade): Fornecedor
    {
        $this->_cidade = $cidade;
        return $this;
    }

    public function getComplemento()
    {
        return $this->_complemento;
    }

    public function setComplemento(string $complemento): Fornecedor
    {
        $this->_complemento = $complemento;
        return $this;
    }

    public function getCep()
    {
        return $this->_cep;
    }

    public function setCep(string $cep): Fornecedor
    {
        $this->_cep = $cep;
        return $this;
    }

    public function getTelefone()
    {
        return $this->_telefone;
    }

    public function setTelefone(string $telefone): Fornecedor
    {
        $this->_telefone = $telefone;
        return $this;
    }

    public function getCelular()
    {
        return $this->_celular;
    }

    public function setCelular(string $celular): Fornecedor
    {
        $this->_celular = $celular;
        return $this;
    }

    public function getTipoPessoa()
    {
        return $this->_tipoPessoa;
    }

    public function setTipoPessoa(?int $tipoPessoa): Fornecedor
    {
        $this->_tipoPessoa = $tipoPessoa;
        return $this;
    }
    public function getId()
    {
        return $this->_id;
    }

    public function setId(?int $id): Fornecedor
    {
        $this->_id = $id;
        return $this;
    }

    public function getNome()
    {
        return $this->_nome;
    }

    public function setNome(string $nome): Fornecedor
    {
        $this->_nome = $nome;
        return $this;
    }

    public function getEmail()
    {
        return $this->_email;
    }

    public function setEmail(?string $email): Fornecedor
    {
        $this->_email = $email;
        return $this;
    }
}