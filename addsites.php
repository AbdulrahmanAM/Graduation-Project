
<?php
include ("dbconfig.php");

{//checking empty and set values using the same approach from before
    $ID=$_POST['Site_ID'];
    $Cname=$_POST['CompanyName'];
    $desc=$_POST['Description'];
    $location=$_POST['Location'];
   





    $sql= "INSERT INTO `c.t.m.s.`.`site` (`Site_ID`, `CompanyName`, `Description`, `Location`) VALUES ('$ID', '$Cname', '$desc', '$location')";


}


if($conn->query($sql) === TRUE){

    echo "Registration successed";
}else{
    echo "error:" . $sql . "<br>" . $conn->error;
}
header("location: addoppcoo.php");
$conn->close();

?>
