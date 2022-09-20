<?php
    namespace PHP_MVC\Model;
    use PHP_MVC\DAO\FuncionarioDAO;

    class FuncionarioModel {

        public $id, $nome, $email, $cpf;
        public $arr_funcionario;

        public function save() {
            $dao = new FuncionarioDAO();
            return ($this->id == null) ? $dao->insert($this) : $dao->update($this);
        }

        public function getAllRows() {
            $dao = new FuncionarioDAO();
            $this->arr_funcionario = $dao->getAllRows();
        }

        public function getById(int $id) {
            $dao = new FuncionarioDAO();

            $obj = $dao->getById($id);
            return ($obj) ? $obj : new FuncionarioModel();
        }

        public function delete(int $id) {
            $dao = new FuncionarioDAO();
            $dao->delete($id);
        }
    }