<?php 

//index.php

//include('database_connection.php');

?>
<!doctype html>
<html lang="en">
<head>
  <title>Covid-19 &mdash; Sistem Informasi Covid-19 Kota Malang</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">    

  <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;700;900&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="assets/fonts/icomoon/style.css">

  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/jquery-ui.css">
  <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">

  <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="assets/css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="assets/fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="assets/fonts/flaticon-covid/font/flaticon.css">

  <link rel="stylesheet" href="assets/css/aos.css">

  <link rel="stylesheet" href="assets/css/style.css">
  <link href="css/sb-admin.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.bundle.js"></script>
    
</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>


  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

     <!-- Navbar -->
    <header class="site-navbar light js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center">

          <div class="col-6 col-xl-2">
            <div class="mb-0 site-logo"><a href="index.html" class="mb-0">Covid-19</a></div>
          </div>

   
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li class="active"><a href="index.html" class="nav-link">Home</a></li>
                <li><a href="#Data" class="nav-link">Data</a></li>
                <li><a href="#Grafik" class="nav-link">Grafik</a></li>
                <li><a href="#Gejala" class="nav-link">Gejala</a></li>
                <li><a href="#Pencegahan" class="nav-link">Pencegahan</a></li>
              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3 text-black"></span></a></div>

        </div>
      </div>

    </header> <!-- end navbar-->

    <!-- Greeting -->

    <div class="hero-v1">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 mr-auto text-center text-lg-left">
            
            <h1 class="heading mb-3">SATGAS COVID-19</h1>
            <h3 >Pemerintah Kota Malang</h3>
            <h5>Layanan Hotline Satgas Covid-19 Kota Malang</h5>
            <h5 class="text-primary">(0341)392031 atau 082131933832 </h6>
           
          </div>
            
          <div class="col-lg-6">
            <figure class="illustration">
              <img src="images/mlgbg.jpg" alt="Image" class="img-fluid">
            </figure>
          </div>
          <div class="col-lg-6"></div>
        </div>
      </div>
    </div>


    <!-- MAIN -->
    <section id="Data" class="Data">
    <div class="site-section">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-lg-9 text-center mx-auto">
            <h2 class="section-heading text-dark">Data Sebaran Kasus Covid-19 Di Kota Malang</h2>
            <p><b>Update Terakhir :</b> Jumat, 9 Oktober 2020 |12.00 WIB| <b>Sumber Data:</b> Dinas Kesehatan Kota Malang </p></br>
          </div>
        </div>
        <div class="row justify-content-around">
            
            
            <div class="col-md-2 border border-primary rounded">
            <div class="data p-3">
              <span class=" pt-3"><b>Total Suspek</b></span>
              <span class="d-block number text-primary">2.517</span>
            </div>
            </div>
            
          <div class="col-md-2 border border-danger rounded">
            <div class="data  p-3">
                <span class=" pt-3"><b>Total Positif</b></span>
              <strong class="d-block number text-danger" >1.855</strong>
            </div>
          </div>
            
          <div class="col-md-2 border border-success rounded">
            <div class="data  p-3">
                <span class=" pt-3"><b>Total Sembuh</b></span>
              <strong class="d-block number text-success">1.609</strong>
            </div>
          </div>
            
         <div class="col-md-2 border border-dark rounded">
            <div class="data p-3">
                <span class=" pt-3"><b>Total Meninggal</b></span>
              <strong class="d-block number text-dark">181</strong>
            </div>
          </div>
            
       
       </div>
      </div>
    </div>

      <!-- Tabel -->
      
       <div class="site-section bg-primary-light">
      <div class="container">
        <div class="row">
          <div class="col text-center">
            <div class="section-heading text-dark">Tabel Data Sebaran Covid-19 Per Kecamatan</div>
              <p><b>Update Terakhir :</b> Jumat, 9 Oktober 2020 |12.00 WIB| <b>Sumber Data:</b> Dinas Kesehatan Kota Malang </p>
          </div>
        </div>
        <div class="row">
        <table class="table table-bordered">
 
    <thead class="align-center text-white">
    <tr>
        <td rowspan="3" class="bg-primary p-5">Kecamatan</td>
        <td colspan="7" class="text-center bg-warning">SUSPEK</td>
        <td colspan="4" class="text-center bg-danger">KONFIRMASI COVID-19</td>
    </tr>
    <tr>
        <td rowspan="2" class="bg-warning pt-4">Isolasi Rumah</td>
        <td rowspan="2" class="bg-warning pt-4">Isolasi RS</td>
        <td rowspan="2" class="bg-warning pt-4" >Discarded</td>
        <td colspan="3" class="text-center bg-warning">PROBABLE</td>
        <td rowspan="2" class="bg-warning pt-4">Total</td>
        <td rowspan="2" class="bg-danger pt-4">Dalam Pantauan</td>
        <td rowspan="2" class="bg-danger pt-4">Sembuh</td>
        <td rowspan="2" class="bg-danger pt-4">Meninggal</td>
        <td rowspan="2" class="bg-danger pt-4">Total</td>
    </tr>
    <tr>
        <td class="bg-warning">Meninggal</td>
        <td class="bg-warning">Rawat RS</td>
        <td class="bg-warning">Rawat Jalan</td>
    </tr>
    </thead>
                    <?php
    echo'';
   
while ($row = mysqli_fetch_array($query))
{
	echo '
   <tbody class="text-center">
   <tr>
        <td class="table-primary text-left">'.$row['Kecamatan'].'</td>        
        <td class="table-warning">'.$row['Isolasi_Rumah'].'</td>
        <td class="table-warning">'.$row['Isolasi_RS'].'</td>
        <td class="table-warning">'.$row['Discarded'].'</td>
        <td class="table-warning">'.$row['P_Meninggal'].'</td>
        <td class="table-warning">'.$row['P_RawatRS'].'</td>
        <td class="table-warning">'.$row['P_RawatJalan'].'</td>        
        <td class="table-warning">'.$row['S_Total'].'</td>
        <td class="table-danger">'.$row['Dalam_Pantauan'].'</td>
        <td class="table-danger">'.$row['Sembuh'].'</td>
        <td class="table-danger">'.$row['Meninggal'].'</td>
        <td class="table-danger">'.$row['C_Total'].'</td>
    </tr>
    </tbody>';
}?>

                </table> 
        </div>
      </div>
    </div>
      
        <!------------------------------------------------- Keterangan Data   ---------------------------------------->
    
      <div class="container-fluid">
          <div class="row justify-content-center">
           
               <div class="col bg-primary text-white rounded">
                   <h3>Keterangan Data</h3>
                   <span><b>SUSPEK</b></span>
                   <p>Orang dengan Infeksi Saluran Pernapasan Akut (ISPA) DAN pada 14 hari terakhir sebelum timbul gejala memiliki riwayat perjalanan atau tinggal di negara/wilayah Indonesia yang melaporkan transmisi lokal. Orang dengan salah satu gejala/tanda ISPA DAN pada 14 hari terakhir sebelum timbul gejala memiliki riwayat kontak dengan kasus konfirmasi/probable COVID-19.</p>
                   <span><b>PROBABLE</b></span>
                   <P>Kasus suspek dengan ISPA Berat/ARDS/meninggal dengan gambaran klinis yang meyakinkan COVID-19 DAN belum ada hasil pemeriksaaan laboraturium RT-PCR.</P>
                   <span><b>DISCARDED</b></span>
                   <p>Pasien yang hasil pemeriksaan RT-PCR 2 kali negatif selama 2 hari berturut-turut dengan selang waktu 24 jam. Seseorang yang berstatus Kontak Erat dan sudah menyelesaikan masa karantina selama 14 hari.</p>
                   <span><b>KONFIRMASI</b></span>
                   <p>Seseorang yang dinyatakan positif terinfeksi virus COVID-19 yang dibuktikan dengan pemeriksaan laboraturium RT-PCR.</p>          
          </div>
              </div>

      </div>  
    
    <!------------------------------------------------- Charts Page    ---------------------------------------->
    
    <section id="Grafik" class="Grafik">   
    <div class="container-fluid bg-primary-light mb-4">
     <div class="row mb-3">
          <div class="col text-center mx-auto mt-5">
            <h2 class="section-heading text-dark">Grafik Sebaran Kasus Covid-19 Di Kota Malang</h2></br>
            <div class="row justify-content-around">
            
            <div class="col-8">
            <p><b>Grafik Berdasarkan Usia</b></p>
            </div>
            <div class="col-4">
            <p><b>Grafik Berdasarkan Jenis Kelamin</b></p>
            </div>
            
        </div>
          </div>
        </div>
        <div class="row justify-content-around bg-white">
         <div class="col-sm-8">
          <div class="row">
            <div class="col-sm-5">
            <canvas id="LeftChart" width="auto" height="300"></canvas>
            </div>
            <div class="col-sm-2">
                <div class="row-sm-2 text-center">Usia</div>
                <div class="row-sm-2 text-center py-3">>70 Tahun</div>
                <div class="row-sm-2 text-center py-3">50-69 Tahun</div>
                <div class="row-sm-2 text-center py-3">30-49 Tahun</div>
                <div class="row-sm-2 text-center py-3">10-29 Tahun</div>
                <div class="row-sm-2 text-center py-3">0-9 Tahun</div>
                
                         
            </div>
            <div class="col-sm-5">
            <canvas id="RightChart" width="auto" height="300"></canvas>
            </div>
          </div>
         </div>
                
            <div class="col-sm-3">
            <canvas id="pieChart" width="auto" height="300"></canvas>
            </div>
        </div>
      
    </div>
      
    <!-- Gejala Gejala-->
      <section id="Gejala" class="Gejala">
     <div class="site-section bg-primary-light">
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-7 mx-auto text-center">
            <h2 class="mb-4 section-heading text-dark">Gejala-gejala COVID-19</h2>
            <p>Untuk mengetahui lebih dini tertularnya COVID-19, terdapat beberapa gejala-gejala awal yang biasanya terjadi apabila tertular COVID-19.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 mb-4">
            <div class="symptom d-flex">
              <div class="img">
                <img src="images/tenggorokan.png" alt="Image" class="img-fluid">
              </div>
              <div class="text">
                <h3>Sakit Tenggorokan</h3>
                <p>Infeksi COVID-19 akan melalui jalur pernafasan sehingga dapat mengakibatkan radang pada tenggorokan dan rasa nyeri.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-4">
            <div class="symptom d-flex">
              <div class="img">
                <img src="images/demam.png" alt="Image" class="img-fluid">
              </div>
              <div class="text">
                <h3>Demam</h3>
                <p>Demam sering terjadi sebagai gejala awal dari tertularnya COVID-19, demam yang terjadi biasanya mencapai suhu 38 derajat celcius keatas.</p>
              </div>
            </div>
          </div>
             <div class="col-lg-4 mb-4">
            <div class="symptom d-flex">
              <div class="img">
                <img src="images/batuk.png" alt="Image" class="img-fluid">
              </div>
              <div class="text">
                <h3>Batuk Kering</h3>
                <p>Batuk Kering tidak beriak dan berulang ulang merupakan tanda infeksi aktif di paru-paru, yang mungkin bisa disebabkan karena COVID-19.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-4">
            <div class="symptom d-flex">
              <div class="img">
                <img src="images/sesaknafas.png" alt="Image" class="img-fluid">
              </div>
              <div class="text">
                <h3>Sesak Nafas</h3>
                <p>Apabila COVID-19 berkembang dengan cepat dan besar di paru-paru, fungsi paru akan menurun sehingga terjadi sesak nafas</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-4">
            <div class="symptom d-flex">
              <div class="img">
                <img src="images/sakitkepala.png" alt="Image" class="img-fluid">
              </div>
              <div class="text">
                <h3>Sakit Kepala</h3>
                <p>Dengan adanya demam yang tinggi dan imun tubuh yang menurun, COVID-19 seringkali diikuti dengan gejala sakit kepala atau pusing.</p>
              </div>
            </div>
          </div>
             <div class="col-lg-4 mb-4">
            <div class="symptom d-flex">
              <div class="img">
                <img src="images/lemas.png" alt="Image" class="img-fluid">
              </div>
              <div class="text">
                <h3>Lemas</h3>
                <p>Infeksi COVID-19 yang telah menyebar ke seluruh tubuh akan menghabiskan energi yang banyak sehingga seringkali dapat mengakibatkan lemas.</p>
              </div>
            </div>
          </div>
        </div>

        <div class="row justify-content-md-center">
          <div class="col-lg-10">
            <div class="note row">

              <div class="col-lg-8 mb-4 mb-lg-0"><strong>Stay at home and call your doctor:</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, eaque.</div>
              <div class="col-lg-4 text-lg-right">
                <a href="#" class="btn btn-primary"><span class="icon-phone mr-2 mt-3"></span>Help line</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>  

    <div class="site-section bg-success">
      <div class="container bg-warning">
        <div class="row mb-5 bg-info">
          <div class="col-lg-7 mx-auto text-center">
            <span class="subheading">What you need to do</span>
            <h2 class="mb-4 section-heading">How To Protect Yourself</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex officia quas, modi sit eligendi numquam!</p>
          </div>
        </div>
        <div class="row bg-light">
          <div class="col-lg-6 bg-danger">
            <div class="row mt-5 pt-5">
              <div class="col-lg-6 do ">
                <h3>You should do</h3>
                <ul class="list-unstyled check">
                  <li>Stay at home</li>
                  <li>Wear mask</li>
                  <li>Use Sanitizer</li>
                  <li>Disinfect your home</li>
                  <li>Wash your hands</li>
                  <li>Frequent self-isolation</li>
                </ul>
              </div>
              <div class="col-lg-6 dont ">
                <h3>You should avoid</h3>
                <ul class="list-unstyled cross">
                  <li>Avoid infected people</li>
                  <li>Avoid animals</li>
                  <li>Avoid handshaking</li>
                  <li>Aviod infected surfaces</li>
                  <li>Don't touch your face</li>
                  <li>Avoid droplets</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <img src="images/protect.png" alt="Image" class="img-fluid">
          </div>
        </div>
      </div>
    </div>





    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-7 mx-auto text-center">
            <h2 class="mb-4 section-heading">News &amp; Articles</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex officia quas, modi sit eligendi numquam!</p>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-4">
            <div class="post-entry">
              <a href="#" class="thumb">
                <span class="date">30 Jul, 2020</span>
                <img src="images/hero_1.jpg" alt="Image" class="img-fluid">
              </a>
              <div class="post-meta text-center">
                <a href="">
                  <span class="icon-user"></span>
                  <span>Admin</span>
                </a>
                <a href="#">
                  <span class="icon-comment"></span>
                  <span>3 Comments</span>
                </a>
              </div>
              <h3><a href="#">How Coronavirus Very Contigous</a></h3>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="post-entry">
              <a href="#" class="thumb">
                <span class="date">30 Jul, 2020</span>
                <img src="images/hero_2.jpg" alt="Image" class="img-fluid">
              </a>
              <div class="post-meta text-center">
                <a href="">
                  <span class="icon-user"></span>
                  <span>Admin</span>
                </a>
                <a href="#">
                  <span class="icon-comment"></span>
                  <span>3 Comments</span>
                </a>
              </div>
              <h3><a href="#">How Coronavirus Very Contigous</a></h3>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="post-entry">
              <a href="#" class="thumb">
                <span class="date">30 Jul, 2020</span>
                <img src="images/hero_1.jpg" alt="Image" class="img-fluid">
              </a>
              <div class="post-meta text-center">
                <a href="">
                  <span class="icon-user"></span>
                  <span>Admin</span>
                </a>
                <a href="#">
                  <span class="icon-comment"></span>
                  <span>3 Comments</span>
                </a>
              </div>
              <h3><a href="#">How Coronavirus Very Contigous</a></h3>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <h2 class="footer-heading mb-4">About</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi cumque tenetur inventore veniam, hic vel ipsa necessitatibus ducimus architecto fugiat!</p>
            <div class="my-5">
              <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
              <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
              <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
              <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
            </div>
          </div>
          <div class="col-lg-8">
            <div class="row">
              <div class="col-lg-4">
                <h2 class="footer-heading mb-4">Quick Links</h2>
                <ul class="list-unstyled">
                  <li><a href="#">Symptoms</a></li>
                  <li><a href="#">Prevention</a></li>
                  <li><a href="#">FAQs</a></li>
                  <li><a href="#">About Coronavirus</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
              </div>
              <div class="col-lg-4">
                <h2 class="footer-heading mb-4">Helpful Link</h2>
                <ul class="list-unstyled">
                  <li><a href="#">Helathcare Professional</a></li>
                  <li><a href="#">LGU Facilities</a></li>
                  <li><a href="#">Protect Your Family</a></li>
                  <li><a href="#">World Health</a></li>
                </ul>
              </div>
              <div class="col-lg-4">
                <h2 class="footer-heading mb-4">Resources</h2>
                <ul class="list-unstyled">
                  <li><a href="#">WHO Website</a></li>
                  <li><a href="#">CDC Website</a></li>
                  <li><a href="#">Gov Website</a></li>
                  <li><a href="#">DOH Website</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
              <p class="copyright"><small>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></small></p>

              </div>
            </div>

          </div>
        </div>
      </div>
    </div>

  </div> <!-- .site-wrap -->

  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <script src="assets/js/jquery-ui.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/owl.carousel.min.js"></script>
  <script src="assets/js/jquery.countdown.min.js"></script>
  <script src="assets/js/jquery.easing.1.3.js"></script>
  <script src="assets/js/aos.js"></script>
  <script src="assets/js/jquery.fancybox.min.js"></script>
  <script src="assets/js/jquery.sticky.js"></script>
  <script src="assets/js/isotope.pkgd.min.js"></script>
  <script src="assets/js/main.js"></script>
  <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
  


<!-- bar chart to left-->
 <script>
var data = {
  labels: ["", "", "", "", " "],
  datasets: [{
    label: "Laki-laki",
    backgroundColor: 'rgba(0, 0, 255, 0.5)',
      borderColor: 'rgba(0, 0, 255, 1)',
    borderWidth: 1,
    data: [40, 150, 50, 60, 70],
    yAxisID: "bar-y-axis1"
  }]
};

// invert the sign of each of the values.
data.datasets[0].data.map((currentValue, index, array) => {
  array[index] = currentValue * -1;
});

var options = {
  tooltips: {
    callbacks: {
      label: function(tooltipItem, data) {
        var label = data.datasets[tooltipItem.datasetIndex].label || '';

        if (label) {
          label += ': ';
        }
        label += tooltipItem.xLabel * -1; // invert the sign for display.
        return label;
      }
    }
  },
  scales: {
    yAxes: [{
      id: "bar-y-axis1",
      categoryPercentage: 0.5,
      barPercentage: 0.5,
      position: 'right' // right-align axis.
    }],

    xAxes: [{
      id: "bar-x-axis1",
      stacked: false,
      ticks: {
        callback: function(value, index, values) {
          return value * -1; // invert the sign for tick labelling.
        },
        beginAtZero: true
      }
    }]
  }
};

var ctx = document.getElementById("LeftChart").getContext("2d");
var myBarChart = new Chart(ctx, {
  type: 'horizontalBar',
  data: data,
  options: options
});     
</script>
        
  <!-- bar chart to right-->
<script>
            var ctx = document.getElementById("RightChart");
            var myChart = new Chart(ctx, {
                type: 'horizontalBar',
                data: {
                    labels: ['', '', '', '', ''],
                    datasets: [{
                        
                            label: 'Perempuan',
                            barThickness: 6,
                            data: [120, 190, 30, 50, 20],
                            backgroundColor: [
                                'rgba(255, 0, 0, 0.5)',
                                'rgba(255, 0, 0, 0.5)',
                                'rgba(255, 0, 0, 0.5)',
                                'rgba(255, 0, 0, 0.5)',
                                'rgba(255, 0, 0, 0.5)'
                            ],
                            borderColor: [
                                'rgba(255,0,0,1)',
                                'rgba(255,0,0,1)',
                                'rgba(255,0,0,1)',
                                'rgba(255,0,0,1)',
                                'rgba(255,0,0,1)'
                            ],
                            borderWidth: 1
                        }]
                },
                options: {
                    scales: {
                        
                        yAxes: [{
      categoryPercentage: 0.5,
      barPercentage: 0.5,
      position: 'left' // right-align axis.
    }],
                        
                        xAxes: [{ 
                                ticks: {
        callback: function(value, index, values) {
          return value * -1; // invert the sign for tick labelling.
        },
                                    beginAtZero: true
                                }
                            
                            }]
                    }
                }
                
            });
        </script>
<!-- Pie Chart-->
        <script>
            var ctx = document.getElementById("pieChart");
            var myChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: ["Laki-laki", "Perempuan"],
                    datasets: [{
                            label: '# of Votes',
                            data: [756, 454],
                            backgroundColor: [
                                'rgba(255, 0, 0, 0.5)',
                                'rgba(0, 0, 255, 0.5)'
                            ],
                            borderColor: [
                                'rgba(255, 0, 0, 1)',
                                'rgba(0, 0, 255, 1)'
                            ],
                            borderWidth: 1
                        }]
                },
                options: {
		tooltips: {
			callbacks: {
				label: function(tooltipItem, data) {
					var allData = data.datasets[tooltipItem.datasetIndex].data;
					var tooltipLabel = data.labels[tooltipItem.index];
					var tooltipData = allData[tooltipItem.index];
					var total = 0;
					for (var i in allData) {
						total += allData[i];
					}
					var tooltipPercentage = Math.round((tooltipData / total) * 100);
					return tooltipLabel + ': ' + tooltipData + ' (' + tooltipPercentage + '%)';
				}
			}
		}
	}
            });
			
			
        </script>
		
		<script>
  window.watsonAssistantChatOptions = {
      integrationID: "9818c246-5e65-45ed-a91c-644ef1bee50e", // The ID of this integration.
      region: "us-east", // The region your integration is hosted in.
      serviceInstanceID: "87416a1f-af51-47cd-aa84-0158150ae1de", // The ID of your service instance.
      onLoad: function(instance) { instance.render(); }
    };
  setTimeout(function(){
    const t=document.createElement('script');
    t.src="https://web-chat.global.assistant.watson.appdomain.cloud/versions/" + (window.watsonAssistantChatOptions.clientVersion || 'latest') + "/WatsonAssistantChatEntry.js"
    document.head.appendChild(t);
  });
</script>
</body>
</html>