<?php
require "db.php";
$mesxid = $_POST['mesxid'];
$mesyid = $_POST['mesyid'];
$query = "SELECT mesnumber, mescontent FROM chatcontent";
$data = mysqli_query($connect, $query);
$arr = array();

class Mes{
    public $mesNum;
    public $mesCon;
    public function __construct($mesNum, $mesCon){
        $this->mesNum = $mesNum;
        $this->mesCon = $mesCon;
    }
}

while($row = mysqli_fetch_assoc($data)) {
    array_push($arr,  new Mes($row['mesnumber'],$row['mescontent']));
}
echo(json_encode($arr));
?>