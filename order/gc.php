<?php
    session_start();

    if( !isset($_SESSION["userweb"]) ) {
        header("location:../menu.php");
        exit;
    }


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
    <title>Spotless & Care Indonesia</title>
</head>

<body>
    <div class="flex justify-center items-center h-screen">
        <div class="grid grid-rows-1 grid-cols-2 gap-40">
            <div class="p-10 w-[480px] shadow-xl rounded-xl">
                <div class="w-auto text-center">
                    <h1 class="font-bold text-2xl">General Cleaning</h1>
                    <img class="my-8 shadow-xl rounded-lg" src="../property/mie.jpg" alt="">
                </div>
                <div class="text-center">
                    <div class="text-justify">
                        <p>General cleaning adalah layanan bersih-bersih untuk perawatan rutin rumah, kantor, kos dan apartment. Cakupan kantor, kos dan apartment. Cakupan kerja general cleaning meliputi mengelap debu, mengepel lantai, merapikan kamar tidur dan membersihkan kamar mandi. Alat dan cairan disediakan oleh KliknClean. Estimasi pengerjaan yakni 30 menit untuk setiap ruangan.</p>
                    </div>
                    <div class="border-2 border-teal-500 mt-16 p-1 text-center rounded-lg">
                        <div class="">
                            <b>"General Cleaning Selected"</b>
                        </div>
                        <div class="">
                            <p>Ganti Layanan?</p><a href="service-list.php">Klik</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-10 w-[480px] shadow-xl rounded-xl">
                <form action="invoice.php" method="POST" name="invoice">
                    <input type="hidden" name="order_code" value="<?= $kode["order_code"] ?>">
                    <div class="py-1 border-b-2 border-teal-500">
                        <p class="font-bold">Alamat anda</p>
                    </div>
                    <div class="my-3">
                        <p class="text-justify">Kp. Parung Tanjung RT04/RW12 Desa Cicadas Kecamatan Gunung Putri</p>
                    </div>
                    <div class="py-1 border-b-2 border-teal-500">
                        <p class="font-bold">Detail pesanan</p>
                    </div>
                    <div class="flex justify-between my-3">
                        <div class="">
                            <p class="">Durasi pengerjaan</p>
                            <p id="hasil" class=""></p>
                        </div>
                        <div class="">
                            <a id="tampilkanPopup" class=" underline underline-offset-2" href="">Pilih</a>
                        </div>
                    </div>
                    <div id="popupDuration" class="popupDuration">
                        <div class="popupDuration-content">
                            <h1>Pilih Durasi Pengerjaan</h1>
                            <div id="duration" class="">
                                <a href="">
                                    <div>1 Jam</div>
                                </a>
                                <a href="">
                                    <div>2 Jam</div>
                                </a>
                                <a href="">
                                    <div>3 Jam</div>
                                </a>
                                <a href="">
                                    <div>4 Jam</div>
                                </a>
                            </div>
                            <a id="tutupPopup" href="" class="">Tutup</a>
                        </div>    
                    </div>
                    <script>
                        // Mendapatkan elemen-elemen yang diperlukan
                        var linkTampilkanPopup = document.getElementById("tampilkanPopup");
                        var linkTutupPopup = document.getElementById("tutupPopup");
                        var popupDuration = document.getElementById("popupDuration");

                        // Menampilkan pop-up ketika tautan "Pilih" ditekan
                        linkTampilkanPopup.addEventListener("click", function(a) {
                            a.preventDefault(); // Menghentikan tautan dari mengarahkan ke halaman lain
                            popupDuration.style.display = "block";
                        });

                        // Menutup pop-up ketika tautan "Tutup" ditekan
                        linkTutupPopup.addEventListener("click", function(a) {
                            a.preventDefault(); // Menghentikan tautan dari mengarahkan ke halaman lain
                            popupDuration.style.display = "none";
                        });
                    </script>

                    <div class="flex justify-between my-3">
                        <div class="">
                            <p class="">Jadwal pengerjaan</p>
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
                                var date = new Date();
                                var tdate = date.getDate();
                                var month = date.getMonth() + 1;
                                if(tdate < 10){
                                    tdate = '0' + tdate;
                                }
                                if(month < 10){
                                    month = '0' + month;
                                }
                                var year = date.getUTCFullYear();
                                var minDate = year + "-" + month + "-" + tdate;
                                document.getElementById("schedule").setAttribute('min', minDate);
                                console.log(minDate);
                            </script>
                            <a id="tutupPopup" href="" class="">Tutup</a>
                        </div>
                    </div>
                    <script>
                        // Mendapatkan elemen-elemen yang diperlukan
                        var linkViewPopupSchedule = document.getElementById("viewPopupSchedule");
                        var linkClosePopupSchedule = document.getElementById("closePopupSchedule");
                        var popupSchedule = document.getElementById("popupSchedule");

                        // Menampilkan pop-up ketika tautan "Pilih" ditekan
                        linkViewPopupSchedule.addEventListener("click", function(b) {
                            b.preventDefault(); // Menghentikan tautan dari mengarahkan ke halaman lain
                            popupSchedule.style.display = "block";
                        });

                        // Menutup pop-up ketika tautan "Tutup" ditekan
                        linkClosePopupSchedule.addEventListener("click", function(b) {
                            b.preventDefault(); // Menghentikan tautan dari mengarahkan ke halaman lain
                            popupSchedule.style.display = "none";
                        });
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
                        // Mendapatkan elemen-elemen yang diperlukan
                        var linkViewPopupNote = document.getElementById("viewPopupNote");
                        var linkClosePopupPayment = document.getElementById("closePopupNote");
                        var popupNote = document.getElementById("popupNote");

                        // Menampilkan pop-up ketika tautan "Pilih" ditekan
                        linkViewPopupNote.addEventListener("click", function(c) {
                            c.preventDefault(); // Menghentikan tautan dari mengarahkan ke halaman lain
                            popupNote.style.display = "block";
                        });

                        // Menutup pop-up ketika tautan "Tutup" ditekan
                        linkClosePopupNote.addEventListener("click", function(c) {
                            c.preventDefault(); // Menghentikan tautan dari mengarahkan ke halaman lain
                            popupNote.style.display = "none";
                        });
                    </script>

                    <div class="flex justify-between my-3">
                        <div class="">
                            <p class="">Metode pembayaran</p>
                        </div>
                        <div class="">
                            <a id="viewPopupPayment" class=" underline underline-offset-2" href="">Pilih</a>
                        </div>
                    </div>
                    <div id="popupPayment" class="popupPayment">
                        <div class="popupPayment-content">
                            <h1>Pilih Metode Pembayaran</h1>
                            <div id="payment" class="">
                                <a href="">
                                    <div>BCA</div>
                                </a>
                                <a href="">
                                    <div>OVO</div>
                                </a>
                                <a href="">
                                    <div>Dana</div>
                                </a>
                            </div>
                            <a id="closePopupPayment" href="" class="">Tutup</a>
                        </div>    
                    </div>
                    <script>
                        // Mendapatkan elemen-elemen yang diperlukan
                        var linkViewPopupPayment = document.getElementById("viewPopupPayment");
                        var linkClosePopupPayment = document.getElementById("closePopupPayment");
                        var popupPayment = document.getElementById("popupPayment");

                        // Menampilkan pop-up ketika tautan "Pilih" ditekan
                        linkViewPopupPayment.addEventListener("click", function(d) {
                            d.preventDefault(); // Menghentikan tautan dari mengarahkan ke halaman lain
                            popupPayment.style.display = "block";
                        });

                        // Menutup pop-up ketika tautan "Tutup" ditekan
                        linkClosePopupPayment.addEventListener("click", function(d) {
                            d.preventDefault(); // Menghentikan tautan dari mengarahkan ke halaman lain
                            popupPayment.style.display = "none";
                        });
                    </script>
                    

                    <div class="py-1 border-b-2 border-teal-500">
                        <p class="font-bold text">Ringkasan pemesanan</p>
                    </div>

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

<div class="py-1 border-b-2 border-teal-500">
                        <p class="font-bold text">Rincian harga</p>
                    </div>

                        <label for="duration">Durasi Pengerjaan</label>
                        <select value="duration" id="duration">
                            <option name="1-jam" id="1 Jam">1 Jam</option>
                            <option name="2-jam" id="2 Jam">2 Jam</option>
                            <option name="3-jam" id="3 Jam">3 Jam</option>
                            <option name="4-jam" id="4 Jam">4 Jam</option>
                        </select>

<label for="service_price"></label><br>
<p>Harga :<span id="harga"></span></p><br>
    <script>
        const durationSelect = document.getElementById("duration");
        const hargaSpan = document.getElementById("harga");

        durationSelect.addEventListener("change", function () {
            const selectedDuration = durationSelect.value;

            // Tentukan harga berdasarkan pilihan layanan dalam IDR
            let harga = 0;
            switch (selectedDuration) {
                case "1 Jam":
                    harga = 70000; // Harga dalam IDR
                    break;
                case "2 Jam":
                    harga = 130000; // Harga dalam IDR
                    break;
                case "3 Jam":
                    harga = 190000; // Harga dalam IDR
                    break;
                case "4 Jam":
                    harga = 250000; // Harga dalam IDR
                    break;
                default:
                    harga = 0;
            }

            // Format harga dalam mata uang Rupiah
            const formattedHarga = new Intl.NumberFormat("id-ID", {
                style: "currency",
                currency: "IDR",
            }).format(harga);

            hargaSpan.textContent = formattedHarga;
        });
    </script>
                    <div class="bg-teal-500 text-white p-1 text-center rounded-lg">
                        <a href="">
                            <div type="submit" name="invoice">Pesan Sekarang</div>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    
</body>
</html>