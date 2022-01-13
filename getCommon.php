<!-- đầu vào: query, tham số cần lấy -->
<!-- đầu ra: json mảng tham số lấy được -->
<?php
require "db.php";
$query = $_POST['query'];
$output = $_POST['output'];
$data = mysqli_query($connect, $query);
$arr = array();
while($row = mysqli_fetch_assoc($data)) {
    array_push($arr, $row[$output]);
}
echo(json_encode($arr));
?>