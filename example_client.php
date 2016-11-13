<?php

require __DIR__.'/vendor/autoload.php';


@require __DIR__.'/proto/person.pb.php';

$person = new \Proto\Person();
$person->decode(file_get_contents('http://127.0.0.1:8000/'));

var_dump($person->getName());