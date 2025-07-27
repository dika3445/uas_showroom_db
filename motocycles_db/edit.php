<?php
include 'db_connect.php';

// Ambil data motor berdasarkan ID
$id = $_GET['id'];
$query = $koneksi->query("SELECT * FROM motorcycles WHERE motor_id = $id");
$data = $query->fetch_assoc();

// Proses update setelah form disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $motor_name = $_POST['motor_name'];
    $brand = $_POST['brand'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];

    $koneksi->query("UPDATE motorcycles SET 
        motor_name = '$motor_name', 
        brand = '$brand', 
        price = $price, 
        stock = $stock 
        WHERE motor_id = $id");

    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Edit Data Motor</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, sans-serif;
      background: #f4f6f9;
      margin: 0;
      padding: 0;
      color: #333;
    }

    .container {
      max-width: 500px;
      margin: 60px auto;
      background: white;
      padding: 30px 40px;
      border-radius: 12px;
      box-shadow: 0 8px 24px rgba(0,0,0,0.1);
    }

    h2 {
      text-align: center;
      color: #007bff;
      margin-bottom: 25px;
    }

    label {
      display: block;
      margin-bottom: 6px;
      font-weight: 600;
    }

    input[type="text"],
    input[type="number"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 14px;
    }

    button {
      width: 100%;
      background: linear-gradient(135deg, #28a745, #218838);
      color: white;
      padding: 12px;
      border: none;
      border-radius: 8px;
      font-size: 16px;
      cursor: pointer;
      transition: 0.3s ease;
    }

    button:hover {
      background: linear-gradient(135deg, #218838, #19692c);
    }

    .back-link {
      display: block;
      text-align: center;
      margin-top: 15px;
      color: #007bff;
      text-decoration: none;
    }

    .back-link:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

<div class="container">
  <h2>Edit Data Motor</h2>
  <form method="post">
    <label>Nama Motor</label>
    <input type="text" name="motor_name" value="<?= htmlspecialchars($data['motor_name']) ?>" required>

    <label>Brand</label>
    <input type="text" name="brand" value="<?= htmlspecialchars($data['brand']) ?>" required>

    <label>Harga</label>
    <input type="number" name="price" value="<?= $data['price'] ?>" required>

    <label>Stok</label>
    <input type="number" name="stock" value="<?= $data['stock'] ?>" required>

    <button type="submit">✅ Update</button>
  </form>
  <a class="back-link" href="index.php">← Kembali ke Data</a>
</div>

</body>
</html>
