<!DOCTYPE html>
<html lang="en" dir="ltr ">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | PT Sentra Medan Jaya</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <style>
        *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
}

body{
    position: relative;
    min-height: 100vh;
    width: 100%;
    overflow: hidden;
}

.sidebar{
    position: fixed;
    top: 0;
    left: 0;
    height: 100%;
    width: 78px;
    background: #11101d ;
    padding: 6px 14px;
    transition: all 0.5s ease;
}

.sidebar.active{
    width: 240px;

}

.sidebar .logo_content .logo{
    color: #fff;
    display: flex;
    height: 50px;
    width: 100%;
    align-items: center;
    opacity: 0;
    pointer-events: none ;

}

.sidebar.active .logo_content .logo{
    opacity: 1;
    pointer-events: none;
}

.logo_content .logo i{
    font-size: 28px;
    margin-right: 5px;
}

.logo_content .logo .logo_name{
    font-size: 20px;
    font-weight: 400;
}

.sidebar #btn{
    position: absolute;
    color: #fff;
    left: 50%;
    top: 6px;
    font-size: 20px;    
    height: 50px;
    width: 50px;
    text-align: center; 
    line-height: 50px;
    transform: translateX(-50%);
}

.sidebar.active #btn{
    left: 90%;
}

.sidebar ul{
    margin-top: 20px;

}

.sidebar ul li{
    position: relative;
    height: 50px;
    width: 100%;
    margin: 0 5px;
    list-style: none;
    line-height: 50px;
    
}

.sidebar ul li .tooltip{
    position: absolute;
    left: 122px;
    top: 0%;
    transform: translate(-50% , -50%);
    border-radius: 6px;
    height: 35px;
    width: 122px;
    background: #fff;
    line-height: 35px;
    text-align: center;
    box-shadow: 0 5px 10px rgba(red, green, blue, 0.2);
    transition: 0s;
    opacity: 0;
    pointer-events: none;
    display: block;
}

.sidebar.active ul li .tooltip{
    display: none;
    
}

.sidebar ul li:hover .tooltip{
    transition: all 0.5s ease;
    opacity: 1;
    top: 50%;

}

.sidebar ul li input{
     position: absolute;
     height: 100%;
     width: 100%;
     left: 0;
     top: 0;
     border-radius: 12px;
     outline: none;
     border: none;
     background: #1d1b31;
     padding-left:50px;
     font-size: 18px;
     color: #fff;
}

.sidebar ul li .bx-search{
    position: absolute;
    z-index: 99;
    color: #fff;
    font-size: 22px;
    transition: all 0.5s ease;
} 

.sidebar ul li .bx-search:hover{
    background: #fff;
    color: #1d131d;
}

.sidebar ul li a{
    color: #fff;
    display: flex;
    align-items: center;
    text-decoration: none;  
    transition: all 0.4s ease;
    border-radius: 12px;
    white-space: nowrap;

}

.sidebar ul li a:hover{
    color: #11101d;
    background: #fff;
}


.sidebar ul li i {
    height: 50px;
    min-width: 50px;
    border-radius: 12px;
    line-height: 50px;
    text-align: center;

}
.sidebar .links_name{
    opacity: 0;
    pointer-events: none;
}

.sidebar.active .links_name{
    opacity: 1;
    pointer-events: auto;
}

.sidebar .profile_content{
    position: absolute;
    color: #fff;
    bottom: 0;
    left: 0;
    width: 100%;

}

.sidebar .profile_content .profile{
    position: relative;
    padding: 10px 6px;
    height: 60px;
    background: #1d1b31;
 
}

.profile_content .profile .profile_details{
    display: flex;
    align-items: center;
    opacity: 0;
    pointer-events: none;
    white-space: nowrap;
}

.sidebar.active .profile .profile_details{
    opacity: 1;
    pointer-events: auto;
}

.profile .profile_details img{
    height: 45px;
    width: 45px;
    object-fit: cover;
    border-radius: 12px;

}

.profile .profile_details .name_job{
    margin-left: 10px;

}

.profile .profile_details .name{
    font-size: 15px;
    font-weight: 400;

}


.profile .profile_details .job{
    font-size: 12px;

}

.profile #log_out{
    position: absolute;
    left: 50%;
    bottom: 5px;
    transform: translateX(-50%);
    min-width: 50px;
    line-height: 50px;
    font-size: 20px;
    border-radius: 12px;
    text-align: center;
}

.sidebar.active .profile #log_out{
    left: 88%;

}

.home_content{
    position: absolute;
    height: 100%;
    width: calc(100% - 100px);
    left: 78px;
    transition: all 0.5s ease;
    overflow: scroll;
}

.home_content::-webkit-scrollbar {
    display: none;
}


.home_content .text{
    font-size: 25px;
    font-weight: 500;
    color: #1d1b31;
    margin: 12px;
}

.sidebar.active ~ .home_content{
    width: calc(100% - 240px);
    left: 240px;
}



ul{
    padding-left: 0rem;
}



/* Beranda */

/* Canvas */
#canvas-js{
    width: 580px;
    height: 309px;
}


/* Canvas */


/* Beranda */

/* Media Query */
@media (max-width: 1199px) { 
    .card{
        margin-bottom: 20px;
    }
    .sidebar.active ~ .home_content{
        background:rgba(222,220,220,1);
        opacity: 0;
        
    }
    #canvas-js{
      margin-bottom: 65px;
    }    

    #produk-action{
        padding: 12px;
    }
    #laporan-button{
        margin-top: 20px;
    }
    
}

@media (min-width: 1382px) { 
    #produk-action{
        margin-right: 20px;
    }
    
}

@media (min-width: 1202px) { 
    #produk-action{
        margin-right: 40px;
    }
    
}

@media (max-width: 1920px) { 
    #laporan-banner{
        margin-right: 50px;
    }
    
}

@media (max-width: 1373px) { 
    #laporan-urutkan{
        margin-top: 20px;
    }
    
}



/* Media Query */


/* Gambar */

.img-fluid.icon-org{
    width: 75px;
}

/* Gambar */

.tanggal{
    font-size: 12px;
    font-weight: bold;
}

#riwayat-log{
    width: 100%;
    height: 71%;
    overflow: auto;
    overflow-x: hidden;
}

/* Keranjang */

.row-keranjang{
    background-color: #fff;
    padding-top: 16px;
}

.img-keranjang{
    width: 100px;
}

.th-header{
    padding-top: 20px !important;
    padding-bottom: 20px !important;
}

/* Keranjang */

.informasi-produk{
    width: 200px;
}
    </style>
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
                    <form method="POST" action="{{ url('produk/'.$model->id) }}">
                        @csrf
                        @method('patch')
                        <div class="form-group row mb-3 mt-2">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Kode Produk</label>
                            <div class="col-sm-10 col-xl-4 col-lg-3 col-md-3">
                              <input type="text" class="form-control" id="inputEmail3" placeholder="Kode Produk" name="kode_produk" value="{{ $model->kode_produk }}">
                            </div>
                        </div>
    
                        <div class="form-group row mb-3 mt-2">
                          <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Produk</label>
                          <div class="col-sm-10 col-xl-4 col-lg-3 col-md-3">
                            <input type="text" class="form-control" id="inputEmail3" placeholder="Nama Produk" name="nama_produk" value="{{ $model->nama_produk }}">
                          </div>
                        </div>

                        <div class="form-group row mb-3 mt-2">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Harga Produk</label>
                            <div class="col-sm-10 col-xl-4 col-lg-3 col-md-3">
                              <input type="text" class="form-control" id="inputEmail3" placeholder="Nama Produk" name="harga_produk" value="{{ $model->harga_produk }}">
                            </div>
                          </div>

                        <div class="form-group row mb-3 mt-2">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Kuantitas</label>
                            <div class="col-sm-10 col-xl-4 col-lg-3 col-md-3">
                              <input type="number" class="form-control" id="inputEmail3" placeholder="Jumlah Produk" name="kuantitas_produk" value="{{ $model->kuantitas_produk }}">
                            </div>
                        </div>
    
                        <div class="form-group row mb-3 mt-2">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Unit</label>
                            <div class="col-sm-10 col-xl-4 col-lg-3 col-md-3">
                                <select id="inputState" class="form-control" name="unit_produk" value="{{ $model->unit_produk }}">
                                    <option selected>Choose...</option>
                                    <option>PCS</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row mb-3 mt-2">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Kuantitas</label>
                            <div class="col-sm-10 col-xl-4 col-lg-3 col-md-3">
                              <input type="text" class="form-control" id="inputEmail3" placeholder="Jumlah Produk" name="kategori_produk" value="{{ $model->kategori_produk }}">
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