<?php
function connection()
{
    $result = new PDO('mysql:host=localhost;dbname=duan1;charset=utf8', 'root', '');
    return $result;
}
