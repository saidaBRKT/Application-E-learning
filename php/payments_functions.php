<?php
function getpayments(){
    return json_decode(file_get_contents(__DIR__ . '/payments.json'), true);
}
?>