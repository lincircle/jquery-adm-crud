<?php
      
$db_host = "127.0.0.1"; //資料庫主機位址
$db_user = "root"; //資料庫使用者名稱
$db_pswd = "1013807"; //資料庫使用者密碼
$db_name = "show_db"; //資料庫名稱

$mysqli = new mysqli($db_host, $db_user, $db_pswd, $db_name);
/*是否有連線*/
/* check connection */
$con=mysqli_connect($db_host, $db_user, $db_pswd, $db_name);

if ($mysqli->connect_errno) {
     printf("Connect failed: %s\n", $mysqli->connect_error);
     exit();
}  

	$sql = "select * from user";
    $result = mysqli_query($con, $sql) or die("Error in Selecting " . mysqli_error($con));

    //create an array
    $dataarray = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $dataarray[] = $row;
    }
    $json_data=json_encode($dataarray);
    echo $json_data;

    //close the db connection
    mysqli_close($con);


?>

    
    
    