<?php

for ($i = 1; $i <= 100; $i++) {
    if (($i %3 == 0) && ($i %5 == 0)) {
        $n = "FizzBuzz";
    } else {
        $n = (($i %3 == 0)
            ? "Fizz"
            : (($i %5 == 0)
                ? "Buzz"
                : $i
            )
        );
    }
    echo $n . PHP_EOL;
}
