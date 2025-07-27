<?php include 'db_connect.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Data Motor - Admin Panel</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, sans-serif;
      margin: 0;
      background: linear-gradient(to right, #dfe9f3, #ffffff);
      color: #333;
    }

    header {
      background-color: #343a40;
      padding: 20px 30px;
      color: white;
      text-align: center;
      font-size: 24px;
      letter-spacing: 1px;
      font-weight: bold;
      box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    }

    .container {
      max-width: 1000px;
      margin: 40px auto;
      background: #fff;
      border-radius: 12px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.1);
      padding: 30px;
    }

    .top-bar {
      display: flex;
      justify-content: space-between;
      margin-bottom: 25px;
      align-items: center;
    }

    .top-bar h2 {
      font-size: 22px;
      color: #2c3e50;
    }

    .button {
      background: linear-gradient(135deg, #007bff, #0056b3);
      color: white;
      padding: 10px 18px;
      text-decoration: none;
      font-weight: bold;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      transition: 0.3s;
    }

    .button:hover {
      background: linear-gradient(135deg, #0056b3, #003f7f);
      box-shadow: 0 4px 12px rgba(0,0,0,0.2);
    }

    table {
      width: 100%;
      border-collapse: collapse;
      border-radius: 10px;
      overflow: hidden;
    }

    th {
      background: #007bff;
      color: white;
      padding: 14px;
      text-align: left;
    }

    td {
      padding: 12px 14px;
      border-bottom: 1px solid #eee;
    }

    tr:hover {
      background-color: #f9f9f9;
    }

    .actions a {
      margin-right: 10px;
      text-decoration: none;
      font-weight: bold;
      color: #007bff;
      transition: 0.2s;
    }

    .actions a:hover {
      color: #0056b3;
      text-decoration: underline;
    }

    .price {
      font-weight: bold;
      color: #28a745;
    }
  </style>
</head>
<body>

<header>Dashboard Admin - Data Motor</header>

<div class="container">
  <div class="top-bar">
    <h2>List Motor Tersedia</h2>
    <a href="add.php" class="button">+ Tambah Motor</a>
  </div>

  <table>
    <tr>
      <th>Nama</th>
      <th>Brand</th>
      <th>Harga</th>
      <th>Stok</th>
      <th>Aksi</th>
    </tr>
    <?php
    $q = $koneksi->query("SELECT * FROM motorcycles");
    while ($d = $q->fetch_assoc()) {
      echo "<tr>
        <td>{$d['motor_name']}</td>
        <td>{$d['brand']}</td>
        <td class='price'>Rp " . number_format($d['price'], 0, ',', '.') . "</td>
        <td>{$d['stock']}</td>
        <td class='actions'>
          <a href='edit.php?id={$d['motor_id']}'>✏️ Edit</a>
          <a href='delete.php?id={$d['motor_id']}' onclick=\"return confirm('Hapus data motor ini?')\">🗑️ Hapus</a>
        </td>
      </tr>";
    }
    ?>
  </table>
</div>

</body>
</html>
