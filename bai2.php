<?php
echo '<!DOCTYPE html>
<html lang="vi">
<head>
<meta charset="UTF-8">
<title>Danh sách sách</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f6f8;
        margin: 0;
        padding: 20px;
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    table {
        border-collapse: collapse;
        width: 80%;
        max-width: 900px;
        background-color: white;
        box-shadow: 0 4px 18px rgba(0,0,0,0.1);
        border-radius: 8px;
        overflow: hidden;
    }
    th, td {
        padding: 12px 15px;
        text-align: center;
    }
    th {
        background-color: #0d6efd;
        color: white;
        font-size: 16px;
    }
    tr:nth-child(even) {
        background-color: #f9f9f9;
    }
    tr:hover {
        background-color: #f1f5ff;
    }
    .button {
        margin-top: 20px;
        padding: 10px 20px;
        background-color: #0d6efd;
        color: white;
        text-decoration: none;
        border-radius: 5px;
        font-size: 14px;
        transition: background-color 0.3s;
    }
    .button:hover {
        background-color: #084298;
    }
</style>
</head>
<body>
<table>
<tr><th>STT</th><th>Tên sách</th><th>Nội dung sách</th></tr>';

for ($i = 1; $i <= 100; $i++) {
    echo "<tr>
            <td>$i</td>
            <td>Tensach$i</td>
            <td>Noidung$i</td>
          </tr>";
}

echo '</table>
<a href="TrangChu.html" class="button">Quay về Trang chủ</a>
</body>
</html>';
?>
