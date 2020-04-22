<?php
include ("dbconfig.php");

{
    $acdid=$_POST['ID'];
    




    $sql="Delete from site_coordinator where SiteCoo_Email = '$acdid'";
}
if($conn->query($sql) === TRUE){

    echo "Site coordinator DELETED!!";
}else{
    echo "error:" . $sql . "<br>" . $conn->error;
}

$conn->close();

?>