<?php
include ("dbconfig.php");

{
    $acdid=$_POST['ID'];
    




    $sql="Delete from student where Student_ID = '$acdid'";
}
if($conn->query($sql) === TRUE){

    echo "Student DELETED!!";
}else{
    echo "error:" . $sql . "<br>" . $conn->error;
}

$conn->close();

?>