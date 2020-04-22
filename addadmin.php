
<?php
include ("dbconfig.php");

{
    $acdid=$_POST['ID'];
    $fname=$_POST['adminfname'];
    $lname=$_POST['Adminlname'];
    $acdsex=$_POST['sex'];
    $acdemail=$_POST['adminemail'];
    $acdphone=$_POST['adminphnum'];




    $sql="insert into admin (`A_ID`, `Fname`,`Lname`,`Sex`,`Email`,`Phone`) values('$acdid','$fname','$lname',' $acdsex','$acdemail ',' $acdphone')";
}
if($conn->query($sql) === TRUE){

    echo "Admin added";
}else{
    echo "error:" . $sql . "<br>" . $conn->error;
}
header("location: AdminHome.php");
$conn->close();

?>