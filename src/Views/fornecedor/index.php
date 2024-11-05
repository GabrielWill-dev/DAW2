<?php
namespace Sisfin\Models;

use Sisfin\Util\ShowError;

if(!isset($errors)) $errors = array();
if(!isset($state)) $state = new Fornecedor();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Sisfin - Fornecedores</title>
    <link href="../../vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="../../vendor/components/jquery/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.3/js/tether.min.js"></script>
    <script src="../../vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!--    <script src="https://kit.fontawesome.com/a8a664a316.js" crossorigin="anonymous"></script>-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css"></head>
<body class="container">
<h1>.:| Cadastro de Fornecedores |:.</h1>

<form action="/fornecedor/insert/" method="get">
    <div class="row p-2">
    <div class="form-group">
        <input type="hidden" class="form-control" id="id" name="id" value="<?= $state->getId();?>">
    </div>
        <div class="col-6">
    <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" value="<?= $state->getNome();?>">
        <?= ShowError::GetField('nome',$errors) ?>
    </div>
        </div>

        <div class="col-6">
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="<?= $state->getEmail();?>">
        <?= ShowError::GetField('email',$errors) ?>
    </div>
        </div>
    </div>


        <label>Tipo Pessoa:</label>
        <br>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="tipopessoa" id="pessoaFisica" value="1" <?= $state->getTipoPessoa()==1?"checked":"";?>>
            <label class="form-check-label" for="pessoaFisica">
                Pessoa Física
            </label>
        </div>

        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="tipopessoa" id="PessoaJuridica" value="2" <?= $state->getTipoPessoa()==2?"checked":"";?>>
            <label class="form-check-label" for="pessoaJuridica">
                Pessoa Jurídica
            </label>
        </div>
        <br>
        <?= ShowError::GetField('tipopessoa',$errors) ?>
        <br>
        <div class="row p-2">
        <div class="col-3">
            <div class="form-group">
                <label for="cpf_cnpj">CPF/CNPJ:</label>
                <input class="form-control" type="text" class="form-control" id="cpf_cnpj" name="cpf_cnpj" placeholder="CPF ou CNPJ" value="<?= $state->getCpfCnpj();?>">
                <?= ShowError::GetField('cpf_cnpj',$errors) ?>
            </div>
        </div>
        <div class="col-4">
            <div class="form-group">
                <label for="razao_social">Razão Social:</label>
                <input class="form-control" type="text" class="form-control" id="razao_social" name="razao_social" placeholder="Razão Social" value="<?= $state->getRazaoSocial();?>">
            </div>
        </div>

        <div class="col-4">
            <div class="form-group">
                <label for="rua">Rua:</label>
                <input class="form-control" type="text" class="form-control" id="rua" name="rua" placeholder="Rua" value="<?= $state->getRua();?>">
            </div>
        </div>
        <div class="col-2">
            <div class="form-group">
                <label for="numero">Numero:</label>
                <input class="form-control" class="form-control" type="number" class="form-control" id="numero" name="numero" placeholder="Numero" value="<?= $state->getNumero();?>">
            </div>
        </div>
        <div class="col-3">
            <div class="form-group">
                <label for="bairro">Bairro:</label>
                <input class="form-control" type="text" class="form-control" id="bairro" name="bairro" placeholder="Bairro" value="<?= $state->getBairro();?>">
            </div>
        </div>

        <div class="col-3">
            <div class="form-group">
                <label for="cidade">Cidade:</label>
                <input class="form-control" type="text" class="form-control" id="cidade" name="cidade" placeholder="Cidade"value="<?= $state->getCidade();?>">
            </div>
        </div>
        </div>
    <div class="row p-2">
        <div class="col-4">
            <div class="form-group">
                <label for="complemento">Complemento:</label>
                <input class="form-control" type="text" class="form-control" id="complemento" name="complemento" placeholder="Complemento" value="<?= $state->getComplemento();?>">
            </div>
        </div>
        <div class="col-2">
            <div class="form-group">
                <label for="cep">CEP:</label>
                <input class="form-control" type="text" class="form-control" id="cep" name="cep" placeholder="CEP" value="<?= $state->getCep();?>">
            </div>

        </div>
        <div class="col-3">
            <div class="form-group">
                <label for="telefone">Telefone:</label>
                <input class="form-control" type="text" class="form-control" id="telefone" name="telefone" placeholder="Telefone" value="<?= $state->getTelefone();?>">
            </div>
        </div>

        <div class="col-3">
            <div class="form-group">
                <label for="celular">Celular:</label>
                <input class="form-control" type="text" class="form-control" id="celular" name="celular" placeholder="Celular" value="<?= $state->getCelular();?>">
            </div>
        </div>
    </div>

    <br>
    <div class="text-center">
        <button type="submit" class="btn btn-primary">Atualizar</button>
        <a href="/fornecedor" class="btn btn-primary">Voltar</a>
    </div>
</form>

<br>

<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Nome</th>
        <th scope="col">CPF/CNPJ</th>
        <th scope="col">Razão Social</th>
        <th scope="col">Email</th>
        <th scope="col">Telefone</th>
        <th scope="col">Tipo</th>
    </tr>
    </thead>
    <tbody>
    <?php
    if(isset($fornecedores))
    {
        ?>

        <?php foreach ($fornecedores as $fornecedor): ?>
        <tr>
            <th scope="row"><?= $fornecedor["id"] ?></th>
            <td><?= $fornecedor["nome"] ?></td>
            <td><?= $fornecedor["cpf_cnpj"] ?></td>
            <td><?= $fornecedor["razao_social"] ?></td>
            <td><?= $fornecedor["email"] ?></td>
            <td><?= $fornecedor["telefone"] ?></td>
            <td><?php
                echo $fornecedor["tipopessoa"]==1?"Pessoa Física":"Pessoa Jurídica"
                ?></td>
            <td><span>
                              <a class="btn btn-danger" href="/fornecedor/delete/?id=<?= $fornecedor["id"] ?>">
                              <i class="fas fa-minus-circle"></i></span></a></td>
            <td><span>
                              <a class="btn btn-warning" href="/fornecedor/edit/?id=<?= $fornecedor["id"] ?>">
                              <i class="fas fa-edit"></i></span></td>
        </tr>
    <?php endforeach; ?>
        <?php
    }
    ?>
    </tbody>
</table>
<br>
<a href="/" class="btn btn-primary">Home</a>
</body>
</html>
