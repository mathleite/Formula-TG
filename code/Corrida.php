<?php
class Corrida
{
    private $arrayCarro;
    public function __construct($arrayCarro)
    {
        $this->arrayCarro = $arrayCarro;
    }

    public function comecarCorrida()
    {
        if(count($this->arrayCarro) > 0){
            echo 'A corrida pode ser iniciada!';
        }
    }

    public function ultrapassar()
    {
        //$ultrapassar = current($this->arrayCarro);
        //print_r($this->arrayCarro);
    }
}
