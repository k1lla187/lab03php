<?php
// Lấy dữ liệu từ URL (GET)
$a  = isset($_GET["a"]) ? (float)$_GET["a"] : 0;
$b  = isset($_GET["b"]) ? (float)$_GET["b"] : 0;
$op = $_GET["op"] ?? "add"; // add | sub | mul | div

$result = null;
$symbol = "";

// Xử lý phép toán bằng switch–case
switch ($op) {
    case "add":
        $result = $a + $b;
        $symbol = "+";
        break;

    case "sub":
        $result = $a - $b;
        $symbol = "-";
        break;

    case "mul":
        $result = $a * $b;
        $symbol = "*";
        break;

    case "div":
        $symbol = "/";
        if ($b == 0) {
            echo "Không chia được cho 0";
            exit;
        }
        $result = $a / $b;
        break;

    default:
        echo "Phép toán không hợp lệ. Chỉ chấp nhận: add, sub, mul, div.";
        exit;
}

// Hiển thị kết quả
echo "$a $symbol $b = $result";
