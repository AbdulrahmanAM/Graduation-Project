<!DOCTYPE html>
<html lang="en" dir="ltr" xmlns="http://www.w3.org/1999/html">
<head>
    <title>Add opportunity</title>

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
    </script>  <hr>
    <h3> COOP coordinator</h3>
      <ul id="drop-nav" style="border: solid; width: 20%; height: 65%;">
        <li><a style="color:#4268A0" href="#"><b style="font-size:12pt;">Opportunities</b></a>
            <ul>
                <li><a style="color:#4268A0" href="AddOppCoo.php">Add public opportunity</a></li>
                <li><a style="color:#4268A0" href="AddOppStud.php">Add private opportunity</a></li>
                
            </ul>
        </li> <br><br> <br><br> <br> <br> <br><br> <br>
        <li><a style="color:#4268A0" href="addSiteCo.php"><b style="font-size: 12pt;">Site coordinator account</b></a>
            
        </li> 
    </ul>

    <div style="position: relative; bottom: 66%; left: 22%; border: solid; width: 50%;">

        <p> <label> <b>Add Site:</b></label>

        </p>
        <form action="addsites.php" method="post">

                <label>Site ID:</label> <input accept="" type="text" name="Site_ID" >
            
            
            <br><br>
            
            
               
                <label>Company name:</label> <input type="text" accept="" name="CompanyName"> <br><br>
                 <label>Description:</label> <input accept="" type="text" name="Description"> <br><br>
                 <label>Location:</label> <input accept="" type="text" name="Location"> <br><br>



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
