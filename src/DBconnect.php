<?php

namespace Proekt;

class DBconnect{

public static function connect() {
    $mysqli = @new \mysqli('localhost', 'root', '', 'awesoneBD');
    if(mysqli_connect_errno()){
        echo 'Ошибка'.mysqli_connect_errno();
    }
   
        return $mysqli;
}
}