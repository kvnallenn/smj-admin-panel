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
                <a href="#">
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
            <div class="container-fluid border p-4">
                <div class="row"> 
                    <div class="col">
                        <h4>Tambah Produk</h4>
                    </div>
                </div>
                <div class="row row-keranjang">
                    <h5>Informasi</h5>
                    <form method="POST" action="{{ url('produk') }}">
                        @csrf
                        <div class="form-group row mb-3 mt-2">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Kode Produk</label>
                            <div class="col-sm-10 col-xl-4 col-lg-3 col-md-3">
                              <input type="text" class="form-control @error('kode_produk') is-invalid @enderror" id="inputEmail3" placeholder="Kode Produk" name="kode_produk">
                              @error('kode_produk')
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                            @enderror
                            </div>
                            
                        </div>
    
                        <div class="form-group row mb-3 mt-2">
                          <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Produk</label>
                          <div class="col-sm-10 col-xl-4 col-lg-3 col-md-3">
                            <input type="text" class="form-control" id="inputEmail3" placeholder="Nama Produk" name="nama_produk">
                          </div>
                        </div>

                        <div class="form-group row mb-3 mt-2">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Harga Produk</label>
                            <div class="col-sm-10 col-xl-4 col-lg-3 col-md-3">
                              <input type="text" class="form-control" id="inputEmail3" placeholder="Nama Produk" name="harga_produk">
                            </div>
                          </div>

                        <div class="form-group row mb-3 mt-2">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Kuantitas</label>
                            <div class="col-sm-10 col-xl-4 col-lg-3 col-md-3">
                              <input type="number" class="form-control" id="inputEmail3" placeholder="Jumlah Produk" name="kuantitas_produk">
                            </div>
                        </div>
    
                        <div class="form-group row mb-3 mt-2">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Unit</label>
                            <div class="col-sm-10 col-xl-4 col-lg-3 col-md-3">
                                <select id="inputState" class="form-control" name="unit_produk">
                                    <option selected>Choose...</option>
                                    <option>PCS</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row mb-3 mt-2">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Kuantitas</label>
                            <div class="col-sm-10 col-xl-4 col-lg-3 col-md-3">
                              <input type="text" class="form-control" id="inputEmail3" placeholder="Jumlah Produk" name="kategori_produk">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                          <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Tambah</button>
                          </div>
                        </div>
                      </form>
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

    // Chart
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
    // Chart
     // Javascript
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    
</body>
</html>