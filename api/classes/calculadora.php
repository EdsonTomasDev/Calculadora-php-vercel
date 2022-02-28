<?php

    class Calculadora{

        private $total;
        private $numero1;
        private $numero2;

        function __construct(){

            $this->total   = 0;
            $this->numero1 = 0;
            $this->numero2 = 0;
        }

        public function setNumero1($param_num1){
                $this->numero1 = $param_num1;
        }

        public function setNumero2($param_num2){
            $this->numero2 = $param_num2;
    }
        public function somar(){
            $this->total = $this->numero1 + $this->numero2;

            return $this->total;
        }

        public function subtrair(){
            $this->total = $this->numero1 - $this->numero2;

            return $this->total;
        }

        public function multiplicar(){
            $this->total = $this->numero1 * $this->numero2;

            return $this->total;
        }

        public function dividir(){
            $this->total = $this->numero1 / $this->numero2;

            return $this->total;
        }

        public function getTotal(){
            
            return $this->total;
        }

    }

?>