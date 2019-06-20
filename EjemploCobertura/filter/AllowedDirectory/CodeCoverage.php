<?php

    class PilesHeap extends SplMinHeap {
        public function compare($pile1, $pile2) {
            return parent::compare($pile1->top(), $pile2->top());
        }
    }

    /**
     *
     */
    class CodeCoverage
    {

        private $_fval, $_sval;

        public function __construct( $fval=5, $sval=6 ) {
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

        public function patienceSort($n) {
            $piles = array();
            // sort into piles
            foreach ($n as $x) {
                // binary search
                $low = 0; $high = count($piles)-1;
                while ($low <= $high) {
                    $mid = (int)(($low + $high) / 2);
                    if ($piles[$mid]->top() >= $x)
                        $high = $mid - 1;
                    else
                        $low = $mid + 1;
                }
                $i = $low;
                if ($i == count($piles))
                    $piles[] = new SplStack();
                $piles[$i]->push($x);
            }
             // priority queue allows us to merge piles efficiently
            $heap = new PilesHeap();
            foreach ($piles as $pile)
                $heap->insert($pile);
            for ($c = 0; $c < count($n); $c++) {
                $smallPile = $heap->extract();
                $n[$c] = $smallPile->pop();
                if (!$smallPile->isEmpty())
                $heap->insert($smallPile);
            }
            return $n;
        }
    }

    // $cc = new CodeCoverage(12, 6);
    // echo $cc-> add()."\n"; // Displays 18
    // $a = array(100, 76, 7, 2, 5, 4, 1);
    // $a = $cc-> patienceSort($a);
    // var_dump($a);

?>
