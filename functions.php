<?php
// functions.php
// Thư viện các hàm dùng chung cho lab03

/**
 * Trả về giá trị lớn hơn giữa hai số
 */
function max2($a, $b) {
    return ($a > $b) ? $a : $b;
}

/**
 * Trả về giá trị nhỏ hơn giữa hai số
 */
function min2($a, $b) {
    return ($a < $b) ? $a : $b;
}

/**
 * Wrapper tương thích (index.php gọi findMax)
 */
function findMax($a, $b) {
    return max2($a, $b);
}

/**
 * Wrapper tương thích (index.php gọi findMin)
 */
function findMin($a, $b) {
    return min2($a, $b);
}

/**
 * Kiểm tra số nguyên tố
 * @param int $n
 * @return bool true nếu là số nguyên tố, ngược lại false
 */
function isPrime(int $n): bool {
    if ($n < 2) {
        return false;
    }

    if ($n == 2) {
        return true;
    }

    if ($n % 2 == 0) {
        return false;
    }

    for ($i = 3; $i * $i <= $n; $i += 2) {
        if ($n % $i == 0) {
            return false;
        }
    }

    return true;
}

/**
 * Tính giai thừa của n (n ≥ 0)
 * Nếu n < 0 thì trả về null
 */
function factorial(int $n) {
    if ($n < 0) {
        return null;
    }

    $result = 1;
    for ($i = 1; $i <= $n; $i++) {
        $result *= $i;
    }

    return $result;
}

/**
 * Tính Ước chung lớn nhất (ƯCLN) của hai số
 * Áp dụng thuật toán Euclid
 */
function gcd(int $a, int $b): int {
    $a = abs($a);
    $b = abs($b);

    if ($a == 0) return $b;
    if ($b == 0) return $a;

    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }

    return $a;
}