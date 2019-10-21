<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $User=$_POST['User'];
    $Pass=$_POST['Pass'];
    $con=mysqli_connect("localhost","root","","proj");
    $result=mysqli_query($con,"select * from loginform where User='$User' and Pass='$Pass'");
    $row=mysqli_num_rows($result);
    if($row>0){
        echo "Login Successful";
    }
    else{
        echo "Invalid Login";
    }
}
?>