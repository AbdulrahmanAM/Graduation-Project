<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <title>Delete user</title>

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

        <p> <label> Please select the user to be added:</label>
            <select id="user" name="user" style="width: 212px;">
                <option>None</option>
                <option value="acdadvr">Academic advisor</option>
                <option value="siteadvr">Site advisor</option>
                <option value="student">Student</option>
                <option value="COOPcoord">COOP coordinator</option>
                <option value="sitecoord">Site coordinator</option>
            </select>
        </p>
        <form action="delstud.php" method="post">
            <p id="stud" style="display:none;">
            <label>Select ID</label>   <?php
 include ("dbconfig.php");
                   
$sql="SELECT * FROM student"; 

   echo "<input autocomplete='off' name=ID list='studid'>";
            echo "<datalist id='studid'>";
//echo "<select  name=OppID value=''>Select an opportunity</option>"; // list box select command

foreach ($conn->query($sql) as $row){//Array or records stored in $row

echo "<option  value=$row[Student_ID]> $row[Fname] </option>"; 


}

 echo "</datalist>";
             ?>
                <button type="submit">Delete</button>
            </p>
        </form>

        <form action="delacd.php" method="post">
            <p id="acdadv" style="display:none;">
         <label>Select ID</label>   <?php
 include ("dbconfig.php");
                   
$sql="SELECT * FROM academic_advisor"; 

   echo "<input autocomplete='off' name=ID list='acdid'>";
            echo "<datalist id='acdid'>";
//echo "<select  name=OppID value=''>Select an opportunity</option>"; // list box select command

foreach ($conn->query($sql) as $row){//Array or records stored in $row

echo "<option  value=$row[Ad_ID]> $row[Fname] </option>"; 


}

 echo "</datalist>";
             ?>

                <button type="submit">Delete</button>
            </p>
        </form>

        <form action="delsiteadv.php" method="post">
            <p id="siteadv" style="display:none;">

             <label>Select ID</label>  <?php
 include ("dbconfig.php");
                   
$sql="SELECT * FROM site_advisor"; 

   echo "<input autocomplete='off' name=ID list='siteadvid'>";
            echo "<datalist id='siteadvid'>";
//echo "<select  name=OppID value=''>Select an opportunity</option>"; // list box select command

foreach ($conn->query($sql) as $row){//Array or records stored in $row

echo "<option  value=$row[SiteAdv_Email]> $row[Fname] </option>"; 


}

 echo "</datalist>";
             ?>

                <button type="submit">Delete</button>
            </p>
        </form>

        <form action="delcoopcoord.php" method="post">
            <p id="coopcoor" style="display:none;">
               <label>Select ID</label> <?php
 include ("dbconfig.php");
                   
$sql="SELECT * FROM coop_coordinator"; 

   echo "<input autocomplete='off' name=ID list='cocoid'>";
            echo "<datalist id='cocoid'>";
//echo "<select  name=OppID value=''>Select an opportunity</option>"; // list box select command

foreach ($conn->query($sql) as $row){//Array or records stored in $row

echo "<option  value=$row[CC_ID]> $row[Fname] </option>"; 


}

 echo "</datalist>";
             ?>
                <button type="submit">Delete</button>
            </p>
        </form>

        <form action="delsitecoord.php" method="post">
            <p id="sitecoord" style="display:none;">
              <label>Select ID</label>  <?php
 include ("dbconfig.php");
                   
$sql="SELECT * FROM site_coordinator"; 

   echo "<input autocomplete='off' name=ID list='sitecoid'>";
            echo "<datalist id='sitecoid'>";
//echo "<select  name=OppID value=''>Select an opportunity</option>"; // list box select command

foreach ($conn->query($sql) as $row){//Array or records stored in $row

echo "<option  value=$row[SiteCoo_Email]> $row[Fname] </option>"; 


}

 echo "</datalist>";
             ?>

                <button type="submit">Delete</button>
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
