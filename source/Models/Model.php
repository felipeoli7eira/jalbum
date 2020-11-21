<?php

    namespace Source\Models;

    use Source\System\Database;

    class Model
    {
        protected $queryString;
        protected $dataExecute = [];
        protected $table;

        public function __construct(string $tableName)
        {
            $this->table = $tableName;
        }

        protected function select(string $columns = "*")
        {
            $this->queryString = "SELECT {$columns} FROM {$this->table}";

            return $this;
        }

        protected function insert()
        {
            
        }

        protected function delete()
        {
            
        }

        protected function update()
        {
            
        }

        protected function limit()
        {
            
        }

        protected function offset()
        {
            
        }

        protected function binds()
        {
            
        }

        protected function where(string $condition, array $conditionValues)
        {
            $this->queryString .= " WHERE {$condition}";
            $this->dataExecute = $conditionValues;
            return $this;
        }

        protected function get(string $returnType = null, $fetchStyle = null)
        {
            $stmt = Database::connect()->prepare($this->queryString);

            $this->dataExecute ?
                $stmt->execute($this->dataExecute)
            :
                $stmt->execute()
            ;

            switch($returnType)
            {
                case "rowCount":
                    return $stmt->rowCount();
                break;

                case "fetch":
                    return $fetchStyle ?
                        $stmt->fetch($fetchStyle)
                    :
                        $stmt->fetch()
                    ;
                break;

                case "fetchAll":
                    return $fetchStyle ?
                        $stmt->fetchAll($fetchStyle)
                    :
                        $stmt->fetchAll()
                    ;
                break;

                default:

                    return true;

                break;
            }
        }
    }