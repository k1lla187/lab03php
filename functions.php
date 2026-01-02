<?php
// Hàm tìm số lớn nhất
function myMax($a, $b) {
    return ($a > $b) ? $a : $b;
}

// Hàm tìm số nhỏ nhất
function myMin($a, $b) {
    return ($a < $b) ? $a : $b;
}

// Hàm kiểm tra số nguyên tố
function isPrime($n) {
    if ($n < 2) return false;
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) return false;
    }
    return true;
}

// Hàm tính giai thừa
function factorial($n) {
    if ($n < 0) return null;
    $result = 1;
    for ($i = 1; $i <= $n; $i++) {
        $result *= $i;
    }
    return $result;
}

// Hàm tìm ƯCLN (GCD)
function gcd($a, $b) {
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return abs($a);
}
