<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Sisfin - Fornecedor</title>
    <link href="../../vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="../../vendor/components/jquery/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.3/js/tether.min.js"></script>
    <script src="../../vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a8a664a316.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <div class="container">

        <p class="fs-1">Alteração do Fornecedor</p>

        <?php
        if (isset($fornecedor)) {
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
                <div class="form-group">
                    <input type="hidden" class="form-control" id="id" name="id" value="<?= $id ?>">
                </div>

                <div class="col-6">
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="basic-addon1">Nome</span>
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome..."
                            value="<?= $nome ?>">
                    </div>
                </div>

                <div class="col-6">
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="basic-addon1">E-mail</span>
                        <input type="text" class="form-control" id="email" name="email"
                            placeholder="Digite seu E-mail válido..." value="<?= $email ?>">
                    </div>
                </div>
            </div>

            <div class="row p-2">
                <div class="col-3">
                    <div class="input-group">
                        <label class="input-group-text" for="tipopessoa">Tipo Pessoa</label>
                        <select class="form-select" name="tipopessoa" id="tipopessoa">
                            <option value="0" <?= ($tipopessoa == 0) ? 'selected' : ''; ?>></option>
                            <option value="1" <?= ($tipopessoa == 1) ? 'selected' : ''; ?>>Pessoa Física</option>
                            <option value="2" <?= ($tipopessoa == 2) ? 'selected' : ''; ?>>Pessoa Jurídica</option>
                        </select>
                    </div>
                </div>

                <div class="col-3">
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="basic-addon1">CPF/CNPJ</span>
                        <input type="text" class="form-control" id="cpf_cnpj" name="cpf_cnpj"
                            placeholder="Digite seu CPF ou CNPJ..." value="<?= $cpf_cnpj ?>">
                    </div>
                </div>

                <div class="col-3">
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="razao_social">Razão Social</span>
                        <input type="text" class="form-control" id="razao_social" name="razao_social"
                            placeholder="Razão Social" value="<?= $razao_social ?>">
                    </div>
                </div>

                <div class="col-3">
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="rua">Rua</span>
                        <input type="text" class="form-control" id="rua" name="rua" placeholder="Digite a rua..."
                            value="<?= $rua ?>">
                    </div>
                </div>
            </div>

            <div class="row p-2">
                <div class="col-2">
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text">Número</span>
                        <input type="number" class="form-control" id="numero" name="numero"
                            placeholder="Digite o número..." value="<?= $numero ?>">
                    </div>
                </div>

                <div class="col-2">
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text">Bairro</span>
                        <input type="text" class="form-control" id="bairro" name="bairro"
                            placeholder="Digite seu bairro..." value="<?= $bairro ?>">
                    </div>
                </div>

                <div class="col-2">
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text">Cidade</span>
                        <input type="text" class="form-control" id="cidade" name="cidade"
                            placeholder="Digite sua cidade..." value="<?= $cidade ?>">
                    </div>
                </div>

                <div class="col-3">
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text">Complemento</span>
                        <input type="text" class="form-control" id="complemento" name="complemento"
                            placeholder="Complemento..." value="<?= $complemento ?>">
                    </div>
                </div>

                <div class="col-2">
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text">CEP</span>
                        <input type="text" class="form-control" id="cep" name="cep" placeholder="CEP..."
                            value="<?= $cep ?>">
                    </div>
                </div>
            </div>

            <div class="row p-2">
                <div class="col-3">
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text">Telefone</span>
                        <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Telefone..."
                            value="<?= $telefone ?>">
                    </div>
                </div>

                <div class="col-3">
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text">Celular</span>
                        <input type="text" class="form-control" id="celular" name="celular" placeholder="Celular..."
                            value="<?= $celular ?>">
                    </div>
                </div>
            </div>

            <br>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Atualizar</button>
                <a href="/fornecedor" class="btn btn-secondary">Voltar</a>
            </div>
        </form>

        <br>
        <div class="text-center">
            <a href="/" class="btn btn-primary">Home</a>
        </div>

    </div>
    <br>
    <br>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>


</html>