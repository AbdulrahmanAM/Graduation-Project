<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <title>Add student</title>

    <link rel="stylesheet" href="styles/layout.css" type="text/css">

</head>
<body>
<div class="wrapper row1">
    <header id="header" class="clear">
<!-- in all pages expect login page -->
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
        <li><a style="color:#4268A0" href="acdaddstud.php"><b>Add student</b></a> <ul>
            <li><a style="color:#4268A0" href="AdvAddStud.php">Add existing student</a></li> </ul> <br> <br>
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
        
 <p> <label> <b>Add Student:</b></label>
     
       <form action="acdaddstuds.php" method="post">
           
           <label>Select Term:</label>
        <?php
 include ("dbconfig.php");
                   
//$sql="SELECT name,id FROM student"; 

$sql="SELECT * FROM terms"; 

/* You can add order by clause to the sql statement if the names are to be displayed in alphabetical order */

echo "<select name=Term value=''>Term</option>"; // list box select command

foreach ($conn->query($sql) as $row){//Array or records stored in $row

echo "<option value=$row[Terms_ID]>$row[Term]</option>"; 

/* Option values are added by looping through the array */ 

}
 echo "</select>";


// Closing of list box ?> <?php 
           echo "<input value=".$_SESSION['studlogin']." name='advised' hidden='hidden' >";?>
    <label>ID:</label> <input type="text" name="id"> 
     <label>Password:</label> <input type="password" name="password"> 
                 
        
    <br><br> <label>Student first name:</label> <input type="text" name="studfname">
     <label>Student last name:</label> <input type="text" name="studlname"> <br><br>
       
      <label>Sex:</label>  Male<input type="radio" name="sex" value="M">  Female<input type="radio" name="sex" value="F">   <br><br>
     <label>Email:</label> <input type="email" name="studemail" placeholder="212*****@uod.edu.sa"> <label>GPA:</label> <input type="text" name="gpa"> <br><br>
     <label>Major:</label> <select name="major">
     <option value="CS"> CS</option>
     <option value="CIS">CIS</option>
 </select>
     <label>Phone number:</label> <input type="tel" name="studlphnum"> <br><br>
     <label>Level:</label> <select name="level">
     <option value="5"> Level 5</option>
     <option value="6">Level 6</option>
     <option value="7">Level 7</option>
     <option value="8">Level 8</option>
 </select> <br><br>
     <button type="submit">Add</button>
 
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
