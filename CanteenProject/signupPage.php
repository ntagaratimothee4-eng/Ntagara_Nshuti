<html>

<?php
$Con=mysqli_connect("localhost","root","","canteendb");
if(isset($_POST['save'])){


$fnames=mysqli_real_escape_string($Con,$_POST['fnames']);
$tel=mysqli_real_escape_string($Con,$_POST['tel']);
$adr=mysqli_real_escape_string($Con,$_POST['adr']);
$uname=mysqli_real_escape_string($Con,$_POST['usr']);
$pas=mysqli_real_escape_string($Con,$_POST['pas']);


$sql="INSERT INTO signup(fullNames,telephone,address,userNames,password)
VALUES('$fnames','$tel','$adr','$uname','$pas')";


if(mysqli_query($Con,$sql))
    {
        echo "Sign up Sucessfull";
        
    }
    else{
        echo "Unable to signup";
    };

}


?>


<a href="loginPage.html">Login now</a>
<html>