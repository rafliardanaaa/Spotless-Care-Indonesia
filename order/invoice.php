<?php
    session_start();

    if( !isset($_SESSION["userweb"]) ) {
        header("location:../login/login.php");
        exit;
    }

    include 'connection/connect.php';

    $result = mysqli_query($conn, "SELECT * FROM tab_order");

    

    if( isset($_POST["konfirm"]) ) {
        if( tambah($_POST) > 0 ) {
            echo "
                <script>
                alert('data berhasil ditambahkan!');
                document.location.href = '../home/home.php';
                </script>
            ";
        } else {
            echo "
                <script>
                alert('data gagal ditambahkan!');
                document.location.href = '../home/home.php';
                </script>
            ";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spotless & Care Indonesia</title>
</head>
<body>
    <form action="" method="POST">

        <input type="hidden" name="order_code" value="<?= $kode["order_code"] ?>">

        <b>Alamat</b><br>

        <label for="address">Alamat Lengkap</label><br>
        <input type="text" name="address" id="address" 
            value="<?php if (isset($_POST['invoice'])) {$address = $_POST['address'];
            echo "$address";} ?>"
            required><br>

    
        <b>Detail</b><br>

        <label for="duration">Durasi Pengerjaan</label><br>
        <input type="text" name="duration" id="duration" 
            value="<?php if (isset($_POST['invoice'])) {$duration = $_POST['duration'];
            echo "$duration";} ?>">
    
        </select><br>

        <label for="schedule">Jadwal Pengerjaan</label><br>
        <input type="date" name="schedule" id="schedule"
            value="<?php if (isset($_POST['invoice'])) {$schedule = $_POST['schedule'];
            echo "$schedule";} ?>"><br>

        <label for="note">Catatan</label><br>
        <input type="text" name="note" id="note"
            value="<?php if (isset($_POST['invoice'])) {$note = $_POST['note'];
            echo "$note";} ?>"><br>

        <label for="payment">Metode Pembayaran</label><br>
        <input type="text" name="payment" id="payment" 
            value="<?php if (isset($_POST['invoice'])) {$payment = $_POST['payment'];
            echo "$payment";} ?>"><br>

        <b>Ringkasan</b><br>

        <label for="city">Kantor Cabang</label><br>
        <input type="text" name="city" id="city" 
            value="<?php if (isset($_POST['invoice'])) {$city = $_POST['city'];
            echo "$city";} ?>"><br>

        <label for="distance">Jarak</label><br>
        <input type="text" name="distance" id="distance"
            value="<?php if (isset($_POST['invoice'])) {$distance = $_POST['distance'];
            echo "$distance";} ?>"><br>

        <b>Rincian Harga</b><br>

        <label for="service_price">Harga Pelayanan</label><br>
        <input type="text" name="service_price" id="service_price"
            value="<?php if (isset($_POST['invoice'])) {$service_price = $_POST['service_price'];
            echo "$service_price";} ?>"><br>

        <label for="transportation_price">Biaya Transportasi</label><br>
        <input type="text" name="transportation_price" id="transportation_price" 
            value="<?php if (isset($_POST['invoice'])) {$transportation_price = $_POST['transportation_price'];
            echo "$transportation_price";} ?>"><br>

        <button type="submit" name="konfirm">Konfirmasi</button>
    </form>
</body>
</html>