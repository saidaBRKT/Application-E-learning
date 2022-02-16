<?php
function getusers(){
    return json_decode(file_get_contents(__DIR__ . '/students.json'), true);
}
?>