<?php
    include '../navigation/nav-bar.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="../dist/output.css" rel="stylesheet">
    <title>Spotless & Care Indonesia</title>
</head>

<body class="bg-slate-100">
    <div class="p-10 flex">
        <aside class="mr-5 w-1/5">
            <div class="bg-white mb-10 px-14 py-8 shadow-md rounded-lg">
                <div class="py-2 hover:text-teal-500">
                    <a href="terms-of-services.php" class="font-semibold text-lg">
                        <div class="flex items-center">
                            <div class="mr-6">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
                                </svg>
                            </div>
                            <div class="ml-4">
                                <p>Ketentuan Layanan</p>    
                            </div>
                        </div>
                    </a>
                </div>
                <div class="py-2 hover:text-teal-500">
                    <a href="contact-us.php" class="font-semibold text-lg">
                        <div class="flex items-center">
                            <div class="mr-6">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 01-.825-.242m9.345-8.334a2.126 2.126 0 00-.476-.095 48.64 48.64 0 00-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0011.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155" />
                            </svg>
                            </div>
                            <div class="ml-4">
                                <p>Hubungi Kami</p>    
                            </div>
                        </div>
                    </a>
                </div>              
            </div>
            <div class="bg-white mt-10 px-14 py-8 shadow-md rounded-lg">
                <div class="py-2 hover:text-teal-500">
                    <a href="personal-data.php" class="font-semibold text-lg">
                        <div class="flex items-center">
                            <div class="mr-6">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                </svg>
                            </div>
                            <div class="ml-4">
                                <p>Akun Saya</p>    
                            </div>
                        </div>
                    </a>
                </div>
                <div class="py-2 hover:text-teal-500">
                    <a href="my-application.php" class="font-semibold text-lg">
                        <div class="flex items-center">
                            <div class="mr-6">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.125 2.25h-4.5c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125v-9M10.125 2.25h.375a9 9 0 019 9v.375M10.125 2.25A3.375 3.375 0 0113.5 5.625v1.5c0 .621.504 1.125 1.125 1.125h1.5a3.375 3.375 0 013.375 3.375M9 15l2.25 2.25L15 12" />
                                </svg>
                            </div>
                            <div class="ml-4">
                                <p>Riwayat Lamaran</p>    
                            </div>
                        </div>
                    </a>
                </div>
                <div class="py-2 text-teal-500">
                    <a href="" class="font-semibold text-lg">
                        <div class="flex items-center">
                            <div class="mr-6">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0118 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3l1.5 1.5 3-3.75" />
                                </svg>
                            </div>
                            <div class="ml-4">
                                <p>Riwayat Pesanan</p>    
                            </div>
                        </div>
                    </a>
                </div>
                <div class="py-2 hover:text-teal-500">
                    <a href="address-list.php" class="font-semibold text-lg">
                        <div class="flex items-center">
                            <div class="mr-6">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                                </svg>
                            </div>
                            <div class="ml-4">
                                <p>Daftar Alamat</p>    
                            </div>
                        </div>
                    </a>
                </div>
                <div class="py-2 hover:text-teal-500">
                    <a href="../logout.php" class="font-semibold text-lg">
                        <div class="flex items-center">
                            <div class="mr-6">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class=" w-6 h-6">
                                    <path fill-rule="evenodd" d="M7.5 3.75A1.5 1.5 0 006 5.25v13.5a1.5 1.5 0 001.5 1.5h6a1.5 1.5 0 001.5-1.5V15a.75.75 0 011.5 0v3.75a3 3 0 01-3 3h-6a3 3 0 01-3-3V5.25a3 3 0 013-3h6a3 3 0 013 3V9A.75.75 0 0115 9V5.25a1.5 1.5 0 00-1.5-1.5h-6zm5.03 4.72a.75.75 0 010 1.06l-1.72 1.72h10.94a.75.75 0 010 1.5H10.81l1.72 1.72a.75.75 0 11-1.06 1.06l-3-3a.75.75 0 010-1.06l3-3a.75.75 0 011.06 0z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="ml-4 font-semibold text-lg">
                                <p>Keluar</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </aside>    

        <main class="ml-5 w-4/5">
            <div class="bg-white p-8 grid grid-cols-3 gap-10 shadow-md rounded-lg">
                <div class="border-teal-500 p-4 border-2 rounded-lg">
                    <a href="">
                        <div class="flex justify-between">
                            <p class="font-semibold text-lg">General Cleaning</p>
                        </div>
                        <div class="flex justify-between my-2">
                            <p>3 Jam</p>
                            <p>Rp200.000</p>
                        </div>
                        <div class="flex justify-between">
                            <p class="text-sm">20 November 2023</p>
                            <div class="flex">
                                <p>Status: </p>
                                <p class="text-red-600 ml-1">Cancelled</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="border-teal-500 p-4 border-2 rounded-lg">
                    <a href="">
                        <div class="flex justify-between">
                            <p class="font-semibold text-lg">General Cleaning</p>
                        </div>
                        <div class="flex justify-between my-2">
                            <p>3 Jam</p>
                            <p>Rp200.000</p>
                        </div>
                        <div class="flex justify-between">
                            <p class="text-sm">20 November 2023</p>
                            <div class="flex">
                                <p>Status: </p>
                                <p class="text-red-600 ml-1">Cancelled</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="border-teal-500 p-4 border-2 rounded-lg">
                    <a href="">
                        <div class="flex justify-between">
                            <p class="font-semibold text-lg">General Cleaning</p>
                        </div>
                        <div class="flex justify-between my-2">
                            <p>3 Jam</p>
                            <p>Rp200.000</p>
                        </div>
                        <div class="flex justify-between">
                            <p class="text-sm">20 November 2023</p>
                            <div class="flex">
                                <p>Status: </p>
                                <p class="text-red-600 ml-1">Cancelled</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="border-teal-500 p-4 border-2 rounded-lg">
                    <a href="">
                        <div class="flex justify-between">
                            <p class="font-semibold text-lg">General Cleaning</p>
                        </div>
                        <div class="flex justify-between my-2">
                            <p>3 Jam</p>
                            <p>Rp200.000</p>
                        </div>
                        <div class="flex justify-between">
                            <p class="text-sm">20 November 2023</p>
                            <div class="flex">
                                <p>Status: </p>
                                <p class="text-red-600 ml-1">Cancelled</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="mt-10 flex justify-center text-sm">
                <p>©2023. PT. Spotless & Care Indonesia. All rights reserved.</p>
            </div>
        </main>
    </div>
</body>
</html>