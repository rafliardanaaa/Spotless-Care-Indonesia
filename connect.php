<?php
    $conn = mysqli_connect("localhost","root","","spotless-db");

    function tambah($data) {
        global $conn;
        $user_id = htmlspecialchars($data["user_id"]);
        $phone = htmlspecialchars($data["phone"]);

        $query = "INSERT INTO tab_customer VALUES ('$user_id','','','','','$phone')";
        mysqli_query($conn,$query);
        return mysqli_affected_rows($conn);
   }
?>