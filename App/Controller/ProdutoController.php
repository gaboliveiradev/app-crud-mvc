<?php
    namespace App\Controller;
    use App\Model\ProdutoModel;

    class ProdutoController extends Controller {
        
        public static function form() {
            $model = new ProdutoModel();
            if(isset($_GET['id'])) $model = $model->getById( (int) $_GET['id'] );
            
            include "./View/modules/Produto/form.php";
        }

        public static function view() {
            $model = new ProdutoModel();
            $model->getAllRows();

            include "./View/modules/Produto/listarProduto.php";
        }

        public static function save() {
            $model = new ProdutoModel();

            $model->id = $_POST['id'];
            $model->nome = $_POST['name'];
            $model->quantidade = $_POST['quantidade'];
            $model->preco = $_POST['preco'];
            $model->save();

            header("Location: /produto");
        }

        public static function delete() {
            $model = new ProdutoModel();
            $model->delete( (int) $_GET['id'] );

            header("Location: /produto");
        }
    }