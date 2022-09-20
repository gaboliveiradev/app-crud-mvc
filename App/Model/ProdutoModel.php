<?php
    namespace App\Model;
    use App\DAO\ProdutoDAO;

    class ProdutoModel {

        public $id, $nome, $quantidade, $preco;
        public $arr_produto;

        public function save() {
            $dao = new ProdutoDAO();
            return($this->id == null) ? $dao->insert($this) : $dao->update($this);
        }

        public function getAllRows() {
            $dao = new ProdutoDAO();
            $this->arr_produto = $dao->getAllRows();
        }

        public function getById(int $id) {
            $dao = new ProdutoDAO();
            
            $obj = $dao->getById($id);
            return ($obj) ? $obj : new ProdutoModel();
        }

        public function delete(int $id) {
            $dao = new ProdutoDAO();
            $dao->delete($id);
        }
    }