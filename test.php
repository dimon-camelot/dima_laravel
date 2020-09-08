<?php

$myFunc = function ($x, $y) {
    return $x + $y;
};


echo call_user_func($myFunc, 1, 2);
