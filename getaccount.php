<?php 
include 'connect1.php';

// Thực hiện truy vấn để lấy danh sách tài khoản
$sql = "SELECT * FROM taikhoan";
$result=$conn->query($sql);
$i=0;

// Kiểm tra và hiển thị danh sách tài khoản
if ($result->num_rows > 0) {
  // Duyệt qua từng hàng kết quả và hiển thị thông tin tài khoản
  while($row = $result->fetch_assoc()) {
    echo "$i ";
    $i++;
  }
} else {
  echo "Không tìm thấy tài khoản";
}

// Đóng kết nối
$conn->close();
?>