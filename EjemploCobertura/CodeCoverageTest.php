<?php
    require 'filter/AllowedDirectory/CodeCoverage.php';
    use PHPUnit\Framework\TestCase;
    /**
     * Ejemplo de prueba
     */
    class CodeCoverageTest extends TestCase
    {

        public function testAdd(){
            $mycalc = new CodeCoverage(12, 6);
            $this->assertEquals($mycalc->add(),18);
        }

        public function testTringle()
        {
            $mycalc = new CodeCoverage(12, 6);
            $this->assertNull($mycalc->triangle());
        }
    }

?>
