<?php
    class FuncionarioDAO extends DAO {
        
        public $conexao;
        public function __construct()
        {
            
        }

        function insert(FuncionarioModel $model) {
            $sql = "INSERT INTO Funcionario (nome, email, cpf) VALUES (?, ?, ?)";

            $stmt = $this->conexao->prepare($sql);
            $stmt->bindValue(1, $model->nome);
            $stmt->bindValue(2, $model->email);
            $stmt->bindValue(3, $model->cpf);
            $stmt->execute();
        }

        function getAllRows() {
            $sql = "SELECT * FROM Funcionario";
            
            $stmt = $this->conexao->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_CLASS);
        }

        function getById(int $id) {
            $sql = "SELECT * FROM Funcionario WHERE id = ?";

            $stmt = $this->conexao->prepare($sql);
            $stmt->bindValue(1, $id);
            $stmt->execute();

            return $stmt->fetchObject("FuncionarioModel");
        }

        function update(FuncionarioModel $model) {
            $sql = "UPDATE Funcionario SET nome = ?, email = ?, cpf = ? WHERE id = ?";

            $stmt = $this->conexao->prepare($sql);
            $stmt->bindValue(1, $model->nome);
            $stmt->bindValue(2, $model->email);
            $stmt->bindValue(3, $model->cpf);
            $stmt->bindValue(4, $model->id);
            $stmt->execute();
        }

        function delete(int $id) {
            $sql = "DELETE FROM Funcionario WHERE id = ?";
            
            $stmt = $this->conexao->prepare($sql);
            $stmt ->bindValue(1, $id);
            $stmt->execute();
        }
    }