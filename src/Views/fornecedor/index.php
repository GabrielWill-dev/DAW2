<?php
namespace Sisfin\Models;

use Sisfin\Util\ShowError;

if (!isset($errors))
    $errors = array();
if (!isset($state))
    $state = new Fornecedor();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Sisfin - Fornecedores</title>
    <link href="../../vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="../../vendor/components/jquery/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.3/js/tether.min.js"></script>
    <script src="../../vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!--    <script src="https://kit.fontawesome.com/a8a664a316.js" crossorigin="anonymous"></script>-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="container">
    <p class="fs-1">Cadastro de Fornecedor</p>

    <form action="/fornecedor/insert/" method="get">
        <div class="row p-2">
            <div class="form-group">
                <input type="hidden" class="form-control" id="id" name="id" value="<?= $state->getId(); ?>">
            </div>
            <div class="col-6">
                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="basic-addon1">Nome</span>
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome..."
                        value="<?= $state->getNome(); ?>">
                </div>
                <?= ShowError::GetField('nome', $errors) ?>
            </div>

            <div class="col-6">
                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="basic-addon1">E-mail</span>
                    <input type="text" class="form-control" id="email" name="email"
                        placeholder="Digite seu E-mail valido..." value="<?= $state->getEmail(); ?>">
                </div>
                <?= ShowError::GetField('email', $errors) ?>
            </div>
        </div>

        <div class="row p-2">
            <div class="col-3">
                <div class="input-group">
                    <label class="input-group-text" for="inputGroupSelect01">Tipo Pessoa</label>
                    <select class="form-select" name="tipopessoa" id="inputGroupSelect01">
                        <option value="0" selected></option>
                        <option id="pessoaFisica" value="1">Pessoa Física</option>
                        <option id="PessoaJuridica" value="2">Pessoa Jurídica</option>
                    </select>
                    <?= ShowError::GetField('tipopessoa', $errors) ?>
                </div>
            </div>

            <div class="col-3">
                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="basic-addon1">CPF/CNPJ</span>
                    <input class="form-control" type="text" class="form-control" id="cpf_cnpj" name="cpf_cnpj"
                        placeholder="Digite seu CPF ou CNPJ..." value="<?= $state->getCpfCnpj(); ?>">
                </div>
                <?= ShowError::GetField('cpf_cnpj', $errors) ?>
            </div>
            <div class="col-3">
                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="razao_social">Razão Social</span>
                    <input class="form-control" type="text" class="form-control" id="razao_social" name="razao_social"
                        placeholder="Razão Social" value="<?= $state->getRazaoSocial(); ?>">
                </div>
            </div>
            <div class="col-3">
                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="rua">Rua</span>
                    <input class="form-control" type="text" class="form-control" id="rua" name="rua"
                        placeholder="Digite a rua..." value="<?= $state->getRua(); ?>">
                </div>
            </div>
        </div>
        <div class="row p-2">
            <div class="col-2">
                <div class="input-group flex-nowrap">
                    <span class="input-group-text">Numero</span>
                    <input class="form-control" type="text" class="form-control" class="form-control" id="numero"
                        name="numero" placeholder="Digite seu numero..." value="<?= $state->getNumero(); ?>">
                </div>
            </div>
            <div class="col-2">
                <div class="input-group flex-nowrap">
                    <span class="input-group-text">Bairro</span>
                    <input class="form-control" type="text" class="form-control" id="bairro" name="bairro"
                        placeholder="Digite seu bairro..." value="<?= $state->getBairro(); ?>">
                </div>
            </div>

            <div class="col-2">
                <div class="input-group flex-nowrap">
                    <span class="input-group-text">Cidade</span>
                    <input class="form-control" type="text" class="form-control" id="cidade" name="cidade"
                        placeholder="Digite sua cidade..." value="<?= $state->getCidade(); ?>">
                </div>
            </div>

            <div class="col-3">
                <div class="input-group flex-nowrap">
                    <span class="input-group-text">Complemento</span>
                    <input class="form-control" type="text" class="form-control" id="complemento" name="complemento"
                        placeholder="Complemento..." value="<?= $state->getComplemento(); ?>">
                </div>
            </div>
            <div class="col-2">
                <div class="input-group flex-nowrap">
                    <span class="input-group-text">CEP</span>
                    <input class="form-control" type="text" class="form-control" id="cep" name="cep"
                        placeholder="CEP..." value="<?= $state->getCep(); ?>">
                </div>
            </div>
            <div class="row p-2">
                <div class="col-3">
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text">Telefone</span>
                        <input class="form-control" type="text" class="form-control" id="telefone" name="telefone"
                            placeholder="Telefone..." value="<?= $state->getTelefone(); ?>">
                    </div>
                </div>

                <div class="col-3">
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text">Celular</span>
                        <input class="form-control" type="text" class="form-control" id="celular" name="celular"
                            placeholder="Celular..." value="<?= $state->getCelular(); ?>">
                    </div>
                </div>
            </div>

            <br>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Atualizar</button>
                <a href="/fornecedor" class="btn btn-primary">Voltar</a>
            </div>
    </form>

    

    <table class="table">
        <thead>
            <tr>

                <th scope="col">Nome</th>
                <th scope="col">CPF/CNPJ</th>
                <th scope="col">Razão Social</th>
                <th scope="col">Email</th>
                <th scope="col">Telefone</th>
                <th scope="col">Tipo</th>
                <th scope="col">Eliminar</th>
                <th scope="col">Alterar</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (isset($fornecedores)) {
                ?>

                <?php foreach ($fornecedores as $fornecedor): ?>
                    <tr>
                        <td><?= $fornecedor["nome"] ?></td>
                        <td><?= $fornecedor["cpf_cnpj"] ?></td>
                        <td><?= $fornecedor["razao_social"] ?></td>
                        <td><?= $fornecedor["email"] ?></td>
                        <td><?= $fornecedor["telefone"] ?></td>
                        <td><?php
                        echo $fornecedor["tipopessoa"] == 1 ? "Pessoa Física" : "Pessoa Jurídica"
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
   <div class="text-center">
   <a href="/" class="btn btn-primary">Home</a>
   </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

</html>