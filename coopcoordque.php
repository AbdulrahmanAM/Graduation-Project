<?php
include ("dbconfig.php");

{
    $acdid=$_POST['ID'];
    $fname=$_POST['coopfname'];
    $lname=$_POST['cooplname'];
    $acdsex=$_POST['sexcoop'];
    $acdemail=$_POST['coopemail'];
    $acdphone=$_POST['coopphnum'];




    $sql="insert into coop_coordinator (`CC_ID`, `Fname`,`Lname`,`Sex`,`Phone`,`Email`) values('$acdid','$fname','$lname',' $acdsex',' $acdphone','$acdemail ')";
}
if($conn->query($sql) === TRUE){

    echo "Registration successed";
}else{
    echo "error:" . $sql . "<br>" . $conn->error;
}
header("location: AdminHome.php");
$conn->close();

?>