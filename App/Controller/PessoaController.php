<?php
    namespace PHP_MVC\Controller;
    use PHP_MVC\Model\PessoaModel;

    class PessoaController extends Controller {

        public static function form() {
            $model = new PessoaModel();
            // TypeCast -> EXP: Converter a "string 1" em inteiro | Previne SQLInjection
            if(isset($_GET['id'])) $model = $model->getById( (int) $_GET['id'] );

            include "./View/modules/Pessoa/form.php";
        }

        public static function view() {
            $model = new PessoaModel();
            $model->getAllRows();
            
            include "./View/modules/Pessoa/listarPessoa.php";
        }

        public static function save() {
            $model = new PessoaModel();

            $model->id = $_POST['id'];
            $model->nome = $_POST['name'];
            $model->email = $_POST['email'];
            $model->endereco = $_POST['adress'];
            $model->telefone = $_POST['phone'];
            $model->rg = $_POST['rg'];
            $model->cpf = $_POST['cpf'];
            $model->data_nascimento = $_POST['date'];
            $model->save();

            header("Location: /pessoa");
        }

        public static function delete() {
            $model = new PessoaModel();
            $model->delete( (int) $_GET['id'] );

            header("Location: /pessoa");
        }
    }