
<?php
include ("dbconfig.php");

{//checking empty and set values using the same approach from before
    $ID=$_POST['OppID'];
    $SiteID=$_POST['SiteID'];
    $Term=$_POST['Term'];
    $NumOfOpps=$_POST['NumOfOpps'];
    $Role=$_POST['Role'];





    $sql= "INSERT INTO `c.t.m.s.`.`opportunity` (`OppID`, `SiteID`, `Term`, `NumOfOpps`, `Role`) VALUES (NULL,'$SiteID', '$Term', '$NumOfOpps', '$Role')";


}


if($conn->query($sql) === TRUE){

    echo "Registration successed";
}else{
    echo "error:" . $sql . "<br>" . $conn->error;
}
header("location: addopps.php");
$conn->close();

?>
