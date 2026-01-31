<?php


function helloReturn(string $name) {
    echo "Hello $name! <br>";
    return;
}

function calculator(float $num_1, float $num_2, $argument) {
    switch ($argument) {
        case "+":
            return($num_1 + $num_2) . "<br>";
        case "-":
            return($num_1 - $num_2) . "<br>";
        case "*":
            return($num_1 * $num_2) . "<br>";
        case "/":
            if ($num_2 == 0){
                return ("Error! Can not divide by zero. <br>");
            } else {
                return ($num_1 / $num_2) . "<br>";
            }
        default:
            return "Error - please enter other argument!";
    }
}

helloReturn("Matew");
echo calculator(2.1, 3, "+");
echo calculator(2.1, 3, "-");
echo calculator(3.5, 100, "*");
echo calculator(3.5, 0, "/");
echo calculator(3, 10, "/");
echo calculator(3, 10, "/");
echo calculator(4, 5.2, "Zalupa");
