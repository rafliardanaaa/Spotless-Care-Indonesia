<?php
    $conn = mysqli_connect("localhost","root","","spotless-db");

    function query($query) {
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while( $row = mysqli_fetch_assoc($result) ) {
             $rows[] = $row;
        }
        return $rows;
   }

    function tambah($data) {
        global $conn;
        $order_code = htmlspecialchars($data["order_code"]);
        $address = htmlspecialchars($data["address"]);
        $duration = htmlspecialchars($data["duration"]);
        $schedule = htmlspecialchars($data["schedule"]);
        $note = htmlspecialchars($data["note"]);
        $payment = htmlspecialchars($data["payment"]);
        $city = htmlspecialchars($data["city"]);
        $distance = htmlspecialchars($data["distance"]);
        $service_price = htmlspecialchars($data["service_price"]);
        $transportation_price = htmlspecialchars($data["transportation_price"]);
        

        $query = "INSERT INTO tab_order VALUES ('$order_code','','','$address','$duration','$schedule','$note','$payment','$city','$distance','$service_price','$transportation_price')";
        mysqli_query($conn,$query);
        return mysqli_affected_rows($conn);
   }

?>