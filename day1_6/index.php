<?php
$num1 = 50;
$num2 = 55;
$k = 5;


if ($num1 % $k == 0 && $num2 % $k == 0) {
    echo "Both\n";
} elseif ($num1 % $k == 0) {
    echo "Memo\n";
} elseif ($num2 % $k == 0) {
    echo "Momo\n";
} else {
    echo "No One\n";
}
?>

