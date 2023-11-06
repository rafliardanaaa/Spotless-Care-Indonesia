<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
.notifikasi {
  background-color: #ff0000; /* Warna latar belakang merah */
  color: #fff; /* Warna teks putih */
  padding: 10px;
  text-align: center;
  border-radius: 5px;
  margin: 10px 0;
  position: relative;
}

.tutup {
  position: absolute;
  top: 5px;
  right: 5px;
  cursor: pointer;
  color: #fff;
  font-weight: bold;
}

    </style>
</head>
<body>
    <input type="text" id="nomor-hp" placeholder="Masukkan nomor HP">
    <button onclick="cekNomorHP()">Login</button>
    <div id="notifikasi" class="notifikasi" style="display: none;">
        Nomor HP tidak terdaftar!
        <span class="tutup" onclick="tutupNotifikasi()">&times;</span>
    </div>
    <script>
        function cekNomorHP() {
        var nomorHP = document.getElementById("nomor-hp").value;

        // Gantilah ini dengan logika Anda untuk memeriksa nomor HP
        if (nomorHP !== "nomor_terdaftar") {
        tampilkanNotifikasi();
        }
    }

    function tampilkanNotifikasi() {
        var notifikasi = document.getElementById("notifikasi");
        notifikasi.style.display = "block";
    }

    function tutupNotifikasi() {
        var notifikasi = document.getElementById("notifikasi");
        notifikasi.style.display = "none";
    }

</script>
</body>
</html>

.notifikasi {
    display: none;
  background-color: #ff0000; /* Warna latar belakang merah */
  color: #fff; /* Warna teks putih */
  padding: 10px;
  text-align: center;
  border-radius: 5px;
  margin: 10px 0;
  position: relative;
}

.tutup {
  position: absolute;
  top: 5px;
  right: 5px;
  cursor: pointer;
  color: #fff;
  font-weight: bold;
}