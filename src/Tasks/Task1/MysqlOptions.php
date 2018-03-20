<?php

    namespace YaroslavPodolyak\Tasks\Task1;


    class MysqlOptions implements ConnectionOptionsInterface
    {

        protected $connectionString;

        public function __construct(string $connectionString)
        {
            $this->connectionString = $connectionString;
        }

        public function getDns(): string
        {
            return $this->connectionString;
        }
    }