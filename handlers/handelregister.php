<?php
session_start();
include '../core/function.php';
include '../core/validation.php';
include '../core/config.php';
$errors=[];
if(checkrequestmethod("POST") && chekpostinput("name"))
{
    foreach($_POST as $key=>$value)
    {
        $$key=saitizeinput($value);   
    }
}
if(!requiredvalue($name))
{
    $errors[]='Plese Enter Your Name';
}
elseif(!minv($name,3))
{
    $errors[]='You Must Enter less Than 3 char';
}
elseif(!maxv($name,25))
{
    $errors[]='You Must Enter More Than 25  char';
} 
 


if(!requiredvalue($email))
{
    $errors[]=' Email is required';
}
else if(!emailva($email))
{
    $errors[]='Must Be Email';
}

if(!requiredvalue($password))
{
    $errors[]=' password is required';
}
elseif(!minv($password,6))
{
    $errors[]='You Must Enter less Than 3 number';
}
elseif(!maxv($password,25))
{
    $errors[]='You Must Enter More Than 25  number';
} 

 
if(empty($errors))
{
 
//sql 
$connection = new PDO( $dsn,$dbuser,$dbuserpassword );
$newpass=password_hash($password,PASSWORD_DEFAULT);
$sql="INSERT INTO `user`(`name`, `email`,`password`) VALUES ('$name' ,'$email','$newpass')";
$statement=$connection->prepare($sql);
$statement->execute();

 
$_SESSION['auth']=[$name,$email];
redirect("../profile.php");
}
else
{
    $_SESSION['errors']=$errors;
    redirect("../register.php");
    die;
}