<?php
include ("dbconfig.php");

{//checking empty and set values using the same approach from before
    $ID=$_POST['ID'];
 if (isset($_POST['submit']))
{
 $chkbox = $_POST['chk'];
 $i = 0;
 While($i<sizeof($chkbox))
 {
 $sql = "UPDATE student SET advised_by='$ID' WHERE Student_ID='".$chkbox[$i]."'";
 $conn->query($sql);
     $i++;
}

 header("location:advaddstud.php");
 }
}
$conn->close();

?>
