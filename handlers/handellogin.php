<?php
session_start();
$errors=[];
include '../core/function.php';
include '../core/validation.php';
include '../core/config.php';
if(checkrequestmethod("POST")&&chekpostinput('email') && chekpostinput('password'))
              {
             $email=$_POST['email'];
             $password=$_POST['password'];
  
                      $connection = new PDO( $dsn,$dbuser,$dbuserpassword );
                             $sql="SELECT  * FROM `user` WHERE email='$email'";
                             $statement=$connection->prepare($sql);
                             $statement->execute();
                             $result = $statement->fetchALL();   
                        foreach($result as $key):
                        {
                           $hashpassword =$key['password'];
                           $name=$key['name'];
                        }
                    endforeach;  

                    $cheakpass=password_verify($password,$hashpassword);
                                     
                             
                     if($cheakpass)
                     {
                        $_SESSION['auth']=[$name,$email];
                       redirect("../profile.php");
                    }
                    
                }
                    else
                    {
                        $errors[]='All Filed is Required';
                        $_SESSION['errors']=$errors;
                        redirect("../login.php");
                        die;  
                    }
 