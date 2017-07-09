<?php
     include 'validate.php';
      if(!validate()){
        header("Location: login.php");
      }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link  rel="stylesheet" href="css/w3.css">
        <title>Update Information</title>
		<style>
                    #cntr
            {
                width: 600px;
                height: 570px;
                /*border: solid black 1px;*/
                margin-left: auto;
                margin-right: auto;
                margin-top: 30px;
                margin-bottom: 30px;
                box-shadow: 0px 0px 50px;
            }
              body
              {
                background-image: url('images/bkg-blu.jpg');
            }
		button{
                width:90px;
                height:35px;
                padding:5px;    
		color:white;
		background-color:green;
		}
		
		h1{
		color:brown;
		font-family:arial;
		}
		td{
		color:blue;
		}
		#gender{
		color:black;
		}
		</style>
		                     
    </head>
    <body >
        
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
        
        <?php
              $conn=new mysqli("localhost", "root", "","reg");
              
              
        $query = "Select * from tbl_registration,tbl_credentials where regid=regid1";
        $ds=$conn->query($query);
        
         
       
        ?>
       
        <div id="cntr">
            <center>
                <br>
	<h1 >UPDATE INFORMATION</h1>
        <hr>
        <form name="updateform" action="update_db.php" onsubmit="return validateForm()" method="post">
            
			<table>
                            <?php
             
       // $d=mysqli_num_rows($ds);
       
        
        while($row=$ds->fetch_assoc())
        {
            
            
            $fnameu = $row['fname'];
            $lnameu = $row['lname'];
            $genderu = $row['gender'];
             $dobu = $row['dob'];
            $mobileu = $row['mobile'];
            $doju = $row['doj'];
             $emailu = $row['email'];
            $passu = $row['pass'];
            
           
        }
        
        ?>
                                <tr>
                                    <td>First Name<span style="color:red;"> *</span></td><td><?=$fnameu?></td>
                                </tr>
                
                                <tr><td>Last Name<span style="color:red;"> *</span></td><td><input type="text" value="<?=$lnameu?>" name="lname"></td></tr>
               
                                <tr>
                                    <td>Designation<span style="color:red;"> *</span></td><td><input type="text" value="<?=$desgu?>" name="desg"></td>
                                </tr>
                                
                                <tr>
                    <td>Gender<span style="color:red;"> *</span></td>
                    <td id="gender">
                        <input type="radio" name="gender" value="M" />Male
                        <input type="radio" name="gender" value="F"/>Female
                    </td>
                </tr>
                <tr>
                    <td>DOB</td><td><input type="date" value="<?=$dobu?>" name="dob"></td>
                </tr>
                <tr>
                    <td>Mobile No.</td><td><input type="number" value="<?=$mobileu?>" name="mobile"></td>
                </tr>
                <tr>
                    <td>Date of Joining<span style="color:red;"> *</span></td><td><input type="date" value="<?=$doju?>" name="doj"></td>
                </tr>
                <tr>
                    <td>Email ID<span style="color:red;"> *</span></td><td><input type="email" value="<?=$emailu?>" name="email" autocomplete="off"></td>
                </tr>
                <tr>
                    <td>Set Password<span style="color:red;"> *</span></td><td><input type="password" value="<?=$passu?>" name="pass"></td>
                </tr>
                <tr>
                    <td>Confirm Password<span style="color:red;"> *</span></td><td><input type="password" placeholder="Re enter your password" name="cpass"></td>
                </tr>
                
                
            </table>
			<br/>
                        <button type="submit" id="update" style="text-decoration: none;color:white;">Update</button>
                        <button type="reset" style="text-decoration: none;color:white; background-color:green;">Reset</Button>
                        <p><span style="color: red; padding-left: 10px;">*</span> denotes Mandatory fields</p>
			
			
            
            
        </form>
        
        
       
        
        
        </center>
        </div>
        <script>
                function validateForm() 
                {
                    var f = document.forms["updateform"]["fname"].value;
                    if (f === null || f === "") 
                    {
                        alert("First Name must be filled out");
                        document.forms["updateform"]["fname"].focus();
                        return false;   
                    }
                    else if(/^[a-zA-Z\s-, ]+$/.test(f))
                    {
                        return  true;
                    }
                    else
                    {
                        alert("Only alphabets are allowed");
                        document.forms["updateform"]["fname"].focus();
                        return false;
                    }
                    
                    var l = document.forms["updateform"]["lname"].value;
                    if (l === null || l === "") 
                    {
                        alert("Last Name must be filled out");
                        document.forms["updateform"]["lname"].focus();
                        return false;
                    }
                    else if(/^[a-zA-Z\s-, ]+$/.test(f))
                    {
                        return  true;
                    }
                    else
                    {
                        alert("Only alphabets are allowed");
                        document.forms["updateform"]["lname"].focus();
                        return false;
                    }
                    
                    var d = document.forms["updateform"]["desg"].value;
                    if (d === null || d === "") 
                    {
                        alert("Designation must be filled out");
                        document.forms["updateform"]["desg"].focus();
                        return false;
                    }
                    else if(/^[a-zA-Z\s-, ]+$/.test(f))
                    {
                        return  true;
                    }
                    else
                    {
                        alert("Only alphabets are allowed");
                        document.forms["updateform"]["desg"].focus();
                        return false;
                    }
                    
                    
                    var g = document.forms["updateform"]["gender"].value;
                    if (g === null || g === "") 
                    {
                        alert("Gender must be selected");
                        return false;
                    }
                  
                    var doj = document.forms["updateform"]["doj"].value;
                    if (doj === null || doj === "") 
                    {
                        alert("Date of joining must be filled out");
                        document.forms["updateform"]["doj"].focus();
                        return false;
                    }
                    
                    var e = document.forms["updateform"]["email"].value;
                    var atpos = e.indexOf("@");
                    var dotpos = e.lastIndexOf(".");
                    if (e === null || e === "") 
                    {
                        alert("Email must be filled out");
                        document.forms["updateform"]["email"].focus();
                        return false;
                    }
                    else if(atpos<1 || dotpos<atpos+2 || dotpos+2>=e.length)
                    {
                     alert("Not a valid email address");  
                     return false;
                    }
                    
                    var m = document.forms["updateform"]["mobile"].value;
                    if (/^\d{10}$/.test(m)) 
                    return true;
                    else
                    {
                        alert("Number must be correct");
                        document.forms["updateform"]["mobile"].focus();
                        return false;
                    }
                    
                    var cp = document.forms["updateform"]["cpass"].value;
                    if (cp === null || cp === "") 
                    {
                        alert("Password must be confirmed");
                        document.forms["updateform"]["cpass"].focus();
                        return false;
                    }
                    else if(cp !== p)
                    {
                        alert("Password mismatch");
                        return false;
                    }
                    else
                    {
                        return true;
                    }
                    }
        </script>
         
       
    <footer class="w3-container w3-center w3-cyan w3-margin-top w3-padding-16">
        <p>© NSD,DESIDOC</p><p><marquee>Best viewed in latest versions of Google Chrome and Mozilla Firefox(1024*768px).</marquee></p>
    </footer>

    </body>
</html>
