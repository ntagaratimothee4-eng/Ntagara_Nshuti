<?php 
$Con=mysqli_connect("localhost","root","","canteendb");

if(isset($_POST['login']))
 {
$usr=mysqli_real_escape_string($Con,$_POST['usr']);
$pas=mysqli_real_escape_string($Con,$_POST['pas']);

$sql="SELECT * FROM signup WHERE userNames='$usr' AND password='$pas'";
$result=mysqli_query($Con,$sql);
if(mysqli_num_rows($result)==1)
    {
        header("Location:homepage.html");
    }
    else{
        echo "Enter the right password";
    }

}



?>
