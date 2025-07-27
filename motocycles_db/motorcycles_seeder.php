// motorcycles_seeder.php

for ($i = 1; $i <= 5000; $i++) {
    $name = "Motor $i";
    $brand = ["Honda", "Yamaha", "Suzuki", "Kawasaki", "Vespa"][rand(0, 4)];
    $price = rand(12000000, 40000000);
    $stock = rand(5, 30);
    $conn->query("INSERT INTO motorcycles (motor_name, brand, price, stock)
        VALUES ('$name', '$brand', $price, $stock)");
}
