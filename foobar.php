<?php

for ($i = 1; $i<=100; $i++) {
    if ($i % 3 && $i % 5) {
        echo $i;
    } else {

if ($i % 3 == 0) {
        echo "foo";
    } elseif ($i % 5 == 0) {
        echo "bar";
    } elseif ($i % 3 == 0 && $i % 5 == 0) {
        echo "foobar\r\n";
    }   
    }
    //line breaks to enhance output readability
    echo "\r\n";
}

?>
