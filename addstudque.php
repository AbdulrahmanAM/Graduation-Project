
<?php
include ("dbconfig.php");

{
    $studname=$_POST['studfname'];
    $studlname=$_POST['studlname'];
    
    $studid=$_POST['ID'];
    $studsex=$_POST['sex'];
    $studemail=$_POST['studemail'];
$gpa=$_POST['gpa'];
    $major=$_POST['major'];
    $studphnum=$_POST['studlphnum'];
    $level=$_POST['level'];
$term = $_POST['Term'];


    $sql = "INSERT INTO `student`(`Student_ID`,  `Term`, `Fname`, `Lname`, `Sex`, `Phone`, `Email`, `GPA`, `Major`, `Level`) VALUES ('$studid','$term' ,'$studname','$studlname','$studsex','$studphnum','$studemail','$gpa','$major','$level')";
}
if($conn->query($sql) === TRUE){

    echo "Registration successed";
}else{
    echo "error:" . $sql . "<br>" . $conn->error;
}
header("location: AdminHome.php");
$conn->close();

?>