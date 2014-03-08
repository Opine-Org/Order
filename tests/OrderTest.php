<?php
namespace Opine;

class OrderTest extends \PHPUnit_Framework_TestCase {
    private $order;
    private $db;

    public function setup () {
        date_default_timezone_set('UTC');
        $root = getcwd();
        $container = new Container($root, $root . '/container.yml');
        $this->order = $container->order;
        $this->db = $container->db;
    }

    public function testOrder () {
        $this->assertTrue(true);
    }
}