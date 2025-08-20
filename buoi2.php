<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Btap</title>
</head>
<body>
    <h2>Nhập Thông Tin Sách</h2>

    <!-- Form -->
    <form method="get" action="">
        Tên sách: <input type="text" name="tensach"><br><br>
        Tác giả: <input type="text" name="tacgia"><br><br>
        Nhà xuất bản: <input type="text" name="nxb"><br><br>
        Năm xuất bản: <input type="text" name="namxb"><br><br>
        <input type="submit" value="GET">
    </form>

    <form method="post" action="">
        Tên sách: <input type="text" name="tensach"><br><br>
        Tác giả: <input type="text" name="tacgia"><br><br>
        Nhà xuất bản: <input type="text" name="nxb"><br><br>
        Năm xuất bản: <input type="text" name="namxb"><br><br>
        <input type="submit" value="POST">
    </form>

    <hr>

    <?php
    // Hiển thị GET nếu có
    if (!empty($_GET)) {
        echo "<h3>Kết quả từ GET:</h3>";
        echo "Tên sách: " . htmlspecialchars($_GET['tensach'] ?? '') . "<br>";
        echo "Tác giả: " . htmlspecialchars($_GET['tacgia'] ?? '') . "<br>";
        echo "Nhà xuất bản: " . htmlspecialchars($_GET['nxb'] ?? '') . "<br>";
        echo "Năm xuất bản: " . htmlspecialchars($_GET['namxb'] ?? '') . "<br>";
    }

    // Hiển thị POST nếu có
    if (!empty($_POST)) {
        echo "<h3>Kết quả từ POST:</h3>";
        echo "Tên sách: " . htmlspecialchars($_POST['tensach'] ?? '') . "<br>";
        echo "Tác giả: " . htmlspecialchars($_POST['tacgia'] ?? '') . "<br>";
        echo "Nhà xuất bản: " . htmlspecialchars($_POST['nxb'] ?? '') . "<br>";
        echo "Năm xuất bản: " . htmlspecialchars($_POST['namxb'] ?? '') . "<br>";
    }
    ?>
</body>
</html>
