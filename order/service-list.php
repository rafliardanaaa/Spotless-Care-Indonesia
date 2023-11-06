<?php
    session_start();


  include "../navigation/nav-bar.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="../dist/output.css" rel="stylesheet">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <title>Spotless & Care Indonesia</title>
    <style>
        .swiper-navBtn{
            color: rgb(203 213 225);
            transition: color 0.3s ease;
        }
        .swiper-navBtn:hover{
            color: rgb(20 184 166);
        }
        .swiper-button-next{
            right: 200;
        }
        .swiper-button-prev{
            left: 200;
        }
    </style>
</head>

<body>
    
    <div class="px-[340px] flex justify-center items-center h-screen">
    <div class=" p-20 width-100% swiper">
        <div class="p-6 flex overflow-hidden slide-content">
            <div class="swiper-wrapper">
                <div class="p-8 shadow-md rounded-xl swiper-slide">
                    <div class="text-center text-2xl font-bold">
                        <h1 class="">General Cleaning</h1>
                    </div>
                    <div class="my-8">
                        <img src="../img/mie.jpg" alt="" class="rounded-lg">
                    </div>
                    <div class="text-justify">
                        <p>General cleaning adalah layanan bersih-bersih untuk perawatan rutin rumah, kantor, kos dan apartment. Cakupan kantor, kos dan apartment. Cakupan kerja general cleaning meliputi mengelap debu, mengepel lantai, merapikan kamar tidur dan membersihkan kamar mandi. Alat dan cairan disediakan oleh Spotless & Care. Estimasi pengerjaan yakni 30 menit untuk setiap ruangan.</p>
                    </div>
                    <div class="mt-10">
                        <a href="general-cleaning.php">
                            <div class="bg-teal-500 p-1 text-white text-center rounded-md">Order Now</div>
                        </a>
                    </div>
                </div>

                <div class="p-8 shadow-md rounded-lg swiper-slide min-h-fit">
                    <div class="text-center text-2xl font-bold">
                        <h1 class="">Deep Cleaning</h1>
                    </div>
                    <div class="my-8">
                        <img src="../img/mie.jpg" alt="" class="rounded-lg">
                    </div>
                    <div class="text-justify">
                        <p>Layanan pembersihan secara detail dan menyeluruh untuk pasca renovasi, banjir atau sudah lama tidak dihuni dengan masalah seperti noda kerak, noda kekuningan dan bekas jamuran. Pengerjaan deep cleaning terhitung per m2 dan harus dilakukan survei terlebih dahulu.</p>
                    </div>
                    <div class="mt-10">
                        <a href="deep-cleaning.php">
                            <div class="bg-teal-500 p-1 text-white text-center rounded-md">Order Now</div>
                        </a>
                    </div>
                </div>

                <div class="p-8 shadow-md rounded-lg swiper-slide">
                    <div class="text-center text-2xl font-bold">
                        <h1 class="">Hydro Cleaning</h1>
                    </div>
                    <div class="my-8">
                        <img src="../img/mie.jpg" alt="" class="rounded-lg">
                    </div>
                    <div class="text-justify">
                        <p>Layanan vakum tungau yang bersifat kering, tanpa kimia dengan daya hisap sebesar 26,300 RPM untuk menyedot debu dan tungau. Minimal pemesanan Rp. 200,000. Tidak dapat mengangkat noda.</p>
                    </div>
                    <div class="mt-10">
                        <a href="hydro-cleaning.php">
                            <div class="bg-teal-500 p-1 text-white text-center rounded-md">Order Now</div>
                        </a>
                    </div>
                </div>

                <div class="p-8 shadow-md rounded-lg swiper-slide">
                    <div class="text-center text-2xl font-bold">
                        <h1 class="">AC Cleaning</h1>
                    </div>
                    <div class="my-8">
                        <img src="../img/mie.jpg" alt="" class="rounded-lg">
                    </div>
                    <div class="text-justify">
                        <p>Layanan AC profesional yang meliputi cuci AC, tambah freon, isi freon dan cuci besar/overhaul untuk jenis AC split dan inverter. Garansi pengerjaan berlaku 7-14 hari. Alat disediakan oleh Spotless & Care termasuk tangga. Pelanggan diwajibkan untuk mengisi survei sebelum pemesanan. Jika kondisi AC tidak memungkinkan dilakukan layanan apapun, pelanggan akan dikenakan biaya sebesar Rp30,000</p>
                    </div>
                    <div class="mt-10">
                        <a href="ac-cleaning.php">
                            <div class="bg-teal-500 p-1 text-white text-center rounded-md">Order Now</div>
                        </a>
                    </div>
                </div>

                <div class="p-8 shadow-md rounded-lg swiper-slide">
                    <div class="text-center text-2xl font-bold">
                        <h1 class="">Sterilization Room</h1>
                    </div>
                    <div class="my-8">
                        <img src="../img/mie.jpg" alt="" class="rounded-lg">
                    </div>
                    <div class="text-justify">
                        <p>Layanan penyemprotan ruangan dengan cairan sterilisasi yang aman untuk manusia dan membantu untuk membunuh kuman dan bakteri. Spotless & Care menggunakan alat khusus ULV yang menjamin semprotan akurat, jangkauan yang jauh dan terdistribusi dengan baik.</p>
                    </div>
                    <div class="mt-10">
                        <a href="sterilization-room.php">
                            <div class="bg-teal-500 p-1 text-white text-center rounded-md">Order Now</div>
                        </a>
                    </div>
                </div>

                <div class="p-8 shadow-md rounded-lg swiper-slide">
                    <div class="text-center text-2xl font-bold">
                        <h1 class="">Wet Vacuum</h1>
                    </div>
                    <div class="my-8">
                        <img src="../img/mie.jpg" alt="" class="rounded-lg">
                    </div>
                    <div class="text-justify">
                        <p>Layanan cuci perabot dari pencucian, mengangkat noda dan debu sampai pengeringan (70% kering). Minimal pemesanan Rp.300,000. Noda tidak dapat hilang 100%, bergantung pada kondisi noda.</p>
                    </div>
                    <div class="mt-10">
                        <a href="wet-vacuum.php">
                            <div class="bg-teal-500 p-1 text-white text-center rounded-md">Order Now</div>
                        </a>
                    </div>
                </div>
            </div>  
        </div>
        
    </div>  
    <div class="swiper-button-next swiper-navBtn"></div>
    <div class="swiper-button-prev swiper-navBtn"></div>  
    </div>
    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>