<?php 
$nameErr = $emailErr = $genderErr =$selectErr=  "";
$username =$email =$group = $gender = $message ="";
if($_SERVER["REQUEST_METHOD"] ==="POST" && isset($_POST['submit'])){
echo "<div style='border:2px solid red;'><hr>";
//-------------------Name--------------------//
if (empty($_POST["username"])) {
    $nameErr = "Name is required";
} 
else {
    // check if name only contains letters and whitespace
    if (preg_match("/^[a-zA-Z-' ]*$/",$_POST["username"])) 
    {
        $username = $_POST["username"];
        echo "<b>Name : </b>".$username.'<br>';
    }
    else
    {
        $nameErr = "Only letters and white space allowed";
    }
}
//----------------------E-mail-----------------//
if (empty($_POST["email"])) 
{
    $emailErr = "E-mail is required";
} 
else 
{
    if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) 
    {
        $email = $_POST["email"];
        echo "<b>E-mail : </b>".$email.'<br>';
    }
    else
    {
        $emailErr = "Invalid email format :must be like email@domain.com";
    }
}
//----------------------group#-----------------//
$group = $_POST["group"];
echo "<b>Group# : </b>".$group.'<br>';
//------------------class details-------------//
$message = $_POST["message"];
echo "<b>Class Details :</b>".$message.'<br>';
//----------------------gender----------------//
if (empty($_POST["gender"])) 
{
    $genderErr = "Gender is required";
} 
else 
{
    $gender = $_POST["gender"];
    echo "<b>Gender : </b>".$gender.'<br>';
}
//------------select courses-----------------//
if (empty($_POST["courses"])) 
{
    // $selectErr = "Select is required";
    echo '<br>';
} 
else 
{
    echo "<b>Your Courses : </b> ";
    foreach($_POST["courses"] as $course)
    {
        echo $course.' , ';
    }
}
// echo '<br>';
// echo '<br>';

echo "<hr></div>";
}
?>