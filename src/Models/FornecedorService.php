<?php

namespace Sisfin\Models;

use Sisfin\Util\Connection;
use Sisfin\Util\TipoPessoa;

class FornecedorService
{
    private $fornecedorRepository;
    public function __construct(){
        $this->fornecedorRepository = array();
        //return $this;
    }

    public function getAll(): array{
        try{
            $con = Connection::make();
            $sql = 'SELECT * FROM Fornecedores';

            $statement = $con->prepare($sql);
            $statement->execute();
            $fornecedorRepository = $statement->fetchAll(\PDO::FETCH_ASSOC);
            return $fornecedorRepository;
        }catch(\PDOException $e){
            return array();
        }
    }

    public function getById(int $id): array{
        try{
            $con = Connection::make();
            $sql = 'SELECT * FROM Fornecedores WHERE id=:id';

            $statement = $con->prepare($sql);
            $statement->execute([':id' => $id]);
            $fornecedorRepository = $statement->fetchAll(\PDO::FETCH_ASSOC);
            return $fornecedorRepository;
        }catch(\PDOException $e){
            return array();
        }

    }
    public function save(Fornecedor $fornecedor): void
    {
        $cn = Connection::make();
        //se for igual a null significa que é Create
        if ($fornecedor->getId() == null)
        {
            $sql = "INSERT INTO Fornecedores (tipoPessoa, cpf_cnpj, razao_social, nome, rua, numero, bairro, cidade, complemento, cep, telefone, celular, email) VALUES(:tipopessoa, :cpf_cnpj, :razao_social, :nome, :rua, :numero, :bairro, :cidade, :complemento, :cep, :telefone, :celular, :email)";
            $statement = $cn->prepare($sql);
            $statement->execute([
                ':tipopessoa'=>$fornecedor->getTipoPessoa(),
                ':cpf_cnpj'=>$fornecedor->getCpfCnpj(),
                ':razao_social'=>$fornecedor->getRazaoSocial(),
                ':nome' => $fornecedor->getNome(),
                ':rua'=>$fornecedor->getRua(),
                ':numero'=>$fornecedor->getNumero(),
                ':bairro'=>$fornecedor->getBairro(),
                ':cidade'=>$fornecedor->getCidade(),
                ':complemento'=>$fornecedor->getComplemento(),
                ':cep'=>$fornecedor->getCep(),
                ':telefone'=>$fornecedor->getTelefone(),
                ':celular'=>$fornecedor->getCelular(),
                ':email'=>$fornecedor->getEmail()
            ]);
            $fornecedor->setId($cn->lastInsertId());
        }
        else {
            //senão é Update
            $sql = "UPDATE Fornecedores SET tipoPessoa =:tipopessoa, cpf_cnpj =:cpf_cnpj, razao_social =:razao_social, nome =:nome, rua =:rua, numero =:numero, bairro =:bairro, cidade =:cidade, complemento =:complemento, cep =:cep, telefone =:telefone, celular =:celular, email =:email WHERE id = :id";
            $statement = $cn->prepare($sql);
            $statement->execute([
                ':id'=>$fornecedor->getId(),
                ':tipopessoa'=>$fornecedor->getTipoPessoa(),
                ':cpf_cnpj'=>$fornecedor->getCpfCnpj(),
                ':razao_social'=>$fornecedor->getRazaoSocial(),
                ':nome' => $fornecedor->getNome(),
                ':rua'=>$fornecedor->getRua(),
                ':numero'=>$fornecedor->getNumero(),
                ':bairro'=>$fornecedor->getBairro(),
                ':cidade'=>$fornecedor->getCidade(),
                ':complemento'=>$fornecedor->getComplemento(),
                ':cep'=>$fornecedor->getCep(),
                ':telefone'=>$fornecedor->getTelefone(),
                ':celular'=>$fornecedor->getCelular(),
                ':email'=>$fornecedor->getEmail()
            ]);
        }
    }

    public function delete(int $id): void
    {
        try {
            $cn = Connection::make();
            if ($id != null) {
                $sql = "DELETE FROM Fornecedores WHERE id=:id";
                $statement = $cn->prepare($sql);
                $statement->bindParam(":id", $id);
                $statement->execute();
            }
        }catch (\PDOException $e){
            die($e->getMessage());
        } finally {
            header("Location: /fornecedor");
        }
    }
}