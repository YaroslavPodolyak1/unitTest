<?php
    namespace YaroslavPodolyak\Tasks\Task1;


    class SqlLiteOptions implements ConnectionOptionsInterface
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