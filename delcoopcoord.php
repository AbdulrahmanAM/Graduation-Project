<?php
include ("dbconfig.php");

{
    $acdid=$_POST['ID'];
    




    $sql="Delete from coop_coordinator where CC_ID = '$acdid'";
}
if($conn->query($sql) === TRUE){

    echo "COOP coordinator DELETED!!";
}else{
    echo "error:" . $sql . "<br>" . $conn->error;
}

$conn->close();

?>