<?php
    class OutputTest extends PHPUnit_Framework_TestCase
    {
        public function testExpectFooActualFoo()
        {
            /*$this->expectOutputString('foo');
            print 'foo';*/
            echo 'nei';
        }

        public function testExpectBarActualBaz()
        {
            $this->expectOutputString('bar');
            print 'bar';
        }
    }
?>