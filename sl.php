<?php


    include 'connection/c-order.php';

    $kode_barang = query("SELECT * FROM tab_order");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="/dist/output.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.7/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <title>Spotless & Care Indonesia</title>

    <style>
    /* Gaya CSS untuk pop-up */
    .popup {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.7);
    }
    .popup-content {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background: white;
      padding: 20px;
    }
  </style>
</head>

<body>
  <?php
    include "../navigation/nav-bar.php";
  ?>

  <div class="flex justify-center items-center h-screen">
    <div class="px-64">
      <div class="grid grid-1 grid-cols-4 gap-8">
        <div class="w-72 p-4 text-justify shadow-lg rounded-lg">
          <div class="mt-4">
            <h1 class="text-center text-xl font-bold">General Cleaning</h1>
          </div>
          <div class="my-8">
            <img class="user-drag-none user-select-none rounded-md" src="../property/mie.jpg" alt="">
          </div>
          <div class="line-clamp-auto">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempora laboriosam cum tempore nobis eum neque perspiciatis ipsum et, ipsa inventore velit amet earum veniam, adipisci cupiditate perferendis sunt reprehenderit omnis!</p>
          </div>
          <div class="mt-6">
            <a href="../order/general-cleaning.php">
              <div class="bg-teal-500 text-white p-1 text-center rounded-md">Pesan</div>
            </a>
          </div>
        </div>

        <div class="w-72 p-4 text-justify shadow-lg rounded-lg">
          <div class="mt-4">
            <h1 class="text-center text-xl font-bold">Deep Cleaning</h1>
          </div>
          <div class="my-8">
            <img class="rounded-md" src="../property/mie.jpg" alt="">
          </div>
          <div class="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere dignissimos incidunt provident quidem nulla minus tempore! Placeat tempore voluptatum, dolores numquam vel quod doloremque, reiciendis molestiae repellat aliquam unde a.</p>
          </div>
          <div class="mt-6">
            <a href="">
              <div class="bg-teal-500 text-white p-1 text-center rounded-md">Pesan</div>
            </a>
          </div>
        </div>

        <div class="w-72 p-4 text-justify shadow-lg rounded-lg">
          <div class="mt-4">
            <h1 class="text-center text-xl font-bold">Hydro Cleaning</h1>
          </div>
          <div class="my-8">
            <img class="rounded-md" src="../property/mie.jpg" alt="">
          </div>
          <div class="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, quos vero est ab quibusdam quod explicabo eos voluptatibus cum in officia non veniam beatae nobis eaque porro eius, repellendus doloribus?</p>
          </div>
          <div class="mt-6">
            <a href="">
              <div class="bg-teal-500 text-white p-1 text-center rounded-md">Pesan</div>
            </a>
          </div>
        </div>

        <div class="w-72 p-4 text-justify shadow-lg rounded-lg">
          <div class="mt-4">
            <h1 class="text-center text-xl font-bold">Layanan AC</h1>
          </div>
          <div class="my-8">
            <img class="rounded-md" src="../property/mie.jpg" alt="">
          </div>
          <div class="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore sequi, hic ad neque eligendi perferendis aliquid facere deleniti consectetur illo amet provident deserunt accusantium libero harum pariatur fugiat eum nemo.</p>
          </div>
          <div class="mt-6">
            <a href="">
              <div class="bg-teal-500 text-white p-1 text-center rounded-md">Pesan</div>
            </a>
          </div>
        </div>

      </div>
    </div>
  </div>
    




</body>
</html>