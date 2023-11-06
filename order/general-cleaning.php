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
    <link rel="stylesheet" href="css/style.css">
    <script src="js/main.js"></script>
    <title>Spotless & Care Indonesia</title>
</head>

<body>
    <div class="px-[400px] flex justify-center items-center h-screen">
        <div class="grid grid-rows-1 grid-cols-2 gap-32">
            <div class="p-8 shadow-md rounded-xl relative">
                <div class="text-center font-bold text-2xl">
                    <h1>General Cleaning</h1>
                </div>
                <div class="my-8">
                    <img class="rounded-lg" src="../img/mie.jpg" alt="">
                </div>
                <div class="text-justify">
                    <p>General cleaning adalah layanan bersih-bersih untuk perawatan rutin rumah, kantor, kos dan apartment. Cakupan kantor, kos dan apartment. Cakupan kerja general cleaning meliputi mengelap debu, mengepel lantai, merapikan kamar tidur dan membersihkan kamar mandi. Alat dan cairan disediakan oleh Spotless & Care. Estimasi pengerjaan yakni 30 menit untuk setiap ruangan.</p>
                </div>
                <div class="border-2 p-2 border-teal-500 text-center rounded-lg w-[432px] absolute bottom-8">
                    <div class="">
                        <p><b>"General Cleaning Selected"</b></p>
                    </div>
                    <div class="flex text-center justify-center">
                        <p class="mr-1">Ganti Layanan?</p>
                        <a href="service-list.php" class="text-teal-500">Klik</a>
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
                    <p><?php echo $caddress ?></p>
                </div>
                <div class="my-3 py-1 border-b-2 border-teal-500 text-lg font-bold">
                    <p>Detail Pemesanan</p>
                </div>
                <div class="flex justify-between my-3">
                    <div class="">
                        <p class="">Durasi Pembersihan</p>
                        <p id="hasil" class=""></p>
                    </div>
                    <div class="">
                        <a id="viewPopupDuration" class=" underline underline-offset-2" href="">Pilih</a>
                    </div>
                </div>
                <div id="popupDuration" class="popupDuration">
                    <div class="popupDuration-content rounded-xl w-96">
                        <div class="mb-6 text-center font-bold text-lg">
                            <h1>Pilih Durasi Pembersihan</h1>
                        </div>
                        <div id="duration" class="">
                            <div class="my-3 py-1 border-b-2 border-teal-500 flex justify-between">
                                <a href="" class="durasi" value="1 Jam" durasi-layanan="1 Jam">
                                    <p class="font-bold">1 Jam</p>
                                    <p  >Rp 80.000,00</p>
                                </a>
                            </div>
                            <div class="my-3 py-1 border-b-2 border-teal-500">
                                <a href="" class="durasi" value="2 Jam" durasi-layanan="2 Jam">
                                    <p class="font-bold">2 Jam</p>
                                    <p>Rp 140.000,00</p>
                                </a>
                            </div>
                            <div class="my-3 py-1 border-b-2 border-teal-500">
                                <a href="" class="durasi" value="3 Jam" durasi-layanan="3 Jam">
                                    <p class="font-bold">3 Jam</p>
                                    <p>Rp 200.000,00</p>
                                </a>
                            </div>
                            <div class="my-3 py-1 border-b-2 border-teal-500">
                                <a href="" class="durasi" value="4 Jam" durasi-layanan="4 Jam">
                                    <p class="font-bold">4 Jam</p>
                                    <p>Rp 260.000,00</p>
                                </a>
                            </div>
                        </div>
                        <div class="mt-8 text-center text-lg font-bold">
                            <a id="closePopupDuration" href="" class="">Tutup</a>
                        </div>
                    </div>    
                </div>
                <script>
                    duration();
                </script>
                <div class="my-3 flex justify-between">
                    <div class="">
                        <p class="">Jadwal Pembersihan</p>
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
                    <div class="flex justify-between my-3">
                        <div class="">
                            <p class="">Catatan</p>
                        </div>
                        <div class="">
                            <a id="viewPopupNote" class=" underline underline-offset-2" href="">Pilih</a>
                        </div>
                    </div>
                    <div id="popupNote" class="popupNote">
                        <div class="popupNote-content">
                            <h1>Masukan Catatan</h1>
                            <input type="text">
                            <a id="closePopupNote" href="">Tutup</a> 
                        </div>
                    </div>
                    <script>
                       note();
                    </script>
                <div class="flex justify-between my-3">
                        <div class="">
                            <p class="">Metode Pembayaran</p>
                        </div>
                        <div class="">
                            <a id="viewPopupPayment" class=" underline underline-offset-2" href="">Pilih</a>
                        </div>
                    </div>
                    <div id="popupPayment" class="popupPayment">
                        <div class="popupPayment-content">
                            <h1>Pilih Metode Pembayaran</h1>
                            <div id="payment" class="">
                                <a href="" class="pilihMetode" data-metode="BCA">
                                    <div>BCA</div>
                                </a>
                                <a href="" class="pilihMetode" data-metode="OVO">
                                    <div>OVO</div>
                                </a>
                                <a href="" class="pilihMetode" data-metode="Dana">
                                    <div>Dana</div>
                                </a>
                            </div>
                            <a id="closePopupPayment" href="" class="">Tutup</a>
                        </div>    
                    </div>
                    <script>
                        payment();
                    </script>
                <div class="my-3 py-1 border-b-2 border-teal-500 text-lg font-bold">
                    <p>Ringkasan Pemesanan</p>
                </div>
                <div class="">
                    <div class="grid grid-cols-2">
                        <p>Durasi Pembersihan</p>
                        <p><span id="resultDuration"></p>
                    </div>
                    <div class="grid grid-cols-2">
                        <p class="mt-3">Jadwal Pembersihan</p>
                        <p class="mt-3">30/10/2023</p>
                    </div>
                    <div class="grid grid-cols-2">
                        <p class="mt-3">Catatan</p>
                        <p class="mt-3">Tidak ada</p>
                    </div>
                    <div class="grid grid-cols-2">
                        <p class="mt-3">Metode Pembayaran</p>
                        <p class="mt-3"><span id="hasilPilihan"></p>
                    </div>
                </div>
                <script>
                    payment();
                </script>
                <div class="my-3 py-1 border-b-2 border-teal-500 text-lg font-bold">
                    <p>Rincian Harga</p>
                </div>
                <div class="grid grid-rows-1 grid-cols-2">
                    <div class="">
                        <p>Harga Layanan</p>
                        <p class="my-3">Biaya Transportasi</p>
                    </div>
                    <div class="">
                        <p><span id="costDuration">Rp. 0</span></p>
                        <p class="my-3">Rp. 0</p> 
                    </div>
                </div>
                <script>
                    duration();
                </script>
                <div class="bg-teal-500 text-white mt-3 p-1 text-center rounded-lg">
                    <a href="">
                        <div type="submit" name="invoice">Pesan Sekarang</div>
                    </a>
                </div>
                <div class="text-justify text-sm">
            </div>
        </div>
    </div>
</body>
</html>