<?php

header('Content-Type: application/json');

$arr = array(
    'id' => 1,
    'name' => '',
    'last_name' => '',
    'email' => '',
    'status' => 1
);

echo json_encode($arr, JSON_FORCE_OBJECT);
