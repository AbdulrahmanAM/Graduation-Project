
<?php
include ("dbconfig.php");

{//checking empty and set values using the same approach from before
    $ID=$_POST['OppID'];
   




    $sql= "DELETE FROM `opportunity` WHERE OppID=$ID";


}


if($conn->query($sql) === TRUE){

    echo "Registration successed";
}else{
    echo "error:" . $sql . "<br>" . $conn->error;
}
header("location: delopp.php");
$conn->close();

?>
