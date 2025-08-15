<?php
require 'TinhToan.php';

$pheptinh = $_POST['pheptinh'] ?? '';
$so1 = $_POST['so1'] ?? '';
$so2 = $_POST['so2'] ?? '';

function opLabel($op) {
    switch ($op) {
        case 'cong': return 'Cộng';
        case 'tru': return 'Trừ';
        case 'nhan': return 'Nhân';
        case 'chia': return 'Chia';
        case 'nguyento': return 'Nguyên tố';
        case 'chanle': return 'Chẵn / Lẻ';
        default: return ucfirst($op);
    }
}

$ketqua = '';
switch ($pheptinh) {
    case "cong":  $ketqua = tong($so1, $so2); break;
    case "tru":   $ketqua = hieu($so1, $so2); break;
    case "nhan":  $ketqua = tich($so1, $so2); break;
    case "chia":  $ketqua = thuong($so1, $so2); break;

    case "nguyento":
        $ketqua  = $so1 . ' ' . (laNguyenTo($so1) ? 'là số nguyên tố' : 'không phải số nguyên tố');
        if ($so2 !== '') {
            $ketqua .= '<br>' . $so2 . ' ' . (laNguyenTo($so2) ? 'là số nguyên tố' : 'không phải số nguyên tố');
        }
        break;

    case "chanle":
        $ketqua  = $so1 . ' ' . (laSoChan($so1) ? 'là số chẵn' : 'là số lẻ');
        if ($so2 !== '') {
            $ketqua .= '<br>' . $so2 . ' ' . (laSoChan($so2) ? 'là số chẵn' : 'là số lẻ');
        }
        break;
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
<meta charset="UTF-8">
<title>Kết quả</title>
<style>
    body{font-family:Arial,sans-serif;background:#f4f6f8;display:flex;justify-content:center;align-items:center;height:100vh;margin:0}
    .container{background:#fff;padding:24px 28px;border-radius:12px;box-shadow:0 4px 18px rgba(0,0,0,.08);text-align:center;max-width:460px;width:100%}
    h2{margin:0 0 12px;color:#333;font-size:28px}
    p{margin:6px 0;font-size:16px}
    .btn{display:inline-block;margin-top:16px;padding:10px 18px;background:#0d6efd;color:#fff;text-decoration:none;border-radius:8px}
    .btn:hover{background:#0b5ed7}
</style>
</head>
<body>
<div class="container">
    <h2>Kết quả phép tính</h2>
    <p><strong>Phép tính:</strong> <?= opLabel($pheptinh) ?></p>
    <p><strong>Số 1:</strong> <?= htmlspecialchars($so1) ?></p>
    <?php if ($so2 !== ''): ?>
        <p><strong>Số 2:</strong> <?= htmlspecialchars($so2) ?></p>
    <?php endif; ?>
    <p><strong>Kết quả:</strong><br><?= $ketqua ?></p>
    <a class="btn" href="Nhap.php">Quay lại</a>
</div>
</body>
</html>
