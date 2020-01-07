<?php
namespace App\Library;

class Response{
    
    public function json($data)
    {
        header('Content-Type: application/json');
        echo json_encode($data,JSON_PRETTY_PRINT);
    }

}