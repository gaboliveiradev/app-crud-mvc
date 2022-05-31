<?php
    class FuncionarioController extends Controller {

        public static function form() {
            $model = new FuncionarioModel();
            if(isset($_GET['id'])) $model = $model->getById( (int) $_GET['id'] );
            
            include "./View/modules/Funcionario/form.php";
        }

        public static function view() {
            $model = new FuncionarioModel();
            $model->getAllRows();

            include "./View/modules/Funcionario/listarFuncionario.php";
        }

        public static function save() {
            $model = new FuncionarioModel();

            $model->id = $_POST['id'];
            $model->nome = $_POST['name'];
            $model->cpf = $_POST['cpf'];
            $model->email = $_POST['email'];
            $model->save();

            header("Location: /funcionario");
        }

        public static function delete() {
            $model = new FuncionarioModel();
            $model->delete( (int) $_GET['id'] );

            header("Location: /funcionario");
        }
    }