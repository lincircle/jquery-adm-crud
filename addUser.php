<?php
      


$mysqli = new mysqli($db_host, $db_user, $db_pswd, $db_name);
/*是否有連線*/
/* check connection */
$con=mysqli_connect($db_host, $db_user, $db_pswd, $db_name);

if ($mysqli->connect_errno) {
     printf("Connect failed: %s\n", $mysqli->connect_error);
     exit();
}

    /*資料庫連結完，把前端的值傳進來*/

    $userId=$_POST['userId'];
    $userName=$_POST['userName'];
    $tel=$_POST['tel'];
    $age=$_POST['age'];


	$sql = "INSERT INTO `user` (`userId`, `userName`, `tel`, `age`) VALUES ('$userId', '$userName', '$tel', '$age')";

    $result = mysqli_query($con, $sql) or die("Error in Selecting " . mysqli_error($con));
    

    if(!mysqli_query($con,$sql)) {
        die('Error: ' . mysqli_error($con));
    }
        echo "1 record added";

    
    //close the db connection
    mysqli_close($con);


?>

    
    
    
