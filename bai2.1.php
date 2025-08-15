<?php
$totalBooks = 100;
$booksPerPage = 10;
$totalPages = ceil($totalBooks / $booksPerPage);

$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
if ($page < 1) $page = 1;
if ($page > $totalPages) $page = $totalPages;

$start = ($page - 1) * $booksPerPage + 1;
$end = min($start + $booksPerPage - 1, $totalBooks);
?>
<!DOCTYPE html>
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
    .pagination {
        margin-top: 20px;
    }
    .pagination a, .pagination strong {
        display: inline-block;
        padding: 8px 12px;
        margin: 0 3px;
        border-radius: 4px;
        text-decoration: none;
        font-weight: bold;
        color: #0d6efd;
        border: 1px solid #0d6efd;
        transition: 0.3s;
    }
    .pagination a:hover {
        background-color: #0d6efd;
        color: white;
    }
    .pagination strong {
        background-color: #0d6efd;
        color: white;
    }
    .button {
        margin-top: 15px;
        padding: 8px 15px;
        background-color: #198754;
        color: white;
        text-decoration: none;
        border-radius: 5px;
        font-size: 14px;
        transition: background-color 0.3s;
    }
    .button:hover {
        background-color: #146c43;
    }
</style>
</head>
<body>

<h2>📚 Danh sách sách</h2>

<table>
    <tr>
        <th>STT</th>
        <th>Tên sách</th>
        <th>Nội dung sách</th>
    </tr>
    <?php for ($i = $start; $i <= $end; $i++): ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo "Tensach$i"; ?></td>
            <td><?php echo "Noidung$i"; ?></td>
        </tr>
    <?php endfor; ?>
</table>

<div class="pagination">
    <?php for ($i = 1; $i <= $totalPages; $i++): ?>
        <?php if ($i == $page): ?>
            <strong><?php echo $i; ?></strong>
        <?php else: ?>
            <a href="<?php echo $_SERVER['PHP_SELF'] . '?page=' . $i; ?>"><?php echo $i; ?></a>
        <?php endif; ?>
    <?php endfor; ?>
</div>

<a href="TrangChu.html" class="button">⬅ Quay về Trang chủ</a>

</body>
</html>
