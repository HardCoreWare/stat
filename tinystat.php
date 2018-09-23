<?php

require_once('gauss.php');

class tinystat implements gauss{

    //total sum of data
    public function sum($data){

        $sum=0;

        foreach ($data as $i => $value) {

            $sum+=$value;
            
        }

        return $sum;

    }

    // data average by sum
    public function average($data){

        $size=count($data);

        $sum=$this->sum($data);
        $average=$sum/$size;

        return $average;

    }

    // data var by average
    public function variance($data){

        $average=$this->average($data);

        //var sum
        $vs = 0;

        $size=count($data);

        // to get the var
        foreach ($data as $i => $value) {

            //particular deviation
            $des=($value-$average)*($value-$average);
            $vs+=$des;

        }

        $var = $vs/$size;

        return $var;

    }

    // gets std deviation by var
    public function std_dev($data){

        $var=$this->variance($data);
        $desv=sqrt($var);

        return $desv;
    }

    // variation coeficientrequire_once('interfaces');

    public function var_coef($data){

        $average=$this->average($data);
        $stddev=$this->std_dev($data);
        $var_coef = ($stddev/$average)*100;

        return $var_coef;

    }

    // range of data
    public function range($data){

        $min=min($data);
        $max=max($data);
        $range = $max-$min;

        return $range;

    }

    // median of data
    public function median($data){

        $min=min($data);
        $max=max($data);
        $median=($max+$min)/2;
        return $median;

    }

    // absolute frecuency of num in array
    public function abs_frec($data,$num){

        $frec=0;

        foreach ($data as $i => $value) {

            if($num==$value){

                $frec++;

            }

            else { }

        }

        return $frec;

    }

}

?>