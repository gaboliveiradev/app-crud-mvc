<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <?php include "./View/includes/css_config.php" ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Cadastrar Funcionário - PHP_MVC</title>
    </head>

    <body>
        <header>
            <?php include "./View/includes/cabecalho.php" ?>
        </header>
        
        <section class="container">
            <center><h1>Funcionário</h1></center>
            <form action="/funcionario/form/save" method="POST" class="row g-3">
                <input type="hidden" value="<?= $model->id ?>" name="id">
                <div class="col-md-6">
                    <label class="form-label">Nome</label>
                    <input name="name" value="<?= $model->nome ?>" type="text" class="form-control">
                </div>
                <div class="col-md-6">
                    <label class="form-label">CPF</label>
                    <input name="cpf" value="<?= $model->cpf ?>" type="text" class="form-control">
                </div>
                <div class="col-md-12">
                    <label class="form-label">Email</label>
                    <input name="email" value="<?= $model->email ?>" type="email" class="form-control">
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Cadastrar Funcionário</button>
                </div>
            </form>
        </section>

        <?php include "./View/includes/js_config.php" ?>
    </body>
</html>