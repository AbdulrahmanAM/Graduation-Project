<?php
include ("dbconfig.php");

{
    $userid=$_POST['userid'];
    $uname=$_POST['uname'];
    $upass=$_POST['pass'];
    $Role=$_POST['role'];



    $sql="insert into account (`ID`,`Role`, `Username`,`Password`) values('$userid','$Role','$uname','$upass')";
}
if($conn->query($sql) === TRUE){

    echo "Registration successed";
}else{
    echo "error:" . $sql . "<br>" . $conn->error;
}
header("location: adduser.php");
$conn->close();

?>