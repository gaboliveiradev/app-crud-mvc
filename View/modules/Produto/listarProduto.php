<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <?php include "./View/includes/css_config.php" ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Listar Produto - PHP_MVC</title>
    </head>

    <body>
        <header>
            <?php include "./View/includes/cabecalho.php" ?>
        </header>

        <?php if(count($model->arr_produto) == 0): ?>
            <center><h1 colspan="9">NENHUM REGISTRO ENCONTRADO</h1></center>
        <?php else: ?>
            <section class="container">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Quantidade</th>
                            <th scope="col">Preço</th>
                            <th scope="col">Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($model->arr_produto as $item): ?>
                            <tr>
                                <th scope="row"><?= $item->id ?></th>
                                <td><?= $item->nome ?></td>
                                <td><?= $item->quantidade ?></td>
                                <td>R$ <?= $item->preco ?></td>
                                <td><a href="/produto/delete?id=<?= $item->id ?>">X</a> <a href="/produto/form?id=<?= $item->id ?>">Editar</a></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </section>
        <?php endif; ?>

        <?php include "./View/includes/js_config.php" ?>
    </body>
</html>