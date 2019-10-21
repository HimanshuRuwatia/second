<html>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
Name: <input type="text" name="fname">
<input type="submit" value="Submit">
</form>
<?php 
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name=$_REQUEST['fname'];
    if(empty($name)){
        echo "Name is empty <br>";
    }
    else{
        echo "Your name is $name <br>";
    }
}
$x = 5;
$xx=5.55;
$xxx=1.9e441;
echo "Hello world", "<br>";
$color="red";
echo "My car is ". $color . "<br>";
echo "My house is $color","<br>"; 
function mytest(){
    global $x;
    echo "<p>Value of x inside function is $x</p>";
    $x=$x+1;
}
mytest();
echo "<p>Value of test outside function is $x</p>";
$y=array("Volvo",12,true);
var_dump($y);
class Car{
    function Cars(){
        return $this->model="VW";
    }
}
$herbie=new Car;
echo $herbie->Cars();
$y=null;
$z="Hello World! I am here.";
echo var_dump($y);
echo strlen($color),"<br>",str_word_count($z),"<br>",strrev($z),"<br>";
echo strpos("Hello world!","!"),"<br>";
echo str_replace("World","Danny",$z),"<br>";
echo var_dump(is_int($x)),var_dump(is_int($xx)),var_dump(is_float($xx));
echo var_dump(is_infinite($xx)),var_dump(is_infinite($xxx));
$n=acos(8);
echo var_dump($n);
$s="2345.678";
echo $s,"<br>",(float)$s,"<br>",(int)$s,"<br>",(string)$x,"<br>";
function familyname($name){
    echo "$name Standall.<br>";
}
familyname("Alex");
familyname("Stella");
familyname("Duke");
familyname("Nancy");
/*function add(int $a,int $b){
    echo $a+$b,"<br>";
}
add(5,"5 days");*/
$cars=array();
$cars[0]="Toyota";
$cars[1]="BMW";
$cars[2]="Mercedes";
rsort($cars);
for($i=0;$i<3;$i++){
    echo $cars[$i],"<br>";
}
echo count($cars),"<br>";
//Assosiative arrays
$age=array("Ben"=>"18","Foddy"=>"25","Danny"=>"19");
echo $age["Ben"],"<br>";
krsort($age);
foreach($age as $d => $d_value){
    echo "Key is:",$d," Value is:",$d_value,"<br>";
}
?> 
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
Name: <input type="text" name="fnames">
<input type="submit">
</form>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name=$_POST["fnames"];
    if(empty($name)){
        echo "Name is empty <br>";
    }
    else{
        echo "The name is $name <br>";
    }
}?>
<form action="index.php" method="post">
Name: <input type="text" name="name">
E-mail: <input type="text" name="email">
<input type="submit">
</form>
<?php
echo "Welcome", $_POST["name"],"<br>";
echo "Your email address is", $_POST["email"];?>
</body>
</html>