<?php
    session_start();

    if (isset($_SESSION['webUsers'])) {
        header("location:../index.php");
    }

    include "connect.php";

    if( isset($_POST["register"]) ) {
        if( tambah($_POST) > 0 ) {
            echo "
                <script>
                alert('data berhasil ditambahkan!');
                document.location.href = 'customer/register.php';
                </script>
            ";
        } else {
            echo "
                <script>
                alert('data gagal ditambahkan!');
                document.location.href = '';
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
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="/dist/output.css" rel="stylesheet">
    <title>Spotless & Care Indonesia</title>
    <style>
        @keyframes bounce {
        0%, 20%, 50%, 80%, 100% {
            transform: translateY(0);
        }
        40% {
            transform: translateY(-30px);
        }
        60% {
            transform: translateY(-15px);
        }
        }

        .bounce {
            animation: bounce 2.4s infinite;
        }

        .test {
            div::before {  
                transform: scaleX(0);
                transform-origin: bottom right;
            }

            div:hover::before {
                transform: scaleX(1);
            transform-origin: bottom left;
            }
        }

            

    
    </style>
</head>

<body>
    <div class="flex justify-center items-center h-screen" id="tampilan-awal">
        <div class="bg-white shadow-md flex rounded-2xl ">
            <div class="bg-gradient-to-tl from-teal-500 to-teal-400 text-white w-60 m-4 p-6 rounded-xl">
                <img class="mx-auto mt-10 w-1/2 bounce" src="img/home.png" alt="">
                <h1 class="my-8 text-center text-3xl font-bold">Sign In</h1>
                <div class="bg-white/20 mt-48 px-4 py-2 text-center shadow-sm rounded-lg">
                    <p class="text-sm font-light">Tidak memiliki akun?</p>
                    <a class="text-sm font-semibold" href="#" id="tombol-ubah">Sign Up</a>
                </div>
            </div>
            <div class="bg-white p-8 rounded-2xl">
                <form action="" method="POST">
                    <div class="pt-2 mb-2">
                        <h1 class="text-3xl font-bold">Selamat Datang</h1>
                        <p class="mt-2">Hubungi kami sebagai solusi dari masalah anda!</p>
                        <label class="mt-16 mb-4  inline-block" for="phone">Silahkan masukkan nomor HP anda</label>
                        <input class="border-teal-500 border-b-2 w-full px-2 py-1 focus:border-transparent" type="text" name="phone" id="phone" required autocomplete="off">
                        <p class="mt-2 italic text-sm">e,g: 081385703584</p>
                    </div>
                    <script>
                        viewNotification();

                        function viewNotification() {
                            var notification = document.getElementById("notification");
                            notification.style.display = "block";
                        }

                        function closeNotification() {
                            var notification = document.getElementById("notification");
                            notification.style.display = "none";
                        }
                    </script>
                    <div id="notification" class="bg-red-100 px-4 py-3 border border-red-500 text-red-700 relative rounded hidden">
                        <strong class="font-bold">Maaf!</strong>
                        <span class="block sm:inline">Nomor telepon tidak terdaftar.</span>
                        <span class="cursor-pointer absolute top-0 bottom-0 right-0 px-4 py-3" onclick="closeNotification()">
                        <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                        </span>
                    </div>
                    <?php
                        if (isset($_POST['login'])) {
                            $phone = $_POST['phone'];
                            $qry = mysqli_query($conn,"SELECT * FROM tab_customer WHERE phone = '$phone'");
                            $check = mysqli_num_rows($qry);
                            if ($check===1) {
                                $_SESSION['webUsers']=$phone;
                                header ("location:../index.php");
                                exit;
                            } else {
                                echo '<script>viewNotification();</script>';
                            } 
                        }
                    ?>
                    <button class="bg-teal-500 text-white mt-32 py-2 w-full rounded-lg" type="submit" name="login">Masuk</button>
                </form>
            </div>
        </div>
    </div>

    <div class="hidden" id="tampilan-ubah">
        <div class="flex justify-center items-center h-screen" id="tampilan-awal">
            <div class="bg-white shadow-lg flex rounded-2xl ">
                <form action="customer/register.php" method="POST">
                    <div class="bg-white w p-8">
                        <div class="pt-2 mb-2">
                            <h1 class="text-3xl font-bold">Selamat Datang</h1>
                            <p class="mt-2">Ayo gabung bagian dari kami!</p>
                            <input type="hidden" name="user_id" value="<?= $kode["user_id"] ?>">
                            <p class="mt-16 mb-4 inline-block" for="phone">Silahkan masukkan nomor HP anda</p>
                            <input class="border-teal-500 border-b-2 w-full px-2 py-1" type="text" name="phone" id="phone" required autocomplete="off">
                            <p class="mt-2 italic text-sm">e,g: 081385703584</p>
                        </div>
                        <button class="bg-teal-500 text-white mt-44 py-2 w-full rounded-lg" type="submit" name="register">Daftar</button>
                    </div>
                </form> 
                <div class="bg-gradient-to-tr from-teal-500 to-teal-400 text-white w-60 m-4 p-6 rounded-xl">
                    <img class="mx-auto mt-10 w-1/2 bounce" src="img/home.png" alt="">
                    <h1 class="my-8 text-center text-3xl font-bold">Sign Up</h1>
                    <div class="bg-white/10 mt-48 px-4 py-2 text-center shadow-sm rounded-lg hover:bg-sky-500 test">
                        <p class="text-sm font-light">Sudah punya akun?</p>
                        <a class="text-sm font-semibold" href="#" id="tombol-kembali">Sign In</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Tangani klik tombol "Ubah Tampilan"
        document.getElementById("tombol-ubah").addEventListener("click", function (event) {
            event.preventDefault();

            // Sembunyikan tampilan awal dan tampilkan tampilan yang diubah
            document.getElementById("tampilan-awal").classList.add("hidden");
            document.getElementById("tampilan-ubah").classList.remove("hidden");
        });

        // Tangani klik tombol "Kembali ke Tampilan Awal"
        document.getElementById("tombol-kembali").addEventListener("click", function (event) {
            event.preventDefault();

            // Sembunyikan tampilan yang diubah dan tampilkan tampilan awal
            document.getElementById("tampilan-ubah").classList.add("hidden");
            document.getElementById("tampilan-awal").classList.remove("hidden");
        });
    </script>


</body>
</html>