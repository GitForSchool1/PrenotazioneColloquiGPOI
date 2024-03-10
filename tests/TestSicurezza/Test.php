<?php
    include_once "testSicurezza.php";
<<<<<<< HEAD
    $ret_Values = [
        "test_Password" => testSicurezza::testPassword(),
        "test_Username" => testSicurezza::testUsername(),
        "test_Mail" => testSicurezza::testEmail()
    ];
    foreach($ret_Values as $val){
        echo $val."<br>";
    }
=======

    echo(testSicurezza::testPassword());
    echo(testSicurezza::testEmail());

>>>>>>> 5b2968d5a78d7d9e4369b4262f89a20b8bdcc07e

?>