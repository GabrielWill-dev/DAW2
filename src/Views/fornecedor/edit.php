<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Sisfin - Fornecedor</title>
    <link href="../../vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="../../vendor/components/jquery/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.3/js/tether.min.js"></script>
    <script src="../../vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a8a664a316.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">

    <h1>.:| Cadastro de Fornecedores |:.</h1>

    <?php
    if(isset($fornecedor)){
        $id = $fornecedor[0]["id"];
        $tipopessoa = $fornecedor[0]["tipopessoa"];
        $cpf_cnpj = $fornecedor[0]["cpf_cnpj"];
        $razao_social = $fornecedor[0]["razao_social"];
        $nome = $fornecedor[0]["nome"];
        $rua = $fornecedor[0]["rua"];
        $numero = $fornecedor[0]["numero"];
        $bairro = $fornecedor[0]["bairro"];
        $cidade = $fornecedor[0]["cidade"];
        $complemento = $fornecedor[0]["complemento"];
        $cep = $fornecedor[0]["cep"];
        $telefone = $fornecedor[0]["telefone"];
        $celular = $fornecedor[0]["celular"];
        $email = $fornecedor[0]["email"];
    }

    ?>

    <form action="/fornecedor/insert/" method="get">
        <div class="row p-2">
            <div class="col-6">

                <div class="form-group">
                    <input class="form-control" type="hidden" class="form-control" id="id" name="id" value="<?= $id ?>">
                </div>

                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input class="form-control" type="text" class="form-control" id="nome" name="nome" placeholder="Nome" value="<?= $nome ?>">
                </div>

            </div>
            <div class="col-6">
                <label>Tipo Pessoa:</label>
                <br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="tipopessoa" id="pessoaFisica" value="1" <?php if($tipopessoa == 1) {echo "checked";} ?>>
                    <label class="form-check-label" for="pessoaFisica">
                        Pessoa Física
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="tipopessoa" id="PessoaJuridica" value="2" <?php if($tipopessoa == 2) {echo "checked";} ?> >
                    <label class="form-check-label" for="pessoaJuridica">
                        Pessoa Jurídica
                    </label>
                </div>
            </div>
        </div>
        <div class="row p-2">
            <div class="col-6">
                <div class="form-group">
                    <label for="cpf_cnpj">CPF/CNPJ:</label>
                    <input class="form-control" type="text" class="form-control" id="cpf_cnpj" name="cpf_cnpj" placeholder="CPF ou CNPJ" value="<?= $cpf_cnpj?>">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="razao_social">Razão Social:</label>
                    <input class="form-control" type="text" class="form-control" id="razao_social" name="razao_social" placeholder="Razão Social" value="<?= $razao_social?>">
                </div>
            </div>
        </div>
        <div class="row p-2">
            <div class="col-5">
                <div class="form-group">
                    <label for="rua">Rua:</label>
                    <input class="form-control" type="text" class="form-control" id="rua" name="rua" placeholder="Rua" value="<?= $rua?>" >
                </div>
            </div>
            <div class="col-2">
                <div class="form-group">
                    <label for="numero">Numero:</label>
                    <input class="form-control" class="form-control" type="number" class="form-control" id="numero" name="numero" placeholder="Numero" value="<?= $numero?>">
                </div>
            </div>
            <div class="col-5">
                <div class="form-group">
                    <label for="bairro">Bairro:</label>
                    <input class="form-control" type="text" class="form-control" id="bairro" name="bairro" placeholder="Bairro" value="<?= $bairro?>">
                </div>
            </div>
        </div>
        <div class="row p-2">
            <div class="col-6">
                <div class="form-group">
                    <label for="cidade">Cidade:</label>
                    <input class="form-control" type="text" class="form-control" id="cidade" name="cidade" placeholder="Cidade" value="<?= $cidade?>">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="complemento">Complemento:</label>
                    <input class="form-control" type="text" class="form-control" id="complemento" name="complemento" placeholder="Complemento" value="<?= $complemento?>">
                </div>
            </div>
        </div>
        <div class="row p-2">
            <div class="col-2">
                <div class="form-group">
                    <label for="cep">CEP:</label>
                    <input class="form-control" type="text" class="form-control" id="cep" name="cep" placeholder="CEP" value="<?= $cep?>" >
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <label for="telefone">Telefone:</label>
                    <input class="form-control" type="text" class="form-control" id="telefone" name="telefone" placeholder="Telefone" value="<?= $telefone?>">
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <label for="celular">Celular:</label>
                    <input class="form-control" type="text" class="form-control" id="celular" name="celular" placeholder="Celular" value="<?= $celular?>">
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input class="form-control" type="text" class="form-control" id="email" name="email" placeholder="Email" value="<?= $email?>">
                </div>
            </div>
        </div>
        <br>
        <div class="text-center">
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Atualizar</button>
                <a href="/fornecedor" class="btn btn-primary">Voltar</a>
            </div>
        </div>
    </form>
    <br>
    <div class="text-center">
        <a href="/" class="btn btn-primary">Home</a>
    </div>
</div>
<br>
<br>
</div>
</body>
</html>
