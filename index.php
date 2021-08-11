<?php

    include_once 'apifibonacci.php';
    $apiFibonacci = new ApiFibonacci();

    if($_GET['number']){

        $apiFibonacci->fibonacci($_GET['number']);

    }else{

        echo json_encode(array('Msg' => 'Not found number'));
        
    } 