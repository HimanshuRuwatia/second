<html>
<body>
<style>
.error{
    color:red;
}
</style>
<?php
$nameErr=$emailErr=$genderErr=$websiteErr="";
$name=$email=$gender=$website=$comment="";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(empty($_POST["name"])){
        $nameErr="Name is required";
    }
    else{
        $name=test_input($_POST["name"]);
    }
    if(empty($_POST["email"])){
        $emailErr="Email is required";
    }
    else{
        $email=test_input($_POST["email"]);
    }
    if(empty($_POST["gender"])){
        $genderErr="Gender is required";
    }
    else{
        $gender=test_input($_POST["gender"]);
    }
    if(empty($_POST["website"])){
        $website="";
    }
    else{
        $website=test_input($_POST["website"]);
    }
    if(empty($_POST["comment"])){
        $comment="";
    }
    else{
        $comment=test_input($_POST["comment"]);
    }
}
function test_input($data){
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;
}
?>
<p class="error">* required field</p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
Name: <input type="text" name="name" value="<?php echo $name;?>">
<span class="error">* <?php echo $nameErr;?></span>
<br><br>
E-mail <input type="text" name="email" value="<?php echo $email;?>">
<span class="error">* <?php echo $emailErr;?></span>
<br><br>
Website <input type="text" name="website" value="<?php echo $website;?>">
<span class="error"> <?php echo $websiteErr;?></span>
<br><br>
Comment <textarea name="comment" rows="5" cols="40"></textarea>
<br><br>
Gender<span class="error">* <?php echo $genderErr;?></span><br>
<input type="radio" name="gender" value="female">Female<br>
<input type="radio" name="gender" value="male">Male<br>
<input type="radio" name="gender" value="other">Other<br>
<br><br>
<input type="submit" name="submit" value="Submit">
</form>
<?php
echo "Your name is $name <br>";
echo "Your e-mail is $email <br>";
echo "$website <br>";
echo "$comment <br>";
echo "Your gender: $gender <br>";
?>
</body>
</html>


