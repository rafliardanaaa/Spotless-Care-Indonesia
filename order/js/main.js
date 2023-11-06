function datePicker() {
    var date = new Date();
    var tdate = date.getDate();
    var month = date.getMonth() + 1;
    if(tdate < 10){
        tdate = '0' + tdate;
    }
    if(month < 10){
        month = '0' + month;
    }
    var year = date.getUTCFullYear();
    var minDate = year + "-" + month + "-" + tdate;
    document.getElementById("schedule").setAttribute('min', minDate);
    console.log(minDate);
}
function duration() {
    // Mendapatkan elemen-elemen yang diperlukan
    var viewPopupDuration = document.getElementById("viewPopupDuration");
    var closePopupDuration = document.getElementById("closePopupDuration");
    var popupDuration = document.getElementById("popupDuration");
    var resultDuration = document.getElementById("resultDuration");


    // Menampilkan pop-up ketika tautan "Pilih" ditekan
    viewPopupDuration.addEventListener("click", function(a) {
        a.preventDefault(); // Menghentikan tautan dari mengarahkan ke halaman lain
        popupDuration.style.display = "block";
    });

    // Menutup pop-up ketika tautan "Tutup" ditekan
    closePopupDuration.addEventListener("click", function(a) {
        a.preventDefault(); // Menghentikan tautan dari mengarahkan ke halaman lain
        popupDuration.style.display = "none";
    });

    var durasiTautans = document.getElementsByClassName("durasi");
    for (var i = 0; i < durasiTautans.length; i++) {
      durasiTautans[i].addEventListener("click", function(a) {
        a.preventDefault();
        var durasiPilihan = this.getAttribute("durasi-layanan");
        resultDuration.textContent = durasiPilihan;

        var harga = 0;
        if(durasiPilihan === "1 Jam") {
            harga = "80.000,00";
        } else if (durasiPilihan == "2 Jam") {
            harga = "140.000,00";
        } else if (durasiPilihan == "3 Jam") {
            harga = "200.000,00";
        } else if (durasiPilihan == "4 Jam") {
            harga = "260.000,00";
        } else if ("default") {
            harga = "0";
        }
        costDuration.textContent = "Rp. " + harga;

        popupDuration.style.display = "none"; // Menutup pop-up setelah memilih
      });
    }
}

function schedule() {
    // Mendapatkan elemen-elemen yang diperlukan
    var linkViewPopupSchedule = document.getElementById("viewPopupSchedule");
    var linkClosePopupSchedule = document.getElementById("closePopupSchedule");
    var popupSchedule = document.getElementById("popupSchedule");

    // Menampilkan pop-up ketika tautan "Pilih" ditekan
    linkViewPopupSchedule.addEventListener("click", function(b) {
        b.preventDefault(); // Menghentikan tautan dari mengarahkan ke halaman lain
        popupSchedule.style.display = "block";
    });

    // Menutup pop-up ketika tautan "Tutup" ditekan
    linkClosePopupSchedule.addEventListener("click", function(b) {
        b.preventDefault(); // Menghentikan tautan dari mengarahkan ke halaman lain
        popupSchedule.style.display = "none";
    });
}

function note() {
     // Mendapatkan elemen-elemen yang diperlukan
     var linkViewPopupNote = document.getElementById("viewPopupNote");
     var linkClosePopupNote = document.getElementById("closePopupNote");
     var popupNote = document.getElementById("popupNote");

     // Menampilkan pop-up ketika tautan "Pilih" ditekan
     linkViewPopupNote.addEventListener("click", function(c) {
         c.preventDefault(); // Menghentikan tautan dari mengarahkan ke halaman lain
         popupNote.style.display = "block";
     });

     // Menutup pop-up ketika tautan "Tutup" ditekan
     linkClosePopupNote.addEventListener("click", function(c) {
         c.preventDefault(); // Menghentikan tautan dari mengarahkan ke halaman lain
         popupNote.style.display = "none";
     });
}
function payment() {
    // Mendapatkan elemen-elemen yang diperlukan
    var linkViewPopupPayment = document.getElementById("viewPopupPayment");
    var linkClosePopupPayment = document.getElementById("closePopupPayment");
    var popupPayment = document.getElementById("popupPayment");
    var hasilPilihan = document.getElementById("hasilPilihan");

    // Menampilkan pop-up ketika tautan "Pilih" ditekan
    linkViewPopupPayment.addEventListener("click", function(d) {
        d.preventDefault(); // Menghentikan tautan dari mengarahkan ke halaman lain
        popupPayment.style.display = "block";
    });

    // Menutup pop-up ketika tautan "Tutup" ditekan
    linkClosePopupPayment.addEventListener("click", function(d) {
        d.preventDefault(); // Menghentikan tautan dari mengarahkan ke halaman lain
        popupPayment.style.display = "none";
        // hasilPilihan.textContent = ""; // Menghapus hasil pilihan saat menutup pop-up
    });

    var pilihMetodeTautans = document.getElementsByClassName("pilihMetode");
    for (var i = 0; i < pilihMetodeTautans.length; i++) {
      pilihMetodeTautans[i].addEventListener("click", function(d) {
        d.preventDefault();
        var metodePilihan = this.getAttribute("data-metode");
        hasilPilihan.textContent = metodePilihan;
        popupPayment.style.display = "none"; // Menutup pop-up setelah memilih
      });
    }
}