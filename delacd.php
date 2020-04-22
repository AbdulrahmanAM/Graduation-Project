<?php
include ("dbconfig.php");

{
    $acdid=$_POST['ID'];
    




    $sql="Delete from academic_advisor where Ad_ID = '$acdid'";
}
if($conn->query($sql) === TRUE){

    echo "Academic advisor DELETED!!";
}else{
    echo "error:" . $sql . "<br>" . $conn->error;
}

$conn->close();

?>