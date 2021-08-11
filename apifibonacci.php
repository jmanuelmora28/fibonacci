<?php


class ApiFibonacci{
    
    function fibonacci($n){

        $fibonacci  = [0,1];
 
        for($i=2;$i<=$n;$i++)
        {
            $fibonacci[] = $fibonacci[$i-1]+$fibonacci[$i-2];
        }

        echo json_encode(array('Response' => $fibonacci[$n]));
       
    }

}