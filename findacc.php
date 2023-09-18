<?php
$severname = "localhost";
$username  = "root";
$password = "";
$database = "web_test";

$conn = mysqli_connect($severname, $username, $password, $database);

if (!$conn) {
    die("Kết nối không thành công: " . mysqli_connect_error());
}

$taikhoan = $_POST["taikhoan"];
$mk1 = $_POST["mk1"];

// Sử dụng prepared statements để tránh tấn công SQL injection
$sql = "SELECT * FROM `dangky` WHERE taikhoan = ?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "s", $taikhoan);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if (empty($taikhoan) || empty($mk1)) {
    echo "<script>alert('Vui lòng nhập đầy đủ thông tin');</script>";
    echo '<button><a href="dangnhap.php">Quay lại</a></button>';
} else {
    if ($row = mysqli_fetch_assoc($result)) {
        if ($mk1 == $row['mk1']) {
            echo "<script>alert('Đăng nhập thành công');</script>";
            echo '<button><a href="http://localhost/DoAn/bai1(lt).html">Tới trang chủ</a></button>';
        } else {
            echo "<script>alert('Sai mật khẩu');</script>";
            echo '<button><a href="dangnhap.php">Quay lại</a></button>';
        }
    } else {
        echo "<script>alert('Tài khoản không tồn tại');</script>";
        echo '<button><a href="dangnhap.php">Quay lại</a></button>';
    }
}

mysqli_stmt_close($stmt);
mysqli_close($conn);
?>
