<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Phép tính trên hai số</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f8;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background: white;
            padding: 20px 30px;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
            max-width: 450px;
            width: 100%;
        }
        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }
        label {
            font-weight: bold;
            display: block;
            margin-top: 10px;
        }
        input[type="number"], input[type="submit"], .button {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #007BFF;
            color: white;
            font-size: 16px;
            cursor: pointer;
            margin-top: 15px;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .button {
            display: inline-block;
            text-align: center;
            background-color: #28a745;
            color: white;
            text-decoration: none;
            font-size: 16px;
            margin-top: 10px;
            cursor: pointer;
        }
        .button:hover {
            background-color: #1e7e34;
        }
        .radio-group {
            margin-top: 5px;
            margin-bottom: 15px;
        }
        .radio-group input {
            margin-left: 10px;
            margin-right: 3px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>PHÉP TÍNH TRÊN HAI SỐ</h2>
        <form method="post" action="KetQua.php">
            <label>Chọn phép tính:</label>
            <div class="radio-group">
                <input type="radio" name="pheptinh" value="cong" checked> Cộng
                <input type="radio" name="pheptinh" value="tru"> Trừ
                <input type="radio" name="pheptinh" value="nhan"> Nhân
                <input type="radio" name="pheptinh" value="chia"> Chia
                <input type="radio" name="pheptinh" value="nguyento"> Nguyên tố
                <input type="radio" name="pheptinh" value="chanle"> Chẵn / Lẻ
            </div>

            <label>Số thứ nhất:</label>
            <input type="number" name="so1" required>

            <label>Số thứ hai:</label>
            <input type="number" name="so2">

            <input type="submit" value="Tính">
        </form>
        <a href="http://taolavua.fwh.is/TrangChu.html" class="button">Quay về Trang chủ</a>
    </div>
</body>
</html>
