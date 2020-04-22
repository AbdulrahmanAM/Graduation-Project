<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <title>Administration</title>

    <link rel="stylesheet" href="styles/layout.css" type="text/css">

</head>
<body>
<div class="wrapper row1">
    <header id="header" class="clear">

        <div id="hgroup">
<p>
            <div id="logo">
            <img src="images/logo.png">
            </div></p>
        
            <?php 
            session_start();


if(isset($_SESSION['studlogin']))
{

echo "<p> Welcome &nbsp;" .$_SESSION['studlogin']."</p";
}
            
            
            
            ?> 
          <p>
<a href="AdminHome.php"> <img src="images/home.png" style="position: relative; bottom: 3px;  height: 32px; width: 25px;"> </a>
<a href="logout.php"><img src="images/logout-512.png" style="position: relative;height: 32px; width: 25px;"> </a>
            </p>
        
        </div>
    </header>
</div>
<!-- content -->
<div class="wrapper row2">



      <br>
    <p id="date"></p>

    <script>
        var date = new Date();
        document.getElementById("date").innerHTML = date.toDateString();
    </script> <hr>

    <ul id="drop-nav" style="border: solid; width: 20%; height: 75%;">
        <li><a style="color:#4268A0;" href="#"><b>Users</b></a>
            <ul>
                <li><a style="color:#4268A0" href="createacc.php">Add user</a></li>
                <li><a style="color:#4268A0" href="deluser.php">Delete user</a></li>
                <li><a style="color:#4268A0" href="upduser.php">Update existing user</a></li>
            </ul>
        </li> <br><br> <br><br> <br> <br> <br><br> <br>
        <li><a style="color:#4268A0" href="#"><b>Opportunities</b></a>
            <ul>
                <li><a style="color:#4268A0" href="AddOpp.php">Add opportunity</a></li>
                <li><a style="color:#4268A0" href="delopp.php">Delete opportunity</a></li>
                <li><a style="color:#4268A0" href="updOpp.php">Update opportunity</a></li>
            </ul>
        </li> <br><br> <br><br> <br> <br> <br><br> <br>
        <li><a style="color:#4268A0" href="#"><b>System Updates</b></a>
            <ul>
            <li><a style="color:#4268A0" href="addTerm.php">Add term</a></li></ul></a>

        </li>
    </ul>
    
    
    
    <div style="position: relative; bottom: 76%; left: 22%; border: solid; width: 50%;">

        <p> <label style="font-size:13pt;"> <b>Admin Information:</b></label>

            <?php
 include ("dbconfig.php");
                   
//$sql="SELECT name,id FROM student"; 

$sql="SELECT * FROM Admin, account WHERE account.ID = Admin.A_ID and  account.ID='".$_SESSION['studlogin']."'
";



echo "<table><hr>"; // list box select command

foreach ($conn->query($sql) as $row){//Array or records stored in $row

     echo "<tr>  <td value=$row[A_ID]> <label><b> ID: </b></label> $row[A_ID]</td>";
    
echo "<tr> <td value=$row[A_ID]><label> <b> Name: </b> </label> $row[Fname] $row[Lname]</td> </tr> "; 
  
    echo "<tr>  <td value=$row[A_ID]> <label><b> Email: </b></label> $row[Email]</td>"; 
    
     echo "<tr>  <td value=$row[A_ID]> <label><b> Phone: </b></label> $row[Phone]</td>"; 
/* Option values are added by looping through the array */ 

}

 echo "</table>";// Closing of list box ?>
            
        </p>
     

    </div>
</div>
<!-- Footer -->
<div class="wrapper row3">
    <footer id="footer" class="clear">
        <p class="fl_left">Copyright &copy; 2016 - All Rights Reserved - Group: 8114</p>
    </footer>
</div>
</body>
</html>
