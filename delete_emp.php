<?php
     include 'validate.php';
      if(!validate()){
        header("Location: login.php");
      }
?>
<html>
<head>
<title>Delete Data </title>
<meta content="noindex, nofollow" name="robot">
<link href="css/del_emp_style.css" rel="stylesheet" type="text/css">
<link href="css/menu.css" rel="stylesheet" type="text/css">
<link  rel="stylesheet" href="css/w3.css">
</head>
<body>
<!--    <div class="header">
        <ul id="nav">
            <li><a href="logout.php">Logout</a></li>
            <li><a class="hsubs" href="dashboard.php">Dashboard</a></li>
            <div id="lavalamp">
            </div>
        </ul>
    </div>-->
<div class="w3-container w3-cyan">
                <div class="w3-row">
                    <div class="w3-col m2 l2 w3-left w3-padding-small">
                         <a href="dashboard.php"> <img src="images/mainlogo.jpg" alt="DESIDOC"></a>
                    </div>
                    <div class="w3-col m5 l5 w3-padding-16 w3-left-align">
                        <h1><img src="images/headertext.png" alt="DESIDOC"></h1>
                    </div>
                     <div class="w3-col m5 l5 w3-padding-small w3-margin-top w3-right-align w3-bar-item w3-button w3-large w3-hover-cyan w3-text-white w3-wide">
                         <!--<h1><img src="images/user_img.jpg" alt="userimg"></h1>-->
                        <h1>ADMIN PORTAL</h1>
                    </div>
                </div>
     </div>
        
        <div class="w3-bar w3-container w3-black ">
            <a href="#" class="w3-bar-item w3-button w3-medium w3-hover-black w3-left w3-right-align w3-text-cyan w3-wide" style="width:18%">ADMIN PANEL</a>
            <a href="logout.php" class="w3-bar-item w3-button w3-medium w3-hover-grey w3-right w3-right-align" style="width:8%">LOGOUT</a>
        </div>

    <div class="maindiv">

<div class="title">
<h2>Delete Data </h2>
</div>
<div class="divB">
<div class="divD">
<p>Click On Id</p>
<?php
$connection = @mysql_connect("localhost", "root", ""); // Eastablishing Connection With Server.
$db = @mysql_select_db("reg", $connection); // Selecting Database From Server.
if (isset($_GET['del'])) {
$del = $_GET['del'];
//SQL query for deletion.
$query1 = mysql_query("delete from tbl_emp_det where emp_id=$del", $connection);
}
$query = mysql_query("select * from tbl_emp_det", $connection); // SQL query to fetch data to display in menu.
while ($row = mysql_fetch_array($query)) {
echo "<b><a href=\"delete_emp.php?id={$row['emp_id']}\">{$row['emp_id']}.&nbsp;{$row['emp_fname']}&nbsp;{$row['emp_lname']}</a></b>";
echo "<br />";
}
?>
</div>
   <?php
if (isset($_GET['id'])) {
$id = $_GET['id'];
// SQL query to Display Details.
$query1 = mysql_query("select * from tbl_emp_det where emp_id=$id", $connection);
while ($row1 = mysql_fetch_array($query1)) {
?>
<form class="form">
<h2>---Details---</h2>
<center>
<span>Id:</span> <?php echo $row1['emp_id']; ?><br/>
<span>First Name:</span> <?php echo $row1['emp_fname']; ?><br/>
<span>Last Name:</span> <?php echo $row1['emp_lname']; ?><br/>
<span>Designation:</span> <?php echo $row1['emp_desg']; ?><br/>
<span>Gender:</span> <?php echo $row1['emp_gender']; ?><br/>
<span>Date of Birth:</span> <?php echo $row1['emp_dob']; ?><br/>
<span>Mobile:</span> <?php echo $row1['emp_mobile']; ?><br/>
<span>Date of Joining:</span> <?php echo $row1['emp_doj']; ?><br/>

<?php echo "<b><a href=\"delete_emp.php?del={$row1['emp_id']}\"><input type=\"button\" class=\"submit\" value=\"Delete\"/></a></b>";?>
</center>
</form><?php
}
}
// Closing Connection with Server.
mysql_close($connection);
  
?>
    
   
</body>
</html>