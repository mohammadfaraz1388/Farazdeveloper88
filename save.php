<?php 
$conn = mysqli_connect('localhost', 'id21212030_farazemdadi', '1388@Faraz1388', 'id21212030_faraz');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$conn->set_charset("utf8");

$username = $_POST['usernanme'];
$useremai = $_POST['useremail'];

$sql = "INSERT INTO `form1`(`name`, `text`) VALUES('$username' , '$useremai')" ;
if ($conn->query($sql) === TRUE) {
   echo "اطلاعات دریافتی شما با موفقیت ثبت شد ! <br></br> ممنون از نظر شما";
} else { 
    echo "خطا - مشکلی پیش آمده است !";
}
$conn->close();



?>