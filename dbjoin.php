


<?php 
$con=new mysqli("localhost","root","","joinus");
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$passw=$_POST['pass'];
$dat=$_POST['date'];
if($con-> connect_error)
{
    die("Connection Failed".$con->connect_error);
}
else{
    $ist=$con->prepare("INSERT INTO accounts(fname,lname,password,DOB) values(?,?,?,?)");
    $ist->bind_param("ssss", $fname, $lname, $passw, $dat);
    $ist->execute();
    echo"<p align='center' style='font-size: 40px;
    color:rgb(63, 62, 62);'>Thanks For Registration</p>";
    echo"<a href='join.html' align='center' style='padding-left: 870px;'><button align='center' style='border-radius: 15px;
    height: 40px;
    width: 170px;
    color: white;
    background-color: rgb(29, 29, 29);;
    border-color: none;
    box-shadow: none;'>GO BACK TO FORM</button></a>";
    $ist->close();
    $con->close();
}

?>