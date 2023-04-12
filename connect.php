<?php
// $servername = "sql311.epizy.com";
// $username = "epiz_33988936";
// $password = "TxxwJ8iXgzURV";
// $dbname = "epiz_33988936_mobileapp";
$servername = "sql12.freemysqlhosting.net";
$username = "sql12612465";
$password = "5ylZ1E2djc";
$dbname = "sql12612465";

try {
    $conn = new PDO("mysql:host=$servername;port=3306;dbname=$dbname", $username, $password);
    // Thiết lập chế độ lỗi PDO để báo cáo tất cả các lỗi
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Kết nối thành công!";
} catch(PDOException $e) {
    echo "Kết nối thất bại: " . $e->getMessage();
}
?>
