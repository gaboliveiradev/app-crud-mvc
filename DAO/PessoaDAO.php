<?php
    class PessoaDAO extends DAO {

        public $conexao;
        public function __construct()
        {
            
        }

        function insert(PessoaModel $model) {
            $sql = "INSERT INTO Pessoa (nome, email, endereco, telefone, cpf, rg, data_nascimento) VALUES (?, ?, ?, ?, ?, ?, ?)";

            $stmt = $this->conexao->prepare($sql);
            $stmt->bindValue(1, $model->nome);
            $stmt->bindValue(2, $model->email);
            $stmt->bindValue(3, $model->endereco);
            $stmt->bindValue(4, $model->telefone);
            $stmt->bindValue(5, $model->cpf);
            $stmt->bindValue(6, $model->rg);
            $stmt->bindValue(7, $model->data_nascimento);
            $stmt->execute();
        }

        function getAllRows() {
            $sql = "SELECT id, nome, email, endereco, telefone, cpf, rg, 
            DATE_FORMAT(data_nascimento, '%d/%m/%Y') AS data_nascimento FROM Pessoa";
            
            $stmt = $this->conexao->prepare($sql);
            $stmt->execute();
            
            return $stmt->fetchAll(PDO::FETCH_CLASS);
        }

        function update(PessoaModel $model) {
            $sql = "UPDATE Pessoa SET nome = ?, email = ?, endereco = ?, 
            telefone = ?, cpf = ?, rg = ?, data_nascimento = ? WHERE id = ?";

            $stmt = $this->conexao->prepare($sql);
            $stmt->bindValue(1, $model->nome);
            $stmt->bindValue(2, $model->email);
            $stmt->bindValue(3, $model->endereco);
            $stmt->bindValue(4, $model->telefone);
            $stmt->bindValue(5, $model->cpf);
            $stmt->bindValue(6, $model->rg);
            $stmt->bindValue(7, $model->data_nascimento);
            $stmt->bindValue(8, $model->id);
            $stmt->execute();
        }

        /*  -> Metodo DELETE
        *   Passamos como parâmetro desse metodo uma variavel que nesse caso recebe
        *   o id, e forçamos ela a ser do tipo inteiro para evitar futuros erros.
        */
        function delete(int $id) {
            $sql = "DELETE FROM Pessoa WHERE id = ?";
            
            $stmt = $this->conexao->prepare($sql);
            $stmt->bindValue(1, $id);
            $stmt->execute();
        }

        /*
        *   Esse metodo é responsável por realizar um SELECT de acordo com o parâmetro GET
        *   que estiver na variavel. Para depois conseguirmos exibir no formulário do UPDATE.
        */
        function getById(int $id) {
            $sql = "SELECT * FROM Pessoa WHERE id = ?";
            
            $stmt = $this->conexao->prepare($sql);
            $stmt->bindValue(1, $id);
            $stmt->execute();

            /*  Passando como parâmetro o "PessoaModel", desta forma ele vai preencher um objeto
            *   com os dados que vier do SELECT. Preencher meus atributos.
            */
            return $stmt->fetchObject("PessoaModel");
        }
    }