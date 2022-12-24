<?php
function requiredvalue($input)
{
    if(empty($input))
    {
       return false;
    }
    return true;
}
function minv($input,$length)   
{
 if(strlen($input)<$length)
 {
    return false;
 }
 return true;
}
function maxv($input,$length)   
{
 if(strlen($input)>$length)
 {
    return false;
 }
 return true;
}
function emailva($email)
{
    if(!filter_var($email,FILTER_VALIDATE_EMAIL))
    {
      return false;
    }
    return true;
}

