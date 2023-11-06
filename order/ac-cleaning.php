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
    <div class="px-[400px] flex justify-center items-center h-screen">
        <div class="grid grid-rows-1 grid-cols-2 gap-32">
            <div class="p-8 shadow-md rounded-xl">
                <div class="text-center font-bold text-2xl">
                    <h1>AC Cleaning</h1>
                </div>
                <div class="my-8">
                    <img class="rounded-lg" src="../img/mie.jpg" alt="">
                </div>
                <div class="text-justify">
                    <p>Layanan AC profesional yang meliputi cuci AC, tambah freon, isi freon dan cuci besar/overhaul untuk jenis AC split dan inverter. Garansi pengerjaan berlaku 7-14 hari. Alat disediakan oleh KliknClean termasuk tangga. Pelanggan diwajibkan untuk mengisi survei sebelum pemesanan. Jika kondisi AC tidak memungkinkan dilakukan layanan apapun, pelanggan akan dikenakan biaya sebesar Rp30,000</p>
                </div>
            </div>
            <div class="p-8 shadow-md rounded-xl">
                <div class="mb-3 py-1 border-b-2 border-teal-500 text-lg font-bold">
                    <p>Alamat Anda</p>
                </div>
                <div class="my-3 text-justify">
                    <p>Kp. Parung Tanjung RT04/RW12 Desa Cicadas Kecamatan Gunung Putri</p>
                </div>
                <div class="my-3 py-1 border-b-2 border-teal-500 text-lg font-bold">
                    <p>Detail Pemesanan</p>
                </div>
                <div class="my-3 flex justify-between">
                    <div class="">
                        <p>Cuci AC</p>
                    </div>
                    <div class="">
                        <a href="" class="underline underline-offset-2">Pilih</a>
                    </div>
                </div>
                <div class="my-3 flex justify-between">
                    <div class="">
                        <p>Cuci AC Inverter</p>
                    </div>
                    <div class="">
                        <a href="" class="underline underline-offset-2">Pilih</a>
                    </div>
                </div>
                <div class="my-3 flex justify-between">
                    <div class="">
                        <p>Overhaul AC</p>
                    </div>
                    <div class="">
                        <a href="" class="underline underline-offset-2">Pilih</a>
                    </div>
                </div>
                <div class="my-3 flex justify-between">
                    <div class="">
                        <p>Tambah Freon</p>
                    </div>
                    <div class="">
                        <a href="" class="underline underline-offset-2">Pilih</a>
                    </div>
                </div>
                <div class="my-3 flex justify-between">
                    <div class="">
                        <p>Isi Ulang</p>
                    </div>
                    <div class="">
                        <a href="" class="underline underline-offset-2">Pilih</a>
                    </div>
                </div>
                <div class="my-3 flex justify-between">
                    <div class="">
                        <p>Keluhan AC</p>
                    </div>
                    <div class="">
                        <a href="" class="underline underline-offset-2">Pilih</a>
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
                    </script><div class="my-3 py-1 border-b-2 border-teal-500 text-lg font-bold">
                    <p>Ringkasan Pemesanan</p>
                </div>
                <div class="grid grid-rows-1 grid-cols-2">
                    <div class="">
                        <p class="my-3">Jenis Pemesanan</p>
                        <p>Jadwal Pengerjaan</p>
                        <p class="my-3">Catatan</p>
                        <p>Metode Pembayaran</p>
                    </div>
                    <div class="">
                        <p class="my-3">Cuci AC (Samsung)</p>
                        <p>30/10/2023</p>
                        <p class="my-3">Tidak ada</p>
                        <p>BCA</p>
                    </div>
                </div>
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