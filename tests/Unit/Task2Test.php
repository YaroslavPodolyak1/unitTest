<?php
    /**
     * Created by PhpStorm.
     * User: Ярослав
     * Date: 20.03.2018
     * Time: 10:41
     */

    namespace Tests\Unit;

    use Tests\TestCase;
    use YaroslavPodolyak\Tasks\Task2\Container;

    class Task2Test extends TestCase
    {

        public function test_container()
        {
            $container = new Container;

            $this->assertFalse($container->has('test'));
            $this->assertNull($container['test']);
            $this->assertNull($container->get('test'));
            $this->assertNull($container->test);
            $this->assertNull($container('test'));

            $container->set('test', [new Service, 'do']);

            $this->assertTrue($container->has('test'));
            $this->assertEquals('test', $container['test']);
            $this->assertEquals('test', $container->get('test'));
            $this->assertEquals('test', $container->test);
            $this->assertEquals('test', $container('test'));
        }
    }

    class Service
    {

        public function do()
        {
            return 'test';
        }
    }