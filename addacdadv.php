
<?php
include ("dbconfig.php");

{
    $acdid=$_POST['ID'];
    $fname=$_POST['acdfname'];
    $lname=$_POST['acdlname'];
    $acdsex=$_POST['sexacd'];
    $acdemail=$_POST['acdemail'];
    $acdphone=$_POST['acdphnum'];




    $sql="insert into academic_advisor (`Ad_ID`, `Fname`,`Lname`,`Sex`,`Phone`,`Email`) values('$acdid','$fname','$lname',' $acdsex',' $acdphone','$acdemail ')";
}
if($conn->query($sql) === TRUE){

    echo "Registration successed";
}else{
    echo "error:" . $sql . "<br>" . $conn->error;
}
header("location: AdminHome.php");
$conn->close();

?>