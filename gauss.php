<?php

//statistics interface
interface gauss{

    public function sum($data);

    public function average($data);

    public function variance($data);

    public function std_dev($data);

    public function var_coef($data);

    public function range($data);

    public function median($data);

    public function abs_frec($data,$num);

}

?>