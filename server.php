<?php
      


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

    
    
    
