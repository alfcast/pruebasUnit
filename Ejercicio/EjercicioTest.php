<?php
    require 'Ejercicio.php';
    use PHPUnit\Framework\TestCase;
    /**
     * Ejemplo de prueba
     */
    class EjercicioTest extends TestCase
    {
        public function testRequerido(){
            $varVacia = "    ";
            $varNoVacia = "HolaMundo";

            $this->assertTrue(requerido($varNoVacia));
            $this->assertFalse(requerido($varVacia));
        }

        public function testEnLista(){
            $array = [1,2,3,4,5];

            $this->assertTrue(enLista(3,$array));
            $this->assertFalse(enLista(7,$array));
        }

        public function testLongitud(){
            $cadena = "hola";

            $this->assertTrue(longitud($cadena,['min' => 4]));
            $this->assertFalse(longitud($cadena,['max' => 2]));
        }

    }

?>
