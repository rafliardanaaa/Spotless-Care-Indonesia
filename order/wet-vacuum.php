<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spotless & Care Indonesia</title>
</head>
<body>
    <form action="" methode="POST">
        <b>Alamat</b><br>

        <label for="address">Alamat Lengkap</label><br>
        <input type="text" name="address" id="address" required><br>

        <b>Detail</b><br>

        <label for="item">Daftar Item</label><br>
        <select name="item" id="item">
            <option value="kasur-sk">Kasur Super King (200x200cm)</option>
            <option value="kasur-k">Kasur King (180x200cm)</option>
            <option value="kasur-q">Kasur Queen (160x200cm)</option>
            <option value="kasur-s">Kasur Single (120x200cm)</option>
            <option value="sofa-1">Sofa S (1 seat)</option>
            <option value="sofa-2">Sofa M (2 seat)</option>
            <option value="sofa-3">Sofa L (3 seat)</option>
            <option value="sofa-4">Sofa XL (4 seat)</option>
            <option value="sofabed">Sofabed (All Size)</option>
            <option value="karpet">Karpet (All Size)</option>
            <option value="baby-mattress">Bantal Sofa (All Size)</option>
        </select><br>

        <label for="schedule">Jadwal Pengerjaan</label><br>
        <input type="date" name="schedule" id="schedule"><br>

        <label for="note">Catatan</label><br>
        <input type="text" name="note" id="note"><br>

        <label for="payment">Metode Pembayaran</label><br>
        <select name="payment" id="payment">
            <option value="bca">BCA</option>
            <option value="dana">Dana</option>
            <option value="ovo">Ovo</option>
        </select><br>

        <b>Ringkasan</b><br>

        <label for="city">Kantor Cabang</label><br>
        <select name="city" id="city">
            <option value="Kota Jakarta">Kota Jakarta</option>
            <option value="Kota Bandung">Kota Bandung</option>
            <option value="Kota Semarang">Kota Semarang</option>
            <option value="Kota Yogyakarta">Kota Yogyakarta</option>
            <option value="Kota Surabaya">Kota Surabaya</option>
        </select><br>

        <label for="distance">Jarak</label><br>
        <input type="text" name="distance" id="distance"><br>

        <b>Rincian Harga</b><br>

        <label for="service_price">Harga Pelayanan</label><br>
        <input type="text" name="service_price" id="service_price"><br>

        <label for="transportaation_price">Biaya Transportasi</label><br>
        <input type="text" name="transportation_price" id="trasportation_price"><br>

        <button type="submit" name="order">Pesan Sekarang</button>
    </form>
</body>
</html>