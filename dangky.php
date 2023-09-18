<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Ký</title>
    <style>
         body {
            font-family:'Times New Roman', Times, serif;
            background-image: url(./image.bakground/Thiết\ kế\ chưa\ có\ tên.png);
        }
        .styled-heading {
            color: #2a2b2c;
            text-align: center;
            font-size: 44px;
            font-weight: bold;
            margin-top: 20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }

        ul li :hover{
            background-color: rgb(28, 209, 209);
            color: #2a2b2c;
            border-radius: 10px;
        }
       
    </style>
    <link rel="stylesheet" href="./dangnhap.css">
    <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
<script >
    function check(){
        var pass = document.getElementById('mk1');
        var check = document.getElementById('check1');
        if(check.checked){
            pass.type = 'text';
        }else{
            pass.type = 'password';
        }
        var pass1 = document.getElementById('mk2');
        var check1 = document.getElementById('check2');
        if(check1.checked){
            pass1.type = 'text';
        }else{
            pass1.type = 'password';
        }
    }
</script>
</head>
<body class="container-fluid d-flex justify-content-center align-items-center row" style="background-color: #464545;">
<nav class="navbar navbar-expand-sm navbar-dark ms-4">
        <a class="navbar-brand" style="color: #131313;" href="#"><b><i>MENU</i></b></a>
        <button class="navbar-toggler d-lg-none" type="button" style="border: 2px solid  #D9EEE1;border-radius: 5px;" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <img src="./image.bakground/icons8-list-32.png" alt="Toggle navigation">
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" style="color: #131313;" href="index.php" aria-current="page">Home <span class="visually-hidden">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"  style="color: #131313;"href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" style="color: #131313;" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="#">Action 1</a>
                        <a class="dropdown-item" href="#">Action 2</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <div class=" tong row" style="padding-top:50px;">
    <div class="tong1 container col-md-7 mt-5">
        <h1 class="styled-heading shadow-sm " style="color: rgb(205, 239, 239);">ĐĂNG KÝ TÀI KHOẢN MỚI</h1>
        <i class="justify-content-center d-flex pb-2" style="color: rgb(175, 214, 201);">Hãy đến với chúng tôi </i>
    </div>
    <div class=" col-md-5 justify-content-center d-flex container mt-5" style="color: aliceblue;">
        <div class="form row" style="display: block;">
            <form method="POST" action="add.php">
                <div class="mb-2">
                    <input type="text" class="form-control" id="tk" name="taikhoan" placeholder="Tài Khoản">
                </div>
                <div class="mb-2 d-flex">
                    <input type="password" class="form-control" id="mk1" name="mk1" placeholder="Mật Khẩu">
                    <input class="ms-2" type="checkbox" name="check1" id="check1" onclick="check()">
                </div>
                <div class="mb-2 d-flex">
                    <input type="password" class="form-control" id="mk2" name="mk2" placeholder="Nhập lại Mật Khẩu">
                    <input class="ms-2" type="checkbox" name="check2" id="check2" onclick="check()">
                </div>

                <div class="mb-2">
                    <input type="text" class="form-control" id="dienthoai" name="dienthoai" placeholder="Điện Thoại">
                </div>
                <div class="mb-2">
                    <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                </div>
                <a class="pb-3 dangky" style="text-decoration: none;color: rgb(50, 49, 49); float:left" href="dangnhap.php"><i>Đăng Nhập?</i></a>
                <div class="ps-5 pb-3 pt-2" style="clear:left;">
                <button type="submit" class="btn btn-primary btn-block">Submit</button>
                <button type="reset" class="btn btn-danger btn-block">Hủy</button>
                <!-- <button type="cancel" class="btn btn-danger btn-block" onclick="huy()">Hủy</button> -->
                </div>
            </form>
        </div>
    </div>
    </div>
   
    <div class="row footer">
        <div class="col-12" style="display:flex;color:#f2f2f2">
            <i>Liên Hệ: </i>
            <i style="padding-left:10px"> 0702523017</i>
        </div>
        <div class="col-12" style="display:flex;color:#f2f2f2">
        <b> <i>Chúng tôi ở đây vì bạn </i></b>
        </div>
    </div>
</body>
</html>