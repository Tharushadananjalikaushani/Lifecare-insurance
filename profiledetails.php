<?php
  require_once 'profileconfig.php';

  if (isset($_POST['submit'])) {
    $email = $_POST['search'];

    $sql = 'SELECT * FROM register WHERE email = :email';
    $stmt = $conn->prepare($sql);
    $stmt->execute(['email' => $email]);
    $row = $stmt->fetch();
  } 
  else {
	header('location: .');
    exit();
  }
?>

<html> 
    <head>
       <title>  Life Care Insurance  </title>
       <link rel="stylesheet" href="../css/claimprofile.css">
       
</head> 
    <body>
     
        <!--header-->
	<nav> 
        <div class="logo"> 
           <a href="#" ><img src="../images/logo.png" height="=100px"  width="100px" >
           </a>
           <a href="#" ><p class="lic"> LIFE CARE <br> INSURANCE</p></a>
         
        </div>
       
        <ul> 
            <li> <a class="links2" href="#"> <img src="../images/reg.png.png" width="45px" height="40px" alt="registr page"> </a> </li>
            <li> <a class="links" href="#"> Contact Us </a> </li>
            <li> <a class="links" href="#"> Pay Online </a> </li>
            <li> <a class="links" href="#">Categories </a> </li>
            <li>  <a class="links" href="#">About Us </a> </li>
        </ul>
    </nav>

      <!--middle-->
      <center>
    <center> <br> <h1><u>Claims clarck profile</u></h1></center><br><br>
    <div >
        <img src="../images/reg.png.png" width="100" height="100" alt="Claim profile page" > </a><br>     
    </div>
    <div class="box">
     <br><BR><BR><BR><BR><BR><BR>
   
    <BR> 
        <div>
    <form>
        <b><u>PROFILE DETAILS</u></b>
    <input type="text" name="user_name"><?= $row['user_name'] ?><br>
    <input type="email" name="email" ><?= $row['email'] ?><br>
    <input type="number" name="tp_num" ><?= $row['tp_num'] ?><br>
    <input type="text" name="dob" ><?= $row['dob'] ?><br>
    
    <br> <br>
    <a href="#">
    <button type="submit">Done</button>     </form></a> </div>
 
    </div>  <br>  <br> <br><br><br>
    <div class="D"> 
       <a href="../html/claimchangepassword.html"> <input  type="button" name="" value="Change my password" ></button> </a><br> <br>
       <a href="../html/deleteprofile.html"> <input  type="button" name="" value="Deactivate account " > </button></a></div>
        



    
</center>

	    <!--footer-->

        <div class="footer">
            <a href="#" ><h2 class="cu" >  Contact Us   </h2> </a>
            <img class="location" src="../images/location.jpg" height="30px" width="30px"> 
            <h3 class="h3location">  Life care insurance, <br>No 132,<br> station rd,colombo 04. </h3>
            <img class="email" src="../images/mail.png" height="30px" width="30px">
            <h3 class="h3email" > lifecareinsurance@gmail.com </h3>
            <img class="phone " src="../images/call.png"  height="30px" width="30px">
            <h3 class="h3phone" >011588777 </h3>
            <a href="#"><img class="footerlogo" src="../images/flogo.png" height="210px" width="210px " alt="flogo"> </a>

            <a   href="#"><h2 class="fu"> Find Us</h2></a>
            <a   href="www.facebook.com"><img class="fb" src="../images/fb.png" height="30px" width="30px" > </a>
            <a  href="www.instagram.com"><img class="tt" src="../images/tt.png" height="30px" width="30px"> </a>
            <a  href="www.twitter.com"><img class="insta" src="../images/insta.png" height="30px" width="30px"> </a>
            <h2 class="copy"> Copywrite All Right Recieved @ </h2>
        </div>
       
	
 </body>
</html>