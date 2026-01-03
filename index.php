<?php
require_once "functions.php";

$action = $_GET["action"] ?? "home";

echo "<h2>LAB03 - Mini Utility</h2>";

echo "
<p>
    <a href='?action=max&a=10&b=22'>Max</a> |
    <a href='?action=min&a=10&b=22'>Min</a> |
    <a href='?action=prime&n=17'>Prime</a> |
    <a href='?action=fact&n=6'>Factorial</a> |
    <a href='?action=gcd&a=12&b=18'>GCD</a>
</p>
<hr>
";

switch ($action) {
    case "max":
        $a = $_GET["a"] ?? null;
        $b = $_GET["b"] ?? null;

        if (is_numeric($a) && is_numeric($b)) {
            // cast to float to handle numeric strings
            echo "Max($a, $b) = " . findMax((float)$a, (float)$b);
        } else {
            echo "❌ Vui lòng truyền tham số a và b hợp lệ.";
        }
        break;

    case "min":
        $a = $_GET["a"] ?? null;
        $b = $_GET["b"] ?? null;

        if (is_numeric($a) && is_numeric($b)) {
            // cast to float to handle numeric strings
            echo "Min($a, $b) = " . findMin((float)$a, (float)$b);
        } else {
            echo "❌ Vui lòng truyền tham số a và b hợp lệ.";
        }
        break;

    case "prime":
        $n = $_GET["n"] ?? null;

        if (is_numeric($n) && $n >= 0) {
            // cast to int because isPrime has int type hint
            $ni = (int)$n;
            echo $ni . (isPrime($ni) ? " là số nguyên tố" : " không phải là số nguyên tố");
        } else {
            echo "❌ Vui lòng truyền số n hợp lệ.";
        }
        break;

    case "fact":
        $n = $_GET["n"] ?? null;

        if (is_numeric($n) && $n >= 0) {
            $ni = (int)$n;
            echo "Giai thừa của $ni = " . factorial($ni);
        } else {
            echo "❌ Vui lòng truyền số n ≥ 0.";
        }
        break;

    case "gcd":
        $a = $_GET["a"] ?? null;
        $b = $_GET["b"] ?? null;

        if (is_numeric($a) && is_numeric($b)) {
            // cast to int because gcd has int type hints
            echo "GCD($a, $b) = " . gcd((int)$a, (int)$b);
        } else {
            echo "❌ Vui lòng truyền tham số a và b hợp lệ.";
        }
        break;

    default:
        echo "<i>Chọn một chức năng từ menu phía trên.</i>";
}
?>