
<?php
$registration = $_POST['registration'];
$name= $_POST['name'];
$email= $_POST['email'];

$mysqli = new mysqli("localhost", "root", "root", "movie","3302");


$result = $mysqli->query("select * from movie where name='$registration'");


$data=[];
if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
        $data[]=$row['name'];
    }
}
echo json_encode($data);
?>
