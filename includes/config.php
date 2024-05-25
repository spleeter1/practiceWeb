<?php 

$conn = new mysqli('localhost', 'root', '', 'fbdb');
// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>