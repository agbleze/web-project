<?php 
    declare(strict_types = 1);

    function sumNumbers (int $num1, int $num2, $num3) {
        return $num1 + $num2 + $num3;
    }

    $result = sumNumbers(34, 43, 12);
    echo "$result <BR>";

    function checking ($r, $t): int {
        return $r + $t;
    }

    $new = checking(4, 5);
    echo "$new";
?>