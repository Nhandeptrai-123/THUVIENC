<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm phần tử lớn nhất trong mảng C++</title>
    <link rel="icon" type="image/png" href="image/icons8-c++-32.png" sizes="16x16">
    <style>
        *{
            padding: 0;
            margin: 0;
        }
        .anhC{
            border-radius: 5px;
        }
        header{
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
        #menu-bai1{
            list-style: none;
            padding-left: 10px;
        }
        #menu-bai1>li>a{
            text-decoration: none;
            color: rgb(49, 44, 26);
            padding-left: 30px;
        }
        #menu-bai1>li>a:hover{
            color: rgb(15, 186, 237);
        }
        #bt{
                width: 80%;
        }
        #bs{
                width: 20%;
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
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <!-- Liên kết tệp JavaScript của Bootstrap (tuỳ chọn) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
</head>
<body>
    <div class="container-fluid">
        <header class="container-fluid  pt-1" style="height: 110px;">
            <div class="row">
                <div class="col-8 col-sm-10 col-md-10 pt-4">
                    <!-- <img id="anhlogo" src="./image/logo5.png" alt=""> -->
                    <h1 style="color: #2c3e50;" class="h1logo">🆃🅷ư 🆅🅸ệ🅽 🅲++</h1>
                </div>
                <div class="col-4 col-sm-2 col-md-2 row">
                    <div style="width: 6%;height: 60px;">
                        <a href="https://www.facebook.com/VGM.DHN"><img style="border-radius: 10px;padding-top: 15px;" src="./image/icons8-facebook-75.png" alt="fb"></a>
                    </div>
                    <div style="width: 50px;"></div>
                </div>
            </div>
        </header>
        <nav class="navbar navbar-expand-sm navbar-light " style="font-family: Arial;">
              <div class="container ">
                 <button class=" navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                 </button>
              <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav me-auto mt-2 mt-lg-0 ">
                    <li class="nav-item">
                        <a class="nav-link active" href="./index.php" aria-current="page"><img src="./image/icons8-home-page-16.png" alt=""> <span class="visually-hidden">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: aliceblue;" href="#BạnđangởlậptrìnhC">Lập Trình C++</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " style="color: aliceblue;" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Thủ Thuật</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: aliceblue;" href="#">Tin Học</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: aliceblue;" href="#">Hỗ Trợ</a>
                    </li>
                </ul>
                    <form class="d-flex my-2 my-lg-0 ps-1">
                        <input class="form-control me-sm-2" type="text" placeholder="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0 bg-info" type="submit"><img src="./image/icons8-search-32 (2).png" alt=""></button>
                    </form>
                </div>
          </div>
        </nav>
        <div style="clear: both;"></div>
        <section>
            <div class="row" style="clear: both;">
                <div class="col-0 col-md-3 col-lg-4 col-xl-2">
                    <nav class="menu-ngang navbar navbar-vertical " style="font-family: Arial;background-color: rgb(255, 255, 255);">
                        <div class="container-fluid">
                          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId1" aria-controls="collapsibleNavId1" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                          </button>
                          
                          <div class="collapse navbar-collapse" id="collapsibleNavId1">
                            <h2 style="color: cadetblue;" >Học C++</h2>
                            <hr>
                            <ul class="navbar-nav me-auto mt-2 mt-lg-0 flex-column">
                                <h4 style="color: #0b7ae9;">STARTING</h4>
                                <hr>
                                <li class="nav-item">
                                <!-- <a class="nav-link active " href="http://127.0.0.1:5500/BaiTapHTML/Do_an_CS1/bai1.html" aria-current="page"> <h3>Học C++</h3></a> -->
                                <a class="nav-link active " href="./bai1(lt).html" aria-current="page"> <p style="font-size: 19px;">Ngôn Ngữ C++ là gì ?</p></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active " href="./bai2(lt).html" aria-current="page"> <p style="font-size: 19px;">Thư viện và hàm main </p></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active " href="./bai3(lt).html" aria-current="page"> <p style="font-size: 19px;">Lệnh cin và cout trong C++ </p></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active " href="./bai4(lt).html" aria-current="page"> <p style="font-size: 19px;">Khai báo biến trong C++</p></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active " href="./bai5(lt).html" aria-current="page"> <p style="font-size: 19px;">Các dữ liệu trong C++</p></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active " href="./bai6(lt).html" aria-current="page"> <p style="font-size: 19px;">Cách viết ghi chú trong C++</p></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active " href="./bai7(lt).html" aria-current="page"> <p style="font-size: 19px;">Các toán tử trong C++  </p></a>
                                </li>
                                <h4 style="color: #0b7ae9;">CONTROL STATEMENT</h4>
                                <hr>
                                <li class="nav-item">
                                    <a class="nav-link active " href="./bai8(lt).html" aria-current="page"> <p style="font-size: 19px;">Câu lệnh if else trong C++ </p></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active " href="./bai9(lt).html" aria-current="page"> <p style="font-size: 19px;">Vòng lặp while, do while trong C++ </p></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active " href="./bai10(lt).html" aria-current="page"> <p style="font-size: 19px;">Câu lệnh switch case trong C++ </p></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active " href="./bai11(lt).html" aria-current="page"> <p style="font-size: 19px;">Vòng lặp for trong C++ </p></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active " href="./bai12(lt).html" aria-current="page"> <p style="font-size: 19px;">Tìm hiểu mảng (array) trong C++ </p></a>
                                </li>
                                <h3 style="color: cadetblue;">Bài tập C++</h3>
                                <hr>
                                <h3 style="color: #0b7ae9;">SIMPLE</h3>
                                <hr>
                                <li class="nav-item">
                                    <a class="nav-link active " href="bai1(TH).html" aria-current="page"> <p style="font-size: 19px;">Chương trình Hello World trong C++</p></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active " href="bai2(TH).html" aria-current="page"> <p style="font-size: 19px;">Kiểm tra số âm hay số dương trong C++</p></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active " href="bai3(TH).html" aria-current="page"> <p style="font-size: 19px;">Tìm số lớn nhất trong 3 số trong C++</p></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active " href="bai4(TH).html" aria-current="page"> <p style="font-size: 19px;">Kiểm tra một số chẵn lẻ trong C++</p></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active " href="bai5(TH).html" aria-current="page"> <p style="font-size: 19px;">Kiểm tra năm nhuận trong C++</p></a>
                                </li>
                                <h3 style="color: #0b7ae9;">STRING</h3>
                                <hr>
                                <li class="nav-item">
                                    <a class="nav-link active " href="bai6(TH).html" aria-current="page"> <p style="font-size: 19px;">Tìm độ dài của chuỗi trong C++</p></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active " href="bai7(TH).html" aria-current="page"> <p style="font-size: 19px;">Sắp xếp chuỗi theo Alphabet trong C++</p></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active " href="bai8(TH).html" aria-current="page"> <p style="font-size: 19px;">Chuyển chữ thường thành chữ hoa trong C++</p></a>
                                </li>
                                <h3 style="color: #0b7ae9;">ARRAY</h3>
                                <hr>
                                <li class="nav-item">
                                    <a class="nav-link active " href="bai9(TH).html" aria-current="page"> <p style="font-size: 19px;">Sắp xếp mảng tăng dần trong C++</p></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active " href="bai10(TH).html" aria-current="page"> <p style="font-size: 19px;">tìm số lớn nhất trong mảng C++</p></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active " href="bai11(TH).html" aria-current="page"> <p style="font-size: 19px;">Tính tổng các phần tử trong mảng C++</p></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active " href="bai12(TH).html" aria-current="page"> <p style="font-size: 19px;">Tìm số phần tử trong mảng C++</p></a>
                                </li>
                            </ul>
                          </div>
                        </div>
                      </nav>
                      <div class="anhdau1">
                        <img style="width: 200px;height: 500px;padding-left: 10px;" src="./image/xanh-mirinda.jpg" alt="">
                        </div>
                        <div style="height: 50px;"></div>
                        <div class="anhdau1">
                            <img style="width: 200px;height: 500px;padding-left: 10px;" src="./image/cam-mirinda.jpg" alt="">
                        </div>
                </div>
                <div class="col-md-9 col-lg-8 col-xl-8">
                    <div style="height: 20px;"></div>
                <b style="font-size: 55px;">Tìm phần tử lớn nhất trong mảng C++</b>
                <div style="height: 20px;"></div>
                <hr>
                <div style="height: 20px;"></div>
                <p>
                    <strong>Trong bài tập này chúng ta sẽ viết chương trình tìm phần tử lớn nhất trong mảng C++. Đây là một bài tập đơn giản giúp các bạn luyện tập về mảng trong C++.</strong>
                </p>
                <div style="height: 20px;"></div>
                <p>
                    Trong chương trình sau,mình đã khởi tạo một biến <code>max_element</code> và gán vào phần tử đầu tiên của mảng đã cho, sau đó so sánh biến đó với tất cả các phần tử khác của mảng bằng vòng lặp, bất cứ khi nào nhận được một phần tử có giá trị lớn hơn <code>max_element</code>
                </p>
                <div style="height: 20px;"></div>

                <!-- <div style="height: 20px;"></div> -->
                <div style="height: 20px;"></div>
                <div style="background-color: rgb(214, 209, 209);">
                    <p style="padding-left: 10px;">MỤC LỤC</p>
                    <ul id="menu-bai1">
                        <li><a href="#div-bai1-1">Ví dụ: Tìm phần tử lớn nhất trong mảng C++</a></li>
                    </ul>
                </div>
                <div style="height: 50px;"></div>
                <!-- Phần 1 bài 1 -->
               <div>
                    <div id="div-bai1-1" style="background-color:  #0b7ae9;"><h1 style="color: white;padding:10px;">Ví dụ: Tìm phần tử lớn nhất trong mảng C++</h1></div>
                    <!-- <div style="height: 20px;"></div> -->
                    <div style="height: 20px;"></div>
                    <p>
                        Trong chương trình dưới đây, mình đã viết một hàm <strong>largest_element()</strong> để thực hiện công việc so sánh các số trong mảng để tìm số lớn nhất. Sau khi khởi tạo các giá trị trong mảng ở hàm <strong>main()</strong> thì chúng ta gọi hàm <strong>largest_element() </strong>để tìm số lớn nhất trong mảng.
                    </p>
                    <div style="height: 20px;"></div>
                    <div>
                        <div style="justify-content: center; display: flex;">
                            <textarea name="" id="" cols="70" rows="20" style="background-color: #222f3c; color: white; font-size: 20px;padding-left: 10px;padding-top: 15px;">
#include &lt;iostream&gt;
using namespace std;
int largest_element(int arr[], int num)
{
    int i, max_element;
    max_element = arr[0];
    for (i = 1; i &lt; num; i++)         
        if (arr[i] &gt; max_element)
            max_element = arr[i];
    return max_element;
}
    
int main()
{
    int arr[] = {1, 24, 145, 20, 8, -101, 300};
    int n = sizeof(arr)/sizeof(arr[0]);
    cout&lt;&lt;"Giá trị lớn nhất trong mảng là: "&lt;&lt; largest_element(arr, n);
    cout&lt;&lt;"\n------------------------------\n";
    cout&lt;&lt;"Chương trình này được đăng tại Freetuts.net";
}                           </textarea>
                        </div>
                        
                        <div style="height: 20px;"></div>
                        <p><strong>Kết quả:</strong> Với các giá trị trong mảng <strong>arr[] </strong>= {1, 24, 145, 20, 8, -101, 300} thì giá trị lớn nhất sẽ là 300.</p>
                        <div>
                            <img src="imageBai_10_TH/gia-tri-lon-nhat.jfif" alt="" class="w-100">
                        </div>
                        <div style="height: 20px;"></div>
                        <p>Như vậy là chúng ta đã thực hiện xong chương trình C++ để sắp xếp các số trong mảng. Chúc các bạn thực hiện thành công!!!</p>
                    </div>
               </div>
                <div style="height: 20px;"></div>
                <hr>
                <div style="height: 50px;"></div>
                <div style="float: left;width: 100%;display: flex;">
                    <p id="bt" ><a href="bai9(TH).html">⇦ Bài trước </a></p>
                    <p id="bs"><a href="bai11(TH).html">Bài tiếp theo ⇨</a></p>
                </div>
               <div style="height: 50px;"></div>
                </div>
                <div class="chu col-lg-2">
                    <div style="height: 20px;"></div>
                    <h3 style="padding-right: 50px;border-bottom: 1px solid rgb(124, 124, 124);width: 130px;">WORDPRESS</h3>
                    <div style="height: 20px;"></div>
                    <div id="div-w"><b><a class="text-decoration-none" style="color: black; font-size: 18px;" href="">HTML Templates</a></b></div>
                    <div style="height: 20px;"></div>
                    <div id="div-w"><b><a class="text-decoration-none"  style="color: black; font-size: 16px;" href="">Theme WordPress</a></b></div>
                    <div style="height: 20px;"></div>
                    <div id="div-w"><b><a class="text-decoration-none"  style="color: black; font-size: 16px;" href="">Plugin WordPress</a></b></div>
                    <div style="height: 20px;"></div>
                    <div id="div-w"><b><a class="text-decoration-none"  style="color: black; font-size: 15px;" href="">Lập trình WordPress</a></b></div>
                    <div style="height: 20px;"></div>
                    <div id="div-w"><b><a class="text-decoration-none"  style="color: black; font-size: 15px;" href="">Thủ thuật WordPress</a></b></div>
                    <div style="height: 20px;"></div>
                    <div style="height: 20px;"></div>
                    <h3 class="text-decoration-none" style="padding-right: 50px;border-bottom: 1px solid rgb(124, 124, 124);width: 150px;">WEB HOSTING</h3>
                    <div style="height: 20px;"></div>
                    <div id="div-w"><b><a class="text-decoration-none" style="color: black;" href="">Quản trị Linux</a></b></div>
                    <div style="height: 20px;"></div>
                    <div id="div-w"><b><a class="text-decoration-none" style="color: black; font-size: 17px;" href="">Thủ thuật Hosting</a></b></div>
                    <div style="height: 20px;"></div>
                    <div id="div-w"><b><a class="text-decoration-none" style="color: black;font-size: 17px;" href="">Kiến thức Domain</a></b></div>
                    <div style="height: 20px;"></div>
                    <h3 style="padding-right: 50px;border-bottom: 1px solid rgb(124, 124, 124);width: 150px;">WEB FRONTEND</h3>
                    <div style="height: 20px;"></div>
                    <div id="div-w"><b><a class="text-decoration-none" style="color: black;" href="">Javascript</a></b></div>
                    <div style="height: 20px;"></div>
                    <div id="div-w"><b><a class="text-decoration-none" style="color: black;" href="">Quản trị Linux</a></b></div>
                    <div style="height: 20px;"></div>
                    <div id="div-w"><b><a class="text-decoration-none" style="color: black;" href="">AngularJS</a></b></div>
                    <div style="height: 20px;"></div>
                    <div id="div-w"><b><a class="text-decoration-none" style="color: black;" href="">Quản trị Linux</a></b></div>
                    <div style="height: 20px;"></div>
                    <div id="div-w"><b><a class="text-decoration-none" style="color: black;" href="">jQuery</a></b></div>
                    <div style="height: 20px;"></div>
                    <div id="div-w"><b><a class="text-decoration-none" style="color: black;" href="">jQuery Mobile</a></b></div>
                    <div style="height: 20px;"></div>
                    <div id="div-w"><b><a class="text-decoration-none" style="color: black;" href="">HTML & CSS</a></b></div>
                    <div style="height: 20px;"></div>
                    <div id="div-w"><b><a class="text-decoration-none" style="color: black;" href="">Bootstrap</a></b></div>
                    <div style="height: 20px;"></div>
                    <div id="div-w"><b><a class="text-decoration-none" style="color: black;" href="">TypeScript</a></b></div>
                    <div style="height: 20px;"></div>
                    <div id="div-w"><b><a class="text-decoration-none" style="color: black;" href="">SASS CSS</a></b></div>
                    <div style="height: 20px;"></div>
                    <div id="div-w"><b><a class="text-decoration-none" style="color: black;" href="">VueJS</a></b></div>
                    <div style="height: 20px;"></div>
                    <div id="div-w"><b><a class="text-decoration-none" style="color: black;" href="">NestJS</a></b></div>
                    <div style="height: 20px;"></div>
                </div>
            </div>
        </section>
        <footer style="color: aliceblue;background-color: #2c3e50;">
            <div>
                <div class="row" style="padding-left: 20px;padding-top: 20px;">
                    <div class="col-md-8" >
                        <img style="width: 150px;height: 140px;border-radius: 10px;" src="./image/c++.png" alt="">
                        <div style="height: 10px;"></div>
                    </div>
                    <div class="col-md-4">
                        <h3 style="border-bottom: 1px solid white;" class="w-75">Liên hệ với chúng tôi</h3>
                        <div style="height: 20px;"></div>
                        <div>
                            <img src="./image/icons8-location-16.png" alt="địa chỉ">
                            <b>Trường Đại học Công nghệ Thông tin và Truyền thông Việt - Hàn, Đường Trần Đại Nghĩa, Khu đô thị, Hòa Quý, Ngũ Hành Sơn, Đà Nẵng</b>
                        </div>
                    </div>
                </div>
                <div class="row" style="padding-left: 20px;padding-top: 20px;">
                    <div class="col-md-8">
                        <p><h3 style="color:  rgb(222, 152, 12);">Trang web chia sẻ nội dung miễn phí dành cho người Việt.</h3></p>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <img src="./image/icons8-phone-16.png" alt="phone">
                            <b>Phone: 0778226947, 0702523017</b>
                        </div>
                    </div>
                </div>
            </div>
            <div style="background-color: #222f3c;padding-left: 20px;padding-top: 20px;padding-bottom: 40px;">
                <h4>Công ty TNHH 2 thành viên đầu tư và dịch vụ giáo dục Việt-Hàn</h4>
                <div style="height: 10px;"></div>
                <b>Người đại diện: Lê Đình Gia Liêm, Đỗ Hữu Nhân</b>
                <div style="height: 10px;"></div>
                <b>Số giấy chứng nhận đăng ký kinh doanh: 123456789, ngày cấp: 03/05/2023, nơi cấp: Đại học công nghệ thông tin - truyền thông Việt Hàn</b>
            
            </div>

        </footer>
    </div>
</body>
</html>