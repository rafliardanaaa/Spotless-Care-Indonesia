<?php
    session_start();

    if(!isset($_SESSION['webUsers'])) {
        header("location:../menu.php");
    }

    $webUsers = $_SESSION['webUsers'];

    require 'connection/connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="../dist/output.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr@4.6.9/dist/flatpickr.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/main.js"></script>
    <title>Spotless & Care Indonesia</title>
</head>

<body>
    <div class="px-[400px] flex justify-center items-center h-screen">
        <div class="grid grid-rows-1 grid-cols-2 gap-32">
            <div class="p-8 shadow-md rounded-xl relative">
                <div class="text-center font-bold text-2xl">
                    <h1>Survey Deep Toilet</h1>
                </div>
                <div class="my-8">
                    <img class="rounded-lg" src="../../img/mie.jpg" alt="">
                </div>
                <div class="text-justify">
                    <p>Layanan pembersihan secara detail dan menyeluruh untuk pasca renovasi, banjir atau sudah lama tidak dihuni dengan masalah seperti noda kerak, noda kekuningan dan bekas jamuran. Pengerjaan deep cleaning terhitung per m2 dan harus dilakukan survei terlebih dahulu. Khusus untuk deep cleaning toilet, hanya perlu mengirimkan foto kondisi toilet.</p>
                </div>
                <div class="border-2 p-2 border-teal-500 text-center rounded-lg w-[432px] absolute bottom-8">
                    <div class="">
                        <p><b>"Survey Deep Toilet Selected"</b></p>
                    </div>
                    <div class="flex text-center justify-center">
                        <p class="mr-1">Ganti Layanan?</p>
                        <a href="../service-list.php" class="text-teal-500">Klik</a>
                    </div>
                </div>
            </div>
            <?php
                $query = "SELECT fullname, gender, birth, email, address FROM tab_customer WHERE phone='$webUsers'";
                $result = mysqli_query($conn, $query);
                if ($result) {
                    $row = mysqli_fetch_assoc($result);
                    $cfullname = $row['fullname'];
                    $cgender = $row['gender'];
                    $cbirth = $row['birth'];
                    $cemail = $row['email'];
                    $caddress = $row['address'];
                } else {
                    echo "Error: " . $query . "<br>" . mysqli_error($conn);
                }

                mysqli_close($conn);
            ?>
            <div class="p-8 shadow-md rounded-xl">
                <div class="mb-3 py-1 border-b-2 border-teal-500 text-lg font-bold">
                    <p>Alamat Anda</p>
                </div>
                <div class="my-3 text-justify">
                    <p><?php echo $caddress; ?></p>
                </div>
                <div class="my-3 py-1 border-b-2 border-teal-500 text-lg font-bold">
                    <p>Detail Pemesanan</p>
                </div>
                <div class="my-3 flex justify-between">
                    <div class="">
                        <p class="">Paket Layanan</p>
                        <p id="hasil" class=""></p>
                    </div>
                    <div class="">
                        <a id="tampilkanPopup" class=" underline underline-offset-2" href="">Pilih</a>
                    </div>
                </div>
                <div class="my-3 flex justify-between">
                    <div class="">
                        <p class="">Jadwal Survei</p>
                    </div>
                    <div class="">
                        <a id="viewPopupSchedule" class=" underline underline-offset-2" href="">Pilih</a>
                    </div>
                </div>
                <div id="popupSchedule" class="popupSchedule">
                    <div class="popupSchedule-content">
                        <h1>Pilih Tanggal Booking</h1>
                        <input type="date" name="schedule" id="schedule"  min="2023-10-20"><br>
                        <script>
                           datePicker();
                        </script>
                        <a id="tutupPopup" href="" class="">Tutup</a>
                    </div>
                </div>
                    <script>
                        schedule();
                    </script>
                <div class="my-3">
                    <div class="my-3">
                        <p>Kondisi Toilet Saat Ini</p>
                    </div>
                    <div class="text-center">
                        <a href="">
                            <div class="bg-teal-500 text-white mb-6 p-1 rounded-md">Upload foto di sini</div>
                        </a>
                    </div>
                </div>
                <div class="my-3 py-1 border-b-2 border-teal-500 text-lg font-bold">
                    <p>Ringkasan Pemesanan</p>
                </div>
                <div class="grid grid-rows-1 grid-cols-2">
                    <div class="">
                        <p>Jenis Paket</p>
                        <p class="my-3">Jadwal Survei</p>
                    </div>
                    <div class="">
                        <p>Survey Deep Toilet</p>
                        <p class="my-3">30/10/2023</p>
                    </div>
                </div>
                <?php
                    payment();
                ?>
                <div class="my-3 py-1 border-b-2 border-teal-500 text-lg font-bold">
                    <p>Rincian Harga</p>
                </div>
                <div class="grid grid-rows-1 grid-cols-2">
                    <div class="">
                        <p>Harga Layanan</p>
                        <p class="my-3">Biaya Transportasi</p>
                    </div>
                    <div class="">
                        <p>Rp. 0</p>
                        <p class="my-3">Rp. 0</p>
                    </div>
                </div>
                <div class="bg-teal-500 text-white my-3 p-1 text-center rounded-lg">
                    <a href="">
                        <div type="submit" name="invoice">Pesan Sekarang</div>
                    </a>
                </div>
                <div class="text-justify text-sm">
                    <p>*Harga tergantung dengan kondisi toilet yang akan dibersihkan</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>