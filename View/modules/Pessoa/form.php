<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"> <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <?php include "./View/includes/css_config.php" ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Cadastrar Pessoa - PHP_MVC</title>
    </head>

    <body>
      <header>
        <?php include "./View/includes/cabecalho.php" ?>
      </header>

      <section class="container">
        <center><h1>Pessoa</h1></center>
        <form action="/pessoa/form/save" method="POST" class="row g-3">
          <input type="hidden" value="<?= $model->id ?>" name="id">
          <div class="col-md-6">
              <label class="form-label">Nome</label>
              <input name="name" type="text" value="<?= $model->nome ?>" class="form-control">
          </div>
          <div class="col-md-6">
            <label class="form-label">Email</label>
            <input name="email" type="email" value="<?= $model->email ?>" class="form-control">
          </div>
          <div class="col-12">
            <label class="form-label">Endereço</label>
            <input name="adress" type="text" value="<?= $model->endereco ?>" class="form-control" placeholder="Avenida Lins de Vasconcelos, 234">
          </div>
          <div class="col-md-4">
            <label class="form-label">Telefone</label>
            <input name="phone" type="text" value="<?= $model->telefone ?>" class="form-control">
          </div>
          <div class="col-md-2">
            <label class="form-label">RG</label>
            <input name="rg" type="text" value="<?= $model->rg ?>" class="form-control">
          </div>
          <div class="col-md-2">
            <label class="form-label">CPF</label>
            <input name="cpf" type="text" value="<?= $model->cpf ?>" class="form-control">
          </div>
          <div class="col-md-4">
            <label class="form-label">Data de Nascimento</label>
            <input name="date" type="date" value="<?= $model->data_nascimento ?>" class="form-control">
          </div>
          <div class="col-12">
            <button type="submit" class="btn btn-primary">Cadastrar Pessoa</button>
          </div>
        </form>
      </section>

      <?php include "./View/includes/js_config.php" ?>
    </body>
</html>