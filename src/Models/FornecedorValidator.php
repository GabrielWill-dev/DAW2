<?php

namespace Sisfin\Models;

class FornecedorValidator
{
    private $_errors;

    public function __construct()
    {
        $this->_errors = [];
    }

    public function getErrors(): array
    {
        return $this->_errors;
    }

    public function addError($campo, $error): void
    {
        $this->_errors[$campo] = $error;
    }

    public function Validate(Fornecedor $fornecedor): bool
    {
        $result = true;
        if (empty($fornecedor->getNome())) {
            $this->addError('nome', 'Campo NOME não pode ser vazio!');
            $result = false;
        } else {
            if (strlen($fornecedor->getNome()) < 5) {
                $this->addError('nome', 'Campo NOME deve possuir pelo menos 5 caracteres!');
                $result = false;
            }
            if (strlen($fornecedor->getNome()) > 45) {
                $this->addError('nome', 'Campo NOME não pode possuir mais de 45 caracteres!');
                $result = false;
            }
        }
        if ($fornecedor->getTipoPessoa()==0){
            $this->addError('tipopessoa', 'Campo TIPO PESSOA não pode ser vazio!');
            $result = false;
        }
        if (empty($fornecedor->getEmail())) {
            $this->addError('email', 'Campo EMAIL não pode ser vazio!');
            $result = false;
        } else {
            if (!filter_var($fornecedor->getEmail(), FILTER_VALIDATE_EMAIL)) {
                $this->addError('email', 'Campo EMAIL deve ser um email válido!');
                $result = false;
            }
        }
        if (empty($fornecedor->getCpfCnpj())) {
            $this->addError('cpf_cnpj', 'Campo CPF/CNPJ não pode ser vazio!');
            $result = false;
        }
        return $result;
    }
}