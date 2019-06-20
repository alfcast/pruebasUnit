<?php
    require 'filter/AllowedDirectory/CodeCoverage.php';
    use PHPUnit\Framework\TestCase;
    /**
     * Ejemplo de prueba
     */
    class CodeCoverageTest extends TestCase
    {

        public function testAdd(){
            $cc = new CodeCoverage(12, 6);
            $this->assertEquals($cc->add(),18);
        }

        public function testPatienceSort()
        {
            $cc = new CodeCoverage();
            $myData = array(100, 76, 7, 2, 5, 4, 1);
            $this->assertEquals(array(1,2,4,5,7,76,100),$cc->patienceSort($myData));
        }
    }

?>
