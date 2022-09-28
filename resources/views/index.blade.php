<!DOCTYPE html>
<html lang="en" dir="ltr ">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | PT Sentra Medan Jaya</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.3/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/fonts/simple-line-icons/style.min.css">
    <link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/colors.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <div class="sidebar">
        <div class="logo_content">
            <div class="logo">
                <div class="logo_name">Sentra Medan Jaya</div>
            </div>
            <i class="bx bx-menu" id="btn"></i>
        </div>
        <ul class="nav_list">
            <li>
                <i class="bx bx-search"></i>
                <input type="text" placeholder="Search...">
                <span class="tooltip">Beranda</span>
            </li>
            <li>
                <a href="pesanan.html">
                    <i class='bx bx-clipboard'></i>
                    <span class="links_name">Penjualan</span>
                </a>
                <span class="tooltip">Beranda</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-message-rounded-dots' ></i>
                    <span class="links_name">Pesan</span>
                </a>
                <span class="tooltip">Beranda</span>
            </li>
            <li>
                <a href="produk.html">
                    <i class='bx bx-package'></i>
                    <span class="links_name">Produk</span>
                </a>
                <span class="tooltip">Beranda</span>
            </li>
        </ul>
        <div class="profile_content fixed">
            <div class="profile">
                <div class="profile_details">
                    <img src="profile.jpg" alt="">
                    <div class="name_job">
                        <div class="name">Kevin Allen</div>
                        <div class="job">PARNAB</div>
                    </div>
                </div>
                <i class="bx bx-log-out" id="log_out"></i>
            </div>
        </div>
    </div>



    <div class="home_content">
      <section class="p-4" id="section-wrapper">
        <div class="container-fluid">
            <h4 class="mb-3">Welcome, Kevin Allen </h4>
            <h5 class="fw-bolder mb-2 mx-1">Aktvitas Penting</h6>
                <div class="row mt-3">
                    <div class="col-xl-3 col-sm-6 col-12 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="d-flex justify-content-between px-md-1">
                            <div>
                              <h3 class="text-info">278</h3>
                              <p class="mb-0">New Posts</p>
                            </div>
                            <div class="align-self-center">
                              <i class="fas fa-book-open text-info fa-3x"></i>
                            </div>
                          </div>
                          <div class="px-md-1">
                            <div class="progress mt-3 mb-1 rounded" style="height: 7px;">
                              <div class="progress-bar bg-info" role="progressbar" style="width: 80%;" aria-valuenow="80"
                                aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="d-flex justify-content-between px-md-1">
                            <div>
                              <h3 class="text-warning">156</h3>
                              <p class="mb-0">New Comments</p>
                            </div>
                            <div class="align-self-center">
                              <i class="far fa-comments text-warning fa-3x"></i>
                            </div>
                          </div>
                          <div class="px-md-1">
                            <div class="progress mt-3 mb-1 rounded" style="height: 7px;">
                              <div class="progress-bar bg-warning" role="progressbar" style="width: 35%;" aria-valuenow="35"
                                aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="d-flex justify-content-between px-md-1">
                            <div>
                              <h3 class="text-success">64.89 %</h3>
                              <p class="mb-0">Bounce Rate</p>
                            </div>
                            <div class="align-self-center">
                              <i class="fas fa-mug-hot text-success fa-3x"></i>
                            </div>
                          </div>
                          <div class="px-md-1">
                            <div class="progress mt-3 mb-1 rounded" style="height: 7px;">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 60%;" aria-valuenow="60"
                                aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="d-flex justify-content-between px-md-1">
                            <div>
                              <h3 class="text-danger">423</h3>
                              <p class="mb-0">Total Visits</p>
                            </div>
                            <div class="align-self-center">
                              <i class="fas fa-map-signs text-danger fa-3x"></i>
                            </div>
                          </div>
                          <div class="px-md-1">
                            <div class="progress mt-3 mb-1 rounded" style="height: 7px;">
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 40%;" aria-valuenow="40"
                                aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="row">
                    <div class="col-sm-12 col-xl" id="canvas-js">
                        <h5 class="fw-bolder mb-3 mx-1 mt-5">Statistik Penjualan</h5>
                        <canvas id="myChart" width="600" height="250"></canvas>
                    </div>
                    <div class="col-sm-12 col-xl mx-4 mt-5">
                        <h5 class="fw-bolder mb-3 mx-1">Riwayat Aktvitas</h5>
                    <div id="riwayat-log">
                        <div class="row border p-2">
                            <div class="col-xl-1 p-2">
                                <img src="orangcuk.png" class="img-fluid icon-org" alt="">
                            </div>
                            <div class="col">
                            <b>Kevin Allen</b> melakukan perubahan pada nama produk
                                <br>
                                <span class="tanggal">20 September, 14:54</span>
                            </div>
                        </div>
                        <div class="row border p-2">
                            <div class="col-xl-1 p-2">
                                <img src="orangcuk.png" class="img-fluid icon-org" alt="">
                            </div>
                            <div class="col">
                            <b>Agus</b> melakukan perubahan pada nama produk
                                <br>
                                <span class="tanggal">20 September, 14:54</span>
                            </div>
                        </div>
                        <div class="row border p-2">
                            <div class="col-xl-1 p-2">
                                <img src="orangcuk.png" class="img-fluid icon-org" alt="">
                            </div>
                            <div class="col">
                            <b>Burgir</b> melakukan perubahan pada nama produk
                                <br>
                                <span class="tanggal">20 September, 14:54</span>
                            </div>
                        </div>
                        <div class="row border p-2">
                            <div class="col-xl-1 p-2">
                                <img src="orangcuk.png" class="img-fluid icon-org" alt="">
                            </div>
                            <div class="col">
                            <b>Kevin Allen</b> melakukan perubahan pada nama produk
                                <br>
                                <span class="tanggal">20 September, 14:54</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </section>
    </div>



















    
    <!-- Javascript -->
    <script>
        let btn = document.querySelector("#btn");
        let sidebar = document.querySelector(".sidebar");
        let searchBtn = document.querySelector(".bx-search");

        btn.onclick = function(){
            sidebar.classList.toggle("active");

        }

        searchBtn.onclick = function(){
            sidebar.classList.toggle("active");
        }

       
            const ctx = document.getElementById('myChart').getContext('2d');
            const myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                    datasets: [{
                        label: '# of Votes',
                        data: [12, 19, 3, 5, 2, 3],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    maintainAspectRatio: false,
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
    
     // Javascript
    </script>
</body>
</html>