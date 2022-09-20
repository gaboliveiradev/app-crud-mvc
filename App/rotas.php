<?php
    use PHP_MVC\Controller\{
        PessoaController,
        FuncionarioController,
        ProdutoController
    };

    $uri_parse = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    switch($uri_parse) {

        // * Pessoa
        case "/pessoa":
            PessoaController::view();
        break;

        case "/pessoa/form":
            PessoaController::form();
        break;

        case "/pessoa/form/save":
            PessoaController::save();
        break;

        case "/pessoa/delete":
            PessoaController::delete();
        break;

        // * Funcionário
        case "/funcionario":
            FuncionarioController::view();
        break;

        case "/funcionario/form":
            FuncionarioController::form();
        break;

        case "/funcionario/form/save":
            FuncionarioController::save();
        break;

        case "/funcionario/delete":
            FuncionarioController::delete();
        break;

        // * Produto
        case "/produto":
            ProdutoController::view();
        break;

        case "/produto/form":
            ProdutoController::form();
        break;

        case "/produto/form/save":
            ProdutoController::save();
        break;

        case "/produto/delete":
            ProdutoController::delete();
        break;

        default:
            header("Location: /pessoa");
        break;
    }