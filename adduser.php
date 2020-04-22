<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <title>Add user</title>

    <link rel="stylesheet" href="styles/layout.css" type="text/css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
<!--  To choose specific user to add -->
    <script>
        $(document).ready(function (){
            $("#user").change(function() {
                // foo is the id of the other select box
                if ($(this).val() == "student") {
                    $("#stud").show();
                }else{
                    $("#stud").hide();
                }
                if ($(this).val() == "acdadvr") {
                    $("#acdadv").show();
                }else{
                    $("#acdadv").hide();
                }
                if ($(this).val() == "siteadvr") {
                    $("#siteadv").show();
                }else{
                    $("#siteadv").hide();
                }
                if ($(this).val() == "COOPcoord") {
                    $("#coopcoor").show();
                }else{
                    $("#coopcoor").hide();
                }
                if ($(this).val() == "sitecoord") {
                    $("#sitecoord").show();
                }else{
                    $("#sitecoord").hide();
                }
                if ($(this).val() == "addadmin") {
                    $("#Admin").show();
                }else{
                    $("#Admin").hide();
                }
            });
        });
    </script>
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

    <p> <label><b>Please select the user to be added</b>:</label>
        <select id="user" name="user" style="width: 212px;">
           <option>None</option>
            <option value="acdadvr">Academic advisor</option>
            <option value="siteadvr">Site advisor</option>
            <option value="student">Student</option>
            <option value="COOPcoord">COOP coordinator</option>
            <option value="sitecoord">Site coordinator</option>
            <option value="addadmin">Admin</option>
        </select>
    </p>
<form action="addstudque.php" method="post">
    <p id="stud" style="display:none;">
        
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
 echo "</select>";// Closing of list box ?>
        
      <label>Select ID</label>  
        <?php
 include ("dbconfig.php");
                   
//$sql="SELECT name,id FROM student"; 

$sql="SELECT * FROM account where Role='Student' "; 

/* You can add order by clause to the sql statement if the names are to be displayed in alphabetical order */

echo "<select name=ID value=''>User ID</option>"; // list box select command

foreach ($conn->query($sql) as $row){//Array or records stored in $row

echo "<option value=$row[ID]>$row[ID]</option>"; 

/* Option values are added by looping through the array */ 

}


 echo "</select>";// Closing of list box ?>
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
 </p>
    </form>
    
    
<!--Academic advisor -->
    <form action="addacdadv.php" method="post">
     <p id="acdadv" style="display:none;">
                 <label>Select ID</label>  
         <?php
 include ("dbconfig.php");
                   
//$sql="SELECT name,id FROM student"; 

$sql="SELECT * FROM account where Role='AcdAdv' or Role='AdvCoo'"; 

/* You can add order by clause to the sql statement if the names are to be displayed in alphabetical order */

echo "<select name=ID value=''>User ID</option>"; // list box select command

foreach ($conn->query($sql) as $row){//Array or records stored in $row

echo "<option value=$row[ID]>$row[ID]</option>"; 

/* Option values are added by looping through the array */ 

}

 echo "</select>";// Closing of list box ?>
         <br><br><label>Academic advisor first name:</label> <input type="text" name="acdfname">
         <label>Academic advisor last name:</label> <input type="text" name="acdlname"> <br><br>
          <label>Sex:</label>  Male<input type="radio" name="sexacd" value="M">  Female<input type="radio" name="sexacd" value="F">   <br><br>
         <label>Email:</label> <input type="email" name="acdemail" placeholder="*******@uod.edu.sa">

         <label>Phone number:</label> <input type="tel" name="acdphnum"> <br><br>

         <button type="submit">Add</button>
     </p>
</form>
<!-----------------------Site advisor ------------------->
    <form action="siteadv.php" method="post">
     <p id="siteadv" style="display:none;">
         <label>Select ID</label>  
         <?php
 include ("dbconfig.php");
                   
//$sql="SELECT name,id FROM student"; 

$sql="SELECT * FROM account where Role='SiteAdv'"; 

/* You can add order by clause to the sql statement if the names are to be displayed in alphabetical order */

echo "<select name=ID value=''>User ID</option>"; // list box select command

foreach ($conn->query($sql) as $row){//Array or records stored in $row

echo "<option value=$row[ID]>$row[ID]</option>"; 

/* Option values are added by looping through the array */ 

}


 echo "</select>";// Closing of list box ?>
    <br> <br>
          <label>Select Site</label> 
         <?php
 include ("dbconfig.php");
                   
//$sql="SELECT name,id FROM student"; 

$sql="SELECT * FROM site "; 

/* You can add order by clause to the sql statement if the names are to be displayed in alphabetical order */

echo "<select name=site value=''>Company name</option>"; // list box select command

foreach ($conn->query($sql) as $row){//Array or records stored in $row

echo "<option value=$row[Site_ID]>$row[CompanyName]</option>"; 

/* Option values are added by looping through the array */ 

}


 echo "</select>";// Closing of list box ?>
         
         <br><br> <label>Site advisor first name:</label> <input type="text" name="sitefname">
         <label>Site advisor last name:</label> <input type="text" name="sitelname"> <br><br>
        

         <label>Phone number:</label> <input type="tel" name="sitephnum"> <br><br>

         <button type="submit">Add</button>
     </p>
        </form>
<!------------------------------------------------------------------------------>
    <form action="coopcoordque.php" method="post">
        
     <p id="coopcoor" style="display:none;">
         <label>Select ID</label>
         <?php
 include ("dbconfig.php");
                   
//$sql="SELECT name,id FROM student"; 

$sql="SELECT * FROM account where Role='CoCoo' or Role='AdvCoo' "; 

/* You can add order by clause to the sql statement if the names are to be displayed in alphabetical order */

echo "<select name=ID value=''>User ID</option>"; // list box select command

foreach ($conn->query($sql) as $row){//Array or records stored in $row

echo "<option value=$row[ID]>$row[ID]</option>"; 

/* Option values are added by looping through the array */ 

}


 echo "</select>";// Closing of list box ?>
         <br><br><label>COOP coordinator first name:</label> <input type="text" name="coopfname">
         <label>COOP coordinator last name:</label> <input type="text" name="cooplname"> <br><br>
          <label>Sex:</label>  Male<input type="radio" name="sexcoop" value="M">  Female<input type="radio" name="sexcoop" value="F">   <br><br>
         <label>Email:</label> <input type="email" name="coopemail" placeholder="*******@uod.edu.sa">

         <label>Phone number:</label> <input type="tel" name="coopphnum"> <br><br>

         <button type="submit">Add</button>
     </p>
        </form>
<!------------------------------------------------------------------------------>
    <form action="sitecoord.php" method="post">
     <p id="sitecoord" style="display:none;">
          <label>Select ID</label>
          <?php
 include ("dbconfig.php");
                   
//$sql="SELECT name,id FROM student"; 

$sql="SELECT * FROM account where Role='SiteCoo' "; 

/* You can add order by clause to the sql statement if the names are to be displayed in alphabetical order */

echo "<select name=ID value=''>User ID</option>"; // list box select command

foreach ($conn->query($sql) as $row){//Array or records stored in $row

echo "<option value=$row[ID]>$row[ID]</option>"; 

/* Option values are added by looping through the array */ 

}


 echo "</select>";// Closing of list box ?>
    <br><br> 
          <label>Select Site</label> 
         <?php
 include ("dbconfig.php");
                   
//$sql="SELECT name,id FROM student"; 

$sql="SELECT * FROM site "; 

/* You can add order by clause to the sql statement if the names are to be displayed in alphabetical order */

echo "<select name=site value=''>Company name</option>"; // list box select command

foreach ($conn->query($sql) as $row){//Array or records stored in $row

echo "<option value=$row[Site_ID]>$row[CompanyName]</option>"; 

/* Option values are added by looping through the array */ 

}


 echo "</select>";// Closing of list box ?>
         
        <br><br> <label>Site coordinator first name:</label> <input type="text" name="sitecoordfname">
         <label>Site coordinator last name:</label> <input type="text" name="sitecoordlname"> <br><br>
       

         <label>Phone number:</label> <input type="tel" name="sitecoordphnum"> <br><br>

         <button type="submit">Add</button>
     </p>
        </form>
    
    
    
    
     <form action="addadmin.php" method="post">
     <p id="Admin" style="display:none;">
          <label>Select ID</label>
          <?php
 include ("dbconfig.php");
                   
//$sql="SELECT name,id FROM student"; 

$sql="SELECT * FROM account where Role='Admin' "; 

/* You can add order by clause to the sql statement if the names are to be displayed in alphabetical order */

echo "<select name=ID value=''>User ID</option>"; // list box select command

foreach ($conn->query($sql) as $row){//Array or records stored in $row

echo "<option value=$row[ID]>$row[ID]</option>"; 

/* Option values are added by looping through the array */ 

}


 echo "</select>";// Closing of list box ?>
   
         
        <br><br> <label>Admin first name:</label> <input type="text" name="adminfname">
         <label>Admin last name:</label> <input type="text" name="Adminlname"> <br><br>
       <label>Sex:</label>  Male<input type="radio" name="sex" value="M">  Female<input type="radio" name="sex" value="F">

         <br><br><label>Phone number:</label> <input type="tel" name="adminphnum"> <br><br>

         
          <label>Email:</label> <input type="email" name="adminemail" placeholder="212*****@uod.edu.sa">
        <br><br> <button type="submit">Add</button>
     </p>
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
