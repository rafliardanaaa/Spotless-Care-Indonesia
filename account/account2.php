<?php
    session_start();

    if (!isset($_SESSION['webUsers'])) {
        header("location: ../menu.php");
        exit;
    }

    $webUsers = $_SESSION['webUsers'];

    include "../navigation/nav-bar.php";

    include 'connection/jv-connect.php';

?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Datepicker - Default functionality</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
</head>

<body>
    <div class="bg-teal-500 py-60">
        
    </div>
<p>Date: <input type="text" id="datepicker"></p>
 
    <p>Hai Saya <?php echo $_SESSION['webUsers']; ?></p>

    <?php
        $query = "SELECT fullname, gender, birth FROM tab_customer WHERE phone='$webUsers'";
        $result = mysqli_query($conn, $query);
        if ($result) {
            $row = mysqli_fetch_assoc($result);
            $cfullname = $row['fullname'];
            $cgender = $row['gender'];
            $cbirth = $row['birth'];
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($conn);
        }

        mysqli_close($conn);
    ?>

    <p><?php echo $cfullname; ?></p>
    <p><?php echo $cgender; ?></p>
    <p><?php echo $cbirth; ?></p>

    <script>
        // Fungsi untuk menampilkan tombol login
        function showLoginButton() {
            document.getElementById('loginButton').style.display = 'block';
        }

        // Fungsi untuk menampilkan tombol logout
        function showLogoutButton() {
            document.getElementById('logoutButton').style.display = 'block';
        }

        // Fungsi untuk menyembunyikan tombol login
        function hideLoginButton() {
            document.getElementById('loginButton').style.display = 'none';
        }

        // Fungsi untuk menyembunyikan tombol logout
        function hideLogoutButton() {
            document.getElementById('logoutButton').style.display = 'none';
        }

        // Logika untuk menentukan apakah user sudah login atau belum
        // Anda dapat mengganti logika ini sesuai dengan kebutuhan Anda
        const userIsLoggedIn = <?php $_SESSION['webUsers']; ?>;

        // Menerapkan logika berdasarkan status login
        if (userIsLoggedIn) {
            showLogoutButton();
            hideLoginButton();
        } else {
            showLoginButton();
            hideLogoutButton();
        }
    </script>

</body>
</html>