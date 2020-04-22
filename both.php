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
            
            <p><div id="logo">
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
              
          <a href="logout.php">  <img src="images/logout-512.png" style="position: relative;height: 32px; width: 25px;"> </a>
            </p>
        </div>
    </header>
</div>
    
<!-- content -->
<div class="wrapper row2">



    
    <p id="date"></p>

    <script>
        var date = new Date();
        document.getElementById("date").innerHTML = date.toDateString();
    </script>  
    
    
    <!-- Change the information based on students menu --> 
    
    <hr>
    
    <br><br>
    
    <h5 style="color:darkgrey;margin-left: 43%; padding-top: 40px;font-size: large;">Login in as</h5><br>
    
<!--<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
   <div style="position: relative; bottom: 66%; left: 22%; border: solid; width: 50%;">-->
    
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    
       <a href="coadvhome.php"> <img src="images/bo_aa.JPG" style="position: relative;height: 300px; width: 200px;"></a>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <a href="cocc.php"><img src="images/bo_cc.JPG" style="position: relative;height: 300px; width: 200px;"></a>

            
       


  <!--  </div>-->
</div>
<!-- Footer -->
<div class="wrapper row3">
    <footer id="footer" class="clear">
        <p class="fl_left">Copyright &copy; 2016 - All Rights Reserved - Group: 8114</p>
    </footer>
</div>
</body>
</html>
