
<?php
include ("dbconfig.php");

{//checking empty and set values using the same approach from before
    $SiteCoo_Email=$_POST['id'];
    
    $Password=$_POST['password'];
    $studname=$_POST['studfname'];
    $studlname=$_POST['studlname'];
    
    
    $studsex=$_POST['sex'];
    $studemail=$_POST['studemail'];
$gpa=$_POST['gpa'];
    $major=$_POST['major'];
    $studphnum=$_POST['studlphnum'];
    $level=$_POST['level'];
$term = $_POST['Term'];
$advised= $_POST['advised'];

    






   $sql= "INSERT INTO `c.t.m.s.`.`account` (`ID`,  `Password`, `Role`) VALUES ('$SiteCoo_Email',  '$Password', 'Student')
";

    

 
}


if($conn->query($sql) === TRUE){

   
      //    $SiteCoo_Email=$conn->insert_id;
    $sqli = "INSERT INTO `student`(`Student_ID`, `advised_by`, `Term`, `Fname`, `Lname`, `Sex`, `Phone`, `Email`, `GPA`, `Major`, `Level`) VALUES ('$SiteCoo_Email','$advised','$term' ,'$studname','$studlname','$studsex','$studphnum','$studemail','$gpa','$major','$level')";

    if($conn->query($sqli) === TRUE){

   echo "<script>
alert('STUDENT HAS BEEN ADDED SUCCESSFULLY');
window.location.href='acdaddstud.php';
</script>";
}else{
    echo  "<script>
alert('Error while filling the form!!');
window.location.href='acdaddstud.php';
</script>";
        echo "error:" . $sqli . "<br>" . $conn->error;
}
}else{
    echo  "<script>
alert('Error while filling the form!!');
window.location.href='acdaddstud.php';
</script>";
    echo "error:" . $sql . "<br>" . $conn->error;
}
$conn->close();





?>
