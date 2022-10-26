<?php 
    $email = "   kenny@gmail.com    ";
    echo "trim " . trim($email) . "<br>";
    $password = "AAAA!!!!AAAA";
    echo "trim " . trim($password, "A") . "<br>";
    $str = "hello world!";
    echo "str_replace " . str_replace("hello", "apple", $str) . "<br>";
    $str = "HELLO world!";
    echo "str_ireplace " . str_ireplace("hello", "apple", $str) . "<br>";
    $str = "Something Something";
    echo "strlen " . strlen($str) . "<br>";
    echo "strtoupper " . strtoupper($str) . "<br>";
    echo "strtolower " . strtolower($str) . "<br>";
    $str = "something interesting";
    echo "strpos " . strpos($str, "interesting") . "<br>";
    $str = "something Interesting";
    echo "stripos " . stripos($str, "interesting") . "<br>";
?>
