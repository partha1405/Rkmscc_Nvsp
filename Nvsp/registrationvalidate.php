<?php
$formfield=$_GET['field'];
$value=$_GET['query'];
if($formfield=='epicno'){
   if(strlen($value)==10 || strlen($value)==16) echo "";
   else if(strlen($value)>0) echo "Please enter correct Epic Number";
}
if($formfield=='email'){
 if(strlen($value)>0 && !filter_var($value,FILTER_VALIDATE_EMAIL))
  echo "Invalid email id";
}
if($formfield=='password'){
 if(strlen($value)>0 && strlen($value)<6 || strlen($value)>0 && strlen($value)>20)
  echo "Password must not be lesser than six character and greater than twenty character";
}
?>