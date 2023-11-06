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
<body class="bg-teal-100/60">
<div class="flex justify-center items-center h-screen">
        <div class="flex justify-center items-center h-screen" id="tampilan-awal">
            <div class="bg-white shadow-lg flex rounded-2xl ">
                <form action="" method="POST">
                    <div class="bg-white w p-8">
                        <div class="pt-2 mb-2 justify-items-end">
                            <h1 class="text-3xl font-bold justify-end">Selamat Datang</h1>
                            <p class="mt-2">Ayo gabung bagian dari kami!</p>
                            <label class="mt-16 mb-4  inline-block" for="phone">Nama Lengkap</label>
                            <input class="border-teal-600 border-b-2 w-full px-2 py-1" type="text" name="phone" id="phone">
                            <label class="mt-16 mb-4  inline-block" for="phone">Email Address (opsional)</label>
                            <input class="border-teal-600 border-b-2 w-full px-2 py-1" type="text" name="phone" id="phone">
                            <label class="mt-16 mb-4  inline-block" for="phone">PIN Code (opsional)</label>
                            <input class="border-teal-600 border-b-2 w-full px-2 py-1" type="text" name="phone" id="phone">
                        </div>
                        <button class="bg-teal-600 text-white mt-44 py-2 w-full rounded-lg" type="submit" name="register">Daftar</button>
                    </div>
                </form> 
                <div class="bg-gradient-to-tl from-teal-600 to-teal-500 text-white w-60 m-4 p-6 rounded-xl">
                    <img class="mx-auto mt-10 w-1/2 bounce" src="../property/home.png" alt="">
                    <h1 class="my-8 text-center text-3xl font-bold">Sign Up</h1>
                    <div class="bg-white/10 mt-48 px-4 py-2 shadow-sm rounded-lg hover:bg-sky-500 test">
                        <p class="text-sm font-light">Sudah punya akun?</p>
                        <a class="text-sm font-semibold" href="#" id="tombol-kembali">Sign In</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>