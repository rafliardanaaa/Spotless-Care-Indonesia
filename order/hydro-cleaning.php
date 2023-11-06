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
                    <h1>Hydro Cleaning</h1>
                </div>
                <div class="my-8">
                    <img class="rounded-lg" src="../img/mie.jpg" alt="">
                </div>
                <div class="text-justify">
                    <p>Layanan vakum tungau yang bersifat kering, tanpa kimia dengan daya hisap sebesar 26,300 RPM untuk menyedot debu dan tungau. Minimal pemesanan Rp. 200,000. Tidak dapat mengangkat noda.</p>
                </div>
                <div class="border-2 p-2 border-teal-500 text-center rounded-lg w-[432px] absolute bottom-8">
                    <div class="">
                        <p><b>"Hydro Cleaning Selected"</b></p>
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
                    <p><?php echo $caddress; ?></p>
                </div>
                <div class="my-3 py-1 border-b-2 border-teal-500 text-lg font-bold">
                    <p>Detail Pemesanan</p>
                </div>
                <div class="my-3 flex justify-between">
                    <div class="">
                        <p>Daftar Item</p>
                    </div>
                    <div class="">
                        <a  class="underline underline-offset-2" href="">Pilih</a>
                    </div>
                </div>
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
                        <p class="mb-3">Jenis Item</p>
                        <p class="mb-3">Kasur Super King 2 sisi</p>
                    </div>
                    <div class="grid grid-cols-2">
                        <p>Jadwal Survei</p>
                        <p>30/10/2023</p>
                    </div>
                    <div class="grid grid-cols-2">
                        <p class="my-3">Catatan</p>                
                        <p class="my-3">Tidak ada</p>
                    </div>
                    <div class="grid grid-cols-2">
                        <p>Metode Pembayaran</p>
                        <p><span id="hasilPilihan"></p>
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
                        <p>Rp. 0</p>
                        <p class="my-3">Rp. 0</p>
                    </div>
                </div>
                <div class="bg-teal-500 text-white mt-3 p-1 text-center rounded-lg">
                    <a href="">
                        <div type="submit" name="invoice">Pesan Sekarang</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>