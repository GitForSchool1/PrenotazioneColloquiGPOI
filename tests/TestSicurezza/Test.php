<?php
    include_once "testSicurezza.php";
    $ret_Values = [
        "test_Password" => testSicurezza::testPassword(),
        "test_Username" => testSicurezza::testUsername(),
        "test_Mail" => testSicurezza::testEmail()
    ];
    foreach($ret_Values as $val){
        echo $val."<br>";
    }

?>