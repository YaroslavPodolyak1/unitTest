<?php

 namespace Tests\Unit;

 use Tests\TestCase;
 use YaroslavPodolyak\Tasks\Task1\Connection;
 use YaroslavPodolyak\Tasks\Task1\MysqlOptions;
 use YaroslavPodolyak\Tasks\Task1\PgsOptions;
 use YaroslavPodolyak\Tasks\Task1\SqlLiteOptions;

 class Task1Test extends TestCase
 {

	public function test_mysql()
	{
	 $connection = new Connection(new MysqlOptions('mysql:host=localhost;port=3306;dbname=project'));
	 $this->assertEquals('mysql:host=localhost;port=3306;dbname=project', (string)$connection);
	}

	public function test_sqlite()
	{
	 // http://php.net/manual/ru/ref.pdo-sqlite.connection.php
	 $connection = new Connection(new SqlLiteOptions('sqlite::memory:'));
	 $this->assertEquals('sqlite::memory:', (string)$connection);
	}

	public function test_pgsql()
	{
	 // http://php.net/manual/ru/ref.pdo-pgsql.connection.php
	 $connection = new Connection(new PgsOptions('pgsql:host=localhost;post=5432;dbname=test;user=postgres'));
	 $this->assertEquals('pgsql:host=localhost;post=5432;dbname=test;user=postgres', (string)$connection);
	}
 }