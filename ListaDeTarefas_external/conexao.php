<?php

    class Conexao {

        private $host = 'localhost';
        private $db_name = 'lista_tarefas';
        private $user = 'root';
        private $senha = '';

        public function conectar() {

            try {

                $conexao = new PDO(

                    "mysql:host=$this->host;dbname=$this->db_name",
                    "$this->user",
                    "$this->senha"

                );

                return $conexao;

            }


            catch  (PDOException $e) {
                echo 'Erro: ' . $e->getCode() . '</br>';
                echo 'Mensagem: ' . $e->getMessage() . '</br>';

            }
        }
    }

?>