<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chủ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        *{
            padding: 0;
            margin: 0;
        }
        #logo{
                width: 300px;
                height: 100px;
            }
        .anhC{
            border-radius: 5px;
        }
        header{
            /* background-color: rgb(83, 163, 255); */
            background-color: aliceblue;
        }
        nav{
            background-color: rgb(87, 88, 88);
            border-radius: 10px;
        }
        section{
            font-size: 25px;
        }
        .table-c,td{
            border: 1px solid rgb(6, 6, 6);
            border-collapse: collapse;
            font-size: 22px;
        }
        th{
            height: 50px;
            background-color: gray;
        }
        td{
            height: 35px;
            padding-left: 20px;
        }
        #td2,a{
            color: rgb(86, 86, 228);
            text-decoration: none;
        }
        .menu-ngang{
            background-color: rgb(243, 245, 246);
        }
        .anhdau1{
            display: block;
        }
        .chu{
            font-size: 20px;
        }
        #div-w{
            background-color: #f25d3c;
            width: 150px;
            height: 30px;
            text-align: center;
            border-radius: 10px;
           
        }
        .anhfbin{
            display: flex;
        }
        @media only screen  and (max-width: 280px){
            .anhC{
                display: none;
            }
            .chu{
                display: none;
            }
            footer{
                padding-bottom: 40px;
            }
            #bt{
                width: 50%;
            }
            #bs{
                width: 50%;
            }
        }
        @media only screen  and (max-width: 330px){
            #logo{
                width: 80px;
            }
            .anhfb{
                padding-left:15px;

            }
        }
        @media only screen  and (max-width: 409px){
            .h1logo{
                font-size: 17px;
            }
        }
        @media only screen  and (max-width: 465px){
            #logo{
                width: 230px;
                height: 100px;
            }
        }
        /* màn hình cho mobile dưới 640px */
        @media only screen  and (max-width: 768px){
            .anhdau1{
                display: none;
            }
            .chu{
                display: none;
            }
            #bt{
                width: 50%;
            }
            #bs{
                width: 50%;
            }
        }
        @media only screen  and (max-width: 1200px){
            .chu{
                display: none;
            }
            .sticky {
            position: -webkit-sticky;
            position: sticky;
            top: 0; /* Hoặc bất kỳ vị trí cụ thể nào bạn muốn */
            z-index: 100; /* Để đảm bảo lớp này hiển thị trên top */
        }
        }
    </style>
    <link rel="icon" type="image/png" href="image/icons8-c++-32.png" sizes="16x16">

<!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container-fluid"></div>
        <header class="container-fluid  pt-1" style="height: 110px;">
            <div class="row ">
                <div class="col-8 col-md-10 "> 
                    <!-- <h1 style="color: #131313;" class="h1logo">🆃🅷ư 🆅🅸ệ🅽 🅲++</h1> -->
                    <img id="logo" src="./imageIndex/THƯ VIỆN C++.png" alt="LOGO">
                </div>
                <div class="anhfbin col-4 col-md-2 row">
                    <div class="col-6" style="width: 6%;height: 60px;">
                        <a class="anhfb" href="https://www.facebook.com/VGM.DHN"><img style="border-radius: 10px;padding-top: 15px;" src="./image/icons8-facebook-75.png" alt="fb"></a>
                    </div>
                </div>
            </div>
        </header>
        <nav class="navbar navbar-expand-sm navbar-dark sticky" style="font-family: Arial;">
              <div class="container ">
              <a class="navbar-brand" style="color: #131313;" href="#"><b><i>MENU</i></b></a>
              <button class="navbar-toggler d-lg-none" type="button" style="border: 2px solid  #D9EEE1;border-radius: 5px;" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                    <img src="./image.bakground/icons8-list-32.png" alt="Toggle navigation">
                </button>
                <div class="collapse navbar-collapse  " id="collapsibleNavId">
                    <ul class="navbar-nav me-auto mt-2 mt-lg-0 ">
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php" aria-current="page"><img src="./image/icons8-home-page-16.png" alt=""> <span class="visually-hidden">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link text-light dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Lập Trình</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownId">
                                <a class="dropdown-item" href="bai1(lt).php">C++</a>
                                <a class="dropdown-item" href="#">Python</a>
                            </div>
                        </li>

                        <li class="nav-item ">
                            <a class="nav-link text-light" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Thủ Thuật</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#">Tin Học</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#">Hỗ Trợ</a>
                        </li>
                    </ul>
                    <form class="d-flex my-2 my-lg-0 ps-1">
                        <input class="form-control me-sm-2" type="text" placeholder="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0 " type="submit"><img src="./image/icons8-search-32 (2).png" alt=""></button>
                    </form>
                </div>
          </div>
          
        </nav>   
    </div>   
</body>