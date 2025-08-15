<?php

echo '<!DOCTYPE html>
<html lang="vi">
<head>
<meta charset="UTF-8">
<title>Bài 1 - Hello World</title>
<style>
    body {
        margin: 0;
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
    }
    .container {
        display: flex;
        justify-content: center;
        margin-top: 40px;
    }
    .box {
        background-color: white;
        padding: 20px 40px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
        font-size: 24px;
        text-align: center;
    }
    a.button {
        display: inline-block;
        margin-top: 15px;
        padding: 8px 15px;
        background-color: #3498db;
        color: white;
        text-decoration: none;
        border-radius: 5px;
        transition: 0.3s;
    }
    a.button:hover {
        background-color: #217dbb;
    }
</style>
</head>
<body>
    <div class="container">
        <div class="box">
            <b>Hello</b>, World!<br>
            <a href="TrangChu.html" class="button">Quay về Trang chủ</a>
        </div>
    </div>
</body>
</html>';
?>
