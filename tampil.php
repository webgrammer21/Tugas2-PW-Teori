<?php
include 'koneksi.php';

// Query untuk mendapatkan data produk, kategori, dan supplier
$sql = "SELECT products.ProductID, products.ProductName, categories.CategoryName, suppliers.CompanyName, products.UnitPrice 
        FROM products 
        JOIN categories ON products.CategoryID = categories.CategoryID 
        JOIN suppliers ON products.SupplierID = suppliers.SupplierID";

$result = $konek->query($sql);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Menampilkan Data</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
</head>
<body>

    <center>
<!-- Membuat Nama -->
    <div>
        <h2>Menampilkan Data</h2>
        <h2>Aplikasi PHP + Akses DB</h2>
    </div>
<!-- Membuat Tabel Data -->
    <table class="table table-light table-striped-columns">
    <thead class="table-dark">
        <tr>
        <th scope="col">ProductID</th>
        <th scope="col">ProductName</th>
        <th scope="col">CategoryName</th>
        <th scope="col">CompanyName</th>
        <th scope="col">UnitPrice</th>
        </tr>
    </thead>
<!-- Menampilkan Data -->
    <tbody>
        <tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["ProductID"] . "</td>";
                echo "<td>" . $row["ProductName"] . "</td>";
                echo "<td>" . $row["CategoryName"] . "</td>";
                echo "<td>" . $row["CompanyName"] . "</td>";
                echo "<td>" . $row["UnitPrice"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>Tidak ada data</td></tr>";
        }
        ?>
        </tr>
    </tbody>
    </center>
    </table>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>

<?php
$konek->close();
?>