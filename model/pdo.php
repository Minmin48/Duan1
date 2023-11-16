<?php
function connection()
{
    $result = new PDO('mysql:host=localhost;dbname=hihi;charset=utf8', 'root', '');
    return $result;
}
