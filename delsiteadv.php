<?php
include ("dbconfig.php");

{
    $acdid=$_POST['ID'];
    




    $sql="Delete from site_advisor where SiteAdv_Email = '$acdid'";
}
if($conn->query($sql) === TRUE){

    echo "Site advisor DELETED!!";
}else{
    echo "error:" . $sql . "<br>" . $conn->error;
}

$conn->close();

?>