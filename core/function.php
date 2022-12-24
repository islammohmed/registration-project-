<?php
function checkrequestmethod($method)
{
    if($_SERVER['REQUEST_METHOD']== $method)
    {
     return true;
    }else
      return false;
}
function chekpostinput($input){
   if (isset($_POST[$input]))
    {
        return true;
    }else
    return false;
}
function saitizeinput($input)
{
    return trim(htmlspecialchars(htmlentities($input)));
}
function redirect($path)
{
    header("location:$path");
}