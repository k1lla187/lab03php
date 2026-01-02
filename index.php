<?php
require_once "functions.php";

$action = $_GET['action'] ?? '';

switch ($action) {
    case 'prime':
        $n = $_GET['n'] ?? 0;
        echo isPrime($n)
            ? "$n là số nguyên tố"
            : "$n không phải là số nguyên tố";
        break;

    case 'fact':
        $n = $_GET['n'] ?? 0;
        echo "Giai thừa của $n = " . factorial($n);
        break;

    case 'gcd':
        $a = $_GET['a'] ?? 0;
        $b = $_GET['b'] ?? 0;
        echo "ƯCLN của $a và $b = " . gcd($a, $b);
        break;

    case 'max':
        $a = $_GET['a'] ?? 0;
        $b = $_GET['b'] ?? 0;
        echo "Max($a, $b) = " . myMax($a, $b);
        break;

    case 'min':
        $a = $_GET['a'] ?? 0;
        $b = $_GET['b'] ?? 0;
        echo "Min($a, $b) = " . myMin($a, $b);
        break;

    default:
        echo "<h3>Menu Lab03</h3>";
        echo "<ul>
                <li>?action=prime&n=17</li>
                <li>?action=fact&n=6</li>
                <li>?action=gcd&a=12&b=18</li>
                <li>?action=max&a=5&b=9</li>
                <li>?action=min&a=5&b=9</li>
              </ul>";
}
