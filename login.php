<?php
    session_start();

    if( isset($_SESSION['userweb']) ) {
        header("location:../../index.php");
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
    <div class="my-auto">
        <div class=" p-20 grid grid-rows-1 grid-cols-2 bg-blue-400">
            <div class="">
                <h1 class="text-2xl text-center">Selamat Datang</h1>
            </div>
         
            <div>
                <div class="bg-white p-8 rounded shadow-md w-80">
                <h2 class="text-2xl font-semibold">Login</h2>
                <p class="text-xs  mb-6">Masukkan nomor HP anda</p>

                <form action="" method="POST">
                    <div class="mb-4">
                        <label for="phone" class="block text-sm font-medium text-gray-600">Nomor Telepon</label>
                        <input type="phone" id="phone" name="phone" class="w-full p-2 border border-gray-300 rounded">
                    </div>

                    <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded hover:bg-blue-600 transition duration-300">Login</button>
                </form>
            </div>
        </div>
    </div>

    </div>
    <form action="" method="POST">
        <b>Nomor Telepon</b><br>
        <input type="text" name="phone" id="phone" required>

        <button type="submit" name="login">Login</button>

        <?php
        if (isset($_POST['login'])) {
            $phone = $_POST['phone'];
            $qry = mysqli_query($conn,"SELECT * FROM tab_customer WHERE phone = '$phone'");
            $cek = mysqli_num_rows($qry);
            if ($cek===1) {
                $_SESSION['userweb']=$phone;
                header ("location:../index.php");
                exit;
            } else {
                header ("location:register.php");
                }
            }
        ?>
    </form>
</body>
</html>