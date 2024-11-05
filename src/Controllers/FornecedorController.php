<?php

namespace Sisfin\Controllers;

use Exception;
use Sisfin\Controller;
use Sisfin\Models\FornecedorService;
use Sisfin\Models\Fornecedor;
use Sisfin\Models\FornecedorValidator;
use Sisfin\Util;
use Sisfin\Util\EnviaEmail;

class FornecedorController  extends Controller
{
    private FornecedorService $fornecedorRepository;

    public function __construct()
    {
        $this->fornecedorRepository = new FornecedorService();
    }

    public function getAll(): array
    {
        return $this->fornecedorRepository->getAll();
    }

    public function getById(int $id): array{
        return $this->fornecedorRepository->getById($id);
    }

    public function index(): void
    {
        $this->render('fornecedor/index', ['fornecedores' => $this->getAll()]);
    }

    public function findByClienteId(){
        $id = $_GET["id"];
        $this->render('fornecedor/index', ['fornecedores' =>  $this->getById($id)]);
    }

    public function insertFornecedor()
    {
        $validator = new FornecedorValidator();

        $id = isset($_GET['id']) ? filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT): null;
        $cpf_cnpj = $_GET['cpf_cnpj'];
        $razao_social = $_GET['razao_social'];
        $tipopessoa = $_GET['tipopessoa'];
        $nome = $_GET['nome'];
        $rua = $_GET['rua'];
        $numero = $_GET['numero'];
        $bairro = $_GET['bairro'];
        $cidade = $_GET['cidade'];
        $complemento = $_GET['complemento'];
        $cep = $_GET['cep'];
        $telefone = $_GET['telefone'];
        $celular = $_GET['celular'];
        $email = $_GET['email'];

        $fornecedor = new Fornecedor();
        $fornecedor->setId($id);
        $fornecedor->setTipoPessoa($tipopessoa);
        $fornecedor->setCpfCnpj($cpf_cnpj);
        $fornecedor->setRazaoSocial($razao_social);
        $fornecedor->setNome($nome);
        $fornecedor->setRua($rua);
        $fornecedor->setNumero($numero);
        $fornecedor->setBairro($bairro);
        $fornecedor->setCidade($cidade);
        $fornecedor->setComplemento($complemento);
        $fornecedor->setCep($cep);
        $fornecedor->setTelefone($telefone);
        $fornecedor->setCelular($celular);
        $fornecedor->setEmail($email);


        if(!$validator->Validate($fornecedor)) {
            $this->render('fornecedor/index', ['fornecedores'=>$this->getAll()], $fornecedor, ['errors' =>  $validator->getErrors()]);
            die;
        }


        $this->fornecedorRepository->save($fornecedor);

        $url = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]";
        $escaped_url = htmlspecialchars( $url, ENT_QUOTES, 'UTF-8' );
        $corpoEmail = "Olá <b>".$fornecedor->getNome()."</b>, sua conta no SisFin foi criada com sucesso";
        $corpoEmail .= "<br>Clique <a href=https://GabrielWill-dev.github.io/meu-site/index.html>aqui</a> para começar a explorar o sistema!";
        $email = new EnviaEmail();
        $email->setDestino($fornecedor->getEmail());
        $email->setAssunto('Conta criada no SisFin');
        $email->setCorpo($corpoEmail);
        try{
            $email->Envia();
        }catch(Exception $e)
        {
            echo "Falha ao enviar email de criação da conta!";
            die;
        }

        header("Location: /fornecedor");
    }
    public function editFornecedor()
    {
        $id = isset($_GET['id'])?$_GET['id']:0;
        $dados = $this->fornecedorRepository->getById($id);
        $this->render('fornecedor/edit', ['fornecedor' =>  $dados]);
    }
    public function deleteFornecedor()
    {
        $id = isset($_GET['id'])?$_GET['id']:null;
        $this->fornecedorRepository->delete($id);
    }
}