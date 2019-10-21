<?php
$User=$_POST['User'];
$Pass=$_POST['Pass'];
$age=$_POST['age'];
$height=$_POST['height'];
$weight=$_POST['weight'];
$fl=0;
$con=mysqli_connect("localhost","root","","proj");
if(empty($User)){
    echo "Username is required <br>";
    $fl=1;
}
if(empty($Pass)){
    echo "Password is required <br>";
    $fl=1;
}
if(empty($age)){
    echo "Age is required <br>";
    $fl=1;
}
if(empty($height)){
    echo "Height is required <br>";
    $fl=1;
}
if(empty($weight)){
    echo "Weight is required <br>";
    $fl=1;
}
$result=mysqli_query($con,"select * from loginform where User='$User'");
$row=mysqli_num_rows($result);
if($row>0 && $fl==0)
    echo "Username already exists";
else{
    if($fl==0){
    $query="insert into loginform (User,Pass,age,height,weight) values('$User','$Pass','$age','$height','$weight')";
    mysqli_query($con,$query);
    echo "You have successfully logged in";
    }
}
?>