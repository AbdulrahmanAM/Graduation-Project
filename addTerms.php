
<?php
include ("dbconfig.php");

{//checking empty and set values using the same approach from before
    $ID=$_POST['Terms_ID'];
    $Term=$_POST['Term'];
    $Sdate=$_POST['Sdate'];
    $Edate=$_POST['Edate'];
   





    $sql= "INSERT INTO `c.t.m.s.`.`terms` (`Terms_ID`, `Term`, `StartDate`, `EndDate`) VALUES ('$ID', '$Term', '$Sdate', '$Edate')";


}


if($conn->query($sql) === TRUE){

    echo "Registration successed";
}else{
    echo "error:" . $sql . "<br>" . $conn->error;
}
header("location: addterm.php");
$conn->close();

?>
