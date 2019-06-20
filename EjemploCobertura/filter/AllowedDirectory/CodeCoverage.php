<?php
    /**
     *
     */
    class CodeCoverage
    {

        private $_fval, $_sval;

        public function __construct( $fval, $sval ) {
            $this->_fval = $fval;
            $this->_sval = $sval;
        }

        public function add() {
            return $this->_fval + $this->_sval;
            echo "hola";
        }

        public function subtract() {
            return $this->_fval - $this->_sval;
        }

        public function multiply() {
            return $this->_fval * $this->_sval;
        }

        public function divide() {
            return $this->_fval / $this->_sval;
        }

        public function triangle()
        {
            $j=3;
            $n=5;
            for ($l=0; $l <= $j ; $l++) {
                for($i=1; $i<=$n; $i++)
                {
                    for($j=1; $j<=$i; $j++)
                    {
                        echo ' * ';
                    }
                echo "\n";
                }
                for($i=$n; $i>=1; $i--)
                {
                    for($j=1; $j<=$i; $j++)
                    {
                        echo ' * ';
                    }
                echo "\n";
                }
            }

        }

    }
        $mycalc = new CodeCoverage(12, 6);
        echo $mycalc-> add()."\n"; // Displays 18
        echo $mycalc-> multiply()."\n"; // Displays 72
        echo $mycalc-> subtract()."\n"; // Displays 6
        echo $mycalc-> divide()."\n"; // Displays 2
        echo "\n";
        $mycalc->triangle();
        echo "\n";

?>
