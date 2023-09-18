
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chủ</title>
    <link rel="icon" type="image/png" href="image/icons8-c++-32.png" sizes="16x16">
    <style>
        *{
            padding: 0;
            margin: 0;
        }
        .anhC{
            border-radius: 5px;
        }
        .chuindexlogo{
            font-size: 50px;

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
        @media only screen  and (max-width: 409px){
            .h1logo{
                font-size: 17px;
            }
            .chuindexlogo{
            font-size: 10px;
            
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
            .chuindexlogo{
            font-size: 34px;
            
        }
        }
        @media only screen  and (max-width: 1200px){
            .chu{
                display: none;
            }
        }
    </style>
    
</head>
<body>
    <div class="container-fluid">
        <!-- <header class="container-fluid  pt-1" style="height: 110px;">
            <div class="row ">
                <div class="col-8 col-md-10 pt-4">
                    <h1 style="color: #131313;" class="h1logo">🆃🅷ư 🆅🅸ệ🅽 🅲++</h1>
                </div>
                <div class="anhfbin col-4 col-md-2 row">
                    <div class="col-6" style="width: 6%;height: 60px;">
                        <a class="anhfb" href="https://www.facebook.com/VGM.DHN"><img style="border-radius: 10px;padding-top: 15px;" src="./image/icons8-facebook-75.png" alt="fb"></a>
                    </div>
                </div>
            </div>
        </header>
        <nav class="navbar navbar-expand-sm navbar-dark" style="font-family: Arial;">
              <div class="container ">
              <a class="navbar-brand" style="color: #131313;" href="#"><b><i>MENU</i></b></a>
              <button class="navbar-toggler d-lg-none" type="button" style="border: 2px solid  #D9EEE1;border-radius: 5px;" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                    <img src="./image.bakground/icons8-list-32.png" alt="Toggle navigation">
                </button>
                <div class="collapse navbar-collapse  " id="collapsibleNavId">
                    <ul class="navbar-nav me-auto mt-2 mt-lg-0 ">
                        <li class="nav-item">
                            <a class="nav-link active" href="#BạnđangởTrangChủ" aria-current="page"><img src="./image/icons8-home-page-16.png" alt=""> <span class="visually-hidden">(current)</span></a>
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
        </nav> -->
        <?php
            include('menu.php');
        ?>
    </div>   
        <div style="clear: both;"></div>
        <section>
            <div class="row d-flex justify-content-center align-items-center" style="height: 530px;">
                <b class="text-center d-block fs-1" style="font-style: inherit;color: #2c3e50;"><i class="chuindexlogo" style="border-bottom: 1px solid #b7b7b7;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">Welcome to the website THU VIEN C++</i> <br> <i>Chúng tôi ở đây giúp đỡ bạn</i> 
                <br>
                <form action="dangnhap.php"><button type="submit" class="btn btn-secondary" id="dangky">Đăng Nhập</button> <br>
                </form>
                </b>
                    
            </div>
            <div class="pt-2 pb-2 h-50 row">
                <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true" aria-label="First slide"></li>
                        <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
                        <li data-bs-target="#carouselId" data-bs-slide-to="2" aria-label="Third slide"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img src="./imageIndex/retina_1708x683_cover-0325-LearnCandC__Languages_Dan_Newsletter-743100f051077054fa1cc613ff4523a2.png"  class="w-100 d-block" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img src="./imageIndex/1qg8ctrj.png" class="w-100 h-100 d-block" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img src="./imageIndex/retina_1708x683_cover-simple-python-websocket-server-d9fd45bd7af4081f37c32f9d044f7427.png" class="w-100 d-block" alt="Third slide">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="row pt-4 pb-4">
                <div class="d-flex col-7 justify-content-center align-items-center fs-1">
                 <b ><i>HÃY CÙNG TẬN HƯỞNG NHỮNG NĂM THÁNG CODER !</i></b>
                </div>
                <div class="col-5">
                    <img class="img-fluid" src="./imageIndex/graphic-design-service.png" alt="">
                </div>
            </div>
        </section>
        <footer style="color: aliceblue;background-color: #2c3e50;">
            <?php
            include('footer.php');
            ?>
        </footer>
    </div>
</body>
</html>