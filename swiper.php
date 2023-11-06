<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="swiper-bundle.min.css">
    <title>Document</title>
    <style>
*{
    font-family: 'Montserrat', sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body{
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
}

.slide-container{
    background-color: grey;
    padding: 40px;
    max-width: 1120px;
    width: 100%;

}

.slide-content{
    background-color: red;
    padding: 8px;
    margin: 40px;
    border-radius: 30px;
    overflow: hidden;
}

.card{
    background-color: yellow;
    width: 500px;
    border-radius: 25px;
}

.image-content,
.card-content{
    padding: 10px 14px;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.image-content{
    padding: 25px;
    position: relative;
    row-gap: 5px;
}

.overlay{
    background-color: #0099cb;
    border-radius: 25px 25px 0 25px;
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
}

.overlay::before,
.overlay::after{
    background-color: #0099cb;
    position: absolute;
    content: '';
    right: 0;
    bottom: -40px;
    height: 40px;
    width: 40px;
}

.overlay::after{
    background-color: #fff;
    border-radius: 0 25px 0 0;
}

.card-image{
    background: #f5f5f5;
    padding: 3px;
    position: relative;
    height: 150px;
    width: 150px;
    border-radius: 50%;
}

.card-image .card-img{
    height: 100%;
    width: 100%;
    object-fit: cover;
    border-radius: 50%;
    border: 4px solid #0099cb;
}

.name{
    color: #333;
    font-size: 18px;
    font-weight: 500;
}

.description{
    color: #707070;
    font-size: 14px;
    text-align: center;
}

.button{
    background-color: #999;
    color: #fff;
    border: none;
    border-radius: 6px;
    font-size: 16px;
    margin: 14px;
    padding: 8px 16px;
    cursor: pointer;
    transition: all 0.3s ease;
}

.button:hover{
    background-color: #0099cb;
}

.swiper-navBtn{
    color: #f5f5f5;
    transition: color 0.3s ease;
}

.swiper-navBtn:hover{
    color: #0099cb;
}

.swiper-navBtn::before,
.swiper-navBtn::after{
    font-size: 40px;
}

.swiper-button-next{
    right: 0;
}

.swiper-button-prev{
    left: 0;
}

.swiper-pagination-bullet{
    background-color: yellow;
    opacity: 4;
}

.swiper-pagination-bullet-active{
    background-color: red;
}



    </style>
</head>
<body>
    <div class="slide-container swiper">
        <div class="slide-content"> 
            <div class="card-wrapper swiper-wrapper">
                <div class="card swiper-slide">
                    <div class="image-content">
                        <span class="overlay"></span>

                        <div class="card-image">
                            <img src="../gambar/proyektor.jpg" alt="" class="card-img">
                        </div> 
                    </div>
                    <div class="card-content">
                        <h2 class="name">General Cleaning</h2>
                        <p class="description">p</p>
                        <a href="../pinjam siswa/ps.php ?>"><button class="button">Pinjam</button></a>
                    </div>  
                </div>       
                <div class="card swiper-slide">
                    <div class="image-content">
                        <span class="overlay"></span>
                            
                        <div class="card-image">
                            <img src="../gambar/proyektor.jpg" alt="" class="card-img">
                        </div> 
                    </div>
                        <div class="card-content">
                            <h2 class="name">Hydro Cleaning</h2>
                            <p class="description">p</p>
                            <a href="../pinjam siswa/ps.php?id_barang=<?= $row["id_barang"]; ?>"><button class="button">Pinjam</button></a>
                        </div>
                        
                </div>       

            </div>
        </div>

            <div class="swiper-button-next swiper-navBtn"></div>
            <div class="swiper-button-prev swiper-navBtn"></div>
            <div class="swiper-pagination"></div>
    </div>      

        <script src="swiper-bundle.min.js"></script>
    <script src="script.js"></script>
</body>
</html>