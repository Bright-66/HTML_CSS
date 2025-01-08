<?php

function dd($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

$data = [
[
    'id'=> 1,
    'name'=>'台北店',
    'mobile'=>'0922xxxxxx',
    'adress'=>'台北市...'
],
[
    'id'=> 2,
    'name'=>'台中店',
    'mobile'=>'0922xxxxxx',
    'adress'=>'台北市...'
],
[
    'id'=> 3,
    'name'=>'台南店',
    'mobile'=>'0922xxxxxx',
    'adress'=>'台北市...'
]

];

dd($data);

?>