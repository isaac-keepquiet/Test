<?php
    $arr1 = [
        'a' =>1,
        'b' =>2,
        'c' =>3,
    ];
    // $arr2 = array(1,2,3);

    $arr1['d'] = 4;
    $arr1['b'] = 22;
    unset($arr1['c']);
    echo $arr1['a'];
    echo "<br>",
    var_dump($arr1);
?>