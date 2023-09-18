<?php
	$severname = "localhost";
    $username  = "root";
    $password = "";
    $database = "web_test";

    $conn = mysqli_connect($severname,$username,$password,$database);
    // if(!$conn){
    //     echo("Kết nối không thành công <br>");
    // }else{
    //     echo("Thành Công");
    // }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $taikhoan = $_POST["taikhoan"];
        $mk1 = $_POST["mk1"];
        $mk2 = $_POST["mk2"];
        $dienthoai = $_POST["dienthoai"];
        $email = $_POST["email"];
    
        // Chuẩn bị câu lệnh INSERT INTO
        $sql = "INSERT INTO dangky (taikhoan, mk1, mk2, dienthoai, email) VALUES ('$taikhoan', '$mk1','$mk2', '$dienthoai', '$email')";
    //    Kiêm tra số dth và email
    $sql1 = "SELECT * FROM `dangky` where dienthoai = ? or email = ?";
    $stmt = mysqli_prepare($conn, $sql1);
    mysqli_stmt_bind_param($stmt, "ss", $dienthoai,$email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
        
        if($taikhoan=="" || $mk1=="" || $mk2=="" || $dienthoai=="" || $email=="" ){
            echo "<script>
            confirm ('Vui lòng nhập đúng giữ liệu');
            </script>
            ";
            echo '<button><a href="dangky.php">Quay lại</a></button>';
        }else{
            if($mk1 == $mk2){
                if($row = mysqli_fetch_assoc($result)){
                    if($dienthoai==$row['dienthoai'] ||  $email==$row['email']){
                        echo "<script>alert('Số điện thoại hoặc email đã tồn tại !');</script>";
                        echo '<button><a href="dangky.php">Quay lại</a></button>';
                    }else{
                         if (mysqli_query($conn, $sql)) {
                            echo "<script>
                            confirm ('Thêm thành công');
                            </script>
                            ";
                            echo '<button><a href="dangky.php">Quay lại</a></button>';
                        } else {
                            echo "<script>
                            confirm ('Lỗi:  . mysqli_error($conn);');
                            </script>";
                        }
                    }
                }
                
            }else{
                echo "<script>
                confirm ('Mật khẩu xác minh ko đúng');
                </script>
                ";
                echo '<button><a href="dangky.php">Quay lại</a></button>';
            }
           
        }
        
    }
    // Đóng kết nối
mysqli_close($conn);
?>