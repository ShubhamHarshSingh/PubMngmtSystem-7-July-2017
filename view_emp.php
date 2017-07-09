<html>
<head>
<title>Delete Data </title>
<meta content="noindex, nofollow" name="robot">
<link rel="stylesheet" href="css/w3.css">
<link href="css/menu.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/admin.css">
        <script src="js/jquery.js" type="text/javascript"></script>
          <script src="js/script.js" type="text/javascript"></script>
        
</head>
<body>
     <div class="header">

            <ul id="nav">
                <li><a href="logout.php">Logout</a></li>
                
                <li><a class="hsubs" href="dashboard.php">Dashboard</a>
                   
                </li>
                <div id="lavalamp"></div>
            </ul>

        </div>
    



<div id="page" style="margin-left: 1px;">
<div id="left"style="height:auto;" >
<div id="cssmenu" style="height:100%;">
<ul>
   
   <li class='active has-sub'><a href='#'>Employee</a>
      <ul>
               
          <li><a href='select_emp.php'><span>Update</span></a></li>
          <li><a href='delete_emp.php'><span>Remove/Delete</span></a></li>
               <li class='last'><a href='#'><span>View</span></a></li>
            </ul>
         </li>
         <li class='has-sub'><a href='#'><span>Publication</span></a>
            <ul>
                <li><a href='#'><span>Add</span></a></li>
              <li><a href='#'><span>Update</span></a></li>
              
               <li class='last'><a href='#'><span>View</span></a></li>
              
         
            </ul>
         </li>
         <li class='has-sub'><a href='#'><span>Dispatch</span></a>
            <ul>
                <li><a href='dispatch.php'><span>Dispatch Schedule</span></a></li>
                <li><a href='dispatchdetails.php'><span>Dispatch Status</span></a></li>
                
            </ul>
         </li>
   <li><a href='#'><span>About Us</span></a></li>
   <li><a href='#'><span>Contact Us</span></a></li>
</ul>     
</div>
</div>
    <div id="slider" style="height:100%; position:absolute;">
    <?php
         $conn=new mysqli("localhost","root","","reg");
        if ($conn->connect_error) 
            {
             die("Connection failed: " . $conn->connect_error);
            }
            
        echo "<div class='w3-container '>
                <table class='w3-table-all w3-centered '>
                <tr>
                <th>Id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Designation</th>
                <th>Gender</th>
                <th>Date of Birth</th>
                <th>Mobile</th>
                <th>Date of joining</th>
                </tr>";
        
        $sql="SELECT * from tbl_emp_det";
        $ds=$conn->query($sql);
        $d=mysqli_num_rows($ds);
        
        
        for($i=0;$i<=$d;$i++)
        {
            $result=$ds->fetch_assoc();
        
        
        {
        echo "<tr><td>".$result["emp_id"].
                "</td><td>".$result["emp_fname"].
                "</td><td>".$result["emp_lname"].
                "</td><td>".$result["emp_desg"].
                "</td><td>".$result["emp_gender"].
                "</td><td>".$result["emp_dob"].
                "</td><td>".$result["emp_mobile"].
                "</td><td>".$result["emp_doj"].
                "</td></tr>";
        }
        }
        echo "</table></div>";
        mysqli_close($conn);
        
        ?>

   
    </div>  
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1;}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}

</script>




</body>
</html>