<?php
    session_start();

    if(!isset($_SESSION['webUsers'])) {
        header("location:../menu.php");
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
</head>

<body>
    <div class="px-64 flex justify-center items-center h-screen">
        <div class="">
            <div class="grid grid-rows-1 grid-cols-2 gap-20">
                <div class="p-4 shadow-lg rounded-lg">
                    <div class="">
                        <a href="deep-cleaning/toilet.php">
                            <img class="rounded-md" src="../img/mie.jpg" alt="">
                        </a>
                    </div>
                    <div class="mt-4">
                        <p>*Hanya survey tidak dilakukan pengerjaan</p>
                    </div>
                </div>
                <div class="p-4 shadow-lg rounded-lg">
                    <div class="">
                        <a href="deep-cleaning/survey.php">
                            <img class="rounded-md" src="../img/mie.jpg" alt="">
                        </a>
                    </div>
                    <div class="mt-4">
                        <p>*Hanya survey tidak dilakukan pengerjaan</p>
                    </div>
                </div>
            </div>
            <div class="absolute left-120 bottom-20 mt-64">
                <p>Copyrights © 2023 All Rights Reserved by PT. Spotless & Care Indonesia</p>
            </div>
        </div>
    </div>
    
</body>
</html>