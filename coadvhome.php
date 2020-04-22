<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <title>Academic advisor Home</title>

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
             <a href="coadvhome.php"> <img src="images/home.png" style="position: relative; bottom: 3px;  height: 32px; width: 25px;"> </a>
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
   <h3> Academic advisor Management</h3>
   <ul id="drop-nav" style="border: solid; width: 20%; height: 65%;">
        <li><a style="color:#4268A0" href="acdaddstud.php"><b>Add student</b></a><br>
        <li><a style="color:#4268A0" href="gradeStudent.php"><b>Grade students report</b></a>
             <br>
        </li>
        
        </li>  
        <li><a style="color:#4268A0" href="SearchStud.php"><b>Search for student</b></a><br>

        </li>
    <li><a style="color:#4268A0" href="msg.php"><b>Messages</b></a><br>

        </li>
        <li><a style="color:#4268A0" href="postAnn.php"><b>Post announcement</b></a><br>

        </li>
    <li><a style="color:#4268A0" ><b>Upload/View documents</b></a>
            <ul>
                <li><a style="color:#4268A0" href="updoacd.php">Upload documents</a></li>
                <li><a style="color:#4268A0" href="view.php">View documents</a></li>
                
            </ul>
             
<br><br><br><br>
        </li>
    </ul>


    <div style="position: relative; bottom: 66%; left: 22%; border: solid; width: 50%;">

        <p> <label> <b> Academic advisor information: </b> </label>

        </p>
       <?php
 include ("dbconfig.php");
                   
//$sql="SELECT name,id FROM student"; 

$sql="SELECT * FROM academic_advisor, account WHERE account.ID = academic_advisor.Ad_ID and account.ID='".$_SESSION['studlogin']."'
";



echo "<table><hr>"; // list box select command

foreach ($conn->query($sql) as $row){//Array or records stored in $row

     echo "<tr>  <td value=$row[Ad_ID]> <label><b> ID: </b></label> $row[Ad_ID]</td>";
    
echo "<tr> <td value=$row[Ad_ID]> <label> <b> Name: </b> </label> $row[Fname] $row[Lname]</td> </tr> "; 
  
    echo "<tr>  <td value=$row[Ad_ID]> <label><b> Email: </b></label> $row[Email]</td>"; 
    
     echo "<tr>  <td value=$row[Ad_ID]> <label><b> Phone: </b></label> $row[Phone]</td>"; 
/* Option values are added by looping through the array */ 

}

 echo "</table>";// Closing of list box ?>


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
