<!DOCTYPE html>
<html lang="en" dir="ltr" xmlns="http://www.w3.org/1999/html">
<head>
    <title>Delete opportunity</title>

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
          <a href="logout.php">  <img src="images/logout-512.png" style="position: relative;height: 32px; width: 25px;"> </a>
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
    <h3> Admin Management</h3>
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

        <p> <label> <b>Delete Opportunity:</b></label> <br>

        </p>
        <form action="delopps.php" method="post">

            <label>Select the opportunity:</label>  
        
            <?php
 include ("dbconfig.php");

$sql="SELECT * FROM opportunity"; 

            echo "<input autocomplete='off' name=OppID list='opp'>";
            echo "<datalist id='opp'>";
//echo "<select  name=OppID value=''>Select an opportunity</option>"; // list box select command

foreach ($conn->query($sql) as $row){//Array or records stored in $row

echo "<option  value=$row[OppID]>$row[Role]</option>"; 


}

 echo "</datalist>";
            
            
           
            
            
            
            
            
            
            
            
            
            
            
            ?>

<br><br>
            <input type="submit" accept="" value="submit" >
            <!-- <a href="site.html"> go to site information </a> -->
        </form>


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
