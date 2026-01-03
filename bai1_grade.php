<?php
// Lấy điểm từ GET (có thể mở rộng sang POST nếu cần)
$score = isset($_GET["score"]) ? $_GET["score"] : null;

// Kiểm tra có truyền score hay chưa
if ($score === null) {
    echo "Hãy truyền tham số ?score= (ví dụ: ?score=8.2)";
    exit;
}

// Ép kiểu số
$score = (float)$score;

// Kiểm tra hợp lệ
if ($score < 0 || $score > 10) {
    echo "Điểm không hợp lệ. Điểm phải nằm trong khoảng từ 0 đến 10.";
    exit;
}

// Phân loại điểm
if ($score >= 8.5) {
    $grade = "Giỏi";
} elseif ($score >= 7.0) {
    $grade = "Khá";
} elseif ($score >= 5.0) {
    $grade = "Trung bình";
} else {
    $grade = "Yếu";
}

// Hiển thị kết quả
echo "Điểm: $score – Xếp loại: $grade";
