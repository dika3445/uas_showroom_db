<?php 
include 'db_connect.php'; 
if ($_POST) {
    $motor_name = $_POST['motor_name'];
    $brand = $_POST['brand'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];

    $koneksi->query("INSERT INTO motorcycles (motor_name, brand, price, stock) 
        VALUES ('$motor_name', '$brand', $price, $stock)");
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tambah Motor</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, sans-serif;
      background: linear-gradient(to right, #f2f6fc, #ffffff);
      margin: 0;
      padding: 0;
      color: #333;
    }

    .container {
      max-width: 500px;
      margin: 60px auto;
      background: #fff;
      padding: 30px 40px;
      border-radius: 12px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    }

    h2 {
      text-align: center;
      color: #007bff;
      margin-bottom: 25px;
    }

    label {
      display: block;
      margin-bottom: 6px;
      font-weight: bold;
      color: #555;
    }

    input[type="text"], input[type="number"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 14px;
    }

    button {
      width: 100%;
      background: linear-gradient(135deg, #007bff, #0056b3);
      color: white;
      padding: 12px;
      border: none;
      border-radius: 8px;
      font-size: 16px;
      cursor: pointer;
      transition: 0.3s ease;
    }

    button:hover {
      background: linear-gradient(135deg, #0056b3, #003f7f);
    }

    .back-link {
      display: block;
      text-align: center;
      margin-top: 15px;
      text-decoration: none;
      color: #007bff;
    }

    .back-link:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

<div class="container">
  <h2>Tambah Data Motor</h2>
  <form method="post">
    <label>Nama Motor</label>
    <input type="text" name="motor_name" placeholder="Contoh: Beat Street" required>

    <label>Brand</label>
    <input type="text" name="brand" placeholder="Contoh: Honda" required>

    <label>Harga</label>
    <input type="number" name="price" placeholder="Contoh: 15000000" required>

    <label>Stok</label>
    <input type="number" name="stock" placeholder="Contoh: 10" required>

    <button type="submit">💾 Simpan</button>
  </form>

  <a class="back-link" href="index.php">← Kembali ke Data</a>
</div>

</body>
</html>
