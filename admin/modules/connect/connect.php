<?php
// b1: kết nối
$conn=mysqli_connect("localhost", "root", "", "vietpro_mobile_shop");
// b2: khai báo ngôn ngữ
mysqli_query($conn, "SET NAMES 'utf8'");
?>