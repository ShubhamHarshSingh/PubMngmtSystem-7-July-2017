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
        <title>resetpassword</title>
         <style>
               #cntr
               {
                width: 550px;
                height: 390px;
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
		 button
                 {
		  color:white;
		  background-color:green;
		 }
		  h1
                  {
                    color:brown;
                    font-family:arial;
		  }
		   td
                   {
		    color:blue;
		   }
        </style>
    </head>
    <body>
        
        <div class="w3-container w3-cyan">
                <div class="w3-row">
                    <div class="w3-col m2 l2 w3-left w3-padding-small">
                         <a href="dashboard.php"> <img src="images/mainlogo.jpg" alt="DESIDOC"></a>
                    </div>
                    <div class="w3-col m6 l6 w3-padding-16 w3-left-align">
                        <h1><img src="images/headertext.png" alt="DESIDOC"></h1>
                    </div>
                    <div class="w3-col m4 l4 w3-padding-16 w3-margin-top w3-right-align w3-bar-item w3-button w3-large w3-hover-cyan w3-text-white w3-wide">
                         <!--<h1><img src="images/user_img.jpg" alt="userimg"></h1>-->
                        <h1>USER PORTAL</h1>
                    </div>
                </div>
     </div>
        
        <div class="w3-bar w3-container w3-black ">
            <a href="#" class="w3-bar-item w3-button w3-medium w3-hover-black w3-left w3-right-align w3-text-cyan w3-wide" style="width:18%">USER PANEL</a>
            <a href="logout.php" class="w3-bar-item w3-button w3-medium w3-hover-grey w3-right w3-right-align" style="width:8%">LOGOUT</a>
            <a href="resetpass.php" class="w3-bar-item w3-button w3-medium w3-hover-grey w3-right w3-right-align" style="width:16%">CHANGE PASSWORD</a>
            
            
        </div>
        
        <div id="cntr">
            <center>
                <br>
	           <h1 >RESET PASSWORD</h1>
                   <hr>
                     <form name="resetform" action="connresetpass.php" onsubmit="return validateForm()" method="post">
            
                            <table>
                                <tr>
                                    <td>Email ID<span style="color:red;"> *</span></td><td><input type="email" placeholder="Enter your email" name="email" autocomplete="off"  autofocus></td>
                                </tr>
                                <tr>
                                    <td>Current Password<span style="color:red;"> *</span></td><td><input type="password" placeholder="Enter current password" name="opass" autocomplete="off" ></td>
                                </tr>
                                <tr>
                                    <td>New Password<span style="color:red;"> *</span></td><td><input type="password" placeholder="Enter new password" name="pass" autocomplete="off"></td>
                                </tr>
                                 <tr>
                                      <td>Confirm New Password<span style="color:red;"> *</span></td><td><input type="password" placeholder="Confirm new password" name="cpass" autocomplete="off"></td>
                                 </tr>
                            </table>
                        
                            <br>
                            <button style="text-decoration: none;color:white;">Submit</button>
                            <input type="reset" value="Clear" style="text-decoration: none;color:white; background-color:green;" />
                            
                         </form>
            </center>
            <hr>
            
            <p><span style="color: red; padding-left: 30px;">*</span> denotes Mandatory fields</p>
        </div>
        
        <script>
             function validateForm() 
                {
                    var op = document.forms["resetform"]["opass"].value;
                    if (op === null || op === "") 
                    {
                        alert("Password must be filled out");
                        document.forms["resetform"]["opass"].focus();
                        return false;
                    }
                    
                    var p = document.forms["resetform"]["pass"].value;
                    if (p === null || p === "") 
                    {
                        alert("Password must be filled out");
                        document.forms["resetform"]["pass"].focus();
                        return false;
                    }
                    else if (op===p)
                    {
                        alert("New Password must be different from current password");
                        document.forms["resetform"]["pass"].focus();
                        return false;
                    }
                    
                    var cp = document.forms["resetform"]["cpass"].value;
                    if (cp === null || cp === "") 
                    {
                        alert("Password must be confirmed");
                        document.forms["resetform"]["cpass"].focus();
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
        <?php
        // put your code here
        ?>
        
        <footer class="w3-container w3-center w3-cyan w3-margin-top">
            <p>© NSD,DESIDOC</p><p><marquee>Best viewed in latest versions of Google Chrome and Mozilla Firefox(1024*768px).</marquee></p>
        </footer>
        
    </body>
</html>
