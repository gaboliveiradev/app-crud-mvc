<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"> <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <?php include "./View/includes/css_config.php" ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Listar Pessoas - PHP_MVC</title>
    </head>

    <body>
        <header>
            <?php include "./View/includes/cabecalho.php" ?>
        </header>
        
        <?php if(count($model->arr_pessoa) == 0): ?>
            <center><h1 colspan="9">NENHUM REGISTRO ENCONTRADO</h1></center>
        <?php else: ?>
            <div class="container">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Email</th>
                            <th scope="col">Endereço</th>
                            <th scope="col">Telefone</th>
                            <th scope="col">CPF</th>
                            <th scope="col">RG</th>
                            <th scope="col">Data de Nascimento</th>
                            <th scope="col">Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($model->arr_pessoa as $item): ?>
                            <tr>
                                <th scope="row"><?= $item->id ?></th>
                                <td><?= $item->nome ?></td>
                                <td><?= $item->email ?></td>
                                <td><?= $item->endereco ?></td>
                                <td><?= $item->telefone ?></td>
                                <td><?= $item->cpf ?></td>
                                <td><?= $item->rg ?></td>
                                <td><?= $item->data_nascimento ?></td>
                                <td><a href="/pessoa/delete?id=<?= $item->id ?>">X</a> <a href="/pessoa/form?id=<?= $item->id ?>">Editar</a></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php endif ?>

        <?php include "./View/includes/js_config.php" ?>
    </body>
</html>