<!DOCTYPE html>
<html lang="en" dir="ltr" xmlns="http://www.w3.org/1999/html">
<head>
    <title>Add existing student</title>

    <link rel="stylesheet" href="styles/layout.css" type="text/css">

</head>
<body>
    
  
<div class="wrapper row1">
    <header id="header" class="clear">

        <div id="hgroup">

            <?php 
            session_start();


if(isset($_SESSION['studlogin']))
{

echo "<p> Welcome &nbsp;" .$_SESSION['studlogin']."</p";
}
            
            
            
            ?> 

          <p>
            <img src="images/logo.png" style="margin-left: 160%;">
             <a href="coadvhome.php"> <img src="images/home.png" style="position: relative; height: 32px; width: 25px; "> </a>
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
    </script><hr>
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

        <p> <label> Select students:</label>

        </p>
       <form action="advaddstuds.php" method="post">

            
            <?php
 include ("dbconfig.php");
           
          echo "<input name=ID value=".$_SESSION['studlogin']." hidden='hidden'>";
           
           $sql="SELECT * FROM student"; 


/* You can add order by clause to the sql statement if the names are to be displayed in alphabetical order */

 

//Array or records stored in $row
echo"<div id='table-wrapper'>
  <div id='table-scroll'>
    <table border='3'>
        <thead>
            <tr>
                <th><span class='text'>ID</span></th>
                <th><span class='text'>Name</span></th>
                <th><span class='text'>Select</span></th>
             
            </tr>
        </thead> ";
     foreach ($conn->query($sql) as $row){;   echo" <tbody style='border-style:dotted;'>
           
              <tr> 
                    <td>$row[Student_ID]</td><td>$row[Fname]</td> <td><input value=$row[Student_ID] name='chk[]' type='checkbox'/> </td>
              </tr>";}
           
           
echo"
       
       </tbody>
    </table>
  </div>
</div>";
    
?><script>
           function checkAll(ele) {
     var checkboxes = document.getElementsByTagName('input');
     if (ele.checked) {
         for (var i = 0; i < checkboxes.length; i++) {
             if (checkboxes[i].type == 'checkbox') {
                 checkboxes[i].checked = true;
             }
         }
     } else {
         for (var i = 0; i < checkboxes.length; i++) {
             console.log(i)
             if (checkboxes[i].type == 'checkbox') {
                 checkboxes[i].checked = false;
             }
         }
     }
 };
           </script>
                                            

<br> 
           


           
            <input type='checkbox' onchange='checkAll(this)'/> Check All
            
       <hr>

            
            

           <input type="submit" accept="" name="submit" value="Add" >
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
