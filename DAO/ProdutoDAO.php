<?php
    namespace PHP_MVC\DAO;
    use PHP_MVC\Model\ProdutoModel;
    use \PDO;

    class ProdutoDAO extends DAO {
        
        public $conexao;

        public function __construct()
        {
            parent::__construct();
        }

        function insert(ProdutoModel $model) {
            $sql = "INSERT INTO Produto (nome, quantidade, preco) VALUES (?, ?, ?)";

            $stmt = $this->conexao->prepare($sql);
            $stmt->bindValue(1, $model->nome);
            $stmt->bindValue(2, $model->quantidade);
            $stmt->bindValue(3, $model->preco);
            $stmt->execute();
        }

        function getAllRows() {
            $sql = "SELECT * FROM Produto"; 
            
            $stmt = $this->conexao->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_CLASS);
        }

        function update(ProdutoModel $model) {
            $sql = "UPDATE Produto SET nome = ?, quantidade = ?, preco = ? WHERE id = ?";

            $stmt = $this->conexao->prepare($sql);
            $stmt->bindValue(1, $model->nome);
            $stmt->bindValue(2, $model->quantidade);
            $stmt->bindValue(3, $model->preco);
            $stmt->bindValue(4, $model->id);
            $stmt->execute();
        }

        function getById(int $id) {
            $sql = "SELECT * FROM Produto WHERE id = ?";

            $stmt = $this->conexao->prepare($sql);
            $stmt->bindValue(1, $id);
            $stmt->execute();

            return $stmt->fetchObject("ProdutoModel");
        }

        function delete(int $id) {
            $sql = "DELETE FROM Produto WHERE id = ?";

            $stmt = $this->conexao->prepare($sql);
            $stmt->bindValue(1, $id);
            $stmt->execute();
        }
    }