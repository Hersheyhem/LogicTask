<?php

$values = [];
for ($i= 1; $i <= 100; $i++) {
    if ($i % 15 == 0) {
        $values[] = "foobar";
    } elseif ($i % 3 == 0) {
        $values[] = "foo";
    } elseif ($i % 5 == 0) {
        $values[] = "bar";
    } else {
        $values[] = $i;
    }
}
echo implode(", ", $values);

?>
