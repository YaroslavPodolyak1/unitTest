<?php

    namespace YaroslavPodolyak\Tasks\Task1;

    class Connection
    {

        protected $options;

        public function __construct(ConnectionOptionsInterface $options)
        {
            $this->options = $options;
        }

        public function __toString(): string
        {
            return $this->options->getDns();
        }
    }