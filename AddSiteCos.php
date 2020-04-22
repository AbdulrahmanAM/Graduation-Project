
<?php
include ("dbconfig.php");

{//checking empty and set values using the same approach from before
    $SiteCoo_Email=$_POST['SiteCoo_Email'];
    $Username=$_POST['Username'];
    $Password=$_POST['Password'];
    $CompanyName=$_POST['CompanyName'];
    $Fname=$_POST['Fname'];
    $Lname=$_POST['Lname'];
    $Phone=$_POST['Phone'];








   $sql= "INSERT INTO `c.t.m.s.`.`account` (`ID`, `Username`, `Password`, `Role`) VALUES ('$SiteCoo_Email', '$Username', '$Password', 'SiteCoo')
";

    

 
}


if($conn->query($sql) === TRUE){

    echo "Registration successed";
      //    $SiteCoo_Email=$conn->insert_id;
    $sqli= "INSERT INTO `c.t.m.s.`.`site_coordinator` (`SiteCoo_Email`, `CompanyName`, `Fname`, `Lname`, `Phone`) VALUES ('$SiteCoo_Email', '$CompanyName', '$Fname', '$Lname', '$Phone')";
    if($conn->query($sqli) === TRUE){

    echo "Registration successed";
}else{
    echo "error:" . $sqli . "<br>" . $conn->error;
}
}else{
    echo "error:" . $sql . "<br>" . $conn->error;
}
header("location: addsiteco.php");
$conn->close();





?>
