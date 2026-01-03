<?php
$n = isset($_GET["n"]) ? (int)$_GET["n"] : 0;

/* =========================
 * A) BẢNG CỬU CHƯƠNG 1..9
 * Dùng for lồng nhau
 * ========================= */
echo "<h3>A) Bảng cửu chương 1..9</h3>";
echo "<table border='1' cellpadding='5' cellspacing='0'>";

for ($i = 1; $i <= 9; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= 9; $j++) {
        echo "<td>$i × $j = " . ($i * $j) . "</td>";
    }
    echo "</tr>";
}
echo "</table>";

/* =========================
 * B) TÍNH TỔNG CHỮ SỐ CỦA n
 * Dùng while
 * ========================= */
echo "<h3>B) Tính tổng chữ số của n</h3>";

$temp = abs($n); // phòng trường hợp n âm
$sum = 0;

while ($temp > 0) {
    $sum += $temp % 10;
    $temp = (int)($temp / 10);
}

echo "n = $n → Tổng chữ số = $sum";

/* =========================
 * C) IN SỐ LẺ TỪ 1..N
 * Dùng continue + break
 * ========================= */
echo "<h3>C) Các số lẻ từ 1..N (dừng khi > 15)</h3>";

for ($i = 1; $i <= $n; $i++) {

    // Bỏ qua số chẵn
    if ($i % 2 == 0) {
        continue;
    }

    // Dừng sớm khi vượt 15
    if ($i > 15) {
        break;
    }

    echo $i . " ";
}
