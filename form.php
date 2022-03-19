<?php  

$conn = mysqli_connect("localhost","root", "", "details");

if($conn === false)
{
    die("ERROR"
        .mysqli_connect_error());
}
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

$sql = "INSERT INTO login VALUES ('$username','$password')";

if(mysqli_query($conn,$sql)){
    echo "DATA STORED SUCCESSFULLY";
} else{
    echo "ERROR due to $sql"
       .mysqli_error($conn);
}

mysqli_close($conn);

?>  