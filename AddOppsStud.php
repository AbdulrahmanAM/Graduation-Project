
<?php
include ("dbconfig.php");

{//checking empty and set values using the same approach from before
    $ID=$_POST['Stud_ID'];
    $OppID=null;
    $Status=$_POST['Status'];
    $SiteID=$_POST['SiteID'];
    $Term=$_POST['Term'];
    $Role=$_POST['Role'];






   $sql= "INSERT INTO `c.t.m.s.`.`opportunity` (`OppID`, `SiteID`, `Term`, `NumOfOpps`, `Role`) VALUES ('$OppID', '$SiteID', '$Term', '0', '$Role')
";

    

 
}


if($conn->query($sql) === TRUE){

    echo "Registration successed";
          $OppID=$conn->insert_id;
    $sqli= "INSERT INTO `c.t.m.s.`.`student_requests` (`Stud_ID`, `Opp_ID`, `Date`, `Status`) VALUES ('$ID', '$OppID', CURRENT_TIMESTAMP , '$Status')";
    if($conn->query($sqli) === TRUE){

    echo "Registration successed";
}else{
    echo "error:" . $sqli . "<br>" . $conn->error;
}
}else{
    echo "error:" . $sql . "<br>" . $conn->error;
}
header("location: addoppcoo.php");
$conn->close();





?>
