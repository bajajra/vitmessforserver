<?php

$det = mysqli_connect('localhost','root','root','rahul') or die('Error connecting to MySQL server.');

if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $reg_no=$_POST['reg_no'];
    $roomno=$_POST['roomno'];
    $Block=$_POST['Block'];
    $branch=$_POST['branch'];
    $mess=$_POST['mess'];
    
    if ($name!="" or $reg_no!="" or $roomno!="" or $Block!="" or $branch="" or $mess!="") {
        
        function alert($msg)
        {
            echo "<script type='text/javascript'>alert('$msg');</script>";
        }
        alert("Fields cannot be left Blank");
    }
    else
    {$query = "INSERT INTO student_info(name,reg_no,roomno,Block,branch,mess) VALUES('$name','$reg_no',$roomno,'$Block','$branch','$mess')";
    $result=mysqli_query($det,$query);
    
    if($result)
    {
        echo "Form submitted";
    }
    else
    {
        echo "Query failed";
    }
    }
}
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <title>HOME VIT MESS MANAGEMENT SYSTEM</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Homepage" />
        <meta name="keywords" content="VIT, vitmess, vit mess management, vit chennai mess system" />
        <meta name="author" content="bajajra" />
        <link rel="shortcut icon" href="r.jpeg" type="image/x-icon">
        <link rel="icon" href="r.jpeg" type="image/x-icon">
        <link rel="stylesheet" type="text/css" href="demo.css" />
        
        <script type="text/javascript" src="modernizr.custom.86080.js"></script>
</head>
<body>
<div class="form-style-10">
<h1>VIT MESS MANAGEMENT SYSTEM<span>Place to Provide Student Details</span></h1>
<form action="details.php" method="post">
    <div class="section"><span>1</span>Student Details</div>
    <div class="inner-wrap">
        <label>Name:<input type="text" name="name" placeholder="Name" /></label>
        <label>Registration Number<input type="text" name="reg_no" placeholder="Regno"></label>
        <label>Room No.<input type="text" name="roomno" placeholder="Room Number"></label>
        <label>Block<input type="text" name="Block" placeholder="Block"></label>
        <label>Branch<input type="text" name="branch" placeholder="Branch"></label>
        <label>Mess<input type="text" name="mess" placeholder="Mess Type"></label>



    </div>

    <!--<div class="section"><span>2</span>Email &amp; Phone</div>
    <div class="inner-wrap">
        <label>Email Address <input type="email" name="field3" /></label>
        <label>Phone Number <input type="text" name="field4" /></label>
    </div>

    <div class="section"><span>3</span>Passwords</div>
        <div class="inner-wrap">
        <label>Password <input type="password" name="field5" /></label>
        <label>Confirm Password <input type="password" name="field6" /></label>
    </div>-->
    <div class="button-section">
     <input type="submit" name = "submit" value="Submit" onclick="">
     <span class="privacy-policy">
     <input type="checkbox" name="field7">Details Provided above are Correct to the best of my knowledge.
     </span>
    </div>
</form>
</div>
</body>
</html>
<?php
    mysqli_close($det);
?>