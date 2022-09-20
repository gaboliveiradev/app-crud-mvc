<?php
    namespace PHP_MVC\Model;
    use PHP_MVC\DAO\PessoaDAO;

    class PessoaModel {
       
        public $id, $nome, $email, $endereco, $telefone, $rg, $cpf, $data_nascimento;
        public $arr_pessoa;

        public function save() {
            $dao = new PessoaDAO();
            return($this->id == null) ? $dao->insert($this) : $dao->update($this);
        }

        public function getAllRows() {
            $dao = new PessoaDAO();
            $this->arr_pessoa = $dao->getAllRows();
        }

        public function getById(int $id) {
            $dao = new PessoaDAO();

            /*  Vai ir até o Banco de dados, realizar o SELECT 
            *   de uma pessoa e vai nos retornar no metodo getById */
            $obj = $dao->getById($id);
            return ($obj) ? $obj : new PessoaModel();
        }

        public function delete(int $id) {
            $dao = new PessoaDAO();
            $dao->delete($id);
        }
    }